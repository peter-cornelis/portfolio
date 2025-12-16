<ul 
    class="grid grid-flow-col text-mainLight/60 justify-self-end underline underline-offset-4"
    x-data="{active: @js(app()->getLocale())}"
>
    <li>
        @if (app()->getLocale() === 'nl')
            <a 
                href="language/en"
                title="{{ __('messages.general.eng') }}"
                class="px-2 font-semibold hover:text-mainLight/80 transition-colors duration-200"
            > 
                {{ __('messages.general.toggle_eng')}} 
            </a>    
        @else
            <a 
                href="language/nl"
                title="{{ __('messages.general.nl') }}"
                class="px-2 font-semibold hover:text-mainLight/80 transition-colors duration-200"
            > 
            {{ __('messages.general.toggle_nl')}}
            </a>
        @endif
    </li>
</ul>
