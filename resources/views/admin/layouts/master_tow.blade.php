<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.partials._meta')
    @include('admin.partials._style')
</head>

<body class="min-h-screen relative bg-gray-200">

    <div class="h-full ">
        @include('admin.partials._massage')
        @yield('content')
    </div>
    @include('admin.partials._footer')
    @include('partials._script')
</body>

</html>
