<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>MSU Student's Activity Management System</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="icon" type="image/ico" href="Images/msu.ico"/>

        <title>{{config('app.name', 'MSU')}}</title>
    </head>

    <style>
    html, body {
        background-color: #C0C0C0;
        color: black;
        text-decoration: bold;
        font-family: 'Raleway';
        font-weight: 200;
        height: 100vh;
        margin: 0;
    }

    .full-height {
        height: 100vh;
    }

    .flex-center {
        align-items: center;
        display: flex;
        justify-content: center;
    }

    .position-ref {
        position: relative;
    }

    .top-right {
        position: absolute;
        right: 10px;
        top: 18px;
    }

    .content {
        text-align: center;
    }

    .title {
        font-size: 100px;
    }

    .links > a {
        color: black;
        padding: 0 25px;
        font-size: 16px;
        font-weight: 600;
        font-family: 'Raleway';
        letter-spacing: .1rem;
        text-decoration: none;
        text-transform: uppercase;
    }

    .m-b-md {
        margin-bottom: 30px;
    }

    .container{
        background-color: rgba(255, 255, 255, 0.6); 
        height: 200%;
    }

    .dropbtn {
    color: black;
    padding: 0 25px;
    font-size: 16px;
    font-weight: 600;
    font-family: 'Raleway';
    letter-spacing: .1rem;
    text-decoration: none;
    text-transform: uppercase;
}

    .dropdown {
    position: relative;
    display: inline-block;
    }

    .dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
    }

    .dropdown-content a {
    color: black;
    padding: 12px 16px;
    font-size: 16px;
    font-weight: 600;
    font-family: 'Raleway';
    letter-spacing: .1rem;
    text-decoration: none;
    text-transform: uppercase;
    display: block;
    }

    .dropdown-content a:hover {background-color: #C0C0C0}

    .dropdown:hover .dropdown-content {
    display: block;
    }


</style>

    <body
    style = "background:url(Images/msu_building.jpg); background-repeat:repeat; background-size: 100% 100%; image-rendering: optimizeQuality;"/>
        <div class ="container">
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/about') }}">Home</a>
                    @else
                    <div class="dropdown">
                        <button class="dropbtn">Login</button>
                        <div class="dropdown-content">
                            <a href="{{ url('/login')}}">Student Login</a>
                            <a href="{{ url('admins/login')}}">Lecturer Login</a>
                        </div>
                      </div>
                      <a href="/register">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    MSU Student's Activity <br/>Management System
                </div>

                <!--<div class="links">
                    <a href="/login">Click Here to Start</a>
                </div>-->
            </div>
        </div>
        </div>
    </body>
</html>
