<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        @yield('wedding-title')
    </title>
    @include('wedding._layout.style')
</head>
<body>
    @yield('wedding-content')
    @include('wedding._layout.script')
    @yield('after-script')
</body>
</html>
