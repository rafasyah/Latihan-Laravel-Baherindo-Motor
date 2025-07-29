@vite(['resources/css/app.css']) 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Fixed title yield -->
    <title>@yield('title', 'Baherindo Motor')</title>

    <!-- Correct CSS inclusion if using Vite -->
    <link href="/src/style.css" rel="stylesheet">
</head>
<body class="bg-gray-100">

    <!-- Move navbar inside body -->
    @include('layout.navbar')

    @include('layout.header')

    <!-- Add padding or margin here -->
    <main class="pt-20 px-4">
        @yield('content')
    </main>

    @include('layout.footer')

</body>
</html>
