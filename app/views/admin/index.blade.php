@extends('layouts.default')

@section('title')
TeamHack | Admin
@stop

@section('css')
<link rel="stylesheet" href="css/admin.css"/>
@stop

@section('content')
<h1>Admin Page</h1>
<br/>
<h3>Stats</h3>
<p>Users: {{$users}}</p>
<p>Events: {{$events}}</p>
@stop