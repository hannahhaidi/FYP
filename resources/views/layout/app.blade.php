<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>MSU Student's Activity Management System</title>
        <!--<link rel = "stylesheet" href ="{{asset('css/app.css')}}"-->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        

         <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="icon" type="image/ico" href="/Images/msu.ico"/>

        <title>{{config('app.name', 'MSU')}}</title>
        
    </head>
    <style>

        html,body{
            
        }
            
            ul{
                list-style-type: none;
                margin-bottom: 0;
                padding: 0;
                overflow: hidden;
                background-color: black;
                border-radius:10px;
            }
        
            li{
                float:left;
            }

            li a{
                display: block;
                color:white;
                text-align: center;
                text-decoration: none;
            }

            li a:hover{
                background-color: gray;
                color: white;
            }

            .topnav li{
                background-color: black;
                float: center;
                /*display: inline-block;*/
                color: #f2f2f2;
                text-align: center;
                padding: 14px 16px;
                text-decoration: none;
                position: relative;
                border-radius:10px; 
            }

            a{
                color: blue;
                text-decoration:italic;
            }

            a:hover{
                text-decoration: underline;
            }

            .card-header{
                /*display:inline-block;
                width: 1060px;
                float: center;*/
                position: relative;
                left: 20%;
                width: 550px;
            }

            .jumbotron{
                /*width: 300px;*/
                /*padding: 25px;*/
                /*margin: 25px;*/
                background-color: black;
                color: white!important;
                /*float: center;*/
                /*border-radius:10px;*/
                /*background-color: rgba(255, 255, 255, 0);*/
            }
            
            /*.p, .h2, .h5{
                color:black!important;
            }*/

            .column{
                float: left;
                padding: 10px;
                background-color: white;
                color: black;
            }

            .column.side{
                width: 25%;
                color: black;
            }

            .column.middle{
                width: 50%;
                color: black;
            }

            .row:after{
                content: "";
                display: table;
                clear: both;
            }

            .container{
                
                height: auto;
                width: 90%;
                background: white;
                /*background-color: rgba(255, 255, 255, 0.9);*/
                padding: 20px 40px;
                /*border-radius: 40px;*/
                float: center;
                margin: auto;
                position: relative;
                color: black;
            }

            .table{
                border-collapse: collapse;
                width: 100%;
            }

            th, td{
                text-align: left;
                padding: 8px;
                
            }

            th{
                background-color: black;
                color: white;
            }

            tr:nth-child(even){
                background-color: #f2f2f2;
            }

             tr:nth-child(odd){
                background-color: white;
                
            }


            .footer {
                position: relative;
                padding: 14px 14px;
                width: 100%;
                background-color: black;
                color: white;
                text-align: center;
                border-radius:5px;
            }

            .hr{
                display: block;
                height: 100px;
                width: 50px;
                border: 0;
                border-top: 1px;
                color:black;
            }

            .card-header{
            background-color:black;
            color: white;
            }

            .card-body{
            background-color: black;
            color: white!important;
            
            }

            .container{
            background-color: rgba(255, 255, 255, 0.9); 
            height: 200%;
            }

            .btn-primary{
            color: white;
            background-color: black;
            border-color: black;
            }

            .btn-primary:hover{
            color: white;
            background-color: gray;
            border-color: gray;
            }

            .btn-link{
            color: black; 
            }

            .btn-link:hover{
            color: gray;
            text-decoration: none;
            }

            .box1{ 
		    background:rgba(255, 255, 255, 0.9);
		    min-height:850px;
		    margin-right:260px;
            color: black;
	        }

	        .box2 {
		    float:right;
		    background:white;
		    /*border:1px solid #000;*/
		    min-height:230px;
		    width:250px;
            color: black;

	        }

            .center {
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 50%;
            }

            
            @keyframes slidy {
            0% { left: 0%; }
            20% { left: 0%; }
            25% { left: -100%; }
            45% { left: -100%; }
            50% { left: -200%; }
            70% { left: -200%; }
            75% { left: -300%; }
            95% { left: -300%; }
            100% { left: -400%; }
            }

            * {
            box-sizing: border-box;
            }

            body, figure { 
            margin: 0; background: #101010;
            }

            div#captioned-gallery { 
            width: 100%; overflow: hidden; 
            }

            figure.slider { 
            position: relative; width: 500%;
            font-size: 0; animation: 30s slidy infinite; 
            }

            figure.slider figure { 
            width: 20%; height: auto;
            display: inline-block;  position: inherit; 
            }

            figure.slider img { width: 100%; height:auto; }

            figure.slider figure figcaption { 
            position: absolute; bottom: 0;
            background: rgba(0,0,0,0.4);
            color: #fff; width: 100%;
            font-size: 16px; padding: .6rem;
            font-weight: bold;
            }

            table.center{
            margin-left:50px; 
            margin-right:50px;
            }

            .col-md
            {
                padding: 10px;
                margin: 11px;
            }

            .col-md-offset
            {
                left: -13.5%
            }

            .btn-danger{
            background-color: darkred;
            color: white;
            border: 1px solid #ccc;
            border-radius: 4px;
            float: right;
            /*position: relative;*/
            /*top: 10px;*/
            
            }

            .btn-danger:hover{
            background-color: black;
            }
    

            </style>
    <body
    style = "background:url(/Images/msu_building.jpg); background-repeat:repeat; background-size: 120% 100%; image-rendering: optimizeQuality;">
               
    <div id ="app">
        <main class="py-4">
        @include ('inc.navbar')

    <div class="container">
    <div class="row justify-content-center">
                <div class="container">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                            
                    <center><a class="card-body"> <!--<role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">-->
                              You are logged in as <strong>{{ Auth::user()->name }}</strong> <!--<span class="caret"></span> target="_blank"-->
                    </a></center>
                </div>       
    </div>
    </div>
        @yield('content')
        <!--@include('inc.footer')-->
        </main>
    </div>
    
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'article-ckeditor' );
    </script>
    </body>
</html>