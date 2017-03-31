@extends('layouts.master')

@section('title', 'Change Password')

@section('content')

	{!! Form::open(['url' => url('profile/changepassword')]) !!}
	<div class="row">
		<div class="col-sm-6 col-sm-offset-3">
			<div class="form-group">
				{!! Form::label('password', 'New Password') !!}
				{!! Form::password('password', ['class' => 'form-control']) !!}
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-sm-6 col-sm-offset-3">
			<div class="form-group">
				{!! Form::label('confirm_password', 'Confirm New Password') !!}
				{!! Form::password('confirm_password', ['class' => 'form-control']) !!}
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-sm-6 col-sm-offset-3">
			<div class="form-group">
				{!! Form::submit('Change Password', ['class' => 'btn btn-primary']) !!}
			</div>
		</div>
	</div>

	{!! Form::close() !!}

@endsection