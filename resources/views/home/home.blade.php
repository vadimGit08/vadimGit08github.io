<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('build/assets/app-041e359a.css') }}">
    <title>Hello Sergl</title>
</head>
<body>
<div>
    <div class="container-xxl" style="background-color: olivedrab">
        <ul class="nav justify-content-end" style="font-size: x-large; color: #1a202c">
            <li class="nav-item">
                <a style="color: #1a202c" class="nav-link active" aria-current="page" href="{{ route('message.index') }}">messages</a>
            </li>
            <li class="nav-item">
                <a style="color: #1a202c" class="nav-link" href="{{ route('message.create') }}">add messag</a>
            </li>
        </ul>
    </div>
    <div class="container">
        @yield('mes')
    </div>
</div>

</body>
</html>
