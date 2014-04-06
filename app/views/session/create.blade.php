@extends('layouts.default')

@section('title')
	TeamHack | Login
@stop

@section('css')
<link rel="stylesheet" href="/css/session.css"/>
@stop

@section('content')
{{ Form::open(['route' => 'session.store', 'class' => 'sess_form']) }}
	
	<div class="upper header text-center">
		<h3>Login</h3>
	</div>
	<div class="inputs">
		<div class="input">
			{{ Form::label('email', 'Email: ') }}
			{{ Form::text('email') }}
		</div>
		<div class="input">
			{{ Form::label('password', 'Password: ') }}
			{{ Form::password('password') }}
		</div>
	</div>
	<div class="lower text-center">
		{{ Form::submit('Login', ['class' => 'btn btn-primary']) }}
	</div>

{{ Form::close() }}
@stop