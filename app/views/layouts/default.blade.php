<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>@yield('title')</title>
		<link href='http://fonts.googleapis.com/css?family=Raleway:400,200' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="/components/bootstrap/dist/css/bootstrap.min.css"/>
		<link rel="stylesheet" href="/css/navigation.css"/>
		<link rel="stylesheet" href="/css/style.css"/>
		@yield('css')
	</head>
	<body>
		@if ($navigation != '')
		{{ $navigation }}
		@endif
		<div class="container">
			@yield('content')
		</div>
		{{ $footer }}

		<script type="text/javascript" src="/components/jquery/dist/jquery.min.js"></script>
		<script type="text/javascript" src="/components/bootstrap/dist/js/bootstrap.min.js"></script>
		@yield('js')
	</body>
</html>
