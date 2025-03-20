@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-10">
    <div class="bg-gradient-to-r from-pink-100 via-purple-100 to-blue-100 p-8 rounded-lg shadow-lg">
        <!-- Post Title & Meta -->
        <div class="mb-8 text-center">
            <h1 class="text-6xl font-bold text-purple-600">{{ $post->title }}</h1>
            <p class="text-gray-500 mt-4">
                By <span class="font-bold italic text-purple-800">{{ $post->user->name }}</span> &bull;
                Created on {{ date('jS M Y', strtotime($post->updated_at)) }}
            </p>
        </div>
        
        <!-- Post Image -->
        @if($post->image_path)
        <div class="mb-8">
            <img src="{{ asset('images/' . rawurlencode($post->image_path)) }}" alt="{{ $post->title }}" 
                 class="w-full max-h-80 object-contain object-center rounded-lg shadow-md">
        </div>
        @endif

        <!-- Post Description (split into paragraphs for readability) -->
        <div class="text-xl text-gray-700 leading-relaxed font-light text-justify space-y-4">
            @foreach(explode("\n", $post->description) as $paragraph)
                <p>{{ $paragraph }}</p>
            @endforeach
        </div>

        <!-- Back to Blog Button -->
        <div class="mt-10 text-center">
            <a href="/blog" class="inline-block bg-gradient-to-r from-purple-400 via-pink-400 to-blue-400 hover:from-purple-500 hover:via-pink-500 hover:to-blue-500 text-white font-bold py-3 px-6 rounded-full transition duration-300 shadow">
                Back to Blog
            </a>
        </div>
    </div>
</div>
@endsection
