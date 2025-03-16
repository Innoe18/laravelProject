@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-10">
    <!-- Header -->
    <div class="text-center mb-10">
        <h1 class="text-5xl font-bold text-gray-800">Blog Posts</h1>
    </div>

    <!-- Session Message -->
    @if (session()->has('message'))
        <div class="mb-6">
            <p class="mx-auto w-1/2 text-center text-white bg-green-500 rounded-full py-3">
                {{ session()->get('message') }}
            </p>
        </div>
    @endif

    <!-- Create Post Button -->
    @if (Auth::check())
        <div class="text-right mb-6">
            <a 
                href="/blog/create"
                class="bg-blue-500 hover:bg-blue-600 text-white uppercase py-2 px-4 rounded-full transition duration-300">
                Create Post
            </a>
        </div>
    @endif

    <!-- Posts Grid -->
    <div class="grid gap-8 grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
        @foreach ($posts as $post)
            <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition-shadow duration-300">
                <img src="{{ asset('images/' . $post->image_path) }}" alt="Post image" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h2 class="text-2xl font-bold text-gray-800 mb-2">{{ $post->title }}</h2>
                    <p class="text-gray-500 text-sm mb-4">
                        By <span class="font-semibold text-gray-700">{{ $post->user->name }}</span> on {{ date('jS M Y', strtotime($post->updated_at)) }}
                    </p>
                    <p class="text-gray-700 text-base mb-4">
                        {{ Str::limit($post->description, 150) }}
                    </p>
                    <div class="flex items-center justify-between">
                        <a href="/blog/{{ $post->slug }}" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-full transition duration-300">
                            Keep Reading
                        </a>
                        @if (isset(Auth::user()->id) && Auth::user()->id == $post->user_id)
                            <div class="flex space-x-2">
                                <a href="/blog/{{ $post->slug }}/edit" class="text-gray-600 hover:text-gray-900 text-sm font-medium border-b border-transparent hover:border-gray-900">
                                    Edit
                                </a>
                                <form action="/blog/{{ $post->slug }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="text-red-500 hover:text-red-700 text-sm font-medium">
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
