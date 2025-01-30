<?php

namespace App\Http\Controllers;

use App\Models\Resource;
use App\Models\User;
use Illuminate\Support\Facades\Gate;

class SearchStaffController extends Controller
{
    public function index()
    {
        Gate::authorize('admin');

        return view('staff.search');
    }

    public function create()
    {
        Gate::authorize('admin');

        $user = User::where('email', request('q'))->first();
        $resources = Resource::all();
        return view('staff.create', compact('user', 'resources'));
    }
}
