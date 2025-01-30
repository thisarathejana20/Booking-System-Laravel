<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Staff;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class AdminController extends Controller
{
    public function index()
    {
        Gate::authorize('admin');

        $totalServiceProviders = Staff::count();
        $firstFive = Staff::limit(10)->get();
        $firstFiveAdmins = User::limit(10)->get()->where('role', 'admin');
        $totalBookingsToday = Booking::whereDate('date', Carbon::today())->count();
        return view("admin.index", [
            'totalServiceProviders' => $totalServiceProviders,
            'firstFive' => $firstFive,
            'totalBookingsToday' => $totalBookingsToday,
            'fistFiveAdmins' => $firstFiveAdmins
        ]);
    }
}
