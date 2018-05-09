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
                You are logged in as <strong>{{ Auth::user() }}</strong> <!--<span class="caret"></span>-->
            </a></center>
          
          </div>
    </div>
</div>

<html lang="en">
<body>
	<style>

	.btn-success
	{
		background-color: black;
		border: black;
	}

	.btn-success:hover
	{
		background-color:gray;
	}

	</style>


	<div class="container">
	<div class="container">

		<center>

		<a href="{{ URL::to('downloadExcel/xls') }}"><button class="btn btn-success">Download Excel xls</button></a>

		<a href="{{ URL::to('downloadExcel/xlsx') }}"><button class="btn btn-success">Download Excel xlsx</button></a>

		<a href="{{ URL::to('downloadExcel/csv') }}"><button class="btn btn-success">Download CSV</button></a>

		</center>
		<center>
		<form style="border: 4px solid black;margin-top: 10px;padding: 10px;" action="{{ URL::to('importExcel') }}" class="form-horizontal" method="post" enctype="multipart/form-data">
			{{ csrf_field() }}
			<input type="file" name="import_file" />

			<br /><br/><button class="btn btn-primary">Import File</button>

		</form>

		</center>

	</div>
</div>

</body>

</html>

@endsection



