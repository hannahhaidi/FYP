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

        <h3><center><strong>LIST OF STUDENTS</strong></center></h3>   
            
                <hr/><body>
                <div class="container">
                <div style="overflow-x:auto;">
                    <table>
                        <table align ="center">
                            <tr>
                                <th colspan="20">Student ID:</th>
                                <th colspan="20">Student Name:</th>
                                <th colspan="20">Cohort:</th>
                            </tr>

                            @foreach ($students as $student) 
                            <tr> 
                                <td colspan="20"><a href="/">{!!$student->id!!}</a></td>
                                <td colspan="20">{!!$student->student_name!!}</td>
                                <td colspan="20">{!!$student->cohort!!}</td>
                            </tr>
                            @endforeach
                        </table>
                </div> 
                </div>
                     </body>
            </div>
    </div>
</div>
@endsection
