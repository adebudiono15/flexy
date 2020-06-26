<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <!-- Favicons -->
    <link rel="icon" href="/assets/img/favicon.png">

    <title>@yield('title') | Flexy Admin Template</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/bootstrap/css/extends-bootstrap.css?{{ time() }}">
    <!-- Fonts CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto@100;200;300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
    <!-- BEGIN: Icons CSS-->
    <link rel="stylesheet" href="/assets/feathericons/feathericons.min.css">
    <link rel="stylesheet" href="/assets/boxicons/css/boxicons.min.css">
    <!-- BEGIN: Plugins CSS -->
    <link rel="stylesheet" href="/libs/vanilla-calendar/vanilla-calendar.css">
    @stack('css_plugin')
    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" href="/assets/css/style.css?{{ time() }}">
    <link rel="stylesheet" href="/assets/css/semi-dark-theme.css">
    {{-- <link rel="stylesheet" href="/assets/css/dark-theme.css"> --}}
    <link rel="stylesheet" href="/assets/css/responsive.css?{{ time() }}">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
    @stack('css')
</head>

<body class="vertical-menu semi-dark-theme">


    <!-- Navbar Top -->
    @include('layouts.navbar')

    <!-- Agenda -->
    @include('components.agenda')

    <!-- Sidebar -->
    @include('layouts.sidebar')

    <!-- Main Section -->
    <main class="main-content">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer id="footer" class="pd-20">
        <div class="d-flex justify-content-between align-items-center">
            <div>2020 &copy; WEBINTHEME</div>
            <div>Created by WEBINTHEME</div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="/assets/js/jquery.slim.min.js"></script>
    <script src="/libs/vanilla-calendar/vanilla-calendar-min.js?v=1"></script>
    <script src="/assets/js/popper.min.js"></script>
    <script src="/assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="/assets/js/app.js?v=1.1.7"></script>
    @stack('js')
</body>

</html>