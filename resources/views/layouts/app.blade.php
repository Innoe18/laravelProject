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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <link rel="stylesheet" href="css/style.css">
    @stack('styles')
    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gradient-to-r from-pink-200 via-purple-200 to-blue-200 antialiased leading-none font-sans m-0">
    <div id="app">
        <!-- Header -->
        <header class="bg-gradient-to-r from-pink-200 via-purple-200 to-blue-200 shadow-md">
            <div class="container mx-auto flex justify-between items-center px-6 py-4">
                <div>
                    <a href="{{ url('/') }}" class="text-lg font-bold text-gray-800 no-underline">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>
                <nav class="space-x-4 text-gray-800 text-sm sm:text-base">
                    <a class="no-underline hover:underline" href="/">Home</a>
                    <a class="no-underline hover:underline" href="/blog">Blog</a>
                    <a class="no-underline hover:underline" href="/helmets">Helmet of the Week</a>

                    <a class="no-underline hover:underline" href="/about">About Us</a>
                    @guest
                        <a class="no-underline hover:underline" href="{{ route('login') }}">{{ __('Login') }}</a>
                        @if (Route::has('register'))
                            <a class="no-underline hover:underline" href="{{ route('register') }}">{{ __('Register') }}</a>
                        @endif
                    @else
                        <span class="text-gray-800">{{ Auth::user()->name }}</span>
                        <a href="{{ route('logout') }}"
                           class="no-underline hover:underline text-gray-800"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                           {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                            {{ csrf_field() }}
                        </form>
                    @endguest
                </nav>
            </div>
        </header>
        
        <!-- Main Content -->
        <main>
            @yield('content')
        </main>
        
        <!-- Footer -->
        @include('layouts.footer')
    </div>
</body>
</html>
