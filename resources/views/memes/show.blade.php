@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-10">
    <div class="max-w-2xl mx-auto bg-white rounded-lg shadow-md overflow-hidden">
        <img src="{{ asset('images/memes/' . $meme->image_path) }}" alt="{{ $meme->title }}" class="w-full h-64 object-cover">
        <div class="p-6">
            <h1 class="text-3xl font-bold text-gray-800 mb-4">{{ $meme->title }}</h1>
            <p class="text-gray-600 mb-6">{{ $meme->description }}</p>
            <a href="{{ route('memes.index') }}" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">
                Back to Gallery
            </a>
        </div>
    </div>
</div>
@endsection
