@props(['header', 'src', 'alt'])

<article class="grid grid-rows-[auto_auto_1fr_auto_auto] w-96 mx-auto dark:bg-mainLight/10 rounded-xl shadow-lg/20 hover:scale-102 duration-300">
    <img src="{{ $src }}" alt="{{ $alt }}" class="w-96 rounded-t-xl mask-b-from-20% border-b border-mainDark/10 border-t border-t-white/10">
    <h3 class="text-center py-4">{{ $header }}</h3>
    {{ $slot }}
</article>