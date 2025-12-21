<ul 
    class="grid grid-flow-col"
>
    <li>
        @if (app()->getLocale() === 'nl')
            <a 
                href="language/en"
                title="{{ __('messages.general.eng') }}"
                class="inline-flex items-center px-2 -my-2 font-semibold text-mainLight/60 hover:text-mainLight/80 border border-mainLight/60 hover:border-mainLight/80 transition-colors duration-200"
            > 
                {{ __('messages.general.toggle_eng')}} 
            </a>    
        @else
            <a 
                href="language/nl"
                title="{{ __('messages.general.nl') }}"
                class="inline-flex items-center px-2 -my-2 font-semibold text-mainLight/60 border hover:text-mainLight/80 border-mainLight/60 hover:border-mainLight/80 transition-colors duration-200"
            > 
            {{ __('messages.general.toggle_nl')}}
            </a>
        @endif
    </li>
</ul>
