<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tokoonline</title>
</head>
<body>
    <a href="{{ route('backendBeranda') }}">Beranda</a>|
    <a href="#">User</a>|
    <a href="#">keluar</a>
    <p></p>

    @yield('content')

    <form id="keluar-app" action="{{ route('logoutBackend') }}" method="POST" class="d-none">
        @csrf
    </form>
</body>
</html>