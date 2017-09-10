<nav class="navbar navbar-expand-lg {{ Request::is('/') ? 'fixed-top navbar-dark bg-dark' : 'bg-light navbar-light' }}">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'Laravel') }}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            {{--@if(Request::is('/'))--}}
            {{--<ul class="navbar-nav mr-auto">--}}
                {{--<li class="nav-item" data-menuanchor="firstPage"><a class="nav-link" href="#firstPage">First slide</a></li>--}}
                {{--<li class="nav-item" data-menuanchor="secondPage"><a class="nav-link" href="#secondPage">Second slide</a></li>--}}
                {{--<li class="nav-item" data-menuanchor="3rdPage"><a class="nav-link" href="#3rdPage">Third slide</a></li>--}}
                {{--<li class="nav-item" data-menuanchor="4thpage"><a class="nav-link" href="#4thpage">Fourth slide</a></li>--}}
            {{--</ul>--}}
            {{--@endif--}}

            <ul class="navbar-nav ml-auto">
                @if (Auth::guest())
                    <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Register</a></li>
                @else
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{ Auth::user()->name }}
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">

                            @role('user')
                            <a class="dropdown-item" href="{{ route('users.edit', Auth::user()->id) }}">Edit profile</a>
                            @endrole

                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">{{csrf_field()}}</form>

                        </div>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
