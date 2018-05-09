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
                          You are logged in as <strong>{{ Auth::user() }}</strong> <!--<span class="caret"></span>  //target="_blank"-->
                      </a></center>
          
          </div>
    </div>
</div>


                
<div class="container">         
            <div class="container">
                <h3><center><strong>PREDICTION ANALYSIS</strong></center></h3>
              
                <hr/><body>
                    <div class="container">
                    <div style="overflow-x:auto;">
                        <table>
                            <table align ="center">
                                <tr>
                            
                                    <th colspan="20">User ID:</th>
                                    <th colspan="20">CGPA:</th>
                                    <th colspan="20">User ID:</th>
                                    <th colspan="20">CGPA:</th>
                                    <th colspan="20">User ID:</th>
                                    <th colspan="20">CGPA:</th>
                                    <th colspan="20">User ID:</th>
                                    <th colspan="20">CGPA:</th>
                                    <th colspan="20">CGPA:</th>
                               
                                </tr>
                                
                                @foreach ($analysis as $analysis) 
                                <tr>
                                    
                                    
                                    <td colspan="20">{{$analysis->user_id}}</td>
                                    <td colspan="20"> {{$analysis->cgpa}}</td>
                                    <td colspan="20">{{$analysis->user_id}}</td>
                                    <td colspan="20"> {{$analysis->cgpa}}</td>
                                    <td colspan="20">{{$analysis->user_id}}</td>
                                    <td colspan="20"> {{$analysis->cgpa}}</td>
                                    <td colspan="20">{{$analysis->user_id}}</td>
                                    <td colspan="20"> {{$analysis->cgpa}}</td>
                                    <td colspan="20">{{$analysis->user_id}}</td>
                                    <td colspan="20"> {{$analysis->cgpa}}</td>

                                </tr>
                                @endforeach

                            </table>
                        </table>

                
                            
                    </div> 
                    </div>
                         </body>

                
                
                

</div>
</div>

@endsection
    