<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/2577a97aef.js" crossorigin="anonymous"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <title>AdminReadVerse</title>
</head>
<body>
    <div class="min-h-screen flex bg-gray-100">

        <!-- Sidebar -->
        <aside class="w-64 bg-white shadow-md flex-shrink-0 ">
            <div class="flex items-center justify-content LogoLayout">
                <img src="{{ asset('images/CircleCapypara.png') }}" alt="Capybara Icon" class="Logo">
                <img src="{{ asset('images/ReadVerse.png') }}" alt="ReadVerse Logo" class="Logo2">
            </div>
          <nav class="mt-4 text-gray-600  ">
            <a href="/Admin/dashboard" class="block px-6 py-3 hover:bg-[#f1912b] hover:text-white border-b-2 border-gray-300 transition font-medium">Dashboard</a>
            <a href="/Admin/crud-user" class="block px-6 py-3 hover:bg-[#f1912b] hover:text-white border-b-2 border-gray-300 transition">CRUD User</a>
            <a href="/Admin/crud-book" class="block px-6 py-3 hover:bg-[#f1912b] hover:text-white border-b-2 border-gray-300 transition">CRUD Book</a>
            <a href="/Admin/crud-author" class="block px-6 py-3 hover:bg-[#f1912b] hover:text-white border-b-2 border-gray-300 transition">CRUD Author</a>
          </nav>
        </aside>

        <!-- Content -->
        <main class="flex-1 p-6 overflow-y-auto">
            @if ($section === 'dashboard')
                @include('Component.dashBoard')
            @elseif ($section === 'crud-user')
                @include('Component.CRUDuser')
            @elseif ($section === 'crud-book')
                @include('Component.CRUDBook')
            @elseif ($section === 'crud-author')
                @include('Component.CRUDAuthor')
            @else
                <h1 class="text-2xl font-semibold text-gray-700 mb-6">Page Not Found</h1>
            @endif

        </main>
      </div>
</body>
</html>



