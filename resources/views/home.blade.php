@extends('layouts.app')

@section('title', 'Rifky - Fullstack Developer')
@section('description', 'Portfolio of Rifky, a Fullstack Developer from Indonesia')

@section('content')
<div class="main">
    
    <div class="blur-fade flex justify-between items-center mb-8 h-[72px]">
        <div>
            <h1 class="text-4xl font-bold mb-1">Rifky</h1>
            <a href="/" class="text-lg text-blue-400 hover:text-blue-300 transition-colors">Fullstack Developer</a>
        </div>
        
        <div class="relative">
            <img src="https://github.com/rifk7s.png" alt="Rifky" class="w-16 h-16 rounded-full border-subtle-2">
            <div class="absolute bottom-0 right-0 status-dot"></div>
        </div>
    </div>
    
    <div class="space-y-12">
        
        <div class="blur-fade blur-fade-delay-2">
            <h2 class="text-2xl font-semibold mb-4">Today</h2>
            <div class="flex flex-col space-y-4">
                <p class="text-secondary leading-relaxed">
                    Hi, I'm Rifki Paranrengi, a student and developer from Indonesia, studying at Universitas Ciputra Surabaya. I work on various projects, from simple websites to complex web apps, and I enjoy the variety of challenges each project offers.
                </p>
                <p class="text-secondary leading-relaxed">
                    When I'm not coding or studying, I love discovering new technologies and pushing the boundaries of what's possible in web development.
                </p>
            </div>
        </div>
        
        
        <div class="blur-fade blur-fade-delay-4">
            <div class="flex justify-between items-center mb-4">
                <h2 class="text-2xl font-semibold">Latest Blogs</h2>
                <a href="/blog" class="back-link">
                    view more blogs
                    <svg class="w-5 h-5 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </a>
            </div>
            
            <div class="space-y-3">
                <a href="https://www.rifky.dev/blog/discrete" target="_blank" rel="noopener noreferrer" class="block p-4 rounded-lg card card-hover">
                    <h3 class="font-medium mb-1">Discrete Math</h3>
                    <p class="text-sm text-muted">An introduction to truth tables, their construction, and etc discrete mathematics.</p>
                </a>
                <a href="https://www.rifky.dev/blog/php" target="_blank" rel="noopener noreferrer" class="block p-4 rounded-lg card card-hover">
                    <h3 class="font-medium mb-1">PHP</h3>
                    <p class="text-sm text-muted">A comprehensive guide to learning PHP for modern web development.</p>
                </a>
            </div>
        </div>
        
    </div>
</div>
@endsection
