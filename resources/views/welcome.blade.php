<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
</head>
<body class="antialiased">
@auth
    <p>{{ auth()->user()->name }}</p>
    <p>{{ auth()->user()->email }}</p>
    <img src="{{auth()->user()->photo}}" alt="photo"/>
    You are logged in!

    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit">Logout</button>
    </form>
@endauth

@guest
    You are not logged in!
    <a href="{{ route('login') }}">Login with Azure</a>
@endguest
</body>
</html>
