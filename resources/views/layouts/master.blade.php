<!DOCTYPE html>
<html>
  <head>
    <title>

      @yield('title', 'Devs Best Friend')

    </title>

    <meta charset='utf-8'>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">

    @yield('head')

  </head>
  <body>
    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>                        
          </button>
          <a class="navbar-brand" href="#">John Lincoln</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav">
            <li><a href="http://p1.johnlincoln.me">P1</a></li>
            <li><a href="http://p2.johnlincoln.me">P2</a></li>
            <li class = "active"><a href="http://p3.johnlincoln.me">P3</a></li>
            <li><a href="http://p4.johnlincoln.me">P4</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#devNavBar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>                        
          </button>
          <a class="navbar-brand" href="/">Dev's Best Friend</a>
        </div>
        <div class="collapse navbar-collapse" id="devNavBar">
          <ul class="nav navbar-nav">
            <li {{ (Request::is('loremipsum') ? 'class=active' : '') }}><a href="/loremipsum">Lorem Ipsum Generator</a></li>
            <li {{ (Request::is('randomuser') ? 'class=active' : '') }}><a href="/randomuser">Random User Generator</a></li>
            <li {{ (Request::is('passwordgenerator') ? 'class=active' : '') }}><a href="/passwordgenerator">xkcd Password Generator</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <section>

      @yield('content')

    </section>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

    @yield('body')

  </body>
</html>