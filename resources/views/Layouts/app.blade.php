<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    {{-- Style --}}
    <link rel="stylesheet" href="{{ asset('build/assets/app-041e359a.css') }}">
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        <nav class="navbar bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>

                <div class="text-end">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                    <button type="button" class="btn btn-light me-2"><a class="nav-link active" aria-current="page" href="{{ route('login') }}"><b>{{ __('Login') }}</b></a></button>
                            @endif
                            @if (Route::has('register'))
                                    <button type="button" class="btn btn-warning"><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></button>
                            @endif
                        @endguest
                </div>
            </div>
        </nav>
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
