@extends('layouts.app')

@section('content')
<main class="sm:container sm:mx-auto sm:max-w-lg sm:mt-10">
    <div class="flex">
        <div class="w-full">
            <section class="flex flex-col break-words bg-gradient-to-br from-pink-100 to-purple-200 sm:border-1 sm:rounded-lg sm:shadow-md sm:shadow-purple-300">

                <header class="font-semibold bg-purple-300 text-white py-5 px-6 sm:py-6 sm:px-8 sm:rounded-t-md text-center text-xl">
                    {{ __('Register') }}
                </header>

                <form class="w-full px-6 space-y-6 sm:px-10 sm:space-y-8" method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="flex flex-wrap">
                        <label for="name" class="block text-purple-800 text-sm font-bold mb-2 sm:mb-4">
                            {{ __('Name') }}:
                        </label>

                        <input id="name" type="text"
                            class="form-input w-full rounded-md border-2 border-purple-300 focus:ring-purple-500 focus:border-purple-500 @error('name') border-red-500 @enderror" 
                            name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>

                    <div class="flex flex-wrap">
                        <label for="email" class="block text-purple-800 text-sm font-bold mb-2 sm:mb-4">
                            {{ __('E-Mail Address') }}:
                        </label>

                        <input id="email" type="email"
                            class="form-input w-full rounded-md border-2 border-purple-300 focus:ring-purple-500 focus:border-purple-500 @error('email') border-red-500 @enderror" 
                            name="email" value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>

                    <div class="flex flex-wrap">
                        <label for="password" class="block text-purple-800 text-sm font-bold mb-2 sm:mb-4">
                            {{ __('Password') }}:
                        </label>

                        <input id="password" type="password"
                            class="form-input w-full rounded-md border-2 border-purple-300 focus:ring-purple-500 focus:border-purple-500 @error('password') border-red-500 @enderror" 
                            name="password" required autocomplete="new-password">

                        @error('password')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>

                    <div class="flex flex-wrap">
                        <label for="password-confirm" class="block text-purple-800 text-sm font-bold mb-2 sm:mb-4">
                            {{ __('Confirm Password') }}:
                        </label>

                        <input id="password-confirm" type="password"
                            class="form-input w-full rounded-md border-2 border-purple-300 focus:ring-purple-500 focus:border-purple-500" 
                            name="password_confirmation" required autocomplete="new-password">
                    </div>

                    <div class="flex flex-wrap">
                        <button type="submit"
                            class="w-full font-bold p-3 rounded-lg text-base leading-normal text-white bg-gradient-to-r from-purple-400 to-pink-400 hover:from-pink-500 hover:to-purple-500 transition-all duration-300 shadow-md">
                            {{ __('Register') }}
                        </button>

                        <p class="w-full text-xs text-center text-purple-800 my-6 sm:text-sm sm:my-8">
                            {{ __('Already have an account?') }}
                            <a class="text-pink-500 hover:text-pink-700 no-underline hover:underline font-semibold" href="{{ route('login') }}">
                                {{ __('Login') }}
                            </a>
                        </p>
                    </div>
                </form>

            </section>
        </div>
    </div>
</main>
@endsection
