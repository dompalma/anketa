<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Datubāze</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />
</head>
<body class="mt-4">
<div class="container">

    <ul class="nav nav-tabs mb-4">
        <li class="nav-item">
            <a class="nav-link {{ Request::segment(1) === 'respondent' ? 'active' : '' }}" href="{{ route('respondent.index') }}">Respondenti</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ Request::segment(1) === 'anketa' ? 'active' : '' }}" href="{{ route('anketa.index') }}">Atbildes</a>
        </li>
    </ul>

    @yield('content')

</div>
<script src="{{ asset('js/app.js') }}" type="text/js"></script>
</body>
</html>
