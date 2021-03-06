<nav class="navbar navbar-expand-md navbar-light navbar-laravel">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'Laravel') }}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            @auth
            <ul class="navbar-nav mr-auto">
                @if(Auth::user()->role_id == 1 or Auth::user()->role_id == 2 or Auth::user()->role_id == 3 or Auth::user()->role_id == 4)
                <li class="nav-item">
                    <a href="{{route('home')}}" class="nav-link">@if(Route::currentRouteName() == 'home')<small><b class="text-info">Dashboard</b></small> @else<small>Dashboard </small> @endif</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link"><small>Statistics and Analysis</small></a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link"><small>System Configuration</small></a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link"><small>Reports and Invoices</small></a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link"><small>Notifications and Messages</small></a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link"><small>System Updates and Error Report</small></a>
                </li>
                @endif
            </ul>
        @endauth

        <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                <li class="nav-item">
                    @if (Route::has('register'))
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    @endif
                </li>
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                    @endguest
            </ul>
        </div>
    </div>
</nav>