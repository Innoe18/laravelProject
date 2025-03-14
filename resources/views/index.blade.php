@extends('layouts.app')

@section('content')
    <div class="background-image grid grid-cols-1 m-auto">
        <div class="flex text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
                <h1 class="sm:text-white text-5xl uppercase font-bold text-shadow-md pb-14">
                    Grid Goddesses !!!
                </h1>
                <a 
                    href="/blog"
                    class="text-center bg-gray-50 text-gray-700 py-2 px-4 font-bold text-xl uppercase">
                    Read More
                </a>
            </div>
        </div>
    </div>

    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
        <div>
            <img src="https://www.thesportsdb.com/images/media/league/badge/d8g49u1685990479.png" width="700" alt="">
        </div>

        <div class="m-auto sm:m-auto text-left w-4/5 block">
            <h2 class="text-3xl font-extrabold text-gray-600">
                Revving Up for a New Era
            </h2>
            
            <p class="py-8 text-gray-500 text-s">
                The engines are roaring louder than ever—signaling not just a race, but a revolution. In today’s motorsport arena, a new generation of fearless, talented women is shifting gears and redefining what it means to lead on the track. No longer confined by tradition, these trailblazers are rewriting the rules and showing that passion, performance, and perseverance know no gender
            </p>

            <p class="font-extrabold text-gray-600 text-s pb-9">
                So buckle up and get ready—the new era of motorsport is here. With every rev of the engine, these women are not only racing toward victory but also accelerating us all into a future defined by resilience, innovation, and the unyielding spirit of champions.            </p>

            <a 
                href="/blog"
                class="uppercase bg-blue-500 text-gray-100 text-s font-extrabold py-3 px-8 rounded-3xl">
                Find Out More
            </a>
        </div>
    </div>

    <div class="text-center p-15 bg-black text-white">
        <h2 class="text-2xl pb-5 text-l"> 
           What to look out for
        </h2>

        <span class="font-extrabold block text-4xl py-1">
            Rising Talent Spotlights
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Behind the Scenes
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Technical Innovations in Motorsport
        </span>
        <span class="font-extrabold block text-4xl py-1">
            The Evolution of Women's Racing
        </span>
    </div>

    <div class="text-center py-15">
        <span class="uppercase text-s text-gray-400">
            Blog
        </span>

        <h2 class="text-4xl font-bold py-10">
            Recent Posts
        </h2>

        <p class="m-auto w-4/5 text-gray-500">
            Explore in-depth profiles and interviews with emerging drivers from the F1 Academy and beyond        </p>
    </div>

    <div class="sm:grid grid-cols-2 w-4/5 m-auto">
        <div class="flex bg-yellow-700 text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block">
                <span class="uppercase text-xs">
                    Lia Block
                </span>

                <h3 class="text-xl font-bold py-10">
                    Crowned the youngest American Rally Association Champion in 2023 at only 17 years old, the American traded the familiarity of off-road racing for the unknowns of open-wheel — racing on the streets of Jeddah only three months after first stepping into single-seaters.                </h3>

                <a 
                    href=""
                    class="uppercase bg-transparent border-2 border-gray-100 text-gray-100 text-xs font-extrabold py-3 px-5 rounded-3xl">
                    Find Out More
                </a>
            </div>
        </div>
        <div>
            <img src="https://cdn.pixabay.com/photo/2014/05/03/01/03/laptop-336704_960_720.jpg" alt="">
        </div>
    </div>
@endsection