<ul 
    class="grid grid-flow-col text-mainLight/50 justify-self-end underline underline-offset-4"
    x-data="{active: @js(app()->getLocale())}"
>
    <li>
        <a 
            href="{{ route('language.toggle', 'nl') }}"
            title="{{ __('messages.general.nl') }}"
            class="px-2 font-semibold transition-colors duration-200"
            :class="active === 'nl' ? 'cursor-default' : 'text-mainLight/70 hover:text-mainLight'"
            @click="if(active === 'nl') $event.preventDefault()"
        > 
            {{ __('messages.general.toggle_nl')}} 
        </a>
    </li>
    <li>
        <a 
            href="{{ route('language.toggle', 'en') }}"
            title="{{ __('messages.general.eng') }}"
            class="px-2 font-semibold transition-colors duration-200"
            :class="active === 'en' ? 'cursor-default' : 'text-mainLight/70 hover:text-mainLight/90'"
            @click="if(active === 'en') $event.preventDefault()"
        > 
            {{ __('messages.general.toggle_eng')}} 
        </a>
    </li>
</ul>
