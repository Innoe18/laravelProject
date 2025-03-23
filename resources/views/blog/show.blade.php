@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-10">
    <div class="bg-gradient-to-r from-pink-100 via-purple-100 to-blue-100 p-10 rounded-lg shadow-2xl">
        <!-- Post Title & Meta -->
        <div class="mb-10 text-center border-b border-gray-200 pb-6">
            <h1 class="text-6xl font-extrabold text-purple-600 tracking-wide">
                {{ $post->title }}
            </h1>
            <p class="text-gray-500 mt-4 text-lg">
                By <span class="font-bold italic text-purple-800">{{ $post->user->name }}</span> &bull;
                {{ date('jS M Y', strtotime($post->updated_at)) }}
            </p>
        </div>
        
        <!-- Post Image -->
        @if($post->image_path)
        <div class="mb-10">
            <img src="{{ asset('images/' . rawurlencode($post->image_path)) }}" alt="{{ $post->title }}" 
                 class="w-full max-h-80 object-contain object-center rounded-lg shadow-md transition transform hover:scale-105">
        </div>
        @endif

        <!-- Post Description (split into paragraphs) -->
        <div class="text-xl text-gray-700 leading-relaxed font-light space-y-6">
            @foreach(explode("\n", $post->description) as $paragraph)
                <p>{{ $paragraph }}</p>
            @endforeach
        </div>

        <!-- Back to Blog Button -->
        <div class="mt-12 text-center">
            <a href="/blog" class="inline-block bg-gradient-to-r from-purple-400 via-pink-400 to-blue-400 hover:from-purple-500 hover:via-pink-500 hover:to-blue-500 text-white font-bold py-3 px-8 rounded-full transition duration-300 shadow-lg">
                Back to Blog
            </a>
        </div>
    </div>
</div>
@endsection
