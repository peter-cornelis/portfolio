<div 
    x-data="{paused: false, clicked: false}"
    class="relative w-full max-w-3xl xl:col-span-2 mx-auto px-4 print:hidden"
>
    <h4 class="text-2xl text-center py-4 mb-4">{{ __('messages.skills.carousel_title') }}</h4>
    <button
        class="absolute top-8 right-0 p-0.5 bg-lightGrey hover:bg-mainLight dark:bg-grey dark:hover:bg-grey/80 rounded-full z-30 text-mainDark/60 dark:text-mainLight/50 border border-black/10 shadow transition-colors duration-200"
        @click="paused = !paused; clicked = !clicked"
    >
        <x-svgs.pause x-show="!paused" class="h-3"/>
        <x-svgs.play x-show="paused" class="h-3"/>
    </button>
    <div 
        class="relative flex h-26 overflow-hidden"
        @mouseover="paused = true"
        @mouseleave="paused = !clicked ? false : true"
    >
        <div class="absolute z-20 left-0 w-6 h-full bg-linear-to-r from-mainLight dark:from-mainDark to-transparent"></div>
        <div class="absolute z-20 right-0 w-6 h-full bg-linear-to-l from-mainLight dark:from-mainDark to-transparent"></div>
        <ul 
            class="flex px-3 my-auto gap-6 animate-scroll"
            :class="paused ? 'paused' : 'running'"
        >
            <li class="group relative">
                <x-svgs.html class="hover:scale-125 transition-transform duration-300"/>
                <x-carousel.label>HTML</x-carousel.label>
            </li>
            <li class="group relative">
                <x-svgs.css class="group-hover:scale-125 transition-transform duration-300"/>
                <x-carousel.label>CSS</x-carousel.label>
            </li>
            <li class="group relative">
                <x-svgs.mysql class="hover:scale-125 transition-transform duration-300"/>
                <x-carousel.label>MySQL</x-carousel.label>
            </li>
            <li class="group relative">
                <x-svgs.git class="group-hover:scale-125 transition-transform duration-300"/>
                <x-carousel.label>Git</x-carousel.label>
            </li>
            <li class="group relative">
                <x-svgs.javascript class="hover:scale-125 transition-transform duration-300"/>
                <x-carousel.label>JavaScript</x-carousel.label>
            </li>
            <li class="group relative">
                <x-svgs.php class="h-12 hover:scale-125 transition-transform duration-300"/>
                <x-carousel.label>PHP</x-carousel.label>
            </li>
            <li class="group relative">
                <x-svgs.twig class="hover:scale-125 transition-transform duration-300"/>
                <x-carousel.label>Twig</x-carousel.label>
            </li>
            <li class="group relative">
                <x-svgs.laravel class="hover:scale-125 transition-transform duration-300"/>
                <x-carousel.label>Laravel</x-carousel.label>
            </li>
            <li class="group relative">
                <x-svgs.tailwind class="hover:scale-125 transition-transform duration-300"/>
                <x-carousel.label>Tailwind</x-carousel.label>
            </li>
            <li class="group relative">
                <x-svgs.sqlite class="hover:scale-125 transition-transform duration-300"/>
                <x-carousel.label>SQLite</x-carousel.label>
            </li>
            <li class="group relative">
                <x-svgs.alpine class="hover:scale-125 transition-transform duration-300"/>
                <x-carousel.label>Alpine.JS</x-carousel.label>
            </li>
            <li class="group relative">
                <x-svgs.livewire class="hover:scale-125 transition-transform duration-300"/>
                <x-carousel.label>Livewire</x-carousel.label>
            </li>
            <li class="group relative">
                <x-svgs.bootstrap class="hover:scale-125 transition-transform duration-300"/>
                <x-carousel.label>Bootstrap</x-carousel.label>
            </li>
        </ul>
        <ul 
            class="flex px-3 my-auto gap-6 animate-scroll"
            :class="paused ? 'paused' : 'running'"
            aria-hidden="true"
        >
            <li class="group relative">
                <x-svgs.html class="hover:scale-125 transition-transform duration-300"/>
                <x-carousel.label>HTML</x-carousel.label>
            </li>
            <li class="group relative">
                <x-svgs.css class="group-hover:scale-125 transition-transform duration-300"/>
                <x-carousel.label>CSS</x-carousel.label>
            </li>
            <li class="group relative">
                <x-svgs.mysql class="hover:scale-125 transition-transform duration-300"/>
                <x-carousel.label>MySQL</x-carousel.label>
            </li>
            <li class="group relative">
                <x-svgs.git class="group-hover:scale-125 transition-transform duration-300"/>
                <x-carousel.label>Git</x-carousel.label>
            </li>
            <li class="group relative">
                <x-svgs.javascript class="hover:scale-125 transition-transform duration-300"/>
                <x-carousel.label>JavaScript</x-carousel.label>
            </li>
            <li class="group relative">
                <x-svgs.php class="h-12 hover:scale-125 transition-transform duration-300"/>
                <x-carousel.label>PHP</x-carousel.label>
            </li>
            <li class="group relative">
                <x-svgs.twig class="hover:scale-125 transition-transform duration-300"/>
                <x-carousel.label>Twig</x-carousel.label>
            </li>
            <li class="group relative">
                <x-svgs.laravel class="hover:scale-125 transition-transform duration-300"/>
                <x-carousel.label>Laravel</x-carousel.label>
            </li>
            <li class="group relative">
                <x-svgs.tailwind class="hover:scale-125 transition-transform duration-300"/>
                <x-carousel.label>Tailwind</x-carousel.label>
            </li>
            <li class="group relative">
                <x-svgs.sqlite class="hover:scale-125 transition-transform duration-300"/>
                <x-carousel.label>SQLite</x-carousel.label>
            </li>
            <li class="group relative">
                <x-svgs.alpine class="hover:scale-125 transition-transform duration-300"/>
                <x-carousel.label>Alpine.JS</x-carousel.label>
            </li>
            <li class="group relative">
                <x-svgs.livewire class="hover:scale-125 transition-transform duration-300"/>
                <x-carousel.label>Livewire</x-carousel.label>
            </li>
            <li class="group relative">
                <x-svgs.bootstrap class="hover:scale-125 transition-transform duration-300"/>
                <x-carousel.label>Bootstrap</x-carousel.label>
            </li>
        </ul>
    </div>
</div>