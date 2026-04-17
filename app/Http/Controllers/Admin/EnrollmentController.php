<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Enrollment;
use Illuminate\Http\Request;

class EnrollmentController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {
        $enrollments = Enrollment::with('user', 'schedule')->get();
        return view('admin.enrollments.index', compact('enrollments'));
    }

    public function update(Request $request, Enrollment $enrollment)
    {
        $request->validate([
            'status' => 'required|in:pending,approved,rejected',
        ]);

        $enrollment->update(['status' => $request->status]);

        return redirect()->route('enrollments.index')->with('success', 'Статус заявки обновлен!');
    }

    public function destroy(Enrollment $enrollment)
    {
        $enrollment->delete();
        return redirect()->route('enrollments.index')->with('success', 'Заявка удалена!');
    }
}