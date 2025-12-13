<ul class="flex justify-center mx-auto rounded-full shadow">
    <li>
        <a 
            href="{{ route('language.switch', 'nl') }}"
            class="block font-bold py-1.5 pl-6 pr-2 rounded-l-full bg-mainLight/10 hover:bg-mainLight/15 border-r border-black/5 transition-colors duration-200"
            title="{{ __('messages.general.nl') }}"
        > 
            {{ __('messages.general.toggle_nl')}} 
        </a>
    </li>
    <li>
        <a 
            href="{{ route('language.switch', 'en') }}"
            class="block font-bold py-1.5 pl-2 pr-6 rounded-r-full bg-mainLight/10 hover:bg-mainLight/15 transition-colors duration-200"
            title="{{ __('messages.general.eng') }}"
        > 
            {{ __('messages.general.toggle_eng')}} 
        </a>
    </li>
</ul>
