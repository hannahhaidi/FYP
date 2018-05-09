@extends('layout.app')
@section('content')

<div class="container">
<div class="container">

        <h3><center><strong>STUDENT'S ACTIVITY COMPLETION</strong></center></h3>
        <hr />
        <h4><center><strong>PERSONAL ENRICHMENT COMPETENCY COURSES</strong></center></h4>
        <hr />

        <div class = "container">
            
            <table align="center">
                <center>
                   
                    <tr>
                        <th colspan="50">Code:</th>
                        <th colspan="50">Subject:</th>
                        <th colspan="50">Grade:</th>
                        
                       
                    </tr>
                
            
                    

                        @foreach ($skill as $skill) 
                        <tr>
                            <td colspan="50">{{$skill->code}}</td>
                            <td colspan="50">{{$skill->subject}}</td>
                            <td colspan="50">{{$skill->grade}}</td>
                            
         
                        </tr>
                        @endforeach
                        
                                
                    

                </center>
            </table>
            <hr />
        
        <h4><center><strong>GEmS INDICATOR</strong></center></h4>
        <hr />
            <div class="col-md col-md-offset">
           
            <table align="center">
                <center>
                    
                    <tr>
                        <th colspan="20">Activity Code:</th>
                        <th colspan="20">Activity Programme:</th>
                        <th colspan="20">Activity Name:</th>
                        <th colspan="20">Activity Organizer:</th>
                        <th colspan="20">Activity Venue:</th>
                        <th colspan="20">Activity Date:</th>
                        <th colspan="20">Compulsory Points:</th>
                        <th colspan ="20">Achieved Points:</th>
                        <th colspan="20">Completion for the Activity:</th>
                       
                    </tr>
               
                    <div class ="well">
                        @foreach ($activity as $activity) 
                        <tr>
                            <td colspan="20">{{$activity->code}}</td>
                            <td colspan="20">{{$activity->type}}</td>
                            <td colspan="20">{{$activity->meta[0]}} <br /> {{$activity->meta[1]}} <br /> {{$activity->meta[2]}}</td>
                            <td colspan="20">{{$activity->meta1[0]}} <br /> {{$activity->meta1[1]}} <br /> {{$activity->meta1[2]}}</td>
                            <td colspan="20">{{$activity->meta2[0]}} <br /> {{$activity->meta2[1]}} <br /> {{$activity->meta2[2]}}</td>
                            <td colspan="20">{{$activity->meta3[0]}} <br /> {{$activity->meta3[1]}} <br /> {{$activity->meta3[2]}}</td>
                            <td colspan="20">{{$activity->points}}</td>
                            <td colspan="20">{{$activity->points1}}</td>
                            <td colspan="20">{{$activity->completion}}</td>
                            
         
                        </tr>
                        @endforeach
                    </div>
                </center>
            </table>
    </div>                
    </div>
</div>   
</div>
@endsection

