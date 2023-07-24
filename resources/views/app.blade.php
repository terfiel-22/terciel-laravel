<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
    <meta name="author" content="Untree.co">
    <meta name="description" content="" />
    <meta name="keywords" content="bootstrap, bootstrap5" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">

    <!-- Choose your prefered color scheme -->
    {{-- @vite(['resources/css/light.css', 'resources/js/app.js']) --}}
    {{-- @vite(['resources/css/dark.css', 'resources/js/app.js']) --}}

    @vite(['resources/css/style.css','resources/css/dark.css', 'resources/js/app.js', 'resources/js/datatables.js'])

    @yield('add-ons')
    <title>Terciel &mdash; Blog</title>
</head>
{{--
HOW TO USE:
data-theme: default (default), dark, light, colored
data-layout: fluid (default), boxed
data-sidebar-position: left (default), right
data-sidebar-layout: default (default), compact
--}}

<body data-theme="dark" data-layout="fluid" data-sidebar-position="left" data-sidebar-layout="default">
    <!-- Modal -->
    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                @yield('modal-form')
            </div>
        </div>
    </div>

    @yield('app-content')
</body>

</html>