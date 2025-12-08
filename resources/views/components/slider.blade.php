<div {{ $attributes->merge(['class' => 'relative flex h-16 overflow-hidden']) }}>
    <div class="absolute z-20 left-0 w-12 h-full bg-linear-to-r from-mainLight dark:from-mainDark to-transparent"></div>
    <div class="absolute z-20 right-0 w-12 h-full bg-linear-to-l from-mainLight dark:from-mainDark to-transparent"></div>
    <ul class="flex animate-scroll px-3 my-auto gap-6">
        <li>
            <x-svgs.html/>
        </li>
        <li>
            <x-svgs.css/>
        </li>
        <li>
            <x-svgs.javascript/>
        </li>
        <li>
            <x-svgs.php/>
        </li>
        <li>
            <x-svgs.laravel/>
        </li>
        <li>
            <x-svgs.tailwind/>
        </li>
        <li>
            <x-svgs.alpine/>
        </li>
        <li>
            <x-svgs.livewire/>
        </li>
    </ul>
    <ul class="flex animate-scroll px-3 my-auto gap-6" aria-hidden="true">
        <li>
            <x-svgs.html/>
        </li>
        <li>
            <x-svgs.css/>
        </li>
        <li>
            <x-svgs.javascript/>
        </li>
        <li>
            <x-svgs.php/>
        </li>
        <li>
            <x-svgs.laravel/>
        </li>
        <li>
            <x-svgs.tailwind/>
        </li>
        <li>
            <x-svgs.alpine/>
        </li>
        <li>
            <x-svgs.livewire/>
        </li>
    </ul>
</div>