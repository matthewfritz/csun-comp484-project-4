@extends('layouts.master')

@section('title', 'Edit Restaurant')

@section('content')

	<div class="row">

		<div class="col-sm-6 col-sm-offset-3">

			<p>Fields marked with a (*) are required</p>

			{!! Form::open(['url' => url('restaurants/' . $restaurant->id), 'method' => 'PUT']) !!}

				<div class="form-group">
					{!! Form::label('display_name', '(*) Restaurant Name') !!}
					{!! Form::text('display_name', $restaurant->display_name, ['class' => 'form-control']) !!}
				</div>

				<div class="form-group">
					{!! Form::label('street', '(*) Street Address') !!}
					{!! Form::text('street', $restaurant->street, ['class' => 'form-control']) !!}
				</div>

				<div class="form-group">
					{!! Form::label('city', '(*) City') !!}
					{!! Form::text('city', $restaurant->city, ['class' => 'form-control']) !!}
				</div>

				<div class="form-group">
					{!! Form::label('state', '(*) State') !!}
					{!! Form::text('state', $restaurant->state, ['class' => 'form-control']) !!}
				</div>

				<div class="form-group">
					{!! Form::label('website', 'Website') !!}
					{!! Form::text('website', $restaurant->website, ['class' => 'form-control']) !!}
				</div>

				<div class="form-group">
					{!! Form::submit('Update Restaurant', ['class' => 'btn btn-primary']) !!}
				</div>

			{!! Form::close() !!}

		</div>

	</div>

@endsection