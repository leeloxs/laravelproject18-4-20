<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Donate</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="app" style= "background-image: url('{{ asset('img/help.jpg')}}');">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}"> 
                
                     <img src="/svg/mylogo.svg" style="max-height:50px; border-right:0.5px solid #333;"></a>
                     <div class="pl-1"><b>LetsPhilonthropy</b></div>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                    

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif
                            
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else

                            <li><a class="nav-link" href="/donate">Donate</a></li>
                            <li><a class="nav-link" href="/community">Community</a></li>
                            <li><a class="nav-link" href="/about">About us</a></li>
                            <li><a class="nav-link" href="/contact-form">Contact us</a></li>

                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

        

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a href= "{{ url('myprofile')}}" class="dropdown-item">
                                My Profile
                                </a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    

   <!-- Services-->
   <section class="page-section" id="services">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Our Services</h2>
                    <h3 class="section-subheading text-muted">Be a part of the change!</h3>
                </div>

                <br><br>
                <div class="row text-center">
                    <div class="col-md-4">
                    <a href="/financial"><img src="/img/fin.png" alt="donate" style="width:140px;height:140px;">
                        <h4 class="my-3" href="/financial" target="_blank">Financial Donation</h4> </a>
                        <p class="text-muted">Your donation will be 100% given to local charities. Safe and Fast!
                        
                        </p>
                    </div>
                    <div class="col-md-4">
                    <a href="default.asp"><img src="/img/drop.png" alt="donate" style="width:140px;height:140px;"></a>
                        <h4 class="my-3">Item Donation</h4>
                        <p class="text-muted">Got extra item that you don't need? Post the item here and donate it to those who need it the most!</p>
                    </div>
                    <div class="col-md-4">
                    <a href="default.asp"><img src="/img/comm.png" alt="donate" style="width:140px;height:140px;"></a>
                        <h4 class="my-3">Community</h4>
                        <p class="text-muted">Connect with those around you and see what do they need the most!</p>
                    </div>
                </div>
            </div>
            </div>
</div>
</body>
</html>
        </section>