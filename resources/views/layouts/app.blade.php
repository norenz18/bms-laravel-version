<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> Brgy. 763 Zone 83 | Laravel</title>
    

    {{-- icon --}}
    <link rel="icon" href="/img/brgy-logo800.png" type="images/gif" sizes="32x32">

    {{-- for feature rich table --}}
    <link rel="stylesheet" href="bootstrap-table/dist/bootstrap-table.min.css" >
    {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/4.3.1/css/bootstrap-table.min.css" > --}}
  
    {{-- fontawesome --}}
    <script src="https://use.fontawesome.com/cd3d49e6a0.js"></script>  <!-- need internet -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="bootstrap-table/dist/bootstrap-table.min.js"></script>
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/4.3.1/css/bootstrap-table.min.js"></script> --}}

    {{-- public --}}
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/home') }}">
                    {{-- {{ config('app.name', 'Practices') }} --}}
                   Brgy. 763 Zone 83
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
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
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

        <main class="p-0">

            <div class="container-fluid d-flex justify-content-evenly p-0">
                <div class="col-lg-2 bg-info border-right">
                    <ul class="list-unstyled font-weight-bold flex-lg-column ">
                        <img src="img/brgy-logo800.png" alt="brgylogo" class="ml-3 mt-5 mb-5" style="height: 150px; width: 150px"> 
                        <li class="h5 pb-5"><a href="{{ route('home') }}" class="text-dark text-decoration-none font-weight-bold"><i class="fa fa-home"></i> Home</a></li>
                        <li class="h5 pb-5"><a href="{{ route('residents.index') }}" class="text-dark text-decoration-none font-weight-bold"><i class="fa fa-users"></i> Residents</a> </li>
                        <li class="h5 pb-5"><a href="{{ route('reports.index') }}" class="text-dark text-decoration-none font-weight-bold"><i class="fa fa-sticky-note"></i> Reports</a> </li>
                        <li class="h5 pb-5"><a href="{{ route('blotters.index') }}" class="text-dark text-decoration-none font-weight-bold"><i class="fa fa-book"></i> Blotter</a> </li>
                        <li class="h5 pb-5"><a href="#" class="text-dark text-decoration-none font-weight-bold"><i class="fa fa-folder-open"></i> Certificates</a> </li>
                        <li class="h5 pb-5"><a href="{{ route('officials.index') }}" class="text-dark text-decoration-none font-weight-bold"><i class="fa fa-user"></i> Officials</a> </li>
                    </ul>
                </div>
                <div class="col-lg-10 bg-light">
                    @yield('content')
                </div>
            </div>
        </main>
    
    </div>
</body>
</html>

{{-- <div class="container-fluid d-flex justify-content-evenly mt-5">
    <aside>
        <ul class="sidebar ml-0 mr-5">
            <li><a href="/home">Home</a> </li>
            <li><a href="/residents">Residents</a> </li>
            <li><a href="/reports">Reports</a> </li>
            <li><a href="">Blotter</a> </li>
            <li><a href="">Certificates</a> </li>
            <li><a href="/officials">Officials</a> </li>
        </ul>
    </aside>

    
</div> --}}