@props(['href', 'active' => false])

<li>
    <a href="{{ $href }}" class="{{ $active ? 'underline' : 'block text-lg font-semibold text-mainLight py-5 px-8 hover:bg-white/20 transition-colors duration-200' }}">{{ $slot }}</a>
</li>