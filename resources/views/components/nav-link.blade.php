@props(['href', 'active' => false])

<li 
    class="group relative overflow-hidden bg-green-2 py-2 px-5 rounded-lg shadow shadow-black/30 border border-black/10"
    x-data="{ x: 0, y: 0 }"
    @mouseenter="x = $event.offsetX; y = $event.offsetY"
    @mouseleave="x = $event.offsetX; y = $event.offsetY"
    >
    <span 
        class="absolute w-96 h-32 rounded-full bg-white/15 -translate-x-1/2 -translate-y-1/2 scale-0 group-hover:scale-100 transition-transform duration-700 pointer-events-none"
        :style="{ left: x + 'px', top: y + 'px' }"
    ></span>
    <a href="{{ $href }}" class="{{ $active ? 'underline' : 'relative z-10 font-bold text-white' }}">{{ $slot }}</a>
</li>