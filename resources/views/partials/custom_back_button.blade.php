{{-- Inline Back Button Component --}}
@props(['href' => '/', 'title' => 'Page Title'])

<div class="flex items-center gap-3 mb-8">
    <a href="{{ $href }}" class="group flex items-center justify-center w-10 h-10 rounded-full border border-white/20 bg-white/5 hover:bg-white/10 transition-all duration-200 hover:scale-105">
        <svg class="text-white/70 group-hover:text-white transition-colors duration-200 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
        </svg>
    </a>
    <h1 class="text-4xl font-bold">{{ $title }}</h1>
</div>