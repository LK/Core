@extends('layouts.default')

@section('title')
	TeamHack | Login
@stop

@section('content')
{{ Form::open() }}

	<div>
		{{ Form::label('username', 'Username: ') }}
		{{ Form::text('username') }}
	</div>
	<div>
		{{ Form::label('password', 'Password: ') }}
		{{ Form::password('password') }}
	</div>
	<div>
		{{ Form::submit('Login') }}
	</div>

{{ Form::close() }}
@stop