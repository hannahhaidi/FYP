<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Auth\SessionGuard;
use Illuminate\Support\Facades\URL;
use App\Process;
use App\Admins;
use App\Students;
use App\LecturerSkill;
//use Request;
use DB;
use QRCode;


class AdminsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    protected $request;
    protected $fillable = [
        'code', 'name', 'date', 'venue',

    ];

    public function __construct()
    {
        $this->middleware('auth:admin', ['except' => 'qrcode', 'registeractivity']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
   
    public function index(){
        
        $uid = Auth::id();
        $students = \App\Students::where('lecturer_id', $uid)->get();
        return view ('admins.index', compact ('students'));
    }

    public function createactivity(){
        return view('pages.createactivity');
    }

    public function store(Request $request)

    {
        /*$uid = Auth::id();
        $process = Process::find();
        $process = \App\Process::where('activity_code', $id)->first();*/
        $user = new Process;
        $user->activity_code=$request->activity_code;
        $user->code=$request->code;
        $user->activity=$request->activity;
        $user->name=$request->name;
        $user->organizer=$request->organizer;
        $user->date=$request->date;
        $user->venue=$request->venue;
        $user->person=$request->person;
        $user->save();   
        {

            $this->validate($request,[

                    'activity_code' => 'required',
                    
                    'name' => 'required|min:5|max:50',
    
                    'date' => 'required|date_format:Y-m-d',
                    
                    'venue' => 'required|min:5|max:50',

                    'person' => 'required',
    
                  
    
                ],[

                    'activity_code.required' => ' The activity code field is required.',
                    
                    'name.required' => ' The activity name field is required.',
    
                    'name.min' => ' The activity name must be at least 25 characters.',
    
                    'name.max' => ' The activity name may not be greater than 50 characters.',
    
                    'date.required' => 'The date field is required.',
    
                    'venue.required' => ' The venue field is required.',
                    
                    'venue.min' => ' The venue field must be at least 25 characters.',
    
                    'venue.max' => ' The venue field may not be greater than 50 characters.',

                    'person.required' => ' The person in charge field is required.',


    
                ]);

        
                //return view('admins.createdactivity');
                //return view('pages.createactivity');
                //dd('You are successfully added all fields.');
               
                }
                {
                    
                }
                return redirect()->route('admins.showform', $user['activity_code']);
            
    }

    public function showform(Request $request, $id)
    {
        /*$process=\App\Process::where('activity_code', $request->activity_code)->get();*/

        $process = DB::table('processes')->orderBy('id', 'DESC')->first();
    
        return view('admins.showform')->with('process', $process);
        
    }

    public function qrcode($id)
    {
        $process = DB::table('processes')->orderBy('id', 'DESC')->first();
        $activity_code = $process->activity_code;
        $url = "http://msu-s-gems.herokuapp.com/activity/".$activity_code."/register";
        
        return QRCode::url($url)
                              ->setSize(12)
                              ->setMargin(2)
                              ->svg();

    }

   
    public function activitylist(){

        $process = \App\Process::all();
        return view('admins.activitylist', ['process' => $process]);
    }
       

        public function show($id){

        /*$id = Auth::id();*/
        $students = Students::find($id);
        
        /*$lectureractivity = LecturerActivity::find($id);*/
        $lectureractivity = \App\LecturerActivity::where('student_id', $id)->get();
        $lecturerskill = \App\LecturerSkill::where('student_id', $id)->get();
        return view('admins.show', compact ('lectureractivity', 'lecturerskill'))->with('lectureractivity', $lectureractivity )->with('students', $students);

    }

    public function registration(){
        
        
        $process = \App\Process::all();
        return view('admins.registration', ['process' => $process]);


    }
    
    }
