<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        @livewireStyles

        <!-- Scripts -->
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.6.0/dist/alpine.js" defer></script>
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @livewire('navigation-dropdown')

            <!-- Page Heading -->
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>



        </div>


        <div class="bg-white border-t">
            <div class="container mx-auto px-4">
                <div class="md:flex justify-between items-center text-sm">
                    <div class="text-center md:text-left py-3 md:py-4 border-b md:border-b-0">
                        <a href="#" class="no-underline text-grey-dark mr-4">Home</a>
                        <a href="#" class="no-underline text-grey-dark mr-4">Blocks</a>
                        <a href="#" class="no-underline text-grey-dark mr-4">Transactions</a>
                        <a href="#" class="no-underline text-grey-dark mr-4">Wallets</a>
                        <a href="#" class="no-underline text-grey-dark">Delegates</a>
                    </div>
                    <div class="md:flex md:flex-row-reverse items-center py-4">
                        <div class="text-center mb-4 md:mb-0 md:flex">
                            <div class="inline-block relative ">
                                <select class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
                                    <option>Development</option>
                                    <option>Production</option>
                                </select>
                                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                                </div>
                            </div>
                        </div>
                        <div class="text-grey text-center md:mr-4">&copy; 2020 Blocky</div>
                    </div>
                </div>
            </div>
        </div>
        @stack('modals')

        @livewireScripts
    </body>
</html>
