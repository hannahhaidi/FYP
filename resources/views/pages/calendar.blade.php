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
                                  You are logged in as <strong>{{ Auth::user()->name }}</strong> <!--<span class="caret"></span>  //target="_blank"-->
                              </a></center>
                  
                  </div>
            </div>
</div>
                         
<div class="container">         
            <div class="container">
                <h3><center><strong>ACADEMIC CALENDAR 2017-2018 SESSION (DIPLOMA AND BACHELOR)</strong></center></h3>
                
                <hr/>
                
              

                <div class="container">
                <div style="overflow-x:auto;">
                      
                        <h4><center><strong>SEPTEMBER (2017) SESSION</strong></center></h4><br />
                        <table align="center">
                          <tr>
                            <th>Date:</th>
                            <th>Week:</th>
                            <th>Activities:</th>
                            <th>Public Holidays:</th>
                          </tr>
                          <tr>
                                <td>4 Sept 17- 10 Sept 17</td>
                                <td>1 week</td>
                                <td>Registration / Orientation (NEW students)</td>
                                <td></td>
                              </tr>
                          <tr>
                                <td>11 Sept - 15 Oct</td>
                                <td>5 weeks</td>
                                <td>Lecture</td>
                                <td>Malaysia Day 16 September 2017 - Saturday<br/>
                                    Awal Muharam 22 September 2017 - Friday</td>
                          </tr>
                          <tr>
                                <td>16 Oct - 22 Oct</td>
                                <td>1 week</td>
                                <td>Break</td>
                                <td>Deepavali 18 October 2017 - Wednesday</td>
                          </tr>
                          <tr>
                                <td>23 Oct - 29 Oct</td>
                                <td>1 week</td>
                                <td>Lecture</td>
                                <td></td>
                          </tr>
                          <tr>
                                <td>30 Oct - 5 Nov</td>
                                <td>1 week</td>
                                <td>Mid Semester Exam</td>
                                <td></td>
                          </tr>
                          <tr>
                                <td>6 Nov - 24 Dec</td>
                                <td>7 weeks</td>
                                <td>Lecture</td>
                                <td>Maulidur Rasul 1 December 2017 -Thursday</td>
                          </tr>
                          <tr>
                                <td>25 Dec - 31 Dec </td>
                                <td>1 week </td>
                                <td>Break</td>
                                <td>Christmas 25 December 2017 - Monday</td>
                          </tr>
                          <tr>
                                <td>1 Jan 18 - 7 Jan 18</td>
                                <td>1 week</td>
                                <td>Study Revision Week </td>
                                <td>New Years Day 1 January 2018 - Monday</td>
                          </tr>
                          <tr>
                                <td>8 Jan - 21 Jan</td>
                                <td>2 weeks</td>
                                <td>Final Exam</td>
                                <td></td>
                          </tr>
                          <tr>
                                <td>22 Jan - 18 Feb</td>
                                <td>4 weeks</td>
                                <td>Semester Break</td>
                                <td>Chinese New Year 16 and 17 February 2018 - Friday and Saturday</td>
                          </tr>
                        </table>

                  </div>
                  </div>

                                
            </div>

</div>
</div>

@endsection
    