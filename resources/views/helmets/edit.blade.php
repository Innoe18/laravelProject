@extends('layouts.app')

@section('content')
<div class="w-4/5 mx-auto text-left">
    <div class="py-10">
        <h1 class="text-5xl font-bold text-purple-600 text-center">Edit Helmet</h1>
    </div>
</div>

@if ($errors->any())
    <div class="w-4/5 mx-auto">
        <ul>
            @foreach ($errors->all() as $error)
                <li class="w-full mb-4 text-gray-100 bg-red-400 rounded-2xl py-4 px-4">
                    {{ $error }}
                </li>
            @endforeach
        </ul>
    </div>
@endif

<div class="w-4/5 mx-auto pt-10">
    <form action="{{ route('helmets.update', $helmet->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <!-- Helmet Title -->
        <div>
            <label for="title" class="block text-purple-700 text-lg font-bold mb-2">Helmet Title</label>
            <input 
                type="text" 
                id="title" 
                name="title" 
                value="{{ $helmet->title }}" 
                required 
                class="bg-transparent block border-b-2 border-purple-300 w-full h-20 text-4xl font-semibold text-purple-700 outline-none focus:ring-2 focus:ring-pink-300 transition duration-300"
            >
        </div>

        <!-- Inspiration -->
        <div class="mt-6">
            <label for="inspiration" class="block text-purple-700 text-lg font-bold mb-2">Inspiration</label>
            <textarea 
                id="inspiration" 
                name="inspiration" 
                required 
                rows="4" 
                class="py-6 bg-transparent block border-b-2 border-purple-300 w-full text-xl text-gray-700 outline-none focus:ring-2 focus:ring-pink-300 transition duration-300"
            >{{ $helmet->inspiration }}</textarea>
        </div>

        <!-- Optionally, you can allow updating the image as well -->
        <!-- 
        <div class="mt-6">
            <label class="w-44 flex flex-col items-center px-4 py-3 bg-white rounded-lg shadow-lg tracking-wide uppercase border border-purple-300 cursor-pointer transition duration-300 hover:bg-purple-50">
                <span class="mt-2 text-base leading-normal text-purple-700">
                    Change Helmet Image
                </span>
                <input type="file" name="image" class="hidden">
            </label>
        </div>
        -->

        <div class="mt-10">
            <button type="submit" class="w-full uppercase bg-gradient-to-r from-purple-400 via-pink-400 to-blue-400 text-white text-lg font-extrabold py-3 px-8 rounded-3xl shadow-md transition-all duration-300 hover:shadow-lg hover:from-purple-500 hover:via-pink-500 hover:to-blue-500">
                Update Helmet
            </button>
        </div>
    </form>
</div>
@endsection
