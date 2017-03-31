@extends('layouts.master')

@section('title', 'Login')

@section('content')

	{!! Form::open(['url' => url('login')]) !!}
	<div class="row">
		<div class="col-sm-6 col-sm-offset-3">
			<div class="form-group">
				{!! Form::label('username') !!}
				{!! Form::text('username', null, ['class' => 'form-control']) !!}
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-sm-6 col-sm-offset-3">
			<div class="form-group">
				{!! Form::label('password') !!}
				{!! Form::password('password', ['class' => 'form-control']) !!}
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-sm-6 col-sm-offset-3">
			<div class="form-group">
				{!! Form::submit('Login', ['class' => 'btn btn-primary']) !!}
			</div>
		</div>
	</div>

	{!! Form::close() !!}

@endsection