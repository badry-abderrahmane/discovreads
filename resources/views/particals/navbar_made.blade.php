<!-- Begin Nav
================================================== -->
<nav class="navbar navbar-toggleable-md navbar-light bg-white fixed-top mediumnavigation">
<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="container">
	<!-- Begin Logo -->
  <a class="navbar-brand" href="{{ url('/') }}">
      {{ config('app.name') }}
  </a>
	<!-- End Logo -->
	<div class="collapse navbar-collapse" id="navbarsExampleDefault">
		<!-- Begin Menu -->
    <ul class="navbar-nav mr-auto">
        <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">{{ lang('Articles') }}</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ url('discussion') }}">{{ lang('Discussions') }}</a></li>
    </ul>
		<!-- End Menu -->
		<!-- Begin Search -->
		<form class="form-inline my-2 my-lg-0" role="search" method="get" action="{{ url('search') }}">
			<input class="form-control mr-sm-2" type="search" name="q" placeholder="" required>
			<span class="search-icon"><svg class="svgIcon-use" width="25" height="25" viewbox="0 0 25 25"><path d="M20.067 18.933l-4.157-4.157a6 6 0 1 0-.884.884l4.157 4.157a.624.624 0 1 0 .884-.884zM6.5 11c0-2.62 2.13-4.75 4.75-4.75S16 8.38 16 11s-2.13 4.75-4.75 4.75S6.5 13.62 6.5 11z"></path></svg></span>
		</form>
    <ul class="navbar-nav navbar-right">
        <!-- Search Box -->
        <!-- <form class="form-inline my-2 my-lg-0 search" role="search" method="get" action="{{ url('search') }}">
          <input class="form-control mr-sm-2" type="search" name="q" placeholder="{{ lang('Search') }}" required>
        </form> -->

        <!-- Authentication Links -->
        @if (Auth::guest())
          <li class="nav-item"><a class="nav-link" href="{{ url('login') }}">{{ lang('Login') }}</a></li>
          <li class="nav-item nav-padding"><a class="nav-link nav-register" href="{{ url('register') }}">{{ lang('Register') }}</a></li>
        @else
            <li class="nav-item notification">
                <a class="nav-link" href="{{ url('user/notification') }}"><i class="fas fa-bell">
                    <span class="new"
                    @if (Auth::user()->unreadNotifications->count() > 0)
                    style='display: block'
                    @endif
                    >
                    </span>
                </i></a>
            </li>
            <li class="nav-item dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    {{ Auth::user()->nickname ?: Auth::user()->name }}
                    <b class="caret"></b>&nbsp;&nbsp;
                    <img class="avatar rounded-circle" src="{{ Auth::user()->avatar }}">
                </a>

                <ul class="dropdown-menu" role="menu">
                    <li class="dropdown-item"><a href="{{ url('user', ['name' => Auth::user()->name]) }}"><i class="fas fa-user"></i>{{ lang('Personal Center') }}</a></li>
                    <li class="dropdown-item"><a href="{{ url('setting') }}"><i class="fas fa-cog"></i>{{ lang('Settings') }}</a></li>
                    @if(Auth::user()->is_admin)
                        <li class="dropdown-item"><a href="{{ url('dashboard') }}"><i class="fas fa-tachometer-alt"></i>{{ lang('Dashboard') }}</a></li>
                    @endif
                    <li class="dropdown-divider"></li>
                    <li class="dropdown-item">
                        <a href="{{ url('logout') }}"
                            onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                            <i class="fas fa-sign-out-alt"></i>{{ lang('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ url('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                </ul>
            </li>
        @endif
    </ul>
	</div>
</div>
</nav>
<!-- End Nav
================================================== -->
