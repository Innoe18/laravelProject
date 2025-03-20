@extends('layouts.app')

@section('content')
    <!-- Hero Section (unchanged) -->
    <div class="background-image grid grid-cols-1 m-auto">
        <div class="flex text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
                <h1 class="sm:text-white text-5xl uppercase font-bold text-shadow-md pb-14">
                    Grid Goddesses !!!
                </h1>
                <a 
                    href="/blog"
                    class="text-center bg-gray-50 text-gray-700 py-2 px-4 font-bold text-xl uppercase rounded-full shadow-md transition duration-300 hover:bg-gray-100">
                    Read More
                </a>
            </div>
        </div>
    </div>

    <!-- Revving Up Section -->
    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-16 border-b border-gray-200">
        <div>
            <img src="https://www.thesportsdb.com/images/media/league/badge/d8g49u1685990479.png" width="700" alt="Racing Badge">
        </div>
        <div class="flex flex-col justify-center">
            <h2 class="text-3xl font-extrabold text-pink-500 flex items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 fill-current text-pink-400" viewBox="0 0 20 20">
                    <path d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 18.343l-6.828-6.829a4 4 0 010-5.656z"/>
                </svg>
                Revving Up for a New Era
            </h2>
            
            <p class="py-6 text-gray-600 text-base leading-relaxed">
                The engines are roaring louder than ever—signaling not just a race, but a revolution. In today’s motorsport arena, a new generation of fearless, talented women is shifting gears and redefining what it means to lead on the track.
            </p>

            <p class="font-bold text-gray-600 text-base pb-6">
                Buckle up and get ready—the new era of motorsport is here. Every rev of the engine accelerates us into a future defined by resilience, innovation, and passion.
            </p>

            <a 
                href="/blog"
                class="uppercase bg-blue-300 hover:bg-blue-400 text-white text-base font-extrabold py-3 px-8 rounded-3xl shadow-md transition duration-300">
                Find Out More
            </a>
        </div>
    </div>

 <!-- What to Look Out For Section as Cute Cards -->
<div class="container mx-auto py-12">
    <h2 class="text-center text-3xl font-bold text-pink-500 mb-8">What to Look Out For</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
        <!-- Card 1: Rising Talent Spotlights -->
        <div class="bg-white rounded-lg shadow-lg p-6 flex flex-col items-center transition transform hover:-translate-y-1 hover:shadow-xl">
            <i class="fas fa-trophy text-4xl text-pink-400 mb-4"></i>
            <span class="text-xl font-bold text-purple-600 text-center">Rising Talent Spotlights</span>
        </div>
        <!-- Card 2: Behind the Scenes -->
        <div class="bg-white rounded-lg shadow-lg p-6 flex flex-col items-center transition transform hover:-translate-y-1 hover:shadow-xl">
            <i class="fas fa-camera-retro text-4xl text-blue-400 mb-4"></i>
            <span class="text-xl font-bold text-purple-600 text-center">Behind the Scenes</span>
        </div>
        <!-- Card 3: Technical Innovations -->
        <div class="bg-white rounded-lg shadow-lg p-6 flex flex-col items-center transition transform hover:-translate-y-1 hover:shadow-xl">
            <i class="fas fa-cogs text-4xl text-purple-400 mb-4"></i>
            <span class="text-xl font-bold text-purple-600 text-center">Technical Innovations</span>
        </div>
        <!-- Card 4: Evolution of Women's Racing -->
        <div class="bg-white rounded-lg shadow-lg p-6 flex flex-col items-center transition transform hover:-translate-y-1 hover:shadow-xl">
            <i class="fas fa-flag-checkered text-4xl text-pink-400 mb-4"></i>
            <span class="text-xl font-bold text-purple-600 text-center">Evolution of Women's Racing</span>
        </div>
    </div>
</div>


    
 <!-- Top Selections Section -->
 <div class="text-center py-16">
    <h2 class="text-4xl font-bold py-10 text-pink-500">Top Selections</h2>
    <div class="sm:grid grid-cols-2 w-4/5 mx-auto gap-10">
        <!-- Top Helmet Section -->
        <div class="flex flex-col items-center bg-gradient-to-r from-pink-100 via-purple-100 to-blue-100 p-6 rounded-lg shadow-md">
            <h3 class="text-2xl font-bold text-purple-600 mb-4">Helmet of the Week</h3>
            @if($topHelmet)
                <img src="{{ asset('images/' . $topHelmet->image_path) }}" alt="{{ $topHelmet->title }}" class="w-full h-48 object-contain rounded mb-4">
                <p class="text-xl font-bold text-purple-600">{{ $topHelmet->title }}</p>
                <p class="text-gray-600 text-sm">{{ $topHelmet->inspiration }}</p>
                <p class="mt-2 text-gray-700">Votes: {{ $topHelmet->votes }}</p>
                <a href="{{ route('helmets.index') }}" class="mt-4 inline-block bg-pink-300 hover:bg-pink-400 text-white py-2 px-4 rounded-full transition duration-300 shadow">
                    View All Helmets
                </a>
            @else
                <p>No helmet data available.</p>
            @endif
        </div>
        <!-- Top Blog Post Section -->
        <div class="flex flex-col items-center bg-gradient-to-r from-pink-100 via-purple-100 to-blue-100 p-6 rounded-lg shadow-md">
            <h3 class="text-2xl font-bold text-purple-600 mb-4">Most Liked Blog Post</h3>
            @if($topPost)
                <img src="{{ asset('images/' . rawurlencode($topPost->image_path)) }}" alt="{{ $topPost->title }}" class="w-full h-48 object-cover rounded mb-4">
                <p class="text-xl font-bold text-purple-600">{{ $topPost->title }}</p>
                <p class="text-gray-600 text-sm">{{ Str::limit($topPost->description, 100) }}</p>
                <p class="mt-2 text-gray-700">Likes: {{ $topPost->likes->count() }}</p>
                <a href="{{ route('blog.show', $topPost->slug) }}" class="mt-4 inline-block bg-blue-300 hover:bg-blue-400 text-white py-2 px-4 rounded-full transition duration-300 shadow">
                    Read Post
                </a>
            @else
                <p>No blog post data available.</p>
            @endif
        </div>
    </div>
</div>
@endsection
