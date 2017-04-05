@extends('layouts.master')

@section('title', 'Restaurant Detail')

@section('content')

	<div class="row">
		<div class="col-sm-10 col-sm-offset-1">
			<h3>{{ $restaurant->display_name }}</h3>
		</div>
	</div>

	@if(!empty($restaurant->reviews))
		<div class="row">
			<div class="col-sm-10 col-sm-offset-1">
				<h4>Average Rating out of {{ count($restaurant->reviews) }} review(s)</h4>

				@for($i = 0; $i < $average; $i++)
					<i class="fa fa-star"></i>
				@endfor

				<hr />
			</div>
		</div>
	@endif

	<div class="row">
		<div class="col-sm-10 col-sm-offset-1">
			<h4>Operating Hours</h4>

			@forelse($restaurant->schedules as $schedule)
				<p><strong>{{ $schedule->day }}</strong>: {{ $schedule->time_open }} to {{ $schedule->time_closed }}</p>
			@empty
				<p>This restaurant is never open</p>
			@endforelse

			<hr />
		</div>
	</div>

	<div class="row">
		<div class="col-sm-10 col-sm-offset-1">
			<h4>Menu</h4>

			@forelse($restaurant->items as $item)
				<h5>{{ $item->item_name }}</h5>
				<p><strong>Price:</strong> ${{ $item->item_price }}</p>
				@if(!empty($item->item_description))
					<p><strong>Description:</strong> {{ $item->item_description }}</p>
				@endif
				<br />
			@empty
				<p>This restaurant doesn't serve anything</p>
			@endforelse

			<hr />
		</div>
	</div>

	@if(!empty($restaurant->reviews))
		<div class="row">
			<div class="col-sm-10 col-sm-offset-1">
				<h4>Reviews</h4>

				@foreach($restaurant->reviews as $review)
					<h5>{{ $review->tagline }}</h5>
					<p>Review by {{ $review->user->username }} on {{ $review->formatted_created_at }}</p>
					<p><strong>Rating: </strong>
						@for($i = 0; $i < $review->rating; $i++)
							<i class="fa fa-star"></i>
						@endfor
					</p>
					@if(!empty($review->body))
						<p><strong>Review:</strong> {!! nl2br(e($review->body)) !!}</p>
					@endif
					<br />
				@endforeach
			</div>
		</div>
	@endif

@endsection