<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>@yield('title')</title>

    <link rel="icon" href="{{ asset('assets/images/himatif 6000.png') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" />
    <!-- MDB -->
    <link rel="stylesheet" href="{{ asset('assets/themes/fluent/css/mdb.min.css') }}" />

    <style>
        .btn-30 {
            max-height: 30px
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-light bg-light navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('assets/images/himatif 6000.png') }}" height="30" alt="" loading="lazy" />
                PBKK 2023
            </a>
            <!-- Toggle button -->
            <button class="navbar-toggler ps-0 pe-1" type="button" data-mdb-toggle="collapse"
                data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon d-flex justify-content-end align-items-center">
                    <i class="fas fa-bars"></i>
                </span>
            </button>

            <!-- Collapsible wrapper -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left links -->
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{ route('home') }}">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ activeClass('authors.*') }}"
                            href="{{ route('authors.index') }}">Authors</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ activeClass('books.*') }}" href="{{ route('books.index') }}">Books</a>
                    </li>
                </ul>
                <!-- Left links -->
            </div>
            <!-- Collapsible wrapper -->
        </div>
    </nav>

    <div class="container mt-3">
        @yield('content')
    </div>

    @yield('custom_html')

    <script src="{{ asset('assets/themes/fluent/js/mdb.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @stack('custom_js')

    @if (session()->has('success'))
        <script>
            Swal.fire(
                'Berhasil!',
                `{{ session()->get('success') }}`,
                'success'
            );
        </script>
    @endif

    @if (session()->has('error'))
        <script>
            Swal.fire(
                'Oops...',
                `{{ session()->get('error') }}`,
                'error'
            );
        </script>
    @endif
</body>

</html>
