@extends('app')

@section('add-ons')
<script src="https://cdn.jsdelivr.net/npm/swiffy-slider@1.6.0/dist/js/swiffy-slider.min.js" crossorigin="anonymous"
    defer></script>
<link href="https://cdn.jsdelivr.net/npm/swiffy-slider@1.6.0/dist/css/swiffy-slider.min.css" rel="stylesheet"
    crossorigin="anonymous">
@endsection

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