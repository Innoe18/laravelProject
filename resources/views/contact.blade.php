@extends('layouts.app')

@section('content')
<div class="min-h-screen flex items-center justify-center bg-gradient-to-r from-pink-100 via-purple-100 to-blue-100 py-12">
    <div class="bg-white bg-opacity-90 p-10 rounded-lg shadow-2xl max-w-3xl w-full">
        <div class="text-center mb-8">
            <h1 class="text-4xl font-extrabold text-pink-500 mb-2">Contact Us</h1>
            <p class="text-lg text-gray-600">We'd love to hear from you! Whether it's a question, feedback, or just a hello, get in touch.</p>
        </div>
        <form action="{{ route('contact.send') }}" method="POST" class="space-y-6">
            @csrf
            <div>
                <label for="name" class="block text-purple-700 text-lg font-bold mb-2">Name</label>
                <input type="text" id="name" name="name" required placeholder="Your Name"
                       class="w-full p-3 border border-purple-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-pink-300 transition duration-300">
            </div>
            <div>
                <label for="email" class="block text-purple-700 text-lg font-bold mb-2">Email</label>
                <input type="email" id="email" name="email" required placeholder="Your Email"
                       class="w-full p-3 border border-purple-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-pink-300 transition duration-300">
            </div>
            <div>
                <label for="subject" class="block text-purple-700 text-lg font-bold mb-2">Subject</label>
                <input type="text" id="subject" name="subject" required placeholder="Subject"
                       class="w-full p-3 border border-purple-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-pink-300 transition duration-300">
            </div>
            <div>
                <label for="message" class="block text-purple-700 text-lg font-bold mb-2">Message</label>
                <textarea id="message" name="message" required rows="5" placeholder="Your Message"
                          class="w-full p-3 border border-purple-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-pink-300 transition duration-300"></textarea>
            </div>
            <div class="text-center">
                <button type="submit"
                        class="w-full uppercase bg-gradient-to-r from-purple-400 via-pink-400 to-blue-400 hover:from-purple-500 hover:via-pink-500 hover:to-blue-500 text-white font-extrabold py-3 px-8 rounded-3xl shadow-md transition duration-300">
                    Send Message
                </button>
            </div>
        </form>
        <div class="mt-8 text-center text-gray-600">
            <p class="mb-2">Or reach us at</p>
            <p class="font-bold">contact@f1academyblog.com</p>
            <p class="mt-2">Follow us on social media for the latest updates!</p>
            <div class="flex justify-center space-x-4 mt-4">
                <a href="#" class="text-blue-500 hover:text-blue-700"><i class="fab fa-twitter fa-2x"></i></a>
                <a href="#" class="text-pink-500 hover:text-pink-700"><i class="fab fa-instagram fa-2x"></i></a>
                <a href="#" class="text-purple-500 hover:text-purple-700"><i class="fab fa-facebook fa-2x"></i></a>
            </div>
        </div>
    </div>
</div>
@endsection
