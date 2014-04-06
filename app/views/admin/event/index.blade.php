@extends('layouts.default')

@section('title')
TeamHack | Events
@stop

@section('css')
<link rel="stylesheet" href="css/admin.css"/>
@stop

@section('content')
<h1>Users</h1>
<table class="events table table-striped table-hover">
	<thead>
		<tr>
			<td>ID</td>
			<td>Name</td>
			<td>Begins</td>
			<td>Ends</td>
			<td>Owner</td>
		</tr>
	</thead>
	<tbody>
		@foreach($events as $event)
		<tr href="events/{{ $event->id }}">
			<td><p>{{ $event->id }}</p></td>
			<td><p>{{ $event->name }}</p></td>
			<td><p>{{ $event->begins }}</p></td>
			<td><p>{{ $event->ends }}</p></td>
			<td><p>{{ $event->owner }}</p></td>
		</tr>
		@endforeach
	</tbody>
</table>
@stop

@section('js')
<script type="text/javascript">
$(document).ready(function(){
    $('table.events tr').click(function()
    {
        window.location = $(this).attr('href');
        return false;
    });
});
</script>
@stop