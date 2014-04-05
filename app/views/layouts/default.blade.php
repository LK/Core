<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>@yield('title')</title>
		<link rel="stylesheet" href="/components/bootstrap/dist/css/bootstrap.min.css"/>
		@yield('css')
	</head>
	<body>
		@if ($navigation == '') @endif
		{{ $navigation }}

		@yield('content')
		
		{{ $footer }}

		<script type="text/javascript" src="/components/jquery/dist/jquery.min.js"></script>
		<script type="text/javascript" src="/components/bootstrap/dist/js/bootstrap.min.js"></script>
		@yield('js')
	</body>
</html>
