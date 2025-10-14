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
    
    {{-- DOCK --}}
    <div class="fixed inset-x-0 bottom-0 z-30 mx-auto mb-4 flex justify-center">
        <div class="nav-dock-gradient fixed bottom-0 inset-x-0 h-16 w-full backdrop-blur-lg"></div>
        <nav class="nav-dock z-50 flex items-center gap-2 px-4 py-3 rounded-full">
            <div class="nav-item">
                <a href="/" class="p-3 rounded-lg hover:bg-white/10 transition-all block">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                    </svg>
                </a>
                <span class="nav-tooltip">Home</span>
            </div>
            
            <div class="nav-item">
                <a href="/contact" class="p-3 rounded-lg hover:bg-white/10 transition-all block">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                    </svg>
                </a>
                <span class="nav-tooltip">Contact</span>
            </div>
            
            <div class="w-px h-8 bg-white/10 mx-2"></div>
            
            <div class="nav-item">
                <a href="/blog" class="p-3 rounded-lg hover:bg-white/10 transition-all block">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                    </svg>
                </a>
                <span class="nav-tooltip">Blog</span>
            </div>
            
            <div class="nav-item">
                <a href="/about" class="p-3 rounded-lg hover:bg-white/10 transition-all block">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                    </svg>
                </a>
                <span class="nav-tooltip">About</span>
            </div>
            
            <div class="w-px h-8 bg-white/10 mx-2"></div>
            
            <div class="nav-item">
                <button id="theme-toggle" class="p-3 rounded-lg hover:bg-white/10 transition-all">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"></path>
                    </svg>
                </button>
                <span class="nav-tooltip">Theme</span>
            </div>
        </nav>
    </div>
    
    <script>
        // PLACEHOLDER : NOT IMPORTANT, NOT GONNA IMPLEMENT
        document.getElementById('theme-toggle')?.addEventListener('click', function() {
            
            console.log('Theme toggle clicked, not gonna implement');
        });
    </script>
</body>
</html>
