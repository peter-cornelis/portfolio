@props(['href', 'section' => null])

<li>
    <a 
        href="{{ $href }}" 
        class="block text-lg font-semibold text-mainLight py-5 px-8 hover:bg-white/20 ease-in-out bg-size-[32px] bg-left bg-no-repeat transition-colors duration-200"
        :class=" {'bg-[linear-gradient(90deg,var(--color-mainLight)_8%,transparent_8%)]' : currentSection === '{{ $section }}' } "
    >
        {{ $slot }}
    </a>
</li>