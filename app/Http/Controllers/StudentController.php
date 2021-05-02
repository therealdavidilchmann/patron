<?php

namespace App\Http\Controllers;

use App\Models\SignedIn;
use DateTime;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function dashboard()
    {
        

        return view('dashboard', [
            
        ]);
    }

    public function timetable()
    {
        return view('dashboard');
    }

    public function misses()
    {
        return view('dashboard');
    }

    public function writeExcuse($id)
    {
        return view('writeExcuse');
    }

    public function timetableDetail($id)
    {
        return view('dashboard');
    }

    public function excuses()
    {
        return view('dashboard');
    }

    public function excuse($id)
    {
        return view('excuse');
    }
}
