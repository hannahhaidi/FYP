@extends('layout.app3')
@section('content')



<div class="container">
    <div class="container">

        <h3><center><strong>PRIORITIZED STUDENTS</strong></center></h3>
        <hr />
        <h5><center><strong>ACTIVITY'S NAME: {{$activity1->type}}</strong> </center></h5>

        <hr/><body>
                <div class="container">
                <div style="overflow-x:auto;">
                    <table>
                        <table align ="center">
                            <tr>
                                
                                <th colspan="20">Student ID:</th>
                                <th colspan="20">Student Name:</th>
                                <th colspan="20">Mentor Name:</th>
                            </tr>
                            
                            @include('student.findstudents')
                            
                            
                          
                            
                            
                        </table>
  

                        
                </div> 
                </div>

               
                     </body>
            </div>
    </div>
</div>
@endsection