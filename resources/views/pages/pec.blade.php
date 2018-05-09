@extends('layout.app')
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

        <h3><center><strong>GRADUATE EMPLOYABILITY SKILLS PROGRAMME (GEmS)</strong></center></h3>   
        
                <hr/>
                <div class="row">
                  
                  <h5><strong><u>Soft-skills Assessment</u></strong></h5>
                  <h6><strong>a. Student shall be assessed on their soft-skills ability through eight(8) Personal Enrichment Competency (PEC) courses every semester throughout the course of study as in table below: </strong></h6>
                
                </div>
                <hr/>
            
                <div class="container">
                <div style="overflow-x:auto;">
                        <table align="center">
                          <tr>
                            <th>No:</th>
                            <th>Personal Enrichment Competency (PEC) Course:</th>
                            <th>Recommended Year to be taken:</th>
                          </tr>
                          <tr>
                                <td>1</td>
                                <td>Thinking Skills</td>
                                <td>1</td>
                          </tr>

                          <tr>
                                <td>2</td>
                                <td>Communication Skills</td>
                                <td>1</td>
                          </tr>
                          
                          <tr>
                                <td>3</td>
                                <td>Management Skills</td>
                                <td>2</td>
                          </tr>

                          <tr>
                                <td>4</td>
                                <td>Teamwork</td>
                                <td>2</td>
                                
                          </tr>

                          <tr>
                                <td>5</td>
                                <td>Leadership Skills</td>
                                <td>3</td>
                          </tr>

                          <tr>
                                <td>6</td>
                                <td>Entrepreneurship Skills</td>
                                <td>3</td>
                          </tr>

                          <tr>
                                <td>7</td>
                                <td>Information Technology Skills</td>
                                <td>Any years</td>
                          </tr>

                          <tr>
                                <td>8</td>
                                <td>Wellness Management</td>
                                <td>Any years</td>
                          </tr>
                          
                        </table>
                        
               </div>
               </div>
                    <hr/>

                    <h6><strong>b. Students must choose six(6) out of eight(8) Personal Enrichment Competency courses listed in table above.</strong></h6>
                    <h6><strong>c. Students may replace with Information Technology and Wellnes courses should they have taken any six(6) of courses tabulated for year 1 to year 3 in the previous programme.</strong></h6>
                    <h6><strong>d. Students must obtain a minimum CGPA of 2.00 and grade C for each Personal Enrichment Competency course in order to graduate.</strong></h6>
                    <h6><strong>e. The summarized assessment will be presented in the GEmS Skills Transcript.</strong></h6>
      </div>
</div>
@endsection
    