@extends('layouts.master')

@section('title', 'Admin Panel')

@section('content')
	
	<div class="row">

		<div class="col-sm-4 col-sm-offset-3">
			<a href="{{ url('admin/restaurants/create') }}" class="btn btn-default">
				<i class="fa fa-plus"></i> Add Restaurant
			</a>
		</div>

		<div class="col-sm-4">
			<a href="{{ url('admin/users') }}" class="btn btn-default">
				<i class="fa fa-users"></i> Users
			</a>
		</div>

	</div>

@endsection