<!DOCTYPE html>
<html lang="en">
<head>
    @include('dashboard.layout.head')
</head>
<body>
    @include('dashboard.layout.navbar')
    @include('dashboard.layout.sidebar')

    @yield('content')

    @include('dashboard.layout.footer')
    @include('dashboard.layout.script')
    
</body>
</html>