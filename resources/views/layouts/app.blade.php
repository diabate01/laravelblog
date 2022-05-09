<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    
    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body >
    <div id="app">
        <header class="header">
            <div class="header-container ">
              
                <nav class="account">
                    @guest
                        <a class="login" href="{{ route('login') }}">{{ __('Login') }}</a>
                        @if (Route::has('register'))
                            <a class="register" href="{{ route('register') }}">{{ __('Register') }}</a>
                        @endif
                    @else
                        <span>{{ Auth::user()->name }}</span>

                        <a href="{{ route('logout') }}"
                           class="logout"
                           onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                            {{ csrf_field() }}
                        </form>
                    @endguest
                </nav>
            </div>
        </header>
        <div class="sidebar">
                <div class="brand">
                    <a href="{{ url('/') }}" class="text-lg font-semibold text-gray-100 no-underline">
                        {{ config('app.name', 'HackerBlog') }}
                    </a>
                </div>
                <div class="nav-toggle">
                    <span></span>
                </div>
            <ul class="nav">
               
                <li ><a class="active" href="{{ url('/') }}"> <img src="https://img.icons8.com/material-rounded/24/4a90e2/home-page.png"/>Home</a> </li>
                 <li ><a class="" href="{{ url('/about') }} "><img src="https://img.icons8.com/material-rounded/24/4a90e2/person-female.png"/> About</a> </li>
               
                 <li ><a class="" href="{{ url('/blog') }}"><img src="https://img.icons8.com/material-rounded/24/4a90e2/student-registration.png"/> Cours</a> </li>
               
                <li ><a class="" href="{{ url('/contact') }}"> <img src="https://img.icons8.com/material-rounded/24/4a90e2/phone-contact.png"/> Contact</a> </li>
              
            </ul>

         
      </div>

      <div class="main-container">
          @yield('content')

      </div>

    </div>
</body>
</html>
