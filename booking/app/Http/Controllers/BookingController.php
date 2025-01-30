<?php

namespace App\Http\Controllers;

use App\Mail\AppointmentScheduled;
use App\Models\Booking;
use App\Models\Staff;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class BookingController extends Controller
{
    public function index()
    {
        return view('appointment.index');
    }

    public function store($id)
    {
        $validated = request()->validate([
            'date' => 'required|date',
            'appointment_time' => 'required|date_format:Y-m-d\TH:i',
        ]);
        $booking = Booking::create([
            'date' => now()->format('Y-m-d'),
            'user_id' => Auth::user()->id,
            'staff_id' => $id,
            'appointment_time' => $validated['appointment_time'],
            'isDone' => false,
        ]);

        $staffMember = Staff::find($id);

        $staffMember->update(['availability' => false]);

        //to = receiver email
        //send = Mailable class instance
        Mail::to(Auth::user()->email)->send(new AppointmentScheduled($booking));
    }

    public function show($id) {}

    public function complete($id)
    {
        $booking = Booking::find($id);
        $booking->update(['isDone' => true]);

        $staffMember = $booking->staff;
        $staffMember->update(['availability' => true]);

        return redirect('/staff-view')->with('success', 'Appointment completed successfully');
    }
}
