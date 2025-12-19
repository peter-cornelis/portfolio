<!DOCTYPE html>
<html class="scroll-smooth" lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Peter Cornelis - Full-Stack PHP Developer specializing in modern web development.">
        <meta name="keywords" content="Peter Cornelis, PHP Developer, Full-Stack Developer, Web Development, HTML, CSS, MySQL, Laravel, Tailwind CSS, Livewire, Alpine.js, Bootstrap, SQLite">

        <title>Peter Cornelis - Portfolio</title>

        <link rel="icon" href="/favicon.svg" sizes="any">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..24,300,1,-25&icon_names=brightness_empty,dark_mode">

        <!-- Styles / Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

    </head>
    <body 
        class="min-h-screen text-mainDark dark:text-mainLight bg-mainLight dark:bg-mainDark bg-top bg-no-repeat bg-size-[100vw_320px] transition-all duration-500 print:text-mainDark print:w-4xl"
        style="background-image: var(--waves-bg)"
    >
        <header class="px-8 py-4 print:hidden">
            <div 
                x-data="{ 
                    onTop: true
                }"
                @scroll.window= "onTop = window.pageYOffset < 1"
                class="fixed z-100 left-0 top-0 grid grid-cols-[auto_1fr] w-full px-8 py-1 mx-auto h-14"
                x-bind:class=" onTop ? '' : 'bg-mainDark/95 not-print:shadow-lg/40'"
            >
                <h1 class="pr-2">Peter Cornelis</h1>
                <nav 
                    class="flex justify-between"
                    x-data="{
                        currentSection: '',
                        updateCurrentSection() {
                            const sections = document.querySelectorAll('main>section');
                            sections.forEach((section) => {
                                const sectionTop = section.offsetTop;
                                if (window.pageYOffset >= sectionTop - 220) {
                                    this.currentSection = section.getAttribute('id');
                                }
                            });
                            console.log('Current section:', this.currentSection);
                        }
                    }"
                    @scroll.window="updateCurrentSection()"
                    x-init="updateCurrentSection()"
                >
                    <ul class="hidden lg:flex gap-2 ml-auto justify-center items-center grow">
                        <x-nav-link href="#" section="about">{{ __('messages.nav.about') }}</x-nav-link>
                        <x-nav-link href="#skills" section="skills">{{ __('messages.nav.skills') }}</x-nav-link>
                        <x-nav-link href="#experience" section="experience">{{ __('messages.nav.experience') }}</x-nav-link>
                        <x-nav-link href="#projects" section="projects">{{ __('messages.nav.projects') }}</x-nav-link>
                        <x-nav-link href="#contact" section="contact">{{ __('messages.nav.contact') }}</x-nav-link>
                    </ul> 
                    <ul class="hidden lg:flex gap-2 ml-auto items-center">
                        <li class="px-4">
                            <x-toggles.language/>
                        </li>
                        <li class="self-center">
                            <x-toggles.theme/> 
                        </li> 
                    </ul>
                    <!--Mobile Navigation-->
                    <div 
                        x-data="{ openMenu: false }"
                        class="ml-auto flex"
                    >
                        <button 
                            class="lg:hidden text-mainLight/80 bg-mainLight/10 hover:bg-mainLight/20 font-semibold px-2 py-1 ml-auto my-auto rounded shadow/90 hover:shadow-lg/70 cursor-pointer transition-colors duration-200"
                            @click="openMenu = !openMenu"
                        >
                            Menu
                            <x-svgs.menu class="w-6 inline"/>
                        </button>
                        <div 
                            class="absolute lg:hidden top-14 left-0 sm:right-0 text-white bg-red w-full sm:w-xs ml-auto sm:rounded-bl-xl shadow-lg/40 border-t border-t-black/30 transition ease-in duration-300"
                            x-show="openMenu"
                            x-transition:enter-start="transform translate-x-full opacity-0"
                            x-transition:enter-end="transform translate-x-0 opacity-100"
                            x-transition:leave-start="transform translate-x-0 opacity-100"
                            x-transition:leave-end="transform translate-x-full opacity-0"
                        >
                            <div class="grid grid-cols-[auto_1fr_auto] items-center py-3 px-8 border-t border-t-black/10 border-b border-b-white/10">
                                <x-toggles.theme/>
                                <x-toggles.mobile-language/>
                                <x-close-button 
                                    class="text-mainLight" 
                                    aria-label="{{ __('messages.general.close_nav') }}" 
                                    @click="openMenu = false"
                                />
                            </div>
                            <ul>
                                <x-mobile-nav-link href="#" section="about">{{ __('messages.nav.about') }}</x-mobile-nav-link>
                                <x-mobile-nav-link href="#skills" section="skills">{{ __('messages.nav.skills') }}</x-mobile-nav-link>
                                <x-mobile-nav-link href="#experience" section="experience">{{ __('messages.nav.experience') }}</x-mobile-nav-link>
                                <x-mobile-nav-link href="#projects" section="projects">{{ __('messages.nav.projects') }}</x-mobile-nav-link>
                                <x-mobile-nav-link href="#contact" section="contact">{{ __('messages.nav.contact') }}</x-mobile-nav-link>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
            <livewire:cookie-banner/>
        </header>

        <main class="max-w-7xl mx-auto px-4">
            <x-svgs.php class="hidden print:block absolute w-4xl text-black/2 left-1/2 -translate-x-1/2 top-10"/>
            <section id="about" class="grid lg:grid-rows-2 lg:grid-cols-[auto_1fr] gap-6 p-4 not-print:mt-6 lg:mt-28 print:grid-cols-[1fr_auto]">
                <livewire:contact-info :showInPdf="$showContact ?? false"/>

                <span class="mx-auto p-2 bg-red rounded-[60%_40%_60%_40%] lg:row-span-3 lg:mr-12 mb-auto not-print:shadow-lg/30 border-t border-b border-b-black/20 border-t-white/20 print:border-0">
                    <img src="{{ asset('images/profiel-15.avif') }}" loading="lazy" alt="{{ __('messages.about.img_alt') }}" class="rounded-[60%_40%_60%_40%] shadow/30 print:h-54">
                </span>
                <h2 class="lg:mt-8 lg:pr-0 print:hidden">{{ __('messages.about.hey') }} <span class="block">{{ __('messages.about.hey_2') }}</span></h2>
                <p  class="text-lg lg:pr-0 print:col-span-2">
                    {{ __('messages.about.introduction') }}
                </p>
                <ul class="flex gap-4 ml-auto mr-10 print:hidden">
                    <li>
                        <a href="{{ config('app.contact.linkedin') }}" aria-label="{{ __('messages.general.linkedin_profile') }}" target="_blank">
                            <x-svgs.linkedin class="opacity-85 hover:opacity-100 duration-300"/>
                        </a>
                    </li>
                    <li>
                        <a href="{{ config('app.contact.github') }}" aria-label="{{ __('messages.general.github_profile') }}" target="_blank">
                            <x-svgs.github class=" w-8 opacity-85 hover:opacity-100 duration-300"/>                      
                        </a>
                    </li>
                </ul>
                <div class="lg:col-span-2 flex justify-center text-mainDark/90 mt-12 w-full print:hidden">
                    <a href="/pdf" target="_blank" aria-label="{{ __('messages.general.download_cv') }}" class="relative font-semibold bg-mainLight/60 hover:bg-mainLight/80 py-3 pl-12 pr-4 rounded-xl shadow shadow-black/40 border-t border-white/20 hover:shadow-black/50 duration-300">
                        <x-svgs.download/>
                        <span>{{ __('messages.general.cv') }}</span>
                    </a>
                    <livewire:ai-chat/>
                </div>
            </section>

            <section id="skills" class="grid grid-cols-1 xl:grid-cols-[38%_62%] print:grid-cols-[34%_66%] not-print:mt-8 p-4 gap-16 scroll-mt-16 print:gap-4">
                <h2 class="text-center xl:col-span-2 print:col-span-2 py-8 ">{{ __('messages.skills.title') }}</h2>
                <article class="w-fit mx-auto print:col-start-1">
                    <h3 class="text-center print:mb-2">{{ __('messages.skills.sub_1_title') }}</h3>
                    <ul class="w-fit">
                        <x-star-rating :filled='3'>{{ __('messages.general.html') }}</x-star-rating>
                        <x-star-rating :filled='3'>{{ __('messages.general.css') }}</x-star-rating>
                        <x-star-rating :filled='2'>{{ __('messages.general.mysql') }}</x-star-rating>
                        <x-star-rating :filled='4'>{{ __('messages.general.javascript') }}</x-star-rating>
                        <x-star-rating :filled='4'>{{ __('messages.general.php') }}</x-star-rating>
                    </ul>
                </article>
                <article class="grid grid-cols-1 sm:grid-cols-2 w-fit gap-8 ml-auto print:pl-8 print:border-l border-black/20">
                    <div class="col-start-1 row-start-2">
                        <h3>{{ __('messages.skills.sub_2_title') }}</h3>
                        <p>{{ __('messages.skills.sub_2_info') }}</p>
                    </div>
                    <div>
                        <h3>{{ __('messages.skills.sub_3_title') }}</h3>
                        <p>{{ __('messages.skills.sub_3_info') }}</p>
                    </div>
                    <div>
                        <h3>{{ __('messages.skills.sub_4_title') }}</h3>
                        <p>{{ __('messages.skills.sub_4_info') }}</p>
                    </div>
                    <div>
                        <h3>{{ __('messages.skills.sub_5_title') }}</h3>
                        <ul class="w-fit">
                            <li class="grid grid-cols-2 gap-8 text-left">
                                <span class="font-bold text-right">{{ __('messages.skills.sub_5_nl') }}</span>
                                {{ __('messages.skills.sub_5_nl_state') }}
                            </li>
                            <li class="grid grid-cols-2 gap-8 text-left">
                                <span class="font-bold text-right">{{ __('messages.skills.sub_5_eng') }}</span>
                                {{ __('messages.skills.sub_5_eng_state') }} 
                            </li>
                            <li class="grid grid-cols-2 gap-8 text-left">
                                <span class="font-bold text-right">{{ __('messages.skills.sub_6_fr') }}</span>
                                {{ __('messages.skills.sub_6_fr_state') }} 
                            </li>
                        </ul>
                    </div>
                </article>
                <x-carousel.layout/>
            </section>

            <section id="experience" class="not-print:mt-16 px-4 scroll-mt-16">
                <h2 class="text-center not-print:mb-16 py-8">{{ __('messages.experience.title') }}</h2>
                <div class="w-fit mx-auto">
                    <ol class="relative w-fit ml-8 border-l border-mainDark/20 dark:border-mainLight/20 print:hidden">                  
                        <x-timeline-item start="2025" end="{{ __('messages.experience.present') }} " at="vdab">
                            {{ __('messages.experience.sub_1_title') }} 
                        </x-timeline-item>
                        <x-timeline-item start="2015" end="2024" at="Codima BV" :work="true">
                            {{ __('messages.experience.sub_2_title') }}  
                        </x-timeline-item>
                        <x-timeline-item start="2014" end="2015" at="vdab">
                            {{ __('messages.experience.sub_5_title') }}  
                        </x-timeline-item>  
                        <x-timeline-item start="2007" end="2012" at="Colora Gent" :work="true">
                            {{ __('messages.experience.sub_3_title') }}  
                        </x-timeline-item>
                        <x-timeline-item end="2006" at="Sint-Vincentius Deinze">
                            {{ __('messages.experience.sub_4_title') }} 
                        </x-timeline-item>
                    </ol>
                    <ol class="relative flex w-fit mt-28 border-t mx-auto mr-8 border-black/20 not-print:hidden">
                        <x-timeline-vert-item 
                            end="2006" at="Sint-Vincentius Deinze"
                            class="absolute top-7 w-50"
                        >
                            {{ __('messages.experience.sub_4_title') }} 
                        </x-timeline-vert-item>
                        <x-timeline-vert-item 
                            start="2007" end="2012" at="Colora Gent" :work="true"
                            class="relative -top-26 left-35 w-50"
                        >
                            {{ __('messages.experience.sub_3_title') }}  
                        </x-timeline-vert-item>
                        <x-timeline-vert-item start="2014" end="2015" at="vdab"
                        class="relative top-7 left-20 w-30"
                        >
                            {{ __('messages.experience.sub_5_title') }}  
                        </x-timeline-vert-item>           
                        <x-timeline-vert-item start="2015" end="2024" at="Codima BV" :work="true"
                        class="relative -top-26 left-30 w-30"
                        >
                            {{ __('messages.experience.sub_2_title') }}  
                        </x-timeline-vert-item>
                        <x-timeline-vert-item 
                            start="2025" end="{{ __('messages.experience.present') }} " at="vdab"
                            class="relative top-7 left-10 w-45 text-right"
                            lastIconLeft="group-last:left-35"
                        >
                            {{ __('messages.experience.sub_1_title') }} 
                        </x-timeline-vert-item>
                    </ol>
                </div>
            </section>

            <section id="projects" class="mt-16 px-4 scroll-mt-16 print:hidden">
                <h2 class="text-center col-span-2 mb-16 p-8">Projecten</h2>
                <div class="grid grid-cols-1 sm:grid-cols-[repeat(auto-fit,minmax(22rem,1fr))] gap-8 justify-items-center">

                    <x-projects.layout
                        header="Portfolio 2.0" 
                        src="images/portfolio2.webp" 
                        alt="{{ __('messages.projects.sub_1_alt') }}"
                        info="{{ __('messages.projects.sub_1_info') }}"
                        :technologies="['html', 'laravel', 'tailwind', 'alpine', 'livewire']"
                    >
                        <x-projects.link href="https://github.com/peter-cornelis/portfolio" aria-label="{{ __('messages.general.github_repo') }}" :list="true">
                            <x-svgs.github class="-mt-1.25 inline h-7 "/>
                            Code
                        </x-projects.link>

                    </x-projects.layout>

                    <x-projects.layout
                        header="Stock Market Rally" 
                        src="images/rally.webp" 
                        alt="{{ __('messages.projects.sub_2_alt') }}"
                        info="{{ __('messages.projects.sub_2_info') }}"
                        :technologies="['html', 'laravel', 'tailwind', 'javascript', 'mysql']"
                    >
                        <x-projects.link href="https://rally.petercornelis.be/">Live Demo</x-projects.link>
                        <x-projects.link href="https://github.com/peter-cornelis/stock-market-rally" aria-label="{{ __('messages.general.github_repo') }}" :list="true">
                            <x-svgs.github class="-mt-1.25 inline h-7 "/>
                            Code
                        </x-projects.link>

                    </x-projects.layout>

                    <x-projects.layout
                        header="Movie Maxx" 
                        src="images/movie.webp" 
                        alt="{{ __('messages.projects.sub_3_alt') }}"
                        info="{{ __('messages.projects.sub_3_info') }}"
                        :technologies="['html', 'laravel', 'css', 'mysql']"
                    >
                        <x-projects.link href="https://github.com/peter-cornelis/Videotheek" aria-label="{{ __('messages.general.github_repo') }}" :list="true">
                            <x-svgs.github class="-mt-1.25 inline h-7 "/>
                            Code
                        </x-projects.link>

                    </x-projects.layout>

                    <x-projects.layout
                        header="Portfolio 1.0" 
                        src="images/portfolio1.webp" 
                        alt="{{ __('messages.projects.sub_4_alt') }}"
                        info="{{ __('messages.projects.sub_4_info') }}"
                        :technologies="['html', 'css', 'javascript']"
                    >
                        <x-projects.link href="https://rally.petercornelis.be/">Live Demo</x-projects.link>
                        <x-projects.link href="https://github.com/peter-cornelis/portfolio" aria-label="{{ __('messages.general.github_repo') }}" :list="true">
                            <x-svgs.github class="-mt-1.25 inline h-7 "/>
                            Code
                        </x-projects.link>

                    </x-projects.layout>

                    <x-projects.layout
                        header="Pizzeria Gepetto" 
                        src="images/pizza.webp" 
                        alt="{{ __('messages.projects.sub_5_alt') }}"
                        info="{{ __('messages.projects.sub_5_info') }}"
                        :technologies="['html', 'css', 'php', 'twig', 'mysql']"
                    >
                        <x-projects.onreq/>
                    </x-projects.layout>

                    <x-projects.layout
                        header="Soda Delight" 
                        src="images/soda.webp" 
                        alt="{{ __('messages.projects.sub_6_alt') }}"
                        info="{{ __('messages.projects.sub_6_info') }}"
                        :technologies="['html', 'css', 'php', 'twig', 'mysql']"
                    >
                        <x-projects.link href="https://github.com/peter-cornelis/portfolio" aria-label="{{ __('messages.general.github_repo') }}" :list="true">
                            <x-svgs.github class="-mt-1.25 inline h-7 "/>
                            Code
                        </x-projects.link>

                    </x-projects.layout>

                </div>
            </section>
            <section id="contact" class="grid grid-cols-1 lg:grid-cols-[1fr_auto] mt-16 px-4 scroll-mt-16 print:hidden">
                <h2 class="text-center lg:col-span-2 mb-10 p-8">{{ __('messages.contact.title') }}</h2>
                <livewire:contact-form />
                <article class="grid max-lg:row-start-2 text-mainLight bg-red w-full max-lg:mx-auto py-4 px-6 mt-6 lg:mt-14 mb-auto rounded-xl shadow shadow-black/40 border border-black/15 border-t-white/20">
                    <h3 class="mx-auto">{{ __('messages.contact.contact_details') }}</h3>
                    <p class="text-center w-55 opacity-90 mx-auto">{{ __('messages.contact.download') }}</p>
                    <a href="/pdf" target="_blank" aria-label="{{ __('messages.general.download_cv') }}" class="relative font-semibold w-max mx-auto my-4 py-3 pl-12 pr-4 mx-auto rounded-full border-2 border-white/10 hover:border-white/50 duration-300">
                        <x-svgs.download/>
                        <span>{{ __('messages.general.cv') }}</span>
                    </a>
                    <ul class="grid max-lg:row-start-4 grid-cols-2 w-fit gap-4 ml-auto mx-auto">
                        <li>
                            <a href="{{ config('app.contact.github') }}" aria-label="{{ __('messages.general.linkedin_profile') }}" target="_blank">
                                <x-svgs.linkedin class="opacity-85 hover:opacity-100 duration-300"/>
                            </a>
                        </li>
                        <li>
                            <a href="https://github.com/peter-cornelis" aria-label="{{ __('messages.general.github_profile') }}" target="_blank">
                                <x-svgs.github class="opacity-85 hover:opacity-100 duration-300"/>                      
                            </a>
                        </li>
                    </ul>
                </article>
            </section>
        </main>
        <footer class="text-center p-6 mt-10 dark:bg-grey inset-shadow-sm inset-shadow-black/10 dark:inset-shadow-black/30  border-t border-mainDark/20 dark:border-black print:hidden">
            <span class="opacity-60">&copy; Peter Cornelis | 2025</span>
        </footer>
    </body>
</html>
