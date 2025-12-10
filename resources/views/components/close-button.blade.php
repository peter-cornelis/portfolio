@props(['target'])

<button 
    {{ $attributes->merge(['class' => 'p-1 rounded-full hover:scale-125 transition-all duration-300 ml-auto']) }}
    popovertarget="{{ $target }}"
>
    <x-svgs.close class="w-6"/>
</button>