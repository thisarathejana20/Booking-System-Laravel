<?php

namespace App\Http\Controllers;

use App\Models\Resource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class SearchAdminController extends Controller
{
    public function index()
    {
        Gate::authorize('admin');

        return view('admin.search');
    }

    public function create()
    {
        Gate::authorize('admin');

        $user = User::where('email', request('q'))->first();
        return view('admin.create', compact('user'));
    }

    public function store($id)
    {
        Gate::authorize('admin');

        $user = User::find($id);
        $user->update([
            'role' => 'admin',
            'title' => 'staff',
        ]);
    }
}
