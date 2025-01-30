<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\File;

class StaffViewController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $staff = $user->staff;
        $bookings = $staff->bookings()->where('isDone', false)->get();
        return view("staffView.index", compact("user", "staff", "bookings"));
    }

    public function update_pic(Request $request)
    {
        $staff = Auth::user()->staff;
        $validated = $request->validate([
            "profile_picture" => ["required", File::types(["png", 'jpg', 'jpeg', 'webp'])],
        ]);

        //this will save the file in project folder public/storage/logos
        //provided you edit the .env file ->>>>>>>> FILESYSTEM_DISK=public
        $filePathOnServer = $validated['profile_picture']->store('logos', 'public');

        $staff->update(['profile_picture' => $filePathOnServer]);

        return redirect()->back()->with('success', 'Profile picture updated successfully.');
    }
}
