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

        <h3><center><strong>STUDENT'S ACTIVITY COMPLETION</strong></center></h3>   
        <hr />
        <h4><center><strong>PERSONAL ENRICHMENT COMPETENCY COURSES</strong></center></h4>
        <hr />
        <h5><center><strong>STUDENT'S NAME: {!!$students->student_name!!}</strong> </center></h5>
        <hr />

        <div class = "container">
        
            <table align="center">
                <center>
                
                    <tr>
                        
                        <th colspan="20">Code:</th>
                        <th colspan="20">Subject:</th>
                        <th colspan="20">Grade:</th>
                    </tr>

                  
                    @foreach ($lecturerskill as $lecturerskill) 
                    <tr>
                            
                        <td colspan="20">{{$lecturerskill->code}}</td>
                        <td colspan="20">{{$lecturerskill->subject}}</td>
                        <td colspan="20">{{$lecturerskill->grade}}</td>
                    </tr>
                    @endforeach
                
            </center>
                </table>

       
        <hr />
        
        <h4><center><strong>GEmS INDICATOR</strong></center></h4>
        <hr />
                
                
        
                <div class="col-md col-md-offset">
                        <div class="container">
                
                        <table align="center">
                        <center>
                        <!--<table align ="center">-->
                            
                            <tr>
                                
                                <th colspan="20">Activity Code:</th>
                                <th colspan="20">Activity Programme:</th>
                                <th colspan="20">Activity Name:</th>
                                <th colspan="20">Activity Organizer:</th>
                                <th colspan="20">Activity Venue:</th>
                                <th colspan="20">Activity Date:</th>
                                <th colspan="20">Compulsory Points:</th>
                                <th colspan="20">Achieved Points:</th>
                                <th colspan="20">Completion for the Activity:</th>

                            </tr>

                            <div class="well">
                            @foreach ($lectureractivity as $lectureractivity) 
                            <tr>
                                    
                                    <td colspan="20">{{$lectureractivity->code}}</td>
                                    <td colspan="20">{{$lectureractivity->type}}</td>
                                    <td colspan="20">{{$lectureractivity->meta[0]}} <br /> {{$lectureractivity->meta[1]}} <br /> {{$lectureractivity->meta[2]}}</td>
                                    <td colspan="20">{{$lectureractivity->meta1[0]}} <br /> {{$lectureractivity->meta1[1]}} <br /> {{$lectureractivity->meta1[2]}}</td>
                                    <td colspan="20">{{$lectureractivity->meta2[0]}} <br /> {{$lectureractivity->meta2[1]}} <br /> {{$lectureractivity->meta2[2]}}</td>
                                    <td colspan="20">{{$lectureractivity->meta3[0]}} <br /> {{$lectureractivity->meta3[1]}} <br /> {{$lectureractivity->meta3[2]}}</td>
                                    <td colspan="20">{{$lectureractivity->points}}</td>
                                    <td colspan="20">{{$lectureractivity->points1}}</td>
                                    <td colspan="20">{{$lectureractivity->completion}}</td>
                            </tr>
                            @endforeach
                        </div>
                    </center>
                </table> 
                </div>
            </div>
        
                
                     
            </div>
    </div>
</div>
