@extends('app')

@section('app-content')
<div class="wrapper">
    <div class="main">
        @include('layouts.inc.frontend-navbar')
        @if(!(Request::is('login')||Request::is('register')))
        @include('layouts.inc.frontend-navbar-ext')
        @endif

        @yield('content')

        @include('layouts.inc.master-footer')
    </div>
</div>
@yield('scripts')
@endsection