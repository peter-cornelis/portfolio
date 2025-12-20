@props(['start' => null, 'end', 'at', 'work' => false, 'lastIconLeft' => 0])

<li {{ $attributes->merge(['class' => 'group']) }}>
                
    <span class="absolute left-0 {{ $lastIconLeft }} group-odd:-top-12 group-even:top-21 flex items-center justify-center w-10 h-10 bg-mainLight dark:bg-mainDark rounded-full -start-5 ring hover:ring-2 ring-red">
        @if($work)
            <x-svgs.work />
        @else
            <x-svgs.school />
        @endif
        <span class="absolute w-10 h-10 rounded-full hover:ring-1 ring-red hover:animate-ping duration-300"></span>
    </span>
    <span class="bg-pinkish/10 capitalize border text-xs dark:text-mainLight font-medium px-1.5 py-0.5 rounded dark:print:text-mainDark">{{ $start == null ? $end : "$start, $end" }}</span>
    <h3 class="capitalize text-base {{ $work ? 'w-max' : '' }} font-semibold mt-2 p-0"> {{ $slot }}</h3>
    <p class="uppercase text-sm text-mainDark/50 dark:text-mainLight/50 py-.5 mb-6 dark:print:text-mainDark/60">{{ $at }}</p>
</li>