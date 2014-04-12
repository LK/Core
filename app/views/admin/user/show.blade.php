@extends('layouts.default')

@section('title')
TeamHack | {{ $user->name }}
@stop

@section('css')
<link rel="stylesheet" href="/css/admin.css"/>
@stop

@section('content')
<div class="modal fade" id="close_acct_mdl" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id="myModalLabel">Close account</h4>
			</div>
			<div class="modal-body">
				<h3>Warning!</h3>
				<p>This action can not be undone.</p>
			</div>
			<div class="modal-footer">
				{{ Form::open(['route'=>['admin.users.destroy', $user->id], 'method'=>'delete']) }}
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					{{ Form::submit('I understand', ['class'=>'btn btn-primary']) }}
				{{ Form::close() }}
			</div>
		</div>
	</div>
</div>
<div class="col-md-12">
	<div class="page-header">
		<h3>{{ $user->name }} <small>{{ $user->id }}</small></h3>
	</div>
	<div class="panel panel-default">
		<div class="panel-heading">Hackathons Attended</div>
		<div class="panel-body">
			<table class="hackathons table table-striped table-hover">
				<thead>
					<tr>
						<td>Name</td>
						<td>Begins</td>
						<td>Ends</td>
						<td>Owner</td>
					</tr>
				</thead>
				<tbody>

				</tbody>
			</table>
		</div>
	</div>
	<div class="panel panel-default">
		<div class="panel-heading">Hackathons created</div>
		<div class="panel-body">
			<table class="hackathons table table-striped table-hover">
				<thead>
					<tr>
						<td>Name</td>
						<td>Begins</td>
						<td>Ends</td>
					</tr>
				</thead>
				<tbody>

				</tbody>
			</table>
		</div>
	</div>
	<div class="panel panel-default">
		<div class="panel-heading">Account controls</div>
		<div class="panel-body">
			<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#close_acct_mdl">Close account</button>
		</div>
	</div>
</div>
<script type="text/javascript">
$(document).ready(function(){
    $('table.hackathons tr').click(function()
    {
        window.location = $(this).attr('href');
        return false;
    });
    $('#close_acct').click(function(){

    });
});
</script>
@stop