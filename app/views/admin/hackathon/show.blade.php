@extends('layouts.default')

@section('title')
TeamHack | {{$hackathon->name}}
@stop

@section('content')
<h1>{{$hackathon->name}}</h1>
@stop