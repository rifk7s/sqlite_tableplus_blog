@extends('layouts.app')

@section('title', 'Blog - Rifky')
@section('description', 'Read blog posts about web development, programming, and technology')

@section('content')
<div>
    <div class="blur-fade mb-8">
        @include('partials.custom_back_button', ['href' => '/', 'title' => 'Blogs'])
        <p class="text-secondary">Thoughts on web development, programming, and technology</p>
    </div>


    <div class="space-y-4">
        @php
            $posts = [
                [
                    'slug' => 'discrete',
                    'title' => 'Discrete Math: Truth Tables',
                    'description' => 'An introduction to truth tables, their construction, and examples in discrete mathematics. Learn how to use truth tables for logical reasoning.',
                    'date' => 'October 5, 2025',
                    
                    'category' => 'Mathematics'
                ],
                [
                    'slug' => 'php',
                    'title' => 'Learning PHP in 2025',
                    'description' => 'A comprehensive guide to learning PHP for modern web development. Covers basics to advanced concepts with practical examples.',
                    'date' => 'September 28, 2025',
                    
                    'category' => 'Programming'
                ],
                [
                    'slug' => 'react-hooks',
                    'title' => 'Mastering React Hooks',
                    'description' => 'Deep dive into React Hooks. Understanding useState, useEffect, useContext, and creating custom hooks for better component logic.',
                    'date' => 'August 15, 2025',
                    
                    'category' => 'React'
                ]
            ];
        @endphp

        @foreach($posts as $index => $post)
            <article class="blur-fade blur-fade-delay-{{ $index + 1 }} card card-hover rounded-lg p-4">
                <a href="https://www.rifky.dev/blog/{{ $post['slug'] }}" target="_blank" rel="noopener noreferrer" class="block group">
                    <h3 class="font-medium mb-1 group-hover:text-blue-400 transition-colors">{{ $post['title'] }}</h3>
                    <p class="text-sm text-muted">{{ $post['date'] }}</p>
                </a>
            </article>
        @endforeach
    </div>
</div>
@endsection
