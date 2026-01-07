@props(['href', 'section' => null])

<li class="sm:last:[&>a]:rounded-bl-xl">
    <a 
        href="{{ $href }}" 
        class="block text-lg font-semibold text-mainLight py-5 px-8 hover:bg-white/20 bg-size-[4rem_2rem] bg-left bg-no-repeat transition-colors ease-in-out duration-200"
        :class=" {'bg-[linear-gradient(90deg,var(--color-mainLight)_8%,transparent_8%)]' : currentSection === '{{ $section }}' } "
    >
        {{ $slot }}
    </a>
</li>