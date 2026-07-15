<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap CSS -->
    
    <!-- Custom-css -->
    <link href={{ url('css/style.css') }} rel="stylesheet">
    <link href={{ url('css/bootstrap.css') }} rel="stylesheet">

    <title>@yield('title')</title>
</head>
<body>
    
    @yield('home-content')

    

    <!-- Bootstrap JS -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script> -->
    <!-- Custom-js -->
    <script src={{ url('js/scripts.js') }}></script>
    <script src={{ url('js/bootstrap.bundle.js') }}></script>

</body>
</html>