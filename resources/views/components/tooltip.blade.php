@props(['tip', 'arrow' => false])

<span {{ $attributes->merge(['class' => 'relative group w-full h-full font-normal']) }}>
  <span>
    {{ $slot }}
  </span>

  <!-- Tooltip -->
  <span class="absolute left-1/2 -translate-x-1/2 bottom-full invisible opacity-0 group-hover:opacity-100 group-hover:visible w-max bg-grey text-white border border-black/30 border-t-white/10 text-sm rounded-lg px-2.5 py-1 shadow/40 transition-opacity duration-500">
    {{  $tip }}
    
    <!-- Arrow -->
    @if ($arrow)
      <span class="absolute left-1/2 top-full -translate-x-1/2 h-0 w-0 border-l-6 border-r-6 border-t-6 border-l-transparent border-r-transparent border-t-grey"></span>
    @endif
</span>