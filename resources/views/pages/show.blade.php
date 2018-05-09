@extends('layout.app')
@section('content')

<div class="container">
    <div class="container">

        <h3><center><strong>ACTIVITY DETAILS</strong></center></h3>
        <hr />
        

        <body>
                <div class="container">
                
                    <table>
                        <table align ="center">
                            <tr>
                                
                                <th colspan="5">Activity Code:</th>
                                <th colspan="5">Programme Code:</th>
                                <th colspan="20">Activity Programme:</th>
                                <th colspan="20">Activity Name:</th>
                                <th colspan="20">Activity Organizer:</th>
                                <th colspan="20">Activity Date:</th>
                                <th colspan="20">Activity Venue:</th>
                                <th colspan="20">Person In Charge:</th>
                                
                                
                            </tr>
                            
                            @foreach($process as $process)
                            <tr>
                                
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
                

               
                     </body>
            </div>
    </div>
</div>
@endsection