@extends('layouts.default')

@section('title')
TeamHack | Users
@stop

@section('css')
<link rel="stylesheet" href="css/admin.css"/>
@stop

@section('content')
<h1>Users</h1>
<table class="users table table-striped table-hover">
	<thead>
		<tr>
			<td>ID</td>
			<td>Name</td>
			<td>Email</td>
		</tr>
	</thead>
	<tbody>
		@foreach($users as $user)
		<tr href="users/{{ $user->id }}">
			<td><p>{{ $user->id }}</p></td>
			<td><p>{{ $user->name }}</p></td>
			<td><p>{{ $user->email }}</p></td>
		</tr>
		@endforeach
	</tbody>
</table>
@stop

@section('js')
<script type="text/javascript">
$(document).ready(function(){
    $('table.users tr').click(function()
    {
        window.location = $(this).attr('href');
        return false;
    });
});
</script>
@stop