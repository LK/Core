@extends('layouts.default')

@section('title')
	TeamHack | Register
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

{{ Form::close() }}
@stop