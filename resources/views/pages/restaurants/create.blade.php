@extends('layouts.master')

@section('title', 'Add Restaurant')

@section('content')

	<div class="row">

		<div class="col-sm-6 col-sm-offset-3">

			<p>Fields marked with a (*) are required</p>

			{!! Form::open(['url' => url('admin/restaurants')]) !!}

				<div class="form-group">
					{!! Form::label('display_name', '(*) Restaurant Name') !!}
					{!! Form::text('display_name', null, ['class' => 'form-control']) !!}
				</div>

				<div class="form-group">
					{!! Form::label('street', '(*) Street Address') !!}
					{!! Form::text('street', null, ['class' => 'form-control']) !!}
				</div>

				<div class="form-group">
					{!! Form::label('city', '(*) City') !!}
					{!! Form::text('city', null, ['class' => 'form-control']) !!}
				</div>

				<div class="form-group">
					{!! Form::label('state', '(*) State') !!}
					{!! Form::text('state', null, ['class' => 'form-control']) !!}
				</div>

				<div class="form-group">
					{!! Form::label('website', 'Website') !!}
					{!! Form::text('website', null, ['class' => 'form-control']) !!}
				</div>

				<div class="form-group">
					{!! Form::submit('Add Restaurant', ['class' => 'btn btn-primary']) !!}
				</div>

			{!! Form::close() !!}

		</div>

	</div>

@endsection