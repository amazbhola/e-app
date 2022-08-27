<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.partials._meta')
    @include('admin.partials._style')
</head>

<body class="min-h-screen relative bg-gray-200">
    @include('admin.partials._topbar')
    @include('admin.partials._sidebar')
    <div class="p-6 md:pl-80 h-full ">
        @include('admin.partials._massage')
        @yield('content')
    </div>
    @include('admin.partials._footer')
    @include('partials._script')
</body>

</html>
