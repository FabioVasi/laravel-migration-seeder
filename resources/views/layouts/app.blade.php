<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    <header id="site_header" class="bg-dark">
        <nav class="navbar navbar-expand ps-3">
            <div class="nav navbar-nav">
                <a class="nav-item nav-link active text-white fs-4 fw-bold" href="/">Home</a>
            </div>
        </nav>
    </header>

    <main id="site_main" class="">
        @yield('content')
    </main>

    <footer id="site_footer" class="bg-dark py-5 text-white">
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <h4>About Us</h4>
                    <ul class="list-unstyled">
                        <li>
                            <a class="text-decoration-none text-white fs-5 fw-medium" href="#">Lorem</a>
                        </li>
                        <li>
                            <a class="text-decoration-none text-white fs-5 fw-medium" href="#">Lorem</a>
                        </li>
                        <li>
                            <a class="text-decoration-none text-white fs-5 fw-medium" href="#">Lorem</a>
                        </li>
                    </ul>
                </div>
                <div class="col-4">
                    <h4>Support</h4>
                    <ul class="list-unstyled">
                        <li>
                            <a class="text-decoration-none text-white fs-5 fw-medium" href="#">Lorem</a>
                        </li>
                        <li>
                            <a class="text-decoration-none text-white fs-5 fw-medium" href="#">Lorem</a>
                        </li>
                        <li>
                            <a class="text-decoration-none text-white fs-5 fw-medium" href="#">Lorem</a>
                        </li>
                    </ul>
                </div>
                <div class="col-4">
                    <h4>Rapid Link's</h4>
                    <ul class="list-unstyled">
                        <li>
                            <a class="text-decoration-none text-white fs-5 fw-medium" href="#">Lorem</a>
                        </li>
                        <li>
                            <a class="text-decoration-none text-white fs-5 fw-medium" href="#">Lorem</a>
                        </li>
                        <li>
                            <a class="text-decoration-none text-white fs-5 fw-medium" href="#">Lorem</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

</body>

</html>