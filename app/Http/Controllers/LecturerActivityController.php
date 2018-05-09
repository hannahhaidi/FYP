<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Auth\SessionGuard;
use App\Admins;
use App\LecturerActivity;
use App\LecturerSkill;

class LecturerActivityController extends Controller
{
    public function show($id)
    {

        /*$id = Auth::id();*/
        $students = Students::find($id);
        
        /*$lectureractivity = LecturerActivity::find($id);*/
        $lecturerskill = \App\lecturerskill::where('student_id', $id)->get();
        $lectureractivity = \App\lectureractivity::where('student_id', $id)->get();
        return view('admins.show', compact ('lectureractivity', 'lecturerskill'))->with('lectureractivity', $lectureractivity )->with('students', $students);

    }
}
