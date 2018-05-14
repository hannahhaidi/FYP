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

    <h3><center><strong>CREATED ACTIVITY</strong></center></h3>   
    <hr />

    <style>

        .btn-primary
        {
            background-color: darkred;
            color: white;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .btn-primary:hover{
            background-color: darkslategray;
        }


    </style>

    <div class = "container">

            <div class="col-md col-md-offset">
                    <div class="container">
            
                        <table align="center">
                    <center>
                    <!--<table align ="center">-->
                        
                        <tr>
                            
                            <th colspan="20">Activity Code:</th>
                            <th colspan="20">Programme Code:</th>
                            <th colspan="20">Activity Programme:</th>
                            <th colspan="20">Activity Name:</th>
                            <th colspan="20">Activity Organizer:</th>
                            <th colspan="20">Activity Date:</th>
                            <th colspan="20">Activity Venue:</th>
                            <th colspan="20">Person In Charge:</th>
                           

                        </tr>

                        <div class="well">
                        
                        <tr>
                                
                            <td colspan="20">{{$process->code}}</td>
                            <td colspan="20">{{$process->activity_code}}</td>
                            <td colspan="20">{{$process->activity}}</td>
                            <td colspan="20">{{$process->name}}</td>
                            <td colspan="20">{{$process->organizer}}</td>
                            <td colspan="20">{{$process->date}}</td>
                            <td colspan="20">{{$process->venue}}</td>
                            <td colspan="20">{{$process->person}}</td>
                                
                        </tr>
                    
                    </div>
                </center>
            </table> 
            </div>
        </div>


        <center>
        <a type="submit" name="submit" class="btn btn-primary" href="{{action('AdminsController@qrcode', $process->code)}}">
            Generate QR Code</a></center>
                 
        </div>
</div>
</div>
@endsection

<!--class="btn btn-danger"-->