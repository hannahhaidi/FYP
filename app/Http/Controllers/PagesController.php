<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Illuminate\Support\Facades\Input;

use Illuminate\Support\Facades\Auth;

use App\Process;

use App\Registration;

use DB;
 
use Activity;

use QRCode;

use Jenssegers\Agent\Facades\Agent;



class PagesController extends Controller
{
    public function index()
    {
        return view  ('pages.index');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function activity()
    {
        return view('pages.activity');
    }

    public function pec()
    {
        return view('pages.pec');
    }

    public function login()
    {
        return view('pages.about');
    }

    public function registration()
    {
        return view('pages.registration');
    }

    public function calendar()
    {
        return view('pages.calendar');
    }

    public function registeractivity(Request $request)
    {
        $process=\App\Process::where('activity_code', $request->activity_code)->first();
        return view('pages.registeractivity')->with('process', $process);
    }

    public function store(Request $request)
    {
        
        $user = new Registration;
        $user->activity_code=$request->activity_code;
        $user->user_id=$request->user_id;
        $user->password=$request->password;
        $user->save();   
        {

            $this->validate($request,[

                    'activity_code' => 'required',

                    'user_id' => 'required',

                    'password' => 'required',
                    
                ],[
                    'activity_code.required' => ' The activity code field is required.',

                    'user_id.required' => ' The user ID field is required.',
                    
                    'password.required' => ' The password field is required.',
    
    
                ]);

                return view('pages.studentregister');
                //dd('The registration is recorded. Thank you!');
               
        }

    }

    public function suggestion()
    {
        $id = Auth::id();
        $activity = \App\Activity::where('user_id', $id)->get();
        $process = \App\Activity::where('code', $id)->get();
        return view('pages.suggestion', ['activity' => $activity], ['process' => $process] );
    }

    public function show($id)
    {
        $uid = Auth::id();
        $activity = \App\Activity::where('user_id', $id)->get();
        $process = \App\Process::where('code', $id)->get();
        return view('pages.show')->with('activity', $activity )->with('process', $process);
    }


}
