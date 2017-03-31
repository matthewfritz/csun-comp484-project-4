@extends('layouts.master')

@section('title', 'My Reviews')

@section('content')

	<div class="row">

		<div class="col-sm-12">

			<h2>You have {{ Auth::user()->reviews->count() }} review(s) available</h2>

		</div>

	</div>

	@foreach(Auth::user()->reviews as $review)

		<div class="row">

			<div class="col-sm-12">

				<h3>
					<a href="{{ url('restaurants/' . $review->restaurant->id) }}">
						{{ $review->restaurant->display_name }}
					</a>
				</h3>

				<h4>Rating: <span>
					@for($i = 0; $i < $review->rating; $i++)
						<i class="fa fa-star"></i>
					@endfor
					</span>
				</h4>

				<p><strong>{{ $review->tagline }}</strong></p>

				@if(!empty($review->body))

					<p>{!! nl2br(e($review->body)) !!}</p>

				@endif

				<p>Submitted: {{ $review->formatted_created_at }}</p>

			</div>

		</div>

	@endforeach

@endsection