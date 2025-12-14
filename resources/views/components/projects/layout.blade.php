@props(['header', 'src', 'alt', 'info', 'technologies' => []])

<article class="grid grid-rows-[auto_auto_1fr_auto_auto] w-full max-w-96 mx-auto dark:bg-mainLight/10 rounded-xl shadow-lg/20 hover:scale-105 ease-in duration-200">
    <img src="{{ $src }}" alt="{{ $alt }}" class="w-full rounded-t-xl mask-b-from-20% border border-mainDark/10 border-t border-t-white/10">
    <h3 class="text-center py-4">{{ $header }}</h3>
    <p class="px-4 line-clamp-5">
        {!! $info !!} <!-- Outputs the raw data, otherwise double decoded since prop -->
    </p>
    <hr class="m-2 border-black/30">
    <h4 class="text-lg font-semibold text-center">
        {{ __('messages.projects.used') }}
    </h4>
    <ul class="flex justify-evenly mt-2">
    @foreach ($technologies as $technology)
        <li>
            <x-tooltip tip="{{ __('messages.general.'.$technology) }}" :arrow="true">
                <x-dynamic-component :component="'svgs.'.$technology" class="w-6" />
            </x-tooltip>
        </li>
    @endforeach
    </ul>
    <nav>
        <ul class="grid grid-cols-2 has-[>:only-child]:grid-cols-1 mt-4">
            {{ $slot }}
        </ul>                        
    </nav>
</article>