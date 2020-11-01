<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    @yield('stylesheets')

    <title> blog | Laravel voyager</title>
</head>
<body>


    @include('partials.navbar')
    <div class="container mt-4">
        @yield("content")
    </div>
    


    <script src="{{ asset('js/jquery.js')  }}"> </script>
    <script src="{{ asset('js/bootstrap.min.js')  }}"> </script>
    
    @yield('javascripts')
</body>
</html>