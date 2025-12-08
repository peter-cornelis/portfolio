@props(['start' => null, 'end', 'at', 'work' => false])

<li class="mx-10">            
    <span class="absolute flex items-center justify-center w-10 h-10 bg-mainLight dark:bg-mainDark rounded-full -start-5 ring hover:ring-2 ring-red">
        @if($work)
            <x-svgs.work />
        @else
            <x-svgs.school />
        @endif
        <span class="absolute w-10 h-10 rounded-full hover:ring-1 ring-red hover:animate-ping duration-300"></span>
    </span>
    <span class="bg-pinkish/10 capitalize border text-heading text-xs dark:text-mainLight font-medium px-1.5 py-0.5 rounded">{{ $start == null ? $end : "$start, $end" }}</span>
    <h3 class="flex items-center capitalize text-lg font-semibold text-heading mt-2 p-0"> {{ $slot }},</h3>
    <p class="uppercase text-mainDark/50 dark:text-mainLight/50 py-.5 mb-6">{{ $at }}</p>
</li>