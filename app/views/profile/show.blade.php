@extends('layouts.default')

@section('title')
TeamHack | {{$user->name}}
@stop

@section('content')
	<h1>{{$user->name}}</h1>
@stop