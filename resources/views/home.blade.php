@extends('layouts.app')

@section('content')
<main class="min-h-screen flex items-center justify-center bg-cover bg-center" style="background-image: url('{{ asset('images/background.jpg') }}');">
    <div class="w-full max-w-lg bg-gray-800 rounded-lg shadow-lg overflow-hidden">
        <header class="bg-gray-700 text-white py-4 px-6">
            <h2 class="text-2xl font-semibold">Dashboard</h2>
        </header>
        <div class="p-6">
            @if (session('status'))
                <div class="mb-4 text-sm border border-t-8 rounded text-green-700 border-green-600 bg-green-100 px-3 py-4" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <p class="text-gray-300 text-lg">
                You are logged in!
            </p>
        </div>
    </div>
</main>
@endsection
