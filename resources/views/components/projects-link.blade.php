@props(['href'])

<li class="bg-green hover:bg-green/80 first:rounded-bl-xl only:rounded-b-xl last:rounded-br-xl border-t first:border-r border-white/20 duration-300">
    <a href="{{ $href }}" class="block text-center text-mainLight font-semibold py-3">
        {{ $slot }}
    </a>
</li>