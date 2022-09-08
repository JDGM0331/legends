<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="{{ asset('libs/bootstrap/css/bootstrap.min.css') }}">
</head>
<body>
<<<<<<< HEAD
    @yield('content')
=======
    <div class="container">
        @yield('content')
    </div>
    <!-- JavaScript Bundle with Popper -->
    <script src="{{ asset('libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('libs/jquery/jquery-3.2.1.js') }}"></script>
    @yield('scripts')
>>>>>>> ad499dbc3b47afa1d2af15f4be352b58ffc79663
</body>
</html>
