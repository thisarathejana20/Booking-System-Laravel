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

    public function charts()
    {
        Gate::authorize('admin');
        //bookings count
        $dates = [];
        for ($i = 4; $i >= 0; $i--) {
            $dates[$i] = Carbon::today()->subDays($i)->toDateString();
        }
        for ($i = 0; $i < count($dates); $i++) {
            $totalBookingsPerDate[$dates[$i]] = Booking::where('date', $dates[$i])->count();
        }

        //staff count
        $staffByField['Medical'] = User::where('role', 'staff')
            ->where('resource_id', '1')->count();
        $staffByField['Education'] = User::where('role', 'staff')
            ->where('resource_id', '2')->count();
        return view('admin.chart', compact('totalBookingsPerDate', 'staffByField'));
    }
}
