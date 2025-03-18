@extends('layouts.app')

@section('content')
    <h1>Search Results for "{{ $query }}"</h1>

    @if($posts->isEmpty())
        <p>No results found.</p>
    @else
        <ul>
            @foreach($posts as $post)
                <li>
                    <a href="{{ route('blog.show', $post->id) }}">{{ $post->title }}</a>
                    <p>{{ Str::limit($post->content, 100) }}</p>
                </li>
            @endforeach
        </ul>
    @endif
@endsection
