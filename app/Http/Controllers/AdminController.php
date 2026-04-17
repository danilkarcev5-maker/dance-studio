<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Enrollment;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {
        $userCount = User::count();
        $enrollmentCount = Enrollment::count();
        return view('admin.dashboard', compact('userCount', 'enrollmentCount'));
    }
}