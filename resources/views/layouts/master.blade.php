<!doctype html>
<html>
<head>
    <title>
        {{-- Yield the title if it exists, otherwise default to 'Foobooks' --}}
        @yield('title','Home')
    </title>

    <meta charset='utf-8'>
    <link href="css/master.css" type='text/css' rel='stylesheet'>
    <link rel="stylesheet" href="{{ URL::asset('assets/css/bootstrap.min.css') }}">

    {{-- Yield any page specific CSS files or anything else you might want in the <head> --}}
    @yield('head')

</head>
<body>

    <header>
        <img
        src='images/dev.png'
        style='width:300px'
        alt='Developer Logo'>
        <h1> MEET YOUR BEST FRIEND </h1>
    </header>

    <section>
        {{-- Main page content will be yielded here --}}
        @yield('content')
    </section>

    <footer>
        &copy; {{ date('Y') }}
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="js/master.js"></script>

    {{-- Yield any page specific JS files or anything else you might want at the end of the body --}}
    @yield('body')

</body>
</html>
