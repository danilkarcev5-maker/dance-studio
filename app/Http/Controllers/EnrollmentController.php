<?php

namespace App\Http\Controllers;

use App\Models\Enrollment;
use App\Models\Schedule;
use Illuminate\Http\Request;

class EnrollmentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Request $request)
    {
        $request->validate([
            'schedule_id' => 'required|exists:schedules,id',
        ]);

        Enrollment::create([
            'user_id' => auth()->id(),
            'schedule_id' => $request->schedule_id,
            'status' => 'pending',
        ]);

        return redirect()->route('schedule')->with('success', 'Заявка на занятие отправлена!');
    }
}