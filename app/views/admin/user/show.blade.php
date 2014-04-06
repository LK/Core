@extends('layouts.default')

@section('title')
TeamHack | {{ $user->name }}
@stop

@section('css')
<link rel="stylesheet" href="/css/admin.css"/>
@stop

@section('content')
<h3>{{ $user->name }}</h3>
@stop