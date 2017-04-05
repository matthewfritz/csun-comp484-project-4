@extends('layouts.master')

@section('title', 'Restaurants')

@section('content')

	@forelse($restaurants as $r)
	<div class="row">
		<div class="col-sm-10 col-sm-offset-1">

			<h3>{{ $r->display_name }}</h3>

			@if(!$r->active)
				<p><span class="label label-danger">This restaurant is currently inactive</span></p>
			@endif

			<p>Located in {{ $r->city }}, {{ $r->state }}</p>

			<p>
				<a href='{{ url("restaurants/{$r->id}") }}' class="btn btn-info">
					View Restaurant Information
				</a>
			</p>

		</div>
	</div>
	@empty
		<p>There are currently no restaurants in the system</p>
	@endforelse

@endsection