@extends('layouts.app')

@section('content')
<main class="sm:container sm:mx-auto sm:max-w-lg sm:mt-10">
    <div class="flex">
        <div class="w-full">

            @if (session('resent'))
            <div class="text-sm border border-t-8 rounded text-green-700 border-green-500 bg-green-100 px-3 py-4 mb-4 text-center shadow-md">
                {{ __('A fresh verification link has been sent to your email address.') }}
            </div>
            @endif

            <section class="flex flex-col break-words bg-gradient-to-br from-pink-100 to-purple-200 sm:border-1 sm:rounded-lg sm:shadow-md sm:shadow-purple-300">
                <header class="font-semibold bg-purple-300 text-white py-5 px-6 sm:py-6 sm:px-8 sm:rounded-t-md text-center text-xl">
                    {{ __('Verify Your Email Address') }}
                </header>

                <div class="w-full flex flex-wrap text-purple-800 leading-normal text-sm p-6 space-y-4 sm:text-base sm:space-y-6 text-center">
                    <p>
                        {{ __('Before proceeding, please check your email for a verification link.') }}
                    </p>

                    <p>
                        {{ __('If you did not receive the email') }},
                        <a class="text-pink-500 hover:text-pink-700 font-semibold no-underline hover:underline cursor-pointer"
                            onclick="event.preventDefault(); document.getElementById('resend-verification-form').submit();">
                            {{ __('Click here to request another') }}
                        </a>.
                    </p>

                    <form id="resend-verification-form" method="POST" action="{{ route('verification.resend') }}" class="hidden">
                        @csrf
                    </form>
                </div>
            </section>
        </div>
    </div>
</main>
@endsection
