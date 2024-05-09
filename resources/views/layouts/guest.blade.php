<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Login</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased ">
        <div class="min-h-screen flex  sm:justify-center items-center pt-6 sm:pt-0  bg-gray-700 ">
            
        <div class="border border-white h-[84vh]  overflow-scroll overflow-x-hidden overflow-y-hidden flex rounded-lg">
            <div>
                <a href="/" wire:navigate>
                    <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
                </a>
            </div>

            <div class="bg-gray-900 w-[300px] h-[90vh]  overflow-hidden rounded-lg text-center pt-[170px]">
                <b class="text-yellow-400 text-4xl font-extrabold">CUHMS</b><img src="photos/CUHMS.png" alt="cuhms" class="w-[90px] pt-3 mx-auto">
            </div>
            

            <div class="w-full sm:max-w-[350px]  px-6 py-4 bg-white  overflow-hidden rounded-lg">
                {{ $slot }}
            </div>
        </div>
        </div
    </body>
</html>
