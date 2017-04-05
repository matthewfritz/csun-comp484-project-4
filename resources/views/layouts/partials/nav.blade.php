<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{ url('/') }}">{{ config('app.name') }}</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="{{ setActive('/') }}">
          <a href="{{ url('/') }}"><i class="fa fa-home"></i> Home</a>
        </li>
        <li class="{{ setActive(['restaurants', 'restaurants/*']) }}">
          <a href="{{ url('restaurants') }}"><i class="fa fa-cutlery"></i> Restaurants</a>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        @if(Auth::check())
          @if(Auth::user()->isReviewer())
            <li class="{{ setActive('profile/reviews') }}">
              <a href="{{ url('profile/reviews') }}"><i class="fa fa-comments"></i> My Reviews</a>
            </li>
            <li class="{{ setActive(['profile', 'profile/changepassword']) }}">
              <a href="{{ url('profile') }}"><i class="fa fa-user"></i> My Profile</a>
            </li>
          @elseif(Auth::user()->isAdmin())
            <li class="{{ setActive(['admin', 'admin/*']) }}">
              <a href="{{ url('admin') }}"><i class="fa fa-dashboard"></i> Admin Panel</a>
            </li>
          @endif
          <li>
            <a href="{{ url('logout') }}"><i class="fa fa-sign-out"></i> Logout</a>
          </li>
        @else
          <li class="{{ setActive('register') }}">
            <a href="{{ url('register') }}"><i class="fa fa-user-plus"></i> Register</a>
          </li>
          <li class="{{ setActive('login') }}">
            <a href="{{ url('login') }}"><i class="fa fa-sign-in"></i> Login</a>
          </li>
        @endif
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>