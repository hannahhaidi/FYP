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
        
                <h3><center><strong>CREATE ACTIVITY</strong></center></h3>   
                    
                        <hr/>
                
                         <style>
                                
                            label
                            {
                            display:inline-block;
                            width:100px;
                            margin-bottom:10px; 
                            text-align: center;
                            }
        
                            * 
                            {
                            box-sizing: border-box;
                            }
        
                            input[type=text], select, textarea 
                            {
                            width: 100%;
                            padding: 12px;
                            border: 1px solid #ccc;
                            border-radius: 4px;
                            resize: vertical;
                            }
        
                            label 
                            {
                            padding: 12px 12px 12px 0;
                            display: inline-block;
                            }
        
                            input[type=submit] 
                            {
                            background-color: darkred;
                            color: white;
                            padding: 12px 20px;
                            border: none;
                            border-radius: 4px;
                            cursor: pointer;
                            float: right;
                            position: relative;
                            top: 10px;
                            left: 720px;
                            }
        
                            input[type=submit]:hover 
                            {
                            background-color: black;
                            }
        
                            /*.container 
                            {
                            border-radius: 5px;
                            background-color: white;
                            padding: 20px;
                            }*/
        
                            .col-25 
                            {
                            float: left;
                            width: 25%;
                            margin-top: 6px;
                            }
        
                            .col-75 
                            {
                            float: left;
                            width: 75%;
                            margin-top: 6px;
                            }
        
                            .row:after 
                            {
                            content: "";
                            display: table;
                            clear: both;
                            }
        
        
                            @media screen and (max-width: 600px) {
                            .col-25, .col-75, input[type=submit] 
                            {
                                width: 100%;
                                margin-top: 0;
                            }
                            }

                            .alert-danger{
                                background-color:#E68798;
                            }

                            ul.a{
                                background-color:#E68798;
                                list-style-type: circle;
                            }

                            li.a{
                                list-style-type: circle;
                            }
                            
                            

                        
                        </style>
                                
                                <head>
                                        
                                        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                                        <script>
                                        
                                        function myFunction() {
                                            var txt;
                                            if (confirm("Are you sure all the data inserted are correct?")) {
                                                
                                            } else {
                                                alert("Please enter again!");
                                            }
                                        document.getElementById("activity_code", "code", 
                                                   "activity", "name", "organizer", "date", "venue", "person").innerHTML = txt;
                                        }
                 

                                        </script>
                                        
                                </head>
                    <html>
                    <body>
        
                              
                        <div class= "container">
                        <form action="/store" method="POST" autocomplete="off">
                        
                            <div class= "container">
                            @if(count($errors))

                            <div class="alert alert-danger">
                
                                <strong>Whoops!</strong> There were some problems with your input.
                
                                <br/>

                                <div class="alert-danger">
                                <ul class="a">
                
                                    @foreach($errors->all() as $error)

                                    <li class="a">
                
                                    {{ $error }} </li><br/>
                
                                    @endforeach
                                
                
                                </ul>
                
                            </div>
                
                        @endif
                        </div>

                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <div class="row">
                        <div class="col-25">
                        <div class="{{ $errors->has('activity_code') ? 'has-error' : '' }}"></div>   
                                                                        
                        <label for="code">Activity Code:</label></div>
                        <div class="col-75">
                        <input type="text" name="activity_code" id="activity_code"  class="form-control" placeholder="Enter Activity Code (e.g.: 1234, 4567, ..)" value="{{ old('activity_code') }}"/>
                        <span class="text-danger">{{ $errors->first('activity_code') }}</span>
                        <br />
                        </div>
                        </div>

                        <div class="row">
                        <div class="col-25">
                        <label for="code">Programme Code:</label></div>
                        <div class="col-75">
                        <select id="code" name="code">
                        <option value="1. Community Service">Community Service [1]</option>
                        <option value="2. Industry Linkages (External)">Industry Linkages (External) [2]</option>
                        <option value="3. Industry Linkages (Internal)">Industry Linkages (Internal) [3]</option>
                        <option value="4. Competition/Sport">Competition/Sport [4]</option>
                        <option value="5. Club/Societies/Association (Faculty Level)">Club/Societies/Association (Faculty Level) [5]</option>
                        <option value="6. Club/Societies/Association (SCD)">Club/Societies/Association (SCD) [6]</option>
                        <option value="7. Internationalization">Internationalization [7]</option>
                        <option value="8. Professional Certification">Professional Certification [8]</option>
                        <option value="9. Personal Enrichment Competency Courses">Personal Enrichment Competency Courses [9]</option>
                                                
                        </select>
                        <br />
                        </div>
                        </div>

                        <div class="row">
                        <div class="col-25">
                        <label for="activity">Activity Programme:</label></div>
                        <div class="col-75">
                        <select id="activity" name="activity">
                        <option value="Community Service">Community Service</option>
                        <option value="Industry Linkages (External)">Industry Linkages (External)</option>
                        <option value="Industry Linkages (Internal)">Industry Linkages (Internal)</option>
                        <option value="Competition/Sport">Competition/Sport</option>
                        <option value="Club/Societies/Association (Faculty Level)">Club/Societies/Association (Faculty Level)</option>
                        <option value="Club/Societies/Association (SCD)">Club/Societies/Association (SCD)</option>
                        <option value="Internationalization">Internationalization</option>
                        <option value="Professional Certification">Professional Certification</option>
                        <option value="Personal Enrichment Competency">Personal Enrichment Competency</option>
                                        
                        </select>
                        <br />
                        </div>
                        </div>


                        <div class="row">
                        <div class="col-25">
                        <div class="{{ $errors->has('name') ? 'has-error' : '' }}"></div>    
                                                
                        <label for="name">Activity Name:</label></div>
                        <div class="col-75">
                        <input type="text" name="name" id="name" class="form-control" placeholder="Enter Activity Name" value="{{ old('name') }}"/>
                        <span class="text-danger">{{ $errors->first('name') }}</span>
                        <br />
                        </div>
                        </div>

                        <div class="row">
                        <div class="col-25">
                        <label for="organizer">Organizer Name:</label></div>
                        <div class="col-75">
                        <select id="organizer" name="organizer">
                        <option value="FISE">FISE</option>
                        <option value="SHCA">SHCA</option>
                        <option value="SESS">SESS</option>
                        <option value="CFS">CFS</option>
                        <option value="IMS">IMS</option>
                        <option value="FBMP">FBMP</option>
                        <option value="SCD">SCD</option>
                                                
                        </select>
                        <br />
                        </div>
                        </div>
        
                     
        
                        <div class="row">
                        <div class="col-25">
                        <div class="{{ $errors->has('date') ? 'has-error' : '' }}"></div> 
                        <label for="date">Date:</label></div>
                        <div class="col-75">
                        <input type="date" name="date" id="date" class="form-control" placeholder="Enter Activity Date" value="{{ old('date') }}" />
                        <span class="text-danger">{{ $errors->first('date') }}</span>
                        <br />
                        </div>
                        </div>
        
                        <div class="row">
                        <div class="col-25">
                        <div class="{{ $errors->has('venue') ? 'has-error' : '' }}"></div> 
                        <label for="venue">Venue:</label></div>
                        <div class="col-75">
                        <input type="text" name="venue" id="venue" class="form-control" placeholder="Enter Activity Venue" value="{{ old('venue') }}" />
                        <span class="text-danger">{{ $errors->first('venue') }}</span>
                        <br />
                        </div>
                        </div>

                        <div class="row">
                        <div class="col-25">
                        <div class="{{ $errors->has('person') ? 'has-error' : '' }}"></div> 
                        <label for="person">Person In Charge:</label></div>
                        <div class="col-75">
                        <input type="text" name="person" id="person" class="form-control" placeholder="Enter Person In Charge" value="{{ old('person') }}" />
                        <span class="text-danger">{{ $errors->first('person') }}</span>
                        <br />
                        </div>
                        </div>

                        <div class="row">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        
                        <input type="submit" name="submit" id="submit" onclick="myFunction()">
                        <!--<a href="createactivity/{activity_code}/register">Click here</a>-->
                        

                        </div>
            
                        </form>
                    </div>
                
                    </body>
                </html>
                </div>
        </div>
        </div>
@endsection