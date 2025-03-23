@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-10">
    <div class="bg-gradient-to-r from-pink-100 via-purple-100 to-blue-100 p-6 rounded-lg shadow-lg my-10">
        <h2 class="text-3xl font-bold text-pink-500 mb-4 text-center">Helmet of the Week</h2>
        
        <!-- Disclaimer -->
        <p class="text-center text-sm text-gray-600 mb-6">
            <i class="fas fa-info-circle text-pink-400 mr-2"></i>
            Note: Each user can vote only twice in total.
        </p>
        
        <!-- Admin-only Add Helmet Button -->
        @if(auth()->check() && auth()->user()->email === 'admin@admin.com')
            <div class="text-center mb-6">
                <a href="{{ route('helmets.create') }}" class="inline-block bg-green-300 hover:bg-green-400 text-white py-2 px-4 rounded-full transition duration-300 shadow">
                    Add Helmet
                </a>
            </div>
        @endif

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
                        <div class="w-full h-48 flex items-center justify-center overflow-hidden rounded">
                            <img src="{{ asset('images/' . $helmet->image_path) }}" alt="{{ $helmet->title }}" class="w-full max-h-48 object-contain object-center">
                        </div>
                        <h3 class="mt-4 text-xl font-bold text-purple-600">{{ $helmet->title }}</h3>
                        <p class="text-gray-600 text-sm mt-2">{{ $helmet->inspiration }}</p>
                        <div class="mt-4 text-center">
                            @if(auth()->check() && auth()->user()->email === 'admin@admin.com')
                                <div class="flex space-x-2 justify-center">
                                    <a href="{{ route('helmets.edit', $helmet->id) }}" class="bg-blue-500 hover:bg-blue-600 text-white py-1 px-4 rounded-full transition duration-300">
                                        Edit
                                    </a>
                                    <form action="{{ route('helmets.destroy', $helmet->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="bg-red-500 hover:bg-red-600 text-white py-1 px-4 rounded-full transition duration-300">
                                            Delete
                                        </button>
                                    </form>
                                </div>
                            @else
                                <form action="{{ route('helmets.vote', $helmet->id) }}" method="POST">
                                    @csrf
                                    <button type="submit" class="bg-pink-300 hover:bg-pink-400 text-white py-1 px-4 rounded-full transition duration-300">
                                        Vote ({{ $helmet->votes }})
                                    </button>
                                </form>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</div>
@endsection
