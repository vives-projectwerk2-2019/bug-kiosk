<nav class="navbar navbar-expand-md navbar-light navbar-laravel" style="background-color:#00cc99">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'Laravel') }}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                            <a class="nav-link" href="/home">Home</a>
                        </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/stats">Stats</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/dongles">Dongles</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/logger">Logger</a>
                    </li>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        <img src="{{ Auth::user()->avatar }}" id="small_avatar">
                        @if (Auth::User()->roles->pluck('name')->contains('admin'))
                            Admin: {{ Auth::user()->name }} <span class="caret"></span>
                        @else 
                            {{ Auth::user()->name }} <span class="caret"></span>
                        @endif
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="profile">Profile</a>
                                <a class="dropdown-item" href="my_dongles">My dongles</a>
                                <a class="dropdown-item" href="program_dongle">Program dongle</a>                         
 
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