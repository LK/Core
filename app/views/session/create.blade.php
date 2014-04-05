@extends('layouts.default')

@section('title')
	TeamHack | Login
@stop

@section('content')
{{ Form::open(['route' => 'session.store']) }}

	<div>
		{{ Form::label('email', 'Email: ') }}
		{{ Form::text('email') }}
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