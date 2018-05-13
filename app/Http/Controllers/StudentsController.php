<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Auth\SessionGuard;
use App\Students;


class StudentsController extends Controller
{
    public function show($id)
    {
        $uid = Auth::id();
        $students = Students::find($id);
        $activity = \App\Activity::where('activity_code', $id)->get();
        $students = \App\Students::where('user_id', $activity)->get();
        $activity1 = \App\Activity::where('activity_code', $id)->first();
        return view('student.show')->with('activity', $activity )->with('students', $students)->with('activity1', $activity1 );
    }
}
