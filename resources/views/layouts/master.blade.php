<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('partials._meta')
    @include('partials._styles')
</head>

<body class="antialiased">
    @include('partials._topbar')
    @yield('content')
    @include('partials._footer')
    @include('partials._script')
</body>

</html>
