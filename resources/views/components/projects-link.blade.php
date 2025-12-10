@props(['href', 'list' => false])

<li class="bg-green hover:bg-green/80 first:rounded-bl-xl only:rounded-b-xl last:rounded-br-xl border-t first:border-r-transparent border border-black/15 border-t-white/20 duration-300">
    <a href="{{ $href }}" target="_blank" class="block text-center text-mainLight font-semibold {{ !$list ? 'py-3' : '' }}">
        {{ $slot }}
    </a>
</li>