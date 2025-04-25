<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="{{ asset('images/CircleCapypara.png') }}">
    <link rel="stylesheet" href="{{ asset('css/homepage.css') }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/2577a97aef.js" crossorigin="anonymous"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>@yield('title', 'ReadVerse')</title>
</head>
<body class="bg-white">
    <header>
        @include('Component.header')
        @include('Component.navigation')
    </header>

    <main class="p-4">
        @yield('content')
    </main>

    <footer>
        @include('Component.footer')
    </footer>
</body>
</html>
