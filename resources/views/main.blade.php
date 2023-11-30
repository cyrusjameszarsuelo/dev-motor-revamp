<!DOCTYPE html>
<html>
<head>
    @include('includes.header')
</head>
<body class="hold-transition layout-top-nav">
    <div class="wrapper">
        @include('includes.navbar')
        @yield('content')
        @include('includes.footer')
    </div>
</body>
</html>
