@extends('_layouts.master')

@section('title', 'Get Started')

@section('content')
<h1 class="font-black text-4xl text-primary tracking-tight text-center my-12">Get Started</h1>

<div class="container my-16 px-4 flex flex-col lg:flex-row justify-between">
    <div class="w-full lg:w-1/2 text-center lg:text-left">
        <h2 class="font-bold text-2xl text-primary mb-5 border-b border-gray-500 w-48 pb-2 mx-auto lg:mx-0">Get in Touch</h2>
        <form action="https://formspree.io/xnqgovbg" method="POST">
            <label for="name" class="block mb-2 text-gray-800">Name:</label>
            <input type="text" name="name" id="name" class="bg-white rounded-full p-3 block w-full focus:shadow-outline outline-none shadow-lg mb-5" autocomplete="name">

            <label for="email" class="block mb-2 text-gray-800">Email:</label>
            <input type="email" name="email" id="email" class="bg-white rounded-full p-3 block w-full focus:shadow-outline outline-none shadow-lg mb-5" autocomplete="email">

            <label for="message" class="block mb-2 text-gray-800">Message:</label>
            <textarea name="message" id="message" class="bg-white p-3 block w-full focus:shadow-outline outline-none shadow-lg mb-5 h-32" style="border-radius: 32px"></textarea>

            <button class="block p-3 w-full text-center bg-primary text-white border border-primary hover:bg-gray-100 hover:text-primary transition duration-300 rounded-full">Send</button>
        </form>
    </div>
    <div class="w-full lg:w-1/2 mb-6 lg:mb-0 lg:ml-6">
        <h2 class="font-bold text-2xl text-primary mb-5 border-b border-gray-500 w-32 pb-2 mx-auto lg:mx-0">Demo</h2>
        <p class="leading-normal text-gray-800">Click <a href="#" class="text-primary hover:underline">here</a> for a demo to see if you like the management system. For help, please refer to the <a href="{{ $page->baseUrl }}/documentation" class="text-primary hover:underline">documentation</a>.</p>
        <p class="leading-normal mt-2 text-gray-800">If you try to add, edit or delete, this will not work due to it being a public demo. The email and password will be inputted automatically when trying to login.</p>

        <div class="h-1 w-32 border-b my-6 border-gray-500"></div>
        <p class="leading-normal text-gray-800">At the moment, you must get in touch to set up your library management system. Please fill in the contact form on this page or <a href="mailto:contact@prossermedia.co.uk" class="text-primary hover:underline">email</a> to get started.</p>
    </div>
</div>
@endsection
