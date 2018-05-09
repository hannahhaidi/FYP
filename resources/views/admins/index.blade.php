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
            
                <hr/><body>
                <p><i><strong><center>Please click on the student's name for their GEmS details.</center></strong></i></p>
                <div class="container">
                <div style="overflow-x:auto;">
                    <table>
                        <table align ="center">
                            <tr>
                                <th>&nbsp;</th>
                                <th colspan="20">Student ID:</th>
                                <th colspan="20">Student Name:</th>
                                <th colspan="20">Cohort:</th>
                            </tr>
                            
                            @foreach ($students as $student) 
                            <tr>
                                <td><a href="/admins/{!!$student->id!!}"></a></td>
                                <td colspan="20">{!!$student->id!!}</td>
                                <td colspan="20">{!!$student->student_name!!}</td>
                                <td colspan="20">{!!$student->cohort!!}</td>
                            </tr>
                            @endforeach
                            
                        </table>
                    </table>

                        
                </div> 
                </div>
                     </body>
            </div>
    </div>
</div>
@endsection