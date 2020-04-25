<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.16.0/js/mdb.min.js"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.16.0/css/mdb.min.css" rel="stylesheet">
</head>
<body>
    
      <!--Main Navigation-->
  <header class="mb-5 p-3">

    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar ">
      <div class="container">

        <!-- Brand -->
        <a class="navbar-brand waves-effect" href="/inicio" target="">
          <strong class="blue-text">PanShare</strong>
        </a>

        <!-- Collapse -->

        <!-- Links -->
        <div class="" id="navbarSupportedContent">

          <!-- Left -->
          <ul class="navbar-nav mr-auto">
          </ul>

          <!-- Right -->
          
          <ul class="navbar-nav nav-flex-icons">
            
            @guest
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">{{ __('Ingresar') }}</a>
            </li>
            @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Registrarse') }}</a>
                </li>
            @endif
            @else
            <li class="nav-item">
                <a href="#" class="align-items-center nav-link waves-effect" target="">
                    <i class="fas fa-bell"></i>
  
                </a>
            </li>
            
            <li class="nav-item">
                <a href="#" class="align-items-center nav-link waves-effect" target="">
                  <i class="fas fa-shopping-cart"></i>
  
                </a>
            </li>
            <li class="nav-item">
                <a href="" class="align-items-center nav-link waves-effect" target="">
                    <i class="fas fa-user"></i>
  
                </a>
          </li>
            <li class="nav-item">
                  <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="align-items-center nav-link waves-effect" target="">
                  <i class="fas fa-sign-out-alt"></i>
                  </a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                  </form>
            </li>
            
            @endguest
          </ul>
        </div>
      </div>
    </nav>
    <!-- Navbar -->
  </header>

    <main class="py-4">

        @yield('content')

    </main> 
  <!--Main Navigation-->

</body>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.16.0/js/mdb.min.js"></script>

</html>