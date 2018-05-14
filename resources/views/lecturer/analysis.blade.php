@extends('layout.app3')
@section('content')
<head>
    <?php
    if (isset($_GET['button']))
    {
        exec("C:\xampp\htdocs\fyp\public\fyp.jar");
    }
    ?>
</head>

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

            <center>
           

            <script>
            function myFunction() {
                alert("The students' GEmS analysis data is predicted!");
                window.location.href="/updateanalysis";
            }
            </script>
            </center>
            <br />

        <h3><center><strong>GEmS ANALYSIS</strong></center></h3>   
        <hr />

        <style>
     
        .btn-primary{
        background-color: darkred;
        color: white;
        border: 5px solid #ccc;
        border-radius: 4px;
            
        }

        .btn-primary:hover{
        background-color: darkslategray;
        }

        </style>


        <table align="center">
            <center>
               
                <tr>
                    <th colspan="50">Student ID:</th>
                    <th colspan="50">Year:</th>
                    <th colspan="50">Name:</th>
                    <th colspan="50">Current CGPA:</th>
                    <th colspan="50">Current GEmS Point:</th>
                    <th colspan="50">No. of Activities:</th>
                    <th colspan="50">Fundamental Skill:</th>
                    <th colspan="50">Personal Skill:</th>
                    <th colspan="50">Teamwork Skill:</th>
                    <th colspan="50">Leadership Skill:</th>
                </tr>
            

                    @foreach ($table as $table) 
                <tr>
                    <td colspan="50">{{$table->id}}</td>
                    <td colspan="50">{{$table->year}}</td>
                    <td colspan="50">{{$table->student_name}}</td>
                    <td colspan="50">{{$table->cgpa}}</td>
                    <td colspan="50">{{$table->gems}}</td>
                    <td colspan="50">{{$table->activity_no}}</td>
                    <td colspan="50">{{$table->fundamental}}</td>
                    <td colspan="50">{{$table->personal}}</td>
                    <td colspan="50">{{$table->leadership}}</td>
                    <td colspan="50">{{$table->teamwork}}</td>
                </tr>
                    @endforeach
            </center>
        </table>
        <p><i><strong><center>Click the Run button to analyze your students' GEmS analysis prediction to get the outcome.</center></strong></i></p>
        <center>
        <a type = "submit" name="submit" class="btn btn-primary" onclick="myFunction()">
        Run</a></center>
        
    </div>
</div>
@endsection