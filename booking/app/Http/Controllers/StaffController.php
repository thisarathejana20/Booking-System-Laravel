<?php

namespace App\Http\Controllers;

use App\Models\Resource;
use App\Models\Staff;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;

class StaffController extends Controller
{
    public function index($id)
    {
        $availableStaffMembers = User::where("resource_id", $id)
            ->whereHas('staff', function ($query) {
                $query->where('availability', 1);
            })->get();

        return view("staff.index", ["staff" => $availableStaffMembers]);
    }

    public function show($id)
    {
        $user = User::find($id);
        $details = Staff::find($user->staff_id);
        return view("staff.show", ["work_details" => $details, "user_details" => $user]);
    }

    public function store($id)
    {
        Gate::authorize('admin');

        $validatedAttributes = request()->validate([
            "name" => ["required", "string"],
            "email" => ["required", "string"],
            "title" => ["required", "string"],
            "role" => ["required", "string"],
            "works_at" => ["required"],
            "experience" => ["required"],
            "resource" => ["required"],
        ]);

        $user = User::find($id);
        $staff = Staff::create([
            "works_at" => $validatedAttributes['works_at'],
            "experience" => $validatedAttributes['experience'],
            "user_id" => $user->id,
        ]);

        $user->update([
            "name" => $validatedAttributes['name'],
            "email" => $validatedAttributes['email'],
            "title" => $validatedAttributes["title"],
            "role" => $validatedAttributes["role"],
            "staff_id" => $staff->id,
            "resource_id" => $validatedAttributes["resource"],
        ]);
    }

    public function edit($id)
    {
        Gate::authorize("admin");

        $resources = Resource::all();
        $staff = Staff::find($id);
        $user = $staff->user;
        return view("staff.edit", compact("user", "resources", "staff"));
    }
    public function update($id)
    {
        Gate::authorize("admin");

        $user = User::find($id);
        $validatedUserAttributes = request()->validate([
            "name" => ["required", "string"],
            "email" => ["required", "string"],
            "title" => ["required", "string"],
            "role" => ["required", "string"],
        ]);

        $staff = $user->staff;

        $validatedStaffAttributes = request()->validate([
            "works_at" => ["required"],
            "experience" => ["required"],
        ]);

        //transaction
        DB::transaction(function () use ($staff, $validatedStaffAttributes, $user, $validatedUserAttributes) {
            $user->update($validatedUserAttributes);
            $staff->update($validatedStaffAttributes);
        });
    }
    public function destroy($id)
    {
        Gate::authorize("admin");
        $staff = Staff::find($id);
        $user = $staff->user;

        DB::transaction(function () use ($staff, $user) {
            $user->delete();
            $staff->delete();
        });
    }
}
