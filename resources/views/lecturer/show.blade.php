@extends('layout.app3')
@section('content')

<div class="container">
    <div class="container">

        <h3><center><strong>STUDENT'S ACTIVITY REGISTRATION</strong></center></h3>
        <hr />
        <h5><center><strong>ACTIVITY NAME: {{$process1->name}}</strong> </center></h5>
        <hr />
        <h5><center><strong>ACTIVITY CODE: {{$process1->activity_code}}</strong> </center></h5>
        <hr />
        

        <body>
                <div class="container">
                
                    <table>
                        <table align ="center">
                            <tr>
                                
                                <th colspan="5">Activity Code:</th>
                                <th colspan="5">Student ID:</th>
                          
                            </tr>
                            
                            @foreach($registration as $registration)
                            <tr>
                                
                                <td colspan="5">{{$registration->activity_code}}</td>
                                <td colspan="5">{{$registration->user_id}}</td> 
                              
                            </tr>
                            @endforeach
                            
                        </table>      
                </div> 
                </body>
            </div>
    </div>
</div>
@endsection