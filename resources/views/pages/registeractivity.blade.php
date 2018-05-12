@extends('layout.app6')
@section('content')


<div class="container">
        <div class="container">
        
                <h3><center><strong>REGISTER ACTIVITY</strong></center></h3>
                <hr/>
                <h5><strong><center>ACTIVITY DETAILS:</strong></center></h5>
                <hr/>

                
                <div class="container">
                    

                <div class = "row">
                <div class="col-25">
                <label>Activity Date:</label></div>
                <div class="col-75">
                <label>{{$process->date}}</label>
                <br />
                </div> 
                </div>

                <div class = "row">
                <div class="col-25">
                <label>Activity Venue:</label></div>
                <div class="col-75">
                <label>{{$process->venue}}</label>
                <br />
                </div> 
                </div>

                <div class = "row">
                <div class="col-25">
                <label>Activity Name:</label></div>
                <div class="col-75">
                <label>{{$process->name}}</label>
                <br />
                </div> 
                </div>

                <div class = "row">
                <div class="col-25">
                <label>Activity Programme:</label></div>
                <div class="col-75">
                <label>{{$process->activity}}</label>
                <br />
                </div> 
                </div>

                <div class = "row">
                <div class="col-25">
                <label>Programme Code:</label></div>
                <div class="col-75">
                <label>{{$process->code}}</label>
                <br />
                </div> 
                </div>

                <div class = "row">
                <div class="col-25">
                <label>Activity Code:</label></div>
                <div class="col-75">
                <label>{{$process->activity_code}}</label>
                <br />
                </div> 
                </div>

                <div class = "row">
                <div class="col-25">
                <label>Person In Charge:</label></div>
                <div class="col-75">
                <label>{{$process->person}}</label>
                <br />
                </div> 
                </div>
        

                
                </div> 
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
                        float: left
                        /*position: relative;*/
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
                        #title_message
                        {
                            visibility: hidden;
                            clear: both;
                            float: left;
                            margin: 10px auto 5px 20px;
                            width: 28%;
                            display: none;
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
        document.getElementById("activity_code", "user_id", "password").innerHTML = txt;
        }


        </script>
        
</head>
                            
<html>
        <body>
                <div class= "container">
                        <form action="/studentregister" method="POST" autocomplete="off">
                        
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
                                                                        
                <label for="activity_code">Activity Code:</label></div>
                <div class="col-75">
                <input type="text" name="activity_code" id="activity_code"  class="form-control" placeholder="Refer to the activity code above" value="{{ old('activity_code') }}"/>
                <span class="text-danger">{{ $errors->first('activity_code') }}</span>
                <br />
                </div>
                </div>

                <div class="row">
                <div class="col-25">
                <div class="{{ $errors->has('user_id') ? 'has-error' : '' }}"></div>   
                                                                
                <label for="user_id">Student ID:</label></div>
                <div class="col-75">
                <input type="text" name="user_id" id="user_id"  class="form-control" placeholder="Enter Student ID" value="{{ old('user_id') }}"/>
                <span class="text-danger">{{ $errors->first('user_id') }}</span>
                <br />
                </div>
                </div>

                <div class="row">
                <div class="col-25">
                <div class="{{ $errors->has('password') ? 'has-error' : '' }}"></div>   
                                                                        
                <label for="code">Password:</label></div>
                <div class="col-75">
                <input type="password" name="password" id="password"  class="form-control" placeholder="Enter Password" value="{{ old('password') }}"/>
                <span class="text-danger">{{ $errors->first('password') }}</span>
                <br />
                </div>
                </div>

                <div class="row">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
        
                <input type="submit" name="submit" id="submit" onclick="myFunction()">
            
                </div>

            </form>
        </div>
    </body>
</html>
</div>
</div>


@endsection