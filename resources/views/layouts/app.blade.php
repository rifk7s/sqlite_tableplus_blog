<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="@yield('description', 'Rifky - Fullstack Developer')">
    <title>@yield('title', 'Rifky - Portfolio')</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    
    @vite('resources/css/app.css')
    
</head>
<body class="antialiased overflow-x-hidden overflow-y-auto">
    <div class="max-w-2xl mx-auto py-8 sm:py-12 px-6 pb-32 sm:pb-36 min-h-screen">
        @yield('content')
    </div>
    
    @include('partials.dock')
</body>
</html>
