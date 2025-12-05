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
    <body class="min-h-screen bg-[#110c1e] bg-top bg-no-repeat bg-size-[100vw_380px] "
        style="background-image: url('{{ Vite::asset('resources/images/layered-waves-haikei.svg') }}')">
        <header class="px-8 py-4">
            <div class="grid grid-cols-[auto_1fr] max-w-7xl mx-auto">
                <h1>
                    Peter Cornelis
                </h1>
                <nav class="flex relative justify-center">
                    <ul class="flex gap-2 w-fit">
                        <x-nav-link href="/">Over mij</x-nav-link>
                        <x-nav-link href="/">Vaardigheden</x-nav-link>
                        <x-nav-link href="/">Ervaring</x-nav-link>
                        <x-nav-link href="/">Projecten</x-nav-link>
                        <x-nav-link href="/">Contact</x-nav-link>
                    </ul>
                    <x-theme-toggle/>  
                </nav>
            </div>
        </header>

        <main class="max-w-6xl mx-auto">
            <section class="mt-18 grid grid-cols-[auto_1fr] grid-rows-2">
                <img src="{{ Vite::asset('resources/images/profiel-15.avif') }}" alt="test" class="rounded-full border-6 border-red shadow-lg/70 row-span-2 mr-12">
                <h2 class="mt-24">Hey, ik ben Peter</h2>
                <p  class="text-mainLight text-xl mt-6">
                    Een Full-Stack PHP developer & liefhebber!
                    Lorem ipsum dolor sit amet. Sit dignissimos eveniet ut consequatur architecto est inventore voluptatem eos Quis saepe in voluptatum dolorem qui corporis autem. Sed voluptatem atque nam commodi neque non eaque laboriosam sed perferendis incidunt qui deleniti cupiditate et necessitatibus corporis.
                </p>
            </section>

            <section class="grid grid-cols-2 mt-16">
                <h2 class="text-center col-span-2">Vaardigheden</h2>
                <article class="w-fit py-8 ml-auto mr-10">
                    <h3 class="text-center pb-4">Computer Vaardigheden</h3>
                    <ul class="w-fit ml-4">
                        <x-star-rating :filled='3'>HTML</x-star-rating>
                        <x-star-rating :filled='3'>CSS</x-star-rating>
                        <x-star-rating :filled='3'>MySQL</x-star-rating>
                        <x-star-rating :filled='3'>Javascript</x-star-rating>
                        <x-star-rating :filled='3'>PHP</x-star-rating>
                    </ul>
                </article>
                <article class="grid grid-cols-2 w-fit py-8 ml-auto mr-10">
                    <div>
                        <h3 class="pb-4">Kwaliteitsgericht</h3>
                        <p>Werk afleveren om trots op te zijn, daar streef ik elke dag voor.</p>
                    </div>
                    <div>
                        <h3>Veerkracht</h3>
                        <p>Tegenslagen zijn een groeimoment, daar bijt ik me vol overgave door om de beloning later te kunnen plukken.</p>
                    </div>
                    <div>
                        <h3>Flexibel</h3>
                        <p>Inspringen voor collega's doe ik met plezier. Een 9-tot-5-mentaliteit is niet aan mij besteed.</p>
                    </div>
                    <div>
                        <h3>Talenkennis</h3>
                        <ul>
                            <li>Nederlands moedertaal</li>
                            <li>Engels goed</li>
                            <li>Frans beperkt</li>
                        </ul>
                    </div>
                </article>
            </section>

            <section class="mt-16">
                <h2 class="text-center">Ervaring</h2>
                <div>
                    <span></span>
                </div>
            </section>
        </main>
        <footer>

        </footer>
    </body>
</html>
