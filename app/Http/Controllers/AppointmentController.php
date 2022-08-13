<?php

namespace App\Http\Controllers;

use App\Http\Requests\AppoinmentRequest;
use App\Models\Appoinment;
use App\Models\Appointment;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function appointment(AppoinmentRequest $request)
    {
        $appointment=Appointment::create($request->validated());
        session()->flash('message','Your appointment send successfully!');
        return redirect()->route('home');
    }
}
