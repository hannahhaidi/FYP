<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Analysis;
use DB;
use Excel;

class AnalysisController extends Controller
{
    public function analysis()

	{

		return view('analysis');

	}

	public function downloadExcel($type)

	{

		$data = Analysis::get()->toArray();

		return Excel::create('analysis', function($excel) use ($data) {

			$excel->sheet('mySheet', function($sheet) use ($data)

	        {

				$sheet->fromArray($data);

	        });

		})->download($type);

	}

	public function importExcel()

	{
        $analysis = Analysis::all();

		if(Input::hasFile('import_file')){

			$path = Input::file('import_file')->getRealPath();

			$data = Excel::load($path, function($reader) {

			})->get();

			if(!empty($data) && $data->count()){

				foreach ($data as $key => $value) {

					$insert[] = ['user_id' => $value->user_id, 'cgpa' => $value->cgpa, 'final_gems' => $value->final_gems,
					'no_of_activity' => $value->no_of_activity, 'fundamental' => $value->fundamental, 'personal' => $value->personal, 'teamwork' => $value->teamwork,
					'leadership' => $value->leadership, 'validation' => $value->validation ];

				}
                
				if(!empty($insert)){
                    DB::table('analysis')->insert($insert);
                    
                   
                    //dd('Insert Record successfully.');
                    

				}

			}

        }
        
        return view ('importExcel', compact ('analysis'));

		
    }
    

}
