<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>@yield('title')</title>
		@yield('css')
	</head>
	<body>
		@if ($navigation = '') @endif
		{{ $navigation }}

		@yield('content')

		@yield('js')
		
		@if ($footer = '') @endif
		{{ $footer }}
	</body>
</html>
