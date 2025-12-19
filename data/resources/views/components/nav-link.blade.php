@props(['href', 'section' => null])

<li 
    class="group relative overflow-hidden py-2 px-4.5 rounded-full active"
    x-data="{ x: 0, y: 0 }"
    @mouseenter="x = $event.offsetX; y = $event.offsetY"
    @mouseleave="x = $event.offsetX; y = $event.offsetY"
    >
    <span 
        class="absolute w-96 h-48 rounded-full bg-white/7 -translate-x-1/2 -translate-y-1/2 scale-0 group-hover:scale-100 transition-transform duration-700"
        :style="{ left: x + 'px', top: y + 'px' }"
    ></span>
    <a 
        href="{{ $href }}" 
        class="relative z-10 text-lg text-mainLight py-2 active bg-size-[16px] bg-center bg-no-repeat"
        :class=" {'bg-[linear-gradient(0deg,var(--color-purple)_8%,transparent_8%)]' : currentSection === '{{ $section }}' } "
    >
        {{ $slot }}
    </a>
</li>