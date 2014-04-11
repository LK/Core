@extends('layouts.default')

@section('title')
TeamHack | Hackathons
@stop

@section('css')
<link rel="stylesheet" href="css/admin.css"/>
@stop

@section('content')
<h1>Hackathons</h1>
<table class="hackathons table table-striped table-hover">
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
		@foreach($hackathons as $hackathon)
		<tr href="hackathons/{{ $hackathon->id }}">
			<td><p>{{ $hackathon->id }}</p></td>
			<td><p>{{ $hackathon->name }}</p></td>
			<td><p>{{ $hackathon->begins }}</p></td>
			<td><p>{{ $hackathon->ends }}</p></td>
			<td><p>{{ $hackathon->participants()->firstOrFail()->name }}</p></td>
		</tr>
		@endforeach
	</tbody>
</table>
@stop

@section('js')
<script type="text/javascript">
$(document).ready(function(){
    $('table.hackathons tr').click(function()
    {
        window.location = $(this).attr('href');
        return false;
    });
});
</script>
@stop