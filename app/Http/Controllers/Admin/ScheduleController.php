<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Schedule;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {
        $schedules = Schedule::all();
        return view('admin.schedules.index', compact('schedules'));
    }

    public function create()
    {
        return view('admin.schedules.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'dance_type' => 'required|string|max:255',
            'day' => 'required|string|max:255',
            'time' => 'required',
            'teacher' => 'required|string|max:255',
        ]);

        Schedule::create($request->all());

        return redirect()->route('schedules.index')->with('success', 'Занятие добавлено!');
    }

    public function edit(Schedule $schedule)
    {
        return view('admin.schedules.edit', compact('schedule'));
    }

    public function update(Request $request, Schedule $schedule)
    {
        $request->validate([
            'dance_type' => 'required|string|max:255',
            'day' => 'required|string|max:255',
            'time' => 'required',
            'teacher' => 'required|string|max:255',
        ]);

        $schedule->update($request->all());

        return redirect()->route('schedules.index')->with('success', 'Занятие обновлено!');
    }

    public function destroy(Schedule $schedule)
    {
        $schedule->delete();
        return redirect()->route('schedules.index')->with('success', 'Занятие удалено!');
    }
}