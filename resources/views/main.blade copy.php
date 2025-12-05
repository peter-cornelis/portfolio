<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="icon" href="/favicon.ico" sizes="any">
        <link rel="icon" href="/favicon.svg" type="image/svg+xml">
        <link rel="apple-touch-icon" href="/apple-touch-icon.png">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..24,300,1,-25&icon_names=dark_mode,light_mode,minimize">

        <!-- Styles / Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @livewireScripts

    </head>
    <body class="bg-mainLight dark:bg-mainDark">
        <header class="p-4 bg-mainDark dark:bg-black/30 shadow/30">
            <div class="grid grid-cols-[auto_1fr] max-w-7xl mx-auto">
                <h1 class="text-lg font-bold text-mainLight my-auto">
                    Peter's portfolio
                </h1>
                <nav class="flex relative justify-center">
                    <ul class="flex gap-2 w-fit">
                        <x-nav-link href="/" color="bg-green">Over mij</x-nav-link>
                        <x-nav-link href="/" color="bg-purple">Vaardigheden</x-nav-link>
                        <x-nav-link href="/" color="bg-red">Ervaring</x-nav-link>
                        <x-nav-link href="/" color="bg-blue">Projecten</x-nav-link>
                        <x-nav-link href="/" color="bg-pinkish">Contact</x-nav-link>
                    </ul>
                    <x-theme-toggle/>  
                </nav>
            </div>
        </header>

        <main class="max-w-6xl mx-auto">
            <x-section>
                Test
            </x-section>
        </main>

        <footer>

        </footer>
    </body>
</html>
