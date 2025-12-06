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
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..24,300,1,-25&icon_names=brightness_empty,dark_mode">

        <!-- Styles / Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @livewireScripts

    </head>
    <body class="min-h-screen bg-mainLight dark:bg-mainDark bg-top bg-no-repeat bg-size-[100vw_340px] bg-[url('/images/light-waves.svg')] dark:bg-[url('/images/dark-waves.svg')]">
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
            <section class="px-4 mt-16 grid grid-cols-[auto_1fr] grid-rows-2 gap-6">
                <img src="images/profiel-15.avif" alt="test" class="rounded-full border-6 border-red shadow-lg/70 row-span-3 mr-12">
                <h2 class="mt-20">Hey, ik ben Peter</h2>
                <p  class="text-lg">
                    Een Full-Stack PHP developer & liefhebber!
                    Lorem ipsum dolor sit amet. Sit dignissimos eveniet ut consequatur architecto est inventore voluptatem eos Quis saepe in voluptatum dolorem qui corporis autem. Sed voluptatem atque nam commodi neque non eaque laboriosam sed perferendis incidunt qui deleniti cupiditate et necessitatibus corporis.
                </p>
                <ul class="flex gap-4">
                    <li>
                        <a href="" target="_blank">
                            <x-svgs.linkedin/>
                        </a>
                    </li>
                    <li>
                        <a href="" target="_blank">
                            <x-svgs.github/>                      
                        </a>
                    </li>
                    <li>
                        <a href="" target="_blank">
                            <x-svgs.article-person/>
                        </a>
                    </li>
                </ul>
            </section>

            <section class="grid grid-cols-[45%_55%] mt-16 px-4 gap-10">
                <h2 class="text-center col-span-2">Vaardigheden</h2>
                <article class="w-fit ml-auto mr-10">
                    <h3 class="text-center">Computer Vaardigheden</h3>
                    <ul class="w-fit">
                        <x-star-rating :filled='3'>HTML</x-star-rating>
                        <x-star-rating :filled='3'>CSS</x-star-rating>
                        <x-star-rating :filled='3'>MySQL</x-star-rating>
                        <x-star-rating :filled='3'>Javascript</x-star-rating>
                        <x-star-rating :filled='3'>PHP</x-star-rating>
                    </ul>
                </article>
                <article class="grid grid-cols-2 w-fit gap-8 ml-auto ">
                    <div>
                        <h3>Kwaliteitsgericht</h3>
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
                        <ul class="dark:text-mainLight text-mainDark w-fit">
                            <li class="grid grid-cols-2 gap-8 text-left">
                                <span class="font-bold text-right">Nederlands</span>
                                moedertaal
                            </li>
                            <li class="grid grid-cols-2 gap-8 text-left">
                                <span class="font-bold text-right">Engels</span>
                                goed
                            </li>
                            <li class="grid grid-cols-2 gap-8 text-left">
                                <span class="font-bold text-right">Frans</span>
                                beperkt
                            </li>
                        </ul>
                    </div>
                </article>
            </section>

            <section class="mt-16 px-4">
                <h2 class="text-center">Ervaring</h2>
                <ol class="relative border-l border-mainDark/20 dark:border-mainLight/20 ml-6">                  
                    <x-timeline-item 
                        start="2025" 
                        end="heden" 
                        at="vdab"
                    >
                        full stack developer 
                    </x-timeline-item>
                    <x-timeline-item 
                        start="2015" 
                        end="2024" 
                        at="Codima BV"
                        :work="true"
                    >
                        PC-Technicus 
                    </x-timeline-item>
                    <x-timeline-item 
                        start="2007" 
                        end="2012" 
                        at="Colora Gent"
                        :work="true"
                    >
                        Winkelbediende  
                    </x-timeline-item>
                    <x-timeline-item 
                        end="2006" 
                        at="Sint-Vincentius Deinze"
                    >
                        7e Kantooradministratie en gegevensbeheer 
                    </x-timeline-item>
                </ol>
            </section>
        </main>
        <footer>

        </footer>
    </body>
</html>
