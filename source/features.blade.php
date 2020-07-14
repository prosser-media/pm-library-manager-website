@extends('_layouts.master')

@section('title', 'Features')

@section('content')
<h1 class="font-black text-4xl text-primary tracking-tight text-center my-16">Features</h1>

<div class="container lg:max-w-2/3 my-16 px-4 flex flex-col lg:flex-row justify-between">
    <div class="w-full lg:w-1/2 text-center lg:text-left mb-6 lg:mb-0 lg:mr-6">
        <h2 class="font-bold text-2xl text-primary mb-5 border-b border-gray-500 pb-2 mx-auto lg:mx-0" style="width: 400px;">Easy to use management area</h2>
        {{-- <div class="h-2 border-b border-gray-500 w-48"></div> --}}
        <p class="text-gray-800 leading-normal">The management area has been designed so it can be used with little training. It has been created to make it intuitive, even for those who havent used a system like this.</p>
    </div>
    <div class="w-full lg:w-1/2">
        <img src="{{ $page->baseUrl }}/assets/images/dashboard-preview.png" alt="PM Library Manager Dashboard Preview" class="w-full">
    </div>
</div>

<div class="container lg:max-w-2/3 my-16 px-4">
    <div class="text-center">
        <h2 class="font-bold text-2xl text-primary mb-5 border-b border-gray-500 pb-2 mx-auto" style="width: 390px;">Customisable for all your needs</h2>
        {{-- <div class="h-2 border-b border-gray-500 w-48"></div> --}}
        <p class="text-gray-800 leading-normal">The comprehensive settings area allow for the management system to be customised for all your needs. Some of these include layouts and dark mode.</p>
    </div>
</div>

<div class="container lg:max-w-2/3 my-16 px-4">
    <div class="text-center">
    <h2 class="font-bold text-2xl text-primary mb-5 border-b border-gray-500 pb-2 mx-auto w-500">Comprehensive documentation and support</h2>
        {{-- <div class="h-2 border-b border-gray-500 w-48"></div> --}}
        <p class="text-gray-800 leading-normal">The detailed documentation available on this website and directly in the management software allows you to find what you need. Also you can get in touch if you aren't able to find what you need.</p>
    </div>
</div>

<div class="container lg:max-w-2/3 my-16 px-4 flex flex-col-reverse lg:flex-row-reverse justify-between ">
    <div class="w-full lg:w-1/2 text-center lg:text-left mb-6 lg:mb-0 lg:ml-6">
        <h2 class="font-bold text-2xl text-primary mb-5 border-b border-gray-500 pb-2 mx-auto lg:mx-0" style="width: 450px;">Self Hosted or Prosser Media Hosted</h2>
        {{-- <div class="h-2 border-b border-gray-500 w-48"></div> --}}
        <p class="text-gray-800 leading-normal">Choose to host the management software on your own servers or choose to host it on a Prosser Media server for a small cost.</p>
    </div>
    <div class="w-full lg:w-1/2">
        <img src="{{ $page->baseUrl }}/assets/images/hosting.jpg" alt="PM Library Manager Hosting Image" class="w-full shadow-lg">
    </div>
</div>

<div class="container lg:max-w-2/3 my-16 px-4">
    <div class="text-center">
    <h2 class="font-bold text-2xl text-primary mb-5 border-b border-gray-500 pb-2 mx-auto w-500">Custom solutions</h2>
        {{-- <div class="h-2 border-b border-gray-500 w-48"></div> --}}
        <p class="text-gray-800 leading-normal">If the Library Manager doesn't have all you need, get in touch and we may be able to give you a unique, custom solution.</p>
    </div>
</div>
@endsection
