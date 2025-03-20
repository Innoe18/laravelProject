@extends('layouts.app')

@section('content')
<div class="w-4/5 mx-auto text-left">
    <div class="py-10">
        <h1 class="text-5xl font-bold text-purple-600 text-center">Update Post</h1>
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
    <form action="/blog/{{ $post->slug }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <input 
            type="text"
            name="title"
            value="{{ $post->title }}"
            class="bg-transparent block border-b-2 border-purple-300 w-full h-20 text-4xl font-semibold text-purple-700 outline-none focus:ring-2 focus:ring-pink-300 transition duration-300"
            placeholder="Title...">

        <textarea 
            name="description"
            placeholder="Description..."
            class="py-10 bg-transparent block border-b-2 border-purple-300 w-full h-60 text-xl text-gray-700 outline-none focus:ring-2 focus:ring-pink-300 transition duration-300">{{ $post->description }}</textarea> 

        <button    
            type="submit"
            class="mt-10 w-full uppercase bg-gradient-to-r from-purple-400 via-pink-400 to-blue-400 text-white text-lg font-extrabold py-4 px-8 rounded-3xl shadow-md transition-all duration-300 hover:shadow-lg hover:from-purple-500 hover:via-pink-500 hover:to-blue-500">
            Submit Post
        </button>
    </form>
</div>
@endsection
