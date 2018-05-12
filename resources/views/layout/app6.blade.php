<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="length=2000", initial-scale="1",maximum-scale="1",user-scalable="no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="HandheldFriendly" content="true">
        <title>MSU Student's Activity Management System</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

         <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="icon" type="image/ico" href="/Images/msu.ico"/>

        <title>{{config('app.name', 'MSU')}}</title>

        <!--<link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
    </head>
    <style>


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
                /*display:block;*/
            }

            a:hover{
                text-decoration: underline;
            }

            .card-header{
                /*display:inline-block;
                width: 1060px;
                float: center;*/
                position: relative;
                left: 9%;
                width: 820px;
            }

            .jumbotron{
                /*width: 300px;*/
                /*padding: 25px;*/
                /*margin: 25px;*/
                background-color: black;
                color: white!important;
                /*float: center;
                border-radius:10px;*/
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
                width: 100%;
                background: white;
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

            th, td {
                text-align: left;
                padding: 8px;
                
            }

            th{
                background-color: black;
                color: white;
                
            }

            tr:nth-child(even){
                background-color:#f2f2f2;
                
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

            .topnav{
                /*display:inline-block;
                width: 1060px;
                float: center;*/
                position: relative;
                left: 50%;
                width: 550px;
            }

            .nav ul{
                position:relative;
                left: -50%;
             
            }

            .nav a{
                padding:0 30px;
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

            div#tbl-container {
            width: 800px;
            height: 300px;
            overflow: auto;
            }


        

        </style>
    <body

    style = "background:url(/Images/msu_building.jpg); background-repeat:no-repeat; background-size: cover; background-position: center center;">
    

    <div id ="app1">
            <main class="py-4">
            @include ('inc1.header')
            
            @yield('content')
          
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