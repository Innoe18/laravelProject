@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-10">
    <h1 class="text-3xl font-bold text-center text-gray-800 mb-8">Submit a Meme</h1>
    
    @if($errors->any())
        <div class="mb-4">
            <ul class="list-disc list-inside text-red-500">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('memes.store') }}" method="POST" enctype="multipart/form-data" class="max-w-lg mx-auto bg-white p-8 rounded-lg shadow-md">
        @csrf
        <div class="mb-4">
            <label for="title" class="block text-gray-700 font-bold mb-2">Title</label>
            <input type="text" name="title" id="title" value="{{ old('title') }}" class="w-full border border-gray-300 p-2 rounded" required>
        </div>
        <div class="mb-4">
            <label for="image" class="block text-gray-700 font-bold mb-2">Image</label>
            <input type="file" name="image" id="image" class="w-full border border-gray-300 p-2 rounded" required>
        </div>
        <div class="mb-4">
            <label for="description" class="block text-gray-700 font-bold mb-2">Description</label>
            <textarea name="description" id="description" rows="4" class="w-full border border-gray-300 p-2 rounded" placeholder="Optional"></textarea>
        </div>
        <div class="flex justify-end">
            <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">
                Submit Meme
            </button>
        </div>
    </form>
</div>
@endsection
