@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-10">
    <div class="bg-gradient-to-r from-pink-100 via-purple-100 to-blue-100 p-6 rounded-lg shadow-lg my-10">
        <h2 class="text-3xl font-bold text-pink-500 mb-6 text-center">Helmet of the Week</h2>
        @if($helmets->isEmpty())
            <p class="text-center text-gray-600">No helmets available at the moment. Check back soon!</p>
        @else
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 justify-items-center">
                @foreach($helmets as $helmet)
                    <div class="relative bg-white rounded-lg p-4 shadow-md hover:shadow-xl transition duration-300 w-full max-w-sm">
                        @if($helmet->is_winner)
                            <div class="absolute top-0 right-0 bg-yellow-400 text-black text-xs font-bold px-2 py-1 rounded-bl-lg">
                                Winner!
                            </div>
                        @endif
                        <img src="{{ asset('images/' . $helmet->image_path) }}" alt="{{ $helmet->title }}" class="w-full h-48 object-cover object-center rounded">
                        <h3 class="mt-4 text-xl font-bold text-purple-600">{{ $helmet->title }}</h3>
                        <p class="text-gray-600 text-sm mt-2">{{ $helmet->inspiration }}</p>
                        <div class="mt-4 text-center">
                            <form action="{{ route('helmets.vote', $helmet->id) }}" method="POST">
                                @csrf
                                <button type="submit" class="bg-pink-300 hover:bg-pink-400 text-white py-1 px-4 rounded-full transition duration-300">
                                    Vote ({{ $helmet->votes }})
                                </button>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</div>
@endsection
