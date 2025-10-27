@extends('layouts.app')

@section('title', $post->title . ' - Rifky')
@section('description', $post->excerpt)

@section('content')
<div>
    <div class="blur-fade mb-8">
        @include('partials.custom_back_button', ['href' => route('blog.index'), 'title' => $post->title])
        <p class="text-secondary">{{ $post->published_at->format('F j, Y') }} • By {{ $post->user->name }}</p>
    </div>

    <article class="blur-fade blur-fade-delay-1 prose prose-invert max-w-none">
        @if($post->featured_image)
            <img src="{{ $post->featured_image }}" alt="{{ $post->title }}" class="w-full rounded-lg mb-8">
        @endif

        <div class="blog-content">
            {!! $post->content !!}
        </div>
    </article>

    <div class="mt-12 pt-8 border-t border-border">
        <a href="{{ route('blog.index') }}" class="text-blue-400 hover:text-blue-300 transition-colors">
            ← Back to all posts
        </a>
    </div>
</div>
@endsection
