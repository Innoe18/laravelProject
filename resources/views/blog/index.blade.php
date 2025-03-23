@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-10">
    <!-- Header -->
    <div class="text-center mb-10">
        <h1 class="text-5xl font-bold text-purple-700">Blog Posts</h1>
    </div>
    <!-- Search Form -->
    <form action="{{ route('search') }}" method="GET" class="mb-6 flex justify-center">
        <input 
            type="text" 
            name="query" 
            placeholder="Search blog posts..." 
            required
            class="w-1/2 p-3 border border-purple-300 rounded-l-full focus:outline-none focus:ring-2 focus:ring-pink-300"
        >
        <button 
            type="submit" 
            class="bg-blue-300 hover:bg-blue-400 text-white px-6 py-3 rounded-r-full transition duration-300"
        >
            Search
        </button>
    </form>

    <!-- Session Message -->
    @if (session()->has('message'))
        <div class="mb-6">
            <p class="mx-auto w-1/2 text-center text-white bg-green-400 rounded-full py-3">
                {{ session()->get('message') }}
            </p>
        </div>
    @endif

    <!-- Create Post Button -->
    @if (Auth::check())
        <div class="text-right mb-6">
            <a 
                href="/blog/create"
                class="bg-blue-300 hover:bg-blue-400 text-white uppercase py-2 px-4 rounded-full transition duration-300 shadow-md"
            >
                Create Post
            </a>
        </div>
    @endif

    <!-- Posts Grid -->
    <div class="grid gap-8 grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
        @foreach ($posts as $post)
            <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition-shadow duration-300">
                <img src="{{ asset('images/' . rawurlencode($post->image_path)) }}" alt="Post image" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h2 class="text-2xl font-bold text-purple-700 mb-2">{{ $post->title }}</h2>
                    <p class="text-gray-500 text-sm mb-4">
                        By <span class="font-semibold text-purple-600">{{ $post->user->name }}</span> on {{ date('jS M Y', strtotime($post->updated_at)) }}
                    </p>
                    <p class="text-gray-700 text-base mb-4">
                        {{ Str::limit($post->description, 150) }}
                    </p>
                    <div class="flex items-center justify-between">
                        <a href="/blog/{{ $post->slug }}" class="bg-gradient-to-r from-pink-300 via-purple-300 to-blue-300 hover:from-pink-400 hover:via-purple-400 hover:to-blue-400 text-white font-bold py-2 px-4 rounded-full transition duration-300 shadow">
                            Keep Reading
                        </a>
                        @if (isset(Auth::user()->id) && Auth::user()->id == $post->user->id)
                            <div class="flex space-x-2 mt-2">
                                <a href="/blog/{{ $post->slug }}/edit" class="bg-blue-400 hover:bg-blue-500 text-white text-sm font-medium py-1 px-3 rounded-full transition duration-300 shadow">
                                    Edit
                                </a>
                                <form action="/blog/{{ $post->slug }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="bg-red-400 hover:bg-red-500 text-white text-sm font-medium py-1 px-3 rounded-full transition duration-300 shadow">
                                        Delete
                                    </button>
                                </form>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
