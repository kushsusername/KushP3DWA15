<!doctype html>
<html>
<head>
    <title>
        {{-- Yield the title if it exists, otherwise default to 'Foobooks' --}}
        @yield('title','Home')
    </title>

    <meta charset='utf-8'>
    <link rel="shortcut icon" href="images/favicon.ico" />
    <link href="css/master.css" type='text/css' rel='stylesheet'>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.5/lumen/bootstrap.min.css" rel="stylesheet">

    {{-- Yield any page specific CSS files or anything else you might want in the <head> --}}
    @yield('head')

</head>
<body>

  <div class="container">
    <h1 class="inline"> Developer's Best Friend </h1>

    <ul class="nav nav-tabs" role="tablist">
      <li id="homeTab" class="active">
          <a href="home" role="tab" data-toggle="tab">
              <icon class="glyphicon glyphicon-home"></icon>
          </a>
      </li>
      <li id="xkcdpasswordTab">
        <a href="xkcdpassword" role="tab" data-toggle="tab">
          <icon class="glyphicon glyphicon-option-horizontal"></icon> XKCD Password Generator
          </a>
      </li>
      <li id="loremipsumTab">
        <a href="loremipsum" role="tab" data-toggle="tab">
          <icon class="glyphicon glyphicon-align-left"></icon> Lorem Ipsum Generator
        </a>
      </li>
      <li id="randomuserTab">
        <a href="randomuser" role="tab" data-toggle="tab">
          <icon class="glyphicon glyphicon-user"></icon> Random User Generator
        </a>
      </li>
    </ul>
    @yield('content')
  </div>



    <footer>
        &copy; {{ date('Y') }}
        <?php
        echo $_SERVER['SERVER_NAME'];
        ?>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="js/master.js"></script>

    {{-- Yield any page specific JS files or anything else you might want at the end of the body --}}
    @yield('body')

</body>
</html>
