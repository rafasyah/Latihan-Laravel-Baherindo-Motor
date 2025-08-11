<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Fixed title yield -->
    <title>@yield('title', 'Baherindo Motor')</title>

    <!-- Correct CSS inclusion if using Vite -->
    @vite(['resources/css/app.css'])

    <!-- If you still need custom CSS -->
    <link href="/src/style.css" rel="stylesheet">
</head>
<body class="bg-gray-100">

    <!-- Navbar -->
    @include('layout.navbar')

    <!-- Header -->
    @include('layout.header')

    <!-- Main content -->
    <main class="pt-20 px-4">
        @yield('content')
    </main>

    <!-- Footer -->
    @include('layout.footer')

</body>
</html>
