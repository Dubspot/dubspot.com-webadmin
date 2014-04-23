<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
<!-- 		<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet">
		<style>
			table form { margin-bottom: 0; }
			form ul { margin-left: 0; list-style: none; }
			.error { color: red; font-style: italic; }
			body { padding-top: 20px; }
		</style>
 -->
		{{ HTML::style('css/app.min.css')}}
	</head>

	<body>



		<div class="container row">



			<header>
					<h1>Dubspot Users</h1>
			</header>



			<div class="row">
				<div class="large-12 columns">
					@yield('main')
				</div>
			</div>

		</div>

	</body>

</html>