<!DOCTYPE html>
<html lang="en" dir="">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Articles | Mgcodeur Dashboard</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,400i,600,700,800,900" rel="stylesheet" />
    @vite(['resources/scss/app.scss'])
    @stack('styles')
</head>

<body class="text-left">
<div class="app-admin-wrap layout-sidebar-large">
    @include('partials.dashboard.navbar')

    <div class="side-content-wrap">
        @include('partials.dashboard.sidebar')
    </div>
    <div class="main-content-wrap sidenav-open d-flex flex-column">
        <div class="main-content">
            @yield('content')
        </div>
    </div>
</div>

<script src="{{ asset('assets/js/plugins/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
<script src="{{ asset('assets/js/scripts/script.min.js') }}"></script>
<script src="{{ asset('assets/js/scripts/sidebar.large.script.min.js') }}"></script>

@stack('scripts')
</body>
</html>
