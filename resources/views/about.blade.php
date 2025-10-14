@extends('layouts.app')

@section('title', 'About - Rifky')
@section('description', 'Learn more about Rifky, a Fullstack Developer from Indonesia')

@section('content')
<div>
    <div class="blur-fade mb-8">
        @include('partials.custom_back_button', ['href' => '/', 'title' => 'About Me'])
    </div>

    <!-- Profile Section -->
    <div class="blur-fade blur-fade-delay-1 space-y-8">
        <div class="flex items-start gap-6">
            <img src="https://github.com/rifk7s.png" alt="Rifky" class="w-24 h-24 rounded-2xl border-subtle-2">
            <div class="flex-1">
                <h2 class="text-2xl font-semibold mb-2">Rifki Paranrengi</h2>
                <p class="text-secondary mb-3">Student & Fullstack Developer</p>
                <div class="flex gap-3">
    
                </div>
            </div>
        </div>

        
        <div class="space-y-4">
            <h3 class="text-xl font-semibold">Bio</h3>
            <div class="space-y-4 text-secondary leading-relaxed">
                <p>
                    I'm a passionate fullstack developer currently studying at Universitas Ciputra Surabaya, Indonesia. My journey in web development started with a curiosity about how websites work, and it has evolved into a deep commitment to creating elegant and efficient solutions.
                </p>
                <p>
                    When I'm not coding, you can find me exploring new technologies, contributing to open-source projects, or learning about the latest trends in web development. I'm always excited to collaborate on interesting projects and connect with fellow developers.
                </p>
            </div>
        </div>

        
        <div class="blur-fade blur-fade-delay-2 mt-12 card text-center">
            <h3 class="text-lg font-semibold mb-2">Visit My Main Portfolio</h3>
            <p class="text-sm text-muted mb-4">
                This is a Laravel recreation of my portfolio. For the better, original version with more features and polish, visit:
            </p>
            <a href="https://www.rifky.dev" target="_blank" rel="noopener noreferrer"
               class="btn-primary inline-flex items-center gap-2 px-5 py-2.5 rounded-lg text-sm font-medium">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"></path>
                </svg>
                www.rifky.dev
                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                </svg>
            </a>
        </div>
    </div>
</div>
@endsection
