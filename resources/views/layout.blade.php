<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>
</head>
<body>
    <nav>
        <ul>
            <li> <a href="/">Home</a></li>
            <li> <a href="/about">About</a></li>
            <li> <a href="/portfolio">Portfolio</a></li>
            <li> <a href="/contact">Contact</a></li>
        </ul>
    </nav>
    @yield('content')
</body>
</html>