<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Registration;
;

class RegistrationController extends Controller
{
    public function show($id){

        //$id = Auth::id();
        $process = \App\Process::where('activity_code', $id)->get();
        $registration = \App\Registration::where('activity_code', $id)->get();
        return view('lecturer.show')->with('process', $process )->with('registration', $registration);

    }
}
