@extends('layout.app4')
@section('content')

<html>
<div class="container">
    <div class="container">

            <h3><center><strong>ACTIVITY SUGGESTION</strong></center></h3>
            <hr />

            <p><i><strong><center>Please click on the activity type to get the list of activity suggestion.</center></strong></i></p>

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

<body>
           
    
            <div class = "container">
            <div style="overflow-x:auto;">
                <table>
                <table align="center">
                    <center>

                            <tr>
                                <th>&nbsp;</th>
                                <th colspan="20">Activity Code:</th>
                                <th colspan="20">Activity Type:</th>
                            </tr>
                       

                            @foreach($activity as $activity)
                            @if($activity->completion == 'No')

                           
                            <tr>
                                <td><a href="/suggestion/{!!$activity->code!!}"></a></td>
                                <td colspan="20">{{$activity->activity_code}}</td>
                                <td colspan="20">{{$activity->type}}</td>
                            </tr>

                            @endif
                           
                            @endforeach

                        </center>
                    </table>
                </table>
                
            </div>
        </div>

            
    </body>
    </div>
    </div>
    </html>
@endsection