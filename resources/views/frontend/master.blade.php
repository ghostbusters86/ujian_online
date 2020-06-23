<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- Fontawesome -->
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome/css/all.min.css') }}">
    <!-- IziToast -->
    <link rel="stylesheet" href="{{ asset('plugins/izitoast/css/iziToast.min.css') }}">
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">

    <title>Ujian Online</title>
    </title>
</head>

<body>
    <div class="background-filter">

        <section id="navbar">
            <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-lg fixed-top">
                <div class="container-fluid">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <img src="{{ asset('img/logo/logo.gif') }}" width="70" alt="Logo">
                    </a>
                    <h3 class="navbar-title bold mb-0">BINA MANDIRI</h3>
                    <button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="far fa-stream"></i>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav ml-auto">
                            <a class="nav-item nav-link text-center bold" href="{{ url('/') }}">Home</a>
                            <a class="nav-item nav-link text-center bold" href="{{ url('/schedule') }}">Jadwal</a>
                            <a class="nav-item nav-link text-center bold" href="{{ url('/guide') }}">Cara Ujian</a>
                            @if (Auth::check())
                            <a class="nav-item nav-link text-center text-danger bold" href="{{ url('logout') }}">Logout</a>
                            @endif
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

    </div>
    <!-- Optional JavaScript -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <!-- IziToast -->
    <script src="{{ asset('plugins/izitoast/js/iziToast.min.js') }}"></script>
    <!-- DataTables -->
    <script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>

    <!-- Custom Script -->
    @yield('custom-script')

    <!-- Error Handling -->
    @if (session('toast-success'))
    <script>
        iziToast.success({
            title: '<b>Success</b>',
            message: "{{ session('toast-success') }}",
            backgroundColor: '#00a6d3',
            icon: 'fas fa-check-circle',
            titleColor: '#ffffff',
            messageColor: '#ffffff',
            iconColor: 'white',
            timeout: 10000,
            progressBarColor: '#155e68',
            position: 'topCenter'
        });
    </script>
    @endif

    @if (session('toast-error'))
    <script>
        iziToast.error({
            title: '<b>Error</b>',
            message: "{{ session('toast-error') }}",
            backgroundColor: '#ff1a1a',
            icon: 'fas fa-exclamation-circle',
            titleColor: '#ffffff',
            messageColor: '#ffffff',
            iconColor: 'white',
            timeout: 10000,
            progressBarColor: '#bd0000',
            position: 'topCenter'
        });
    </script>
    @endif

    <script>
        $('.datatables-responsive').DataTable({
            responsive: true
        })
    </script>
</body>

</html>