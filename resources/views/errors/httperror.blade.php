<html>
    <head>
        <title>SilverSky | Door Jari Zilverentant</title>
        <link rel="icon" href="{{ asset('images/logo.png') }}">

        <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
        <link href="{{ asset('css/backend.css') }}" rel="stylesheet">
        <link href="{{ asset('css/custombootstrap.css') }}" rel="stylesheet">
        <!-- <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet"> -->
        <link href="{{ asset('fontawesome/css/all.css') }}" rel="stylesheet">


        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/octicons/3.5.0/octicons.min.css">
        <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>

        <script src="https://code.jquery.com/jquery-3.3.1.min.js" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

        <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}""></script>
    </head>
    <body>
        <header class="bg-primary py-3 mb-5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <h1 class="display-4 text-white mt-5 mb-2">{{ $message }}</h1>
                        <p class="text-white-50">
                            Er is iets fout gegaan.
                        </p>
                    </div>
                </div>
            </div>
        </header>
        <div id="page-content">
            @yield('content')
        </div>
        <footer id="sticky-footer" class="py-5 bg-dark">
            <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; SilverSky 2020</p>
            </div>
        </footer>
    </body>
</html>