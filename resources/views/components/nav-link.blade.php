@props(['href', 'active' => false, 'color' => 'bg-green-2'])

<li 
    class="group relative overflow-hidden py-2 px-5 rounded-full"
    x-data="{ x: 0, y: 0 }"
    @mouseenter="x = $event.offsetX; y = $event.offsetY"
    @mouseleave="x = $event.offsetX; y = $event.offsetY"
    >
    <span 
        class="absolute w-96 h-24 rounded-full bg-white/3 -translate-x-1/2 -translate-y-1/2 scale-0 group-hover:scale-100 transition-transform duration-800"
        :style="{ left: x + 'px', top: y + 'px' }"
    ></span>
    <a href="{{ $href }}" class="{{ $active ? 'underline' : 'relative z-10 text-lg text-white' }}">{{ $slot }}</a>
</li>