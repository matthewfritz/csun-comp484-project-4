@extends('layouts.master')

@section('title', 'Add Restaurant Review')

@section('content')

	<div class="row">
		<div class="col-sm-10 col-sm-offset-1">
			<h3>{{ $restaurant->display_name }}</h3>
		</div>
	</div>

	<div class="row">
		<div class="col-sm-10 col-sm-offset-1">
			<p>Fields marked with a (*) are required</p>

			{!! Form::open(['url' => url('restaurants/' . $restaurant->id . '/reviews')]) !!}

				<div class="form-group">
					{!! Form::label('rating', '(*) Rating') !!}
					{!! Form::select('rating', $ratings, '3', ['class' => 'form-control']) !!}
				</div>

				<div class="form-group">
					{!! Form::label('tagline', '(*) Review Tagline') !!}
					{!! Form::text('tagline', null, ['class' => 'form-control']) !!}
				</div>

				<div class="form-group">
					{!! Form::label('body', '(*) Review') !!}
					{!! Form::textarea('body', null, ['class' => 'form-control']) !!}
				</div>

				<div class="form-group">
					{!! Form::submit('Add Review', ['class' => 'btn btn-primary']) !!}
				</div>

			{!! Form::close() !!}
		</div>
	</div>

@endsection