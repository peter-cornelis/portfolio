<ul 
    class="flex justify-center mx-auto shadow"
>
    <li>
        @if (app()->getLocale() === 'nl')
        <a 
            href="language/en"
            class="block font-bold py-1 px-3 bg-mainLight/10 text-mainLight hover:bg-mainLight/15 rounded transition-colors duration-200"
            title="{{ __('messages.general.eng') }}"
        > 
            {{ __('messages.general.toggle_eng')}} 
        </a>
        @else
        <a 
            href="language/nl"
            class="block font-bold py-1 px-3 bg-mainLight/10 text-mainLight hover:bg-mainLight/15 rounded transition-colors duration-200"
            title="{{ __('messages.general.nl') }}"
        > 
            {{ __('messages.general.toggle_nl')}} 
        </a>
        @endif
    </li>
</ul>
