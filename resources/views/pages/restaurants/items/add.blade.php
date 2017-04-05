@extends('layouts.master')

@section('title', 'Add Menu Item')

@section('content')

	<div class="row">
		<div class="col-sm-10 col-sm-offset-1">
			<h3>{{ $restaurant->display_name }}</h3>
		</div>
	</div>

	<div class="row">
		<div class="col-sm-10 col-sm-offset-1">
			<p>Fields marked with a (*) are required</p>

			{!! Form::open(['url' => url('restaurants/' . $restaurant->id . '/menu')]) !!}

				<div class="form-group">
					{!! Form::label('item_name', '(*) Item Name') !!}
					{!! Form::text('item_name', null, ['class' => 'form-control']) !!}
				</div>

				<div class="form-group">
					{!! Form::label('item_description', 'Item Description') !!}
					{!! Form::text('item_description', null, ['class' => 'form-control']) !!}
				</div>

				<div class="form-group">
					{!! Form::label('item_price', '(*) Item Price in Dollars') !!}
					<div class="input-group">
						<div class="input-group-addon">$</div>
						{!! Form::text('item_price', null, ['class' => 'form-control', 'placeholder' => '5']) !!}
					</div>
				</div>

				<div class="form-group">
					{!! Form::submit('Add Menu Item', ['class' => 'btn btn-primary']) !!}
				</div>

			{!! Form::close() !!}
		</div>
	</div>

@endsection