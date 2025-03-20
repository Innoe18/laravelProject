@extends('layouts.app')

@section('content')
<div class="relative min-h-screen flex items-center justify-center bg-gradient-to-r from-pink-200 via-purple-200 to-blue-200">
    <!-- Optionally, you can add a very subtle overlay if needed (or remove this div entirely) -->
    <!-- <div class="absolute inset-0 bg-white bg-opacity-10"></div> -->

    <!-- Content Container -->
    <div class="relative z-10 bg-white bg-opacity-80 p-12 rounded-lg shadow-2xl max-w-3xl text-center">
        <h1 class="text-5xl font-extrabold mb-6 text-pink-500 flex items-center justify-center gap-3">
            <!-- Cute heart icon -->
            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 fill-current text-purple-400" viewBox="0 0 20 20">
                <path d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 18.343l-6.828-6.829a4 4 0 010-5.656z"/>
            </svg>
            About F1 Academy
        </h1>
        
        <p class="text-lg leading-relaxed mb-8">
            Welcome to <span class="font-semibold text-purple-600">F1 Academy – Females in Motorsport</span>,
            your premier destination for inspiring stories, exclusive insights, and the latest updates 
            celebrating the incredible women shaping the future of racing.
        </p>
        
        <!-- Information Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 text-left">
            <!-- Mission Card -->
            <div class="bg-white bg-opacity-90 p-6 rounded-lg shadow-md hover:shadow-xl transition duration-300 flex items-start gap-4">
                <!-- Mission Icon -->
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-pink-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-2.21 0-4 1.79-4 4v8h8v-8c0-2.21-1.79-4-4-4z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8V4m0 0l-3 3m3-3l3 3" />
                </svg>
                <div>
                    <h2 class="text-xl font-bold text-purple-500 mb-2">Our Mission</h2>
                    <p class="text-gray-700">
                        To empower and inspire future female racers by sharing heartfelt stories, triumphs, and challenges 
                        from the fast-paced world of motorsport.
                    </p>
                </div>
            </div>
            <!-- Vision Card -->
            <div class="bg-white bg-opacity-90 p-6 rounded-lg shadow-md hover:shadow-xl transition duration-300 flex items-start gap-4">
                <!-- Vision Icon -->
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.477 0 8.268 2.943 9.542 7-1.274 4.057-5.065 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                </svg>
                <div>
                    <h2 class="text-xl font-bold text-purple-500 mb-2">Our Vision</h2>
                    <p class="text-gray-700">
                        To create a community where the voices of women in motorsport are celebrated, inspiring change and fostering creativity.
                    </p>
                </div>
            </div>
            <!-- Community Card -->
            <div class="col-span-1 md:col-span-2 bg-white bg-opacity-90 p-6 rounded-lg shadow-md hover:shadow-xl transition duration-300 flex items-start gap-4">
                <!-- Community Icon -->
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-purple-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M9 20H4v-2a3 3 0 015.356-1.857M16 7a4 4 0 11-8 0 4 4 0 018 0z" />
                </svg>
                <div>
                    <h2 class="text-xl font-bold text-purple-500 mb-2">Join Our Community</h2>
                    <p class="text-gray-700">
                        Connect with fellow enthusiasts, share your passion, and celebrate the achievements of women in motorsport.
                    </p>
                </div>
            </div>
        </div>
        
        <!-- Call-to-Action Button -->
        <div class="mt-10">
            <a href="{{ url('/') }}" class="bg-pink-300 hover:bg-pink-400 text-gray-800 font-semibold py-3 px-6 rounded-full text-lg transition duration-300 shadow-lg">
                Explore Our Blog
            </a>
        </div>
    </div>
</div>
@endsection
