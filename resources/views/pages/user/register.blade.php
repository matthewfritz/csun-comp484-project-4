@extends('layouts.master')

@section('title', 'Register')

@section('content')

	{!! Form::open(['url' => url('register')]) !!}
	<div class="row">
		<div class="col-sm-6 col-sm-offset-3">
			<div class="form-group">
				{!! Form::label('username', 'Your Username') !!}
				{!! Form::text('username', null, ['class' => 'form-control']) !!}
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-sm-6 col-sm-offset-3">
			<div class="form-group">
				{!! Form::label('display_name', 'Your Name') !!}
				{!! Form::text('display_name', null, ['class' => 'form-control']) !!}
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-sm-6 col-sm-offset-3">
			<div class="form-group">
				{!! Form::label('email', 'Your Email Address') !!}
				{!! Form::email('email', null, ['class' => 'form-control']) !!}
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-sm-6 col-sm-offset-3">
			<div class="form-group">
				{!! Form::label('password', 'Your Password') !!}
				{!! Form::password('password', ['class' => 'form-control']) !!}
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-sm-6 col-sm-offset-3">
			<div class="form-group">
				{!! Form::label('confirm_password', 'Confirm Your Password') !!}
				{!! Form::password('confirm_password', ['class' => 'form-control']) !!}
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-sm-6 col-sm-offset-3">
			<div class="form-group">
				{!! Form::submit('Register Account', ['class' => 'btn btn-primary']) !!}
			</div>
		</div>
	</div>

	{!! Form::close() !!}

@endsection