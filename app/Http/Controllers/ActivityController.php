<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Auth\SessionGuard;
use App\User;
use App\Activity;
use App\Skill;

class ActivityController extends Controller
{
    public function index()
    {
        $id = Auth::id();
        //$user = Auth::where('user_id',$id)->get();
        $activity = \App\Activity::where('user_id', $id)->get();
        $skill = \App\Skill::where('user_id', $id)->get();
        
        return view('student.index', compact ('activity', 'skill'));
    }

    
}
