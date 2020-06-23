<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- Fontawesome -->
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome/css/all.min.css') }}">

    <title>Ujian Online</title></title>
</head>

<body>
    <div class="background-filter"></div>
    <section id="navbar">
        <nav class="navbar navbar-expand-lg navbar-light bg-white sahdow-lg">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="{{ asset('img/logo/logo.gif') }}" width="70" alt="Logo">
                </a>
                <h3 class="navbar-title bold mb-0">UJIAN ONLINE</h3>
                <button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="far fa-stream"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav ml-auto">
                        <a class="nav-item nav-link text-center" href="#">Home</a>
                        <a class="nav-item nav-link text-center" href="#">Jadwal</a>
                        <a class="nav-item nav-link text-center" href="#">Cara Ujian</a>
                    </div>
                </div>
            </div>
        </nav>
    </section>

    <section id="content">
        <div class="container">
            @yield('content')
        </div>
    </section>

    <!-- Optional JavaScript -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>

</html>