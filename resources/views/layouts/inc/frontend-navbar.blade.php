@php
$webSetting = App\Models\WebSetting::query()->where('id','1')->first();
@endphp
<nav class="navbar navbar-expand navbar-light navbar-bg">
    <div class="container-fluid">
        <a href="{{ url('/') }}" class="text-decoration-none">
            <h1>{{ $webSetting->name }}<span class="text-danger">.</span></h1>
        </a>
        <!-- Right Side Of Navbar -->
        <ul class="navbar-nav ms-auto">
            <!-- Authentication Links -->
            @guest
            @if (Route::has('login'))
            <li class="nav-item">
                <a class="nav-link fw-bold {{ Request::is('login')?'active':'' }}" href="{{ route('login') }}">
                    <span data-feather="lock" class="me-1"></span>
                    {{__('Login') }}
                </a>
            </li>
            @endif

            @if (Route::has('register'))
            <li class="nav-item">
                <a class="nav-link fw-bold {{ Request::is('register')?'active':'' }}" href="{{ route('register') }}">
                    <span data-feather="user" class="me-1"></span>
                    {{__('Register') }}
                </a>
            </li>
            @endif
            @else
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }}
                </a>

                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </li>
            @endguest
        </ul>
    </div>
</nav>