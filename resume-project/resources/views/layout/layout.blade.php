<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sidebar.css') }}">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="{{ asset('css/all.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap">
    <!-- Local CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- Dynamic Title -->
    <title>@yield('title')</title>
</head>
<body>

    <div class="container-fluid bg-dark">
        <div class="row">
            <div class="col-sm-2">
                @include('include.sidebar')
            </div>
            <div class="col-sm-10">
                @yield('content')
            </div>
        </div>
    </div>

    <!-- Bootstrap Javascript -->
    <script src="{{ asset('js/bootstrap.bundle.js') }}"></script>
    <!-- Font Awesome Javascript -->
    <script src="{{ asset('js/all.js') }}"></script>
    <!-- Local Javascript -->
    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>