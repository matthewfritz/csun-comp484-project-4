@extends('layouts.master')

@section('title', 'My Profile')

@section('content')

	<div class="row">

		<div class="col-sm-12">

			<a href="{{ url('profile/changepassword') }}" class="btn btn-primary pull-right">
				<i class="fa fa-lock"></i> Change Password
			</a>

		</div>

	</div>

	<div class="row">

		<div class="col-sm-12">

			<h2>Username</h2>

			<p>{{ Auth::user()->username }}</p>

			<h2>Full Name</h2>

			<p>{{ Auth::user()->display_name }}</p>

			<h2>Email Address</h2>

			<p>{{ Auth::user()->email }}</p>

			<h2>Registration Date</h2>

			<p>{{ Auth::user()->created_at }}</p>

		</div>

	</div>

@endsection