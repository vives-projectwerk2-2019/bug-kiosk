<ul id="dropdown1" class="dropdown-content">
        <li class="divider"></li>
        <li style="text-align: center"><a style="color:#00cc99;" href="/profile">My profile</a></li>
        <li class="divider"></li>
        <li style="text-align: center"><a style="color:#00cc99;" href="/my_dongles">My Dongles</a></li>
        <li class="divider"></li>
        <li style="text-align: center"><a style="color:#00cc99;" href="{{ route('logout') }}"
            onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
             {{ __('Logout') }}
         </a></li>
         <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
      </ul>
      <nav>
          <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        <div class="nav-wrapper" style="text-align: left; background-color: #00cc99;" style="color:">
        <a style="margin-left: 1%; color:rgba(0, 0, 0, 0.5);" href="{{ url('/') }}" class="brand-logo">{{ config('app.name', 'Bug-Kiosk') }}</a>
          <ul class="right hide-on-med-and-down">
            <li><a style="color:rgba(0, 0, 0, 0.5);" href="/program_dongle">Program dongle</a></li>
            <li><a style="color:rgba(0, 0, 0, 0.5);" href="/dongles">Dongles</a></li>
            <li><a style="color:rgba(0, 0, 0, 0.5);" href="/logger">Logger</a></li>
            <li class="dropdown-trigger" data-target="dropdown1">
                <a style="color:rgba(0, 0, 0, 0.5); float:right" >
              <img style="margin-top:6px; float:left;" src="{{ asset(Auth::user()->avatar) }}" id="small_avatar">
                        @if (Auth::User()->roles->pluck('name')->contains('admin'))
                        &nbsp; Admin: {{ Auth::user()->name }} <span class="caret"></span>
                        @else 
                        &nbsp; {{ Auth::user()->name }} <span class="caret"></span>
                        @endif
                    <i class="material-icons right">arrow_drop_down</i>
                </a>
            </li>
          </ul>
        </div>
      </nav>

      <ul class="sidenav" id="mobile-demo">
          <li><a style="color: #00cc99;" href="/home">Home</a></li>
          <li><a style="color:rgba(0, 0, 0, 0.5);" href="/profile">Profile</a></li>
            <li><a style="color:rgba(0, 0, 0, 0.5);" href="/my_dongles">My dongles</a></li>
            <li><a style="color:rgba(0, 0, 0, 0.5);" href="/dongles">All dongles</a></li>
            <li><a style="color:rgba(0, 0, 0, 0.5);" href="/logger">Logger</a></li>
            <li><a style="color:rgba(0, 0, 0, 0.5);" href="/program_dongle">Program dongle</a></li>
            <li><a href="{{ route('logout') }}"
              onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
               {{ __('Logout') }}
           </a></li>
        </ul>