<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	{{ HTML::style('css/app.css')}}
</head>
<body>

{{ Form::open(['method' => 'GET'])  }}

	{{ Form::input('search', 'q', null, ['placeholder' => 'Search..']) }}

{{ Form::close() }}


	<div class="row">

		@yield('main')

	</div>


</body>
</html>