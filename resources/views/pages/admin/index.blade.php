@extends('layouts.master')

@section('title', 'Admin Panel')

@section('content')
	
	<div class="row">

		<div class="col-sm-4">
			<a href="#" class="btn btn-default">
				<i class="fa fa-plus"></i> Add Restaurant
			</a>
		</div>

		<div class="col-sm-4">
			<a href="#" class="btn btn-default">
				<i class="fa fa-plus"></i> Add Restaurant Hours
			</a>
		</div>

		<div class="col-sm-4">
			<a href="{{ url('admin/users') }}" class="btn btn-default">
				<i class="fa fa-users"></i> Users
			</a>
		</div>

	</div>

@endsection