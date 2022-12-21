<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>BANASPORTS</title>
        <link rel="stylesheet" href="{{ url('font/themify-icons-font/themify-icons/themify-icons.css') }}">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
        <link href="{{ url('css/index.css') }}" type="text/css" rel="stylesheet"> 
        <link href='https://fonts.googleapis.com/css?family=Work Sans' rel='stylesheet'>
        <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
        @yield('css')
    </head>

    <body>
        <!-- Header -->
        @include('partials.homepage_partials.header')
        <!-- End_Header -->

        <!-- MAIN CONTENT -->
        @yield('content')
        <!-- **************** MAIN CONTENT END **************** -->
        <!-- Footer -->
        @include('partials.homepage_partials.footer')
        <!-- Footer END -->
        @yield('js')
    </body>
</html>