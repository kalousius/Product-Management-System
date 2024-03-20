<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Include any CSS files or CDN links for stylesheets -->
    <!-- For example: -->
    <!-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

</head>
<body>
    <!-- Include navigation bar or header if needed -->
    <nav>
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
            <!-- Add more navigation links as needed -->
        </ul>
    </nav>

    <!-- Main content area where other views will be injected -->
    <div class="container">
        @yield('content')
    </div>

    <!-- Include any JavaScript files or CDN links -->
    <!-- For example: -->
    <!-- <script src="{{ asset('js/app.js') }}"></script> -->
</body>
</html>
