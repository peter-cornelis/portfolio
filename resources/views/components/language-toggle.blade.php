<ul class="grid grid-flow-col text-mainLight/70 justify-self-end underline underline-offset-4">
    <li>
        <a 
            href="{{ route('language.toggle', 'nl') }}"
            class="px-2 hover:text-mainLight transition-colors duration-200"
            title="{{ __('messages.general.nl') }}"
        > 
            {{ __('messages.general.toggle_nl')}} 
        </a>
    </li>
    <li>
        <a 
            href="{{ route('language.toggle', 'en') }}"
            class="px-2 hover:text-mainLight transition-colors duration-200"
            title="{{ __('messages.general.eng') }}"
        > 
            {{ __('messages.general.toggle_eng')}} 
        </a>
    </li>
</ul>
