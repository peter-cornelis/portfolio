<button 
    class="group btn relative overflow-hidden bg-green-2 rounded-lg shadow mt-2 px-5 py-2 text-white shadow-black/30 border border-black/10 cursor-pointer"
    x-data="{ x: 0, y: 0 }"
    @mouseenter="x = $event.offsetX; y = $event.offsetY"
    @mouseleave="x = $event.offsetX; y = $event.offsetY"
>
    <span 
        class="absolute w-96 h-32 rounded-full bg-white/15 -translate-x-1/2 -translate-y-1/2 scale-0 group-hover:scale-100 transition-transform duration-700"
        :style="{ left: x + 'px', top: y + 'px' }"
    ></span>
    <span class="relative z-10">{{ $slot }}</span>
</button>