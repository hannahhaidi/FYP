<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Auth\SessionGuard;
use App\Lecturers;

class LecturersController extends Controller
{
    public function index()
    {
        $students = Lecturers::find(1)->students;
        return view ('lecturer.index', compact ('students'));
        //return view('lecturer.index')->with('students', $students);

        /*$id = Auth::id();
        $lecturers = \App\Lecturers::where('user_id', $id)->get();
        return view('lecturer.index', compact ('lecturers'));*/
    }

 

}


