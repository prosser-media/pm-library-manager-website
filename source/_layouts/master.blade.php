<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="referrer" content="always">
        <link rel="canonical" href="{{ $page->getUrl() }}">
        <meta name="description" content="{{ $page->description }}">
        <title>@yield('title') | {{ $page->title }}</title>
        <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200;300;400;600;700;800;900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">

        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    </head>
    <body class="antialiased leading-none text-gray-900 bg-gray-100">
        <div id="app">
            <div class="min-h-layout">
                <header class="bg-white shadow-lg border-t-3 border-primary" x-data="{ isOpen: false }">
                    <div class="container mx-auto flex justify-betwen items-center flex-col lg:flex-row w-full">
                        <div class="flex justify-between w-full lg:w-auto">
                            <div class="flex items-center space-x-3">
                                <a href="https://prossermedia.co.uk" target="_blank" class="block pl-4 py-3 focus:shadow-outline outline-none">
                                    <img src="https://res.cloudinary.com/prosser-media-co-u-k/image/upload/v1577046801/logo_dark.png" alt="Prosser Media Logo" class="h-12">
                                </a>
                                <a href="/" class="block text-lg py-6 focus:shadow-outline outline-none">
                                    {{ $page->title }}
                                </a>
                            </div>
                            <button class="block p-4 lg:hidden focus:shadow-outline outline-none" @click="isOpen = !isOpen" @click.away="isOpen = false">
                                <svg class="h-8" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" viewBox="0 0 24 24" stroke="currentColor"><path d="M4 6h16M4 12h16m-7 6h7"></path></svg>
                            </button>
                        </div>
                        <div class="flex flex-col lg:flex-row w-full lg:w-auto lg:flex-1 lg:justify-end lg:imp:flex" x-show="isOpen">
                            <a href="{{ $page->baseUrl }}/" class="block py-3 lg:py-7 text-left px-4 hover:text-primary hover:bg-gray-100 transition duration-200 focus:shadow-outline outline-none">Home</a>
                            <a href="{{ $page->baseUrl }}/features" class="block py-3 lg:py-7 text-left px-4 hover:text-primary hover:bg-gray-100 transition duration-200 focus:shadow-outline outline-none {{ $page->selected('/features') }} ">Features</a>
                            <a href="{{ $page->baseUrl }}/documentation" class="block py-3 lg:py-7 text-left px-4 hover:text-primary hover:bg-gray-100 transition duration-200 focus:shadow-outline outline-none {{ $page->selected('/documentation') }} ">Documentation</a>
                            <a href="{{ $page->baseUrl }}/get-started" class="block py-3 my-4 text-center mx-4 lg:mx-0 lg:ml-2 px-4 text-primary border border-primary rounded-md hover:bg-primary hover:text-white transition duration-300 focus:shadow-outline outline-none {{ $page->selected_button('/get-started') }}">Get Started</a>
                        </div>
                    </div>
                </header>

                <main>
                    @yield('content')
                </main>
            </div>
            <footer class="bg-white">
                <div class="container py-8">
                    <p class="text-center">Copyright &copy; Prosser Media {{ date('Y') }}</p>
                </div>
            </footer>
        </div>
    </body>
</html>
