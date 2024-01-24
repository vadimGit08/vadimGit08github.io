<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('build/assets/app-041e359a.css') }}">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <title>Hello Sergl</title>
</head>
<body>
<div>
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <div class="container-fluid">
            <form class="d-flex align-content-center" role="search" action="{{ route('message.index') }}">
                <input class="form-control btn-lg me-2" autocomplete="off" name="name" type="search"
                       placeholder="Search name recipient" aria-label="Search">
                <button class="btn btn-lg btn-outline-success" type="submit">Search</button>
            </form>
            <div class="text-end">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="btn btn-lg btn-light me-2" role="button" aria-current="page" style="background-color: #0e2f4b;  color: #fdc13d;" href="{{ route('message.index') }}">messages</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-lg btn-warning me-2" role="button" style="color: #0e2f4b;" href="{{ route('message.create') }}">add messag</a>
                    </li>
                    <li class="nav-item dropdown">
                        <div class="dropdown">
                            <a id="dropdownMenuLink" class="btn btn-light btn-lg dropdown-toggle" href="#" role="button"
                               data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                               style="color: #0e2f4b;">
                                {{ Auth::user()->name }}
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuLink">
                                @can('view', auth()->user())
                                    <li>
                                        <a class="dropdown-item" href="{{ route('admin.message.index') }}">Admin</a>
                                    </li>
                                @endcan
                                <li>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>

        </div>

    </nav>
    <div class="container">
        @yield('mes')
    </div>
</div>

</body>
</html>
