@extends('layouts.default')

@section('title')
TeamHack | Register
@stop

@section('content')

{{ Form::open() }}
	
	<div>
		{{ Form::label('email', 'Email: ') }}
		{{ Form::text('email') }}
	</div>
	<div>
		{{ Form::label('password', 'Password: ') }}
		{{ Form::password('password') }}
	</div>
	<div>
		{{ Form::label('confirm_password', 'Confirm password: ') }}
		{{ Form::password('confirm_password') }}
	</div>
	<div>
		{{ Form::submit('Register') }}
	</div>

{{ Form::close() }}

@stop