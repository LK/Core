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
<p>{{ link_to_route('admin.users.index', 'Users') }}: {{$users}}</p>
<p>{{ link_to_route('admin.hackathons.index', 'Hackathons') }}: {{$events}}</p>
@stop