@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-10">
    <div class="flex justify-between items-center mb-8">
        <h1 class="text-4xl font-bold text-gray-800">Meme Gallery</h1>
        @auth
            <a href="{{ route('memes.create') }}" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">
                Submit a Meme
            </a>
        @endauth
    </div>
    
    @if(session('message'))
        <div class="mb-6 text-center">
            <p class="mx-auto w-1/2 text-white bg-green-500 rounded-full py-3">
                {{ session('message') }}
            </p>
        </div>
    @endif

    @if($memes->isEmpty())
        <p class="text-center text-gray-600">No memes found. Be the first to add one!</p>
    @else
        <div class="grid gap-8 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3">
            @foreach($memes as $meme)
                <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition-shadow duration-300">
                    <img src="{{ asset('images/memes/' . $meme->image_path) }}" alt="{{ $meme->title }}" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h2 class="text-2xl font-bold text-gray-800 mb-2">{{ $meme->title }}</h2>
                        <p class="text-gray-600 mb-4">{{ Str::limit($meme->description, 100) }}</p>
                        <a href="{{ route('memes.show', $meme->id) }}" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-full transition duration-300">
                            View Meme
                        </a>
                        @auth
                            @if(Auth::user()->id === $meme->user_id)
                                <div class="mt-2 flex space-x-2">
                                    <a href="{{ route('memes.edit', $meme->id) }}" class="text-green-500 hover:text-green-700">Edit</a>
                                    <form action="{{ route('memes.destroy', $meme->id) }}" method="POST" onsubmit="return confirm('Are you sure?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-500 hover:text-red-700">Delete</button>
                                    </form>
                                </div>
                            @endif
                        @endauth
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div>
@endsection
