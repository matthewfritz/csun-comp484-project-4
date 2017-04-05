@extends('layouts.master')

@section('title', 'Add Restaurant Hours')

@section('content')

	<div class="row">
		<div class="col-sm-10 col-sm-offset-1">
			<h3>{{ $restaurant->display_name }}</h3>
		</div>
	</div>

	<div class="row">
		<div class="col-sm-10 col-sm-offset-1">
			{!! Form::open(['url' => url('restaurants/' . $restaurant->id . '/hours')]) !!}

				<div class="form-group">
					{!! Form::label('day', 'Day of Operation') !!}
					{!! Form::select('day', $days, null, ['class' => 'form-control']) !!}
				</div>

				<div class="form-group">
					{!! Form::label('time_open', 'Time Open') !!}
					{!! Form::text('time_open', null, ['class' => 'form-control', 'placeholder' => '14:00:00']) !!}
				</div>

				<div class="form-group">
					{!! Form::label('time_closed', 'Time Closed') !!}
					{!! Form::text('time_closed', null, ['class' => 'form-control', 'placeholder' => '20:00:00']) !!}
				</div>

				<div class="form-group">
					{!! Form::submit('Add Restaurant Hours', ['class' => 'btn btn-primary']) !!}
				</div>

			{!! Form::close() !!}
		</div>
	</div>

@endsection