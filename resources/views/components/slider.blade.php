<div {{ $attributes->merge(['class' => 'relative flex h-24 overflow-hidden']) }}>
    <div class="absolute z-20 left-0 w-16 h-full bg-linear-to-r from-mainLight dark:from-mainDark to-transparent"></div>
    <div class="absolute z-20 right-0 w-16 h-full bg-linear-to-l from-mainLight dark:from-mainDark to-transparent"></div>
    <ul class="flex animate-scroll px-3 my-auto gap-6">
        <li class="group relative">
            <x-svgs.html class="hover:scale-125 transition-transform duration-300"/>
            <x-slider-label>HTML</x-slider-label>
        </li>
        <li class="group relative">
            <x-svgs.css class="group-hover:scale-125 transition-transform duration-300"/>
            <x-slider-label>CSS</x-slider-label>
        </li>
        <li class="group relative">
            <x-svgs.javascript class="hover:scale-125 transition-transform duration-300"/>
            <x-slider-label>JavaScript</x-slider-label>
        </li>
        <li class="group relative">
            <x-svgs.php class="hover:scale-125 transition-transform duration-300"/>
            <x-slider-label>PHP</x-slider-label>
        </li>
        <li class="group relative">
            <x-svgs.laravel class="hover:scale-125 transition-transform duration-300"/>
            <x-slider-label>Laravel</x-slider-label>
        </li>
        <li class="group relative">
            <x-svgs.tailwind class="hover:scale-125 transition-transform duration-300"/>
            <x-slider-label>Tailwind</x-slider-label>
        </li>
        <li class="group relative">
            <x-svgs.alpine class="hover:scale-125 transition-transform duration-300"/>
            <x-slider-label>Alpine.JS</x-slider-label>
        </li>
        <li class="group relative">
            <x-svgs.livewire class="hover:scale-125 transition-transform duration-300"/>
            <x-slider-label>Livewire</x-slider-label>
        </li>
    </ul>
    <ul class="flex animate-scroll px-3 my-auto gap-6" aria-hidden="true">
        <li class="group relative">
            <x-svgs.html class="hover:scale-125 transition-transform duration-300"/>
            <x-slider-label>HTML</x-slider-label>
        </li>
        <li class="group relative">
            <x-svgs.css class="group-hover:scale-125 transition-transform duration-300"/>
            <x-slider-label>CSS</x-slider-label>
        </li>
        <li class="group relative">
            <x-svgs.javascript class="hover:scale-125 transition-transform duration-300"/>
            <x-slider-label>JavaScript</x-slider-label>
        </li>
        <li class="group relative">
            <x-svgs.php class="hover:scale-125 transition-transform duration-300"/>
            <x-slider-label>PHP</x-slider-label>
        </li>
        <li class="group relative">
            <x-svgs.laravel class="hover:scale-125 transition-transform duration-300"/>
            <x-slider-label>Laravel</x-slider-label>
        </li>
        <li class="group relative">
            <x-svgs.tailwind class="hover:scale-125 transition-transform duration-300"/>
            <x-slider-label>Tailwind</x-slider-label>
        </li>
        <li class="group relative">
            <x-svgs.alpine class="hover:scale-125 transition-transform duration-300"/>
            <x-slider-label>Alpine.JS</x-slider-label>
        </li>
        <li class="group relative">
            <x-svgs.livewire class="hover:scale-125 transition-transform duration-300"/>
            <x-slider-label>Livewire</x-slider-label>
        </li>
    </ul>
</div>