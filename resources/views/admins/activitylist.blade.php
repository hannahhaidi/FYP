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

        <h3><center><strong>LIST OF CREATED ACTIVITIES</strong></center></h3>
        <hr/>
        
        <p><i><strong><center>Please click on the activity name to get the list of students who are prioritized to join the activity.</center></strong></i></p>
        <style>
                tr:hover {
                    background-color:lightgray;
                    cursor: pointer;
                }
        </style>
    
            <head>
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                <script>
                $(document).ready(function() {
    
                $('tr').click(function() {
                var href = $(this).find("a").attr("href");
                if(href) {
                window.location = href;
                }
    });
    
    });
                </script>
        </head>
        <body>
                <div class="container">
                <div style="overflow-x:auto;">
                    <table>
                        <table align ="center">
                            <tr>
                                <th>&nbsp;</th>
                                <th colspan="5">Activity Code:</th>
                                <th colspan="5">Programme Code:</th>
                                <th colspan="20">Activity Programme:</th>
                                <th colspan="20">Activity Name:</th>
                                <th colspan="20">Activity Organizer:</th>
                                <th colspan="20">Activity Date:</th>
                                <th colspan="20">Activity Venue:</th>
                                <th colspan="20">Person in Charge:</th>
                            </tr>
                            
                            @foreach($process as $process)
                            <tr>
                                <td><a href="/activitylist/{!!$process->code!!}"></a></td>
                                <td colspan="5">{{$process->activity_code}}</td>
                                <td colspan="5">{{$process->code}}</td>
                                <td colspan="20">{{$process->activity}}</td>
                                <td colspan="20">{{$process->name}}</td>
                                <td colspan="20">{{$process->organizer}}</td>
                                <td colspan="20">{{$process->date}}</td>
                                <td colspan="20">{{$process->venue}}</td>
                                <td colspan="20">{{$process->person}}</td>
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