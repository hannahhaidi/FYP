<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>MSU Student's Activity Management System</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

         <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="icon" type="image/ico" href="Images/msu.ico"/>

        <title>{{config('app.name', 'MSU')}}</title>

        <!--<link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
    </head>
    <style>

        .card-header{
            background-color:black;
            color: white;
        }
        .card-body{
            background-color: white;
            color: black;
            height: 200%;
        }

        .container{
            background-color: rgba(255, 255, 255, 0.9); 
            height: 200%;
        }

        .btn-primary{
            color: white;
            background-color:darkred;
            border-color: darkred;
        }

        .btn-primary:hover{
            color: white;
            background-color: black;
            border-color: black;
        }

        .btn-link{
            color: black; 
        }

        .btn-link:hover{
            color: gray;
            text-decoration: none;
        }

        </style>

    <body
    style = "background:url(/Images/msu_building.jpg); background-repeat:no-repeat; background-size: 120% 120%; image-rendering: optimizeQuality;">

<div id ="app2">
        <main class="py-4">
                <div class="container">
                        <div class="w3-container w3-teal">
                            <center><h3><a href="/"><img src = "/Images/trans_logo.png" height="330" width="1050"></a></h3></center>
                        </div>   
            </div>
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