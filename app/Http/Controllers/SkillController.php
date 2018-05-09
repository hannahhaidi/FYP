<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Auth\SessionGuard;
use App\User;
use App\Skill;

class SkillController extends Controller
{
    public function index()
    {
        $id = Auth::id();
        $skill = \App\Skill::where('user_id', $id)->get();
        return view('student.skill', compact ('skill'));
    }
}
