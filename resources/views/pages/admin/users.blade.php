@extends('layouts.master')

@section('title', 'Users')

@section('content')

	<div class="row">
		<div class="col-sm-10 col-sm-offset-1">
			<table class="table table-striped table-hover">
				<tr>
					<th>Username</th>
					<th>Email</th>
					<th>Display Name</th>
					<th>Actions</th>
				</tr>

			@foreach($users as $user)
				<tr>
					<td>{{ $user->username }}</td>
					<td>{{ $user->email }}</td>
					<td>{{ $user->display_name }}</td>
					<td>
						@if($user->isAdmin())
							{!! Form::open(['url' => url("admin/users/{$user->id}/demote")]) !!}
							<button class="btn btn-danger" title="Revoke admin rights from {{ $user->username }}">
								<i class="fa fa-user-times"></i> Demote
							</button>
							{!! Form::close() !!}
						@else
							{!! Form::open(['url' => url("admin/users/{$user->id}/promote")]) !!}
							<button class="btn btn-success" title="Grant admin rights to {{ $user->username }}">
								<i class="fa fa-user-secret"></i> Promote
							</button>
							{!! Form::close() !!}
						@endif
					</td>
				</tr>
			@endforeach

			</table>
		</div>
	</div>

@endsection