@extends('layouts.default')

@section('title')
TeamHack | My Profile
@stop

@section('content')
<h1>My profile</h1>
<h3>Logged in with email: {{$user->email}}</h3>
<h3>User id: {{$user->id}}</h3>
@stop