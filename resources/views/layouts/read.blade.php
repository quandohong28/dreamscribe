<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="shortcut icon" href="{{ asset('assets/logo/logo-black.svg') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('assets/admin/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/css/demo.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/css/vendors.css') }}">

    {{-- custom css here --}}
    @yield('styles')
</head>

<body>
    <div class="page">
        @yield('content')
    </div>


    <script src="{{ asset('assets/admin/js/script.js') }}"></script>
    <script src="{{ asset('assets/admin/js/demo.js') }}"></script>
    <script src="{{ asset('assets/admin/js/main.ems.js') }}"></script>
    <script src="{{ asset('assets/admin/js/main.js') }}"></script>
    <script src="{{ asset('assets/admin/js/theme.js') }}"></script>

    {{-- script libs here --}}
    @yield('libs')

    {{-- custom script here --}}
    @yield('scripts')
</body>

</html>
