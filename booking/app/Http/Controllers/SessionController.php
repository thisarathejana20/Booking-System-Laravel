<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    public function create()
    {
        return view("auth.login");
    }

    public function store(Request $request)
    {
        $validatedAttributes = $request->validate([
            "email" => ["required", "email"],
            "password" => "required",
        ]);

        if (!Auth::attempt($validatedAttributes)) {
            throw ValidationException::withMessages(["email" => "Sorry, your credential are invalid."]);
        }

        request()->session()->regenerate();


        $role = Auth::user()->role;
        $redirect = '';
        switch ($role) {
            case 'admin':
                $redirect = '/admin-view';
                break;
            case 'user':
                $redirect = '/resources';
                break;
            case 'staff':
                $redirect = '/staff-view';
                break;

            default:
                $redirect = '/';
                break;
        }

        return redirect($redirect);
    }

    public function destroy()
    {
        Auth::logout();

        return redirect('/login');
    }
}
