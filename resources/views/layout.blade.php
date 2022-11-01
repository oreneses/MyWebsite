<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <style>
        .active{
            color: red;
            text-decoration:none;
        }
    </style>
</head>
<body>
    @include('partials/nav')
    @yield('content')
</body>
</html>