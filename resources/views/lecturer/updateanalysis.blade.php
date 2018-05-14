@extends('layout.app3')
@section('content')


<div class="container">  
        <div class="row justify-content-center">    
              <div class="container">
                  @if (session('status'))
                      <div class="alert alert-success">
                          {{ session('status') }}
                      </div>
                    
                  @endif
        
                  <center><a class="card-body"> <!--<role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">-->
                    You are logged in as <strong>{{ Auth::user()->name }}</strong> <!--<span class="caret"></span>-->
                </a></center>
              
              </div>
        </div>
    </div>

<div class="container">
    <div class="container">

        
         

        <h3><center><strong>GEmS ANALYSIS PREDICTION</strong></center></h3>
        <h5><center><strong>List of students for {{ Auth::user()->name }}</strong></center></h5>   
        <hr />

        <table align="center">
            <center>
               
                <tr>
                    <th colspan="50">Student ID:</th>
                    <th colspan="50">Name:</th>
                    <th colspan="50">Year:</th>
                    <th colspan="50">Current CGPA:</th>
                    <th colspan="50">Current GEmS Point:</th>
                    <th colspan="50">No. of Activities:</th>
                    <th colspan="50">Fundamental Skill:</th>
                    <th colspan="50">Personal Skill:</th>
                    <th colspan="50">Teamwork Skill:</th>
                    <th colspan="50">Leadership Skill:</th>
                    <th colspan="50">Outcome:</th>
                </tr>


                    @foreach ($table as $table) 
                    <tr>
                        <td colspan="50">{{$table->id}}</td>
                        <td colspan="50">{{$table->student_name}}</td>
                        <td colspan="50">{{$table->year}}</td>
                        <td colspan="50">{{$table->cgpa}}</td>
                        <td colspan="50">{{$table->gems}}</td>
                        <td colspan="50">{{$table->activity_no}}</td>
                        <td colspan="50">{{$table->fundamental}}</td>
                        <td colspan="50">{{$table->personal}}</td>
                        <td colspan="50">{{$table->leadership}}</td>
                        <td colspan="50">{{$table->teamwork}}</td>
                        <td colspan="50">{{$table->outcome}}</td>
                    </tr>
                    @endforeach
                    
                            
                

            </center>
        </table>

        
    </div>
</div>
@endsection