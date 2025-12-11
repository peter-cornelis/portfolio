<!DOCTYPE html>
<html class="scroll-smooth" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Peter Cornelis - Portfolio</title>

        <link rel="icon" href="/favicon.ico" sizes="any">
        <link rel="icon" href="/favicon.svg" type="image/svg+xml">
        <link rel="apple-touch-icon" href="/apple-touch-icon.png">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..24,300,1,-25&icon_names=brightness_empty,dark_mode">

        <!-- Styles / Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

    </head>
    <body class="min-h-screen text-mainDark dark:text-mainLight bg-mainLight dark:bg-mainDark bg-top bg-no-repeat bg-size-[100vw_320px] transition-all duration-500"
        style="background-image: var(--waves-bg)"
    >
        <header class="px-8 py-4">
            <div 
                x-data="{ onTop: true }"
                @scroll.window= "onTop = window.pageYOffset < 10"
                class="fixed z-100 left-0 top-0 grid grid-cols-[auto_1fr] w-full px-8 py-1 mx-auto"
                :class=" onTop ? '' : 'bg-mainDark/95 shadow-lg/40'"
            >
                <h1>Peter Cornelis</h1>
                <nav class="flex relative justify-center">
                    <ul class="hidden lg:flex gap-2 w-fit">
                        <x-nav-link href="#">Over mij</x-nav-link>
                        <x-nav-link href="#skills">Vaardigheden</x-nav-link>
                        <x-nav-link href="#experience">Ervaring</x-nav-link>
                        <x-nav-link href="#projects">Projecten</x-nav-link>
                        <x-nav-link href="#contact">Contact</x-nav-link>
                        <li class="absolute top-1.5 right-0">
                            <x-theme-toggle/> 
                        </li> 
                    </ul> 
                    <!--Mobile Navigation-->
                    <button popovertarget="mobile-menu" class="lg:hidden text-mainLight/80 bg-mainLight/10 hover:bg-mainLight/20 font-semibold px-2 py-1 ml-auto my-2 rounded shadow/90 hover:shadow-lg/70 cursor-pointer transition-colors duration-200">
                        Menu
                        <x-svgs.menu class="w-6 inline"/>
                    </button>
                    <div 
                        id="mobile-menu" popover class="lg:hidden top-14.5 sm:right-4 text-white bg-red w-full sm:w-xs ml-auto sm:rounded-b-xl shadow-lg/40 border-t border-t-black/30">
                        <ul class="border-t border-t-black/10">
                            <x-mobile-nav-link href="#">Over mij</x-mobile-nav-link>
                            <x-mobile-nav-link href="#skills">Vaardigheden</x-mobile-nav-link>
                            <x-mobile-nav-link href="#experience">Ervaring</x-mobile-nav-link>
                            <x-mobile-nav-link href="#projects">Projecten</x-mobile-nav-link>
                            <x-mobile-nav-link href="#contact">Contact</x-mobile-nav-link>
                        </ul>
                        <div class="flex justify-center py-3 px-8 border-t border-t-white/10">
                            <x-theme-toggle/>
                            <x-close-button class="text-mainLight" target="mobile-menu"/>
                        </div>
                    </div>
                </nav>
            </div>
        </header>

        <main class="max-w-7xl mx-auto px-4">
            <section id="about" class="grid grid-rows-5 lg:grid-cols-[auto_1fr] lg:grid-rows-3 gap-6 p-4 mt-12 lg:mt-28">
                <img src="images/profiel-15.avif" loading="lazy" alt="Foto van Peter Cornelis, full-stack PHP-ontwikkelaar" class="mx-auto rounded-[60%_40%_60%_40%] border-6 border-red shadow-lg/30 row-span-3 lg:mr-12">
                <h2 class="lg:mt-8 lg:pr-0">Hey, <span class="block">ik ben Peter!</span></h2>
                <p  class="text-lg lg:pr-0">
                    Full-stack PHP ontwikkelaar en sinds kleins af fervent IT enthousiast.
                    Verder mag ik me ook een fiere vader noemen van twee jonge spruiten.
                </p>
                <ul class="flex gap-4 ml-auto mr-10">
                    <li>
                        <a href="https://www.linkedin.com/in/peter-cornelis-b4086237a/" aria-label="LinkedIn" target="_blank">
                            <x-svgs.linkedin class="opacity-75 hover:opacity-100 duration-300"/>
                        </a>
                    </li>
                    <li>
                        <a href="https://github.com/peter-cornelis" aria-label="GitHub" target="_blank">
                            <x-svgs.github class="opacity-75 hover:opacity-100 duration-300"/>                      
                        </a>
                    </li>
                </ul>
                <div class=" lg:col-span-2 grid grid-cols-[1fr_auto] gap-4 text-mainDark/90 mx-auto">
                    <a href="assets/test.pdf" target="_blank" class="relative font-semibold bg-mainLight/60 hover:bg-mainLight/80 py-3 pl-12 pr-4 rounded-xl shadow shadow-black/40 border-t border-white/20 hover:shadow-black/50 duration-300">
                        <x-svgs.download/>
                        <span>Curriculum Vitae</span>
                    </a>
                    <button popovertarget="ai-chat" class="font-semibold bg-mainLight/60 hover:bg-mainLight/80 py-3 px-4 rounded-xl shadow shadow-black/40 border-t border-white/20 hover:shadow-black/60 duration-300">
                        <x-svgs.conversation class="h-6"/>
                    </button>
                    <section id="ai-chat" popover class="fixed {{ session('answer') ? 'block':'' }} dark:text-mainLight z-40 top-1/4 sm:left-1/2 sm:-translate-x-1/2 sm:max-w-xl dark:bg-grey w-full py-4 px-6 sm:rounded-xl shadow/40 border-t border-t-white/10">
                        <!--Typing effect to be added-->
                        <h2>Ai Chat</h2>
                        @if(session('answer'))
                            <p class="py-2 px-4 my-6 border-2 border-purple rounded-xl">
                                {{ session('answer') }}
                            </p>
                        @else
                        <p class="py-2 px-4 my-6 border-2 border-purple rounded-xl">
                            Hey, ik ben hier om al je vragen over Peter zo goed mogelijk te beantwoorden.
                        </p>
                        @endif
                        <form action="/ai-chat" method="POST">
                            @csrf
                            <x-forms-label for="question">Stel een vraag</x-forms-label>
                            <x-forms-input name="question" id="question"/>
                            <input type="submit" value="Verzenden" class="block text-mainLight bg-red hover:bg-red/80 py-2 px-3 mt-6 mx-auto uppercase font-bold rounded-xl shadow shadow-black/40 hover:shadow-black/50 border border-black/15 border-t-white/20 duration-300 cursor-pointer">

                        </form>
                        <x-close-button class="absolute top-4 right-4 light:text-mainDark" target="ai-chat"/>
                    </section>
                </div>
            </section>

            <section id="skills" class="grid grid-cols-1 xl:grid-cols-[35%_55%] mt-8 p-4 gap-16 scroll-mt-16">
                <h2 class="text-center xl:col-span-2 py-8">Vaardigheden</h2>
                <article class="w-fit mx-auto">
                    <h3 class="text-center">Computer Vaardigheden</h3>
                    <ul class="w-fit">
                        <x-star-rating :filled='3'>HTML</x-star-rating>
                        <x-star-rating :filled='3'>CSS</x-star-rating>
                        <x-star-rating :filled='3'>MySQL</x-star-rating>
                        <x-star-rating :filled='3'>Javascript</x-star-rating>
                        <x-star-rating :filled='3'>PHP</x-star-rating>
                    </ul>
                </article>
                <article class="grid grid-cols-1 sm:grid-cols-2 w-fit gap-8 ml-auto ">
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
                        <ul class="w-fit">
                            <li class="grid grid-cols-2 gap-8 text-left">
                                <span class="font-bold text-right">Nederlands</span>
                                moedertaal
                            </li>
                            <li class="grid grid-cols-2 gap-8 text-left">
                                <span class="font-bold text-right">Engels</span>
                                goed
                            </li>
                        </ul>
                    </div>
                </article>
                <x-slider/>
            </section>

            <section id="experience" class="mt-16 px-4 scroll-mt-16">
                <h2 class="text-center mb-16 p-8">Ervaring</h2>
                <div class="w-fit mx-auto">
                    <ol class="relative w-fit ml-8 border-l border-mainDark/20 dark:border-mainLight/20">                  
                        <x-timeline-item start="2025" end="heden" at="vdab">
                            full stack developer 
                        </x-timeline-item>
                        <x-timeline-item start="2015" end="2024" at="Codima BV" :work="true">
                            PC-Technicus 
                        </x-timeline-item>
                        <x-timeline-item start="2007" end="2012" at="Colora Gent" :work="true">
                            Winkelbediende  
                        </x-timeline-item>
                        <x-timeline-item end="2006" at="Sint-Vincentius Deinze">
                            7e Kantooradministratie en gegevensbeheer 
                        </x-timeline-item>
                    </ol>
                </div>
            </section>

            <section id="projects" class="mt-16 px-4 scroll-mt-16">
                <h2 class="text-center col-span-2 mb-16 p-8">Projecten</h2>
                <div class="grid grid-cols-1 sm:grid-cols-[repeat(auto-fit,minmax(22rem,1fr))] gap-8 justify-items-center">

                    <x-project header="Portfolio 2.0" src="images/reisbureau.webp" alt="Latest porfolio">
                        <p class="px-4 line-clamp-5">
                            Lorem ipsum dolor sit amet, consectetur adipisc ing elit. Nulla et facilisis libero, vel accumsan nibh. Duis vitae iaculis nisl. Pellentesque semper ac sem eu euismod.
                        </p>
                        <ul class="flex justify-evenly mt-2">
                            <li>
                                <x-tooltip tip="HTML" :arrow="true"><x-svgs.html class="w-6"/></x-tooltip>
                            </li>
                            <li>
                                <x-tooltip tip="laravel" :arrow="true"><x-svgs.laravel class="w-6"/></x-tooltip>
                            </li>
                            <li>
                                <x-tooltip tip="Tailwind" :arrow="true"><x-svgs.tailwind class="w-6"/></x-tooltip>
                            </li>
                            <li>
                                <x-tooltip tip="Alpine.JS" :arrow="true"><x-svgs.alpine class="w-6"/></x-tooltip>
                            </li>
                            <li>
                                <x-tooltip tip="Livewire" :arrow="true"><x-svgs.livewire class="w-6"/></x-tooltip>
                            </li>
                        </ul>
                        <nav>
                            <ul class="mt-4">
                                <x-projects-link href="https://github.com/peter-cornelis/portfolio" :list="true">
                                    <x-tooltip tip="Link naar github repository" class="block py-2">
                                        <x-svgs.github class="relative -top-0.5 inline h-8 "/>
                                    </x-tooltip>
                                </x-projects-link>
                            </ul>                        
                        </nav>
                    </x-project>

                    <x-project header="Stock Market Rally" src="images/rally.webp" alt="Stock Market Rally">
                        <p class="text-md px-4 line-clamp-5">
                            Eenvoudig beursspel, met dagelijkse koers & statistiek updates via de FMP API.
                            Verder wordt AI gebruikt om zoekacties te verslimmen en elk aandeel van een up to date koop of verkoop advies te voorzien. 
                        </p>
                        <ul class="flex justify-evenly mt-2">
                            <li>
                                <x-tooltip tip="HTML" :arrow="true"><x-svgs.html class="w-6"/></x-tooltip>
                            </li>
                            <li>
                                <x-tooltip tip="laravel" :arrow="true"><x-svgs.laravel class="w-6"/></x-tooltip>
                            </li>
                            <li>
                                <x-tooltip tip="Tailwind" :arrow="true"><x-svgs.tailwind class="w-6"/></x-tooltip>
                            </li>
                            <li>
                                <x-tooltip tip="JavaScript" :arrow="true"><x-svgs.javascript class="w-6"/></x-tooltip>
                            </li>
                            <li>
                                <x-tooltip tip="MySQL" :arrow="true"><x-svgs.mysql class="w-10"/></x-tooltip>
                            </li>
                        </ul>
                        <nav>
                            <ul class="grid grid-cols-2 mt-4">
                                <x-projects-link href="https://rally.petercornelis.be/">Live Demo</x-projects-link>
                                <x-projects-link href="https://github.com/peter-cornelis/portfolio" :list="true">
                                    <x-tooltip tip="Link naar github repository" class="block py-2">
                                        <x-svgs.github class="relative -top-0.5 inline h-8 "/>
                                    </x-tooltip>
                                </x-projects-link>
                            </ul>
                        </nav>
                    </x-project>

                    <x-project header="Movie Maxx" src="images/movie.webp" alt="illustratie film inventaris">
                        <p class="px-4">
                            Lorem ipsum dolor sit amet, consectetur adip iscing elit. Nulla et facilisis libero, vel accumsan nibh. Duis vitae iaculis nisl. Pellentesque semper ac sem eu euismod.
                        </p>
                        <ul class="flex justify-evenly mt-2">
                            <li>
                                <x-tooltip tip="HTML" :arrow="true"><x-svgs.html class="w-6"/></x-tooltip>
                            </li>
                            <li>
                                <x-tooltip tip="laravel" :arrow="true"><x-svgs.laravel class="w-6"/></x-tooltip>
                            </li>
                            <li>
                                <x-tooltip tip="CSS" :arrow="true"><x-svgs.css class="w-6"/></x-tooltip>
                            </li>
                            <li>
                                <x-tooltip tip="MySQL" :arrow="true"><x-svgs.mysql class="w-10"/></x-tooltip>
                            </li>
                        </ul>
                        <nav>
                            <ul class="mt-4">
                                <x-projects-link href="https://github.com/peter-cornelis/portfolio" :list="true">
                                    <x-tooltip tip="Link naar github repository" class="block py-2">
                                        <x-svgs.github class="relative -top-0.5 inline h-8 "/>
                                    </x-tooltip>
                                </x-projects-link>
                            </ul>
                        </nav>
                    </x-project>
                    
                    <x-project header="Portfolio 1.0" src="images/portfolio1.webp" alt="illustratie vorige portfolio">
                        <p class="px-4">
                            Lorem ipsum dolor sit amet, consectetur adip iscing elit. Nulla et facilisis libero, vel accumsan nibh. Duis vitae iaculis nisl. Pellentesque semper ac sem eu euismod.
                        </p>
                        <ul class="flex justify-evenly mt-2">
                            <li>
                                <x-tooltip tip="HTML" :arrow="true"><x-svgs.html class="w-6"/></x-tooltip>
                            </li>
                            <li>
                                <x-tooltip tip="CSS" :arrow="true"><x-svgs.css class="w-6"/></x-tooltip>
                            </li>
                            <li>
                                <x-tooltip tip="JavaScript" :arrow="true"><x-svgs.javascript class="w-6"/></x-tooltip>
                            </li>
                        </ul>
                        <ul class="grid grid-cols-2 mt-4">
                            <x-projects-link href="https://rally.petercornelis.be/">Website</x-projects-link>
                            <x-projects-link href="https://github.com/peter-cornelis/portfolio" :list="true">
                                <x-tooltip tip="Link naar github repository" class="block py-2">
                                    <x-svgs.github class="relative -top-0.5 inline h-8 "/>
                                </x-tooltip>
                            </x-projects-link>
                        </ul>
                    </x-project>

                    <x-project header="Pizzeria Gepetto" src="images/pizza.webp" alt="webshop illustratie">
                        <p class="px-4">
                            Lorem ipsum dolor sit amet, consectetur adip iscing elit. Nulla et facilisis libero, vel accumsan nibh. Duis vitae iaculis nisl. Pellentesque semper ac sem eu euismod.
                        </p>
                        <ul class="flex justify-evenly mt-2">
                            <li>
                                <x-tooltip tip="HTML" :arrow="true"><x-svgs.html class="w-6"/></x-tooltip>
                            </li>
                            <li>
                                <x-tooltip tip="CSS" :arrow="true"><x-svgs.css class="w-6"/></x-tooltip>
                            </li>
                            <li>
                                <x-tooltip tip="PHP" :arrow="true"><x-svgs.php class="w-6"/></x-tooltip>
                            </li>
                            <li>
                                <x-tooltip tip="MySQL" :arrow="true"><x-svgs.mysql class="w-10"/></x-tooltip>
                            </li>
                        </ul>
                        <x-projects-onreq/>
                    </x-project>

                    <x-project header="Soda Delight" src="images/automaat.webp" alt="drankautomaat illustratie">
                        <p class="px-4">
                            Lorem ipsum dolor sit amet, consectetur adipis cing elit. Nulla et facilisis libero, vel acc umsan nibh. Duis vitae iaculis nisl. Pellentesque semper ac sem eu euismod.
                        </p>
                        <ul class="flex justify-evenly mt-2">
                            <li>
                                <x-tooltip tip="HTML" :arrow="true"><x-svgs.html class="w-6"/></x-tooltip>
                            </li>
                            <li>
                                <x-tooltip tip="CSS" :arrow="true"><x-svgs.css class="w-6"/></x-tooltip>
                            </li>
                            <li>
                                <x-tooltip tip="PHP" :arrow="true"><x-svgs.php class="w-6"/></x-tooltip>
                            </li>
                            <li>
                                <x-tooltip tip="MySQL" :arrow="true"><x-svgs.mysql class="w-10"/></x-tooltip>
                            </li>
                        </ul>
                        <ul class="mt-4">
                            <x-projects-link href="https://github.com/peter-cornelis/portfolio" :list="true">
                                <x-tooltip tip="Link naar github repository" class="block py-2">
                                    <x-svgs.github class="relative -top-0.5 inline h-8 "/>
                                </x-tooltip>
                            </x-projects-link>
                        </ul>
                    </x-project>
                </div>
            </section>
            <section id="contact" class="grid grid-cols-1 lg:grid-cols-[1fr_auto] mt-16 px-4 scroll-mt-16">
                <h2 class="text-center lg:col-span-2 mb-10 p-8">Contact</h2>
                <form action="/contact" method="POST" class="w-full lg:max-w-2xl xl:max-w-3xl my-6">
                    @csrf
                    <x-forms-label for="name">Naam</x-forms-label>
                    <x-forms-input name="name" id="name"/>
                    <x-forms-label for="email">E-mail</x-forms-label>
                    <x-forms-input type="email" name="email" id="email"/>
                    <x-forms-label for="message">Bericht</x-forms-label>
                    <x-forms-textarea name="message" id="message" />
                    <input type="submit" value="Verzenden" class="block w-full text-mainLight bg-red hover:bg-red/80 py-2 px-3 mt-6 uppercase font-bold rounded-xl shadow shadow-black/40 hover:shadow-black/50 border border-black/15 border-t-white/20 duration-300 cursor-pointer">
                </form>
                <article class="grid max-lg:row-start-2 max-lg:grid-cols-2 text-mainLight bg-red w-full max-lg:mx-auto py-4 px-6 mt-6 lg:mt-14 mb-auto rounded-xl shadow shadow-black/40 border border-black/15 border-t-white/20">
                    <h3 class="max-lg: col-start-1">Contactgegevens</h3>
                    <address class="lg:w-48 col-start-1">
                        Honoré Borgersstraat 16,
                        <span class="lg:block">8400 Oostende</span>
                        BELGIË
                    </address>
                    <ul class="grid max-lg:row-start-1 max-lg:col-start-2 max-lg:row-span-2 lg:grid-cols-2 w-fit gap-4 mt-6 ml-auto lg:mx-auto my-auto">
                        <li>
                            <a href="https://www.linkedin.com/in/peter-cornelis-b4086237a/" aria-label="LinkedIn" target="_blank">
                                <x-svgs.linkedin class="opacity-75 hover:opacity-100 duration-300"/>
                            </a>
                        </li>
                        <li>
                            <a href="https://github.com/peter-cornelis" aria-label="GitHub" target="_blank">
                                <x-svgs.github class="opacity-75 hover:opacity-100 duration-300"/>                      
                            </a>
                        </li>
                    </ul>
                </article>
            </section>
        </main>
        <footer class="text-center p-6 mt-10 dark:bg-grey inset-shadow-sm inset-shadow-black/10 dark:inset-shadow-black/30  border-t border-mainDark/20 dark:border-black">
            <span class="opacity-60">&copy; Peter Cornelis | 2025</span>
        </footer>
        <!--Initiate Animation Scripts-->
        @livewireScripts
    </body>
</html>
