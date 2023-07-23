@extends('app')

@section('app-content')
<div class="wrapper">
    @include('layouts.inc.master-sidebar')

    <div class="main">
        @include('layouts.inc.master-navbar')

        @yield('content')

        @include('layouts.inc.master-footer')
    </div>
</div>
@yield('scripts')
@endsection