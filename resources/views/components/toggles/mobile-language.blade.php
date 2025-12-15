<ul 
    class="flex justify-center mx-auto rounded-full shadow"
    x-data="{active: @js(app()->getLocale())}"
>
    <li>
        <a 
            href="language/nl"
            class="block font-bold py-1.5 pl-6 pr-2 rounded-l-full bg-mainLight/10 border-r border-black/5 transition-colors duration-200"
            title="{{ __('messages.general.nl') }}"
            :class="active === 'nl' ? 'text-mainLight/90 cursor-default' : 'hover:bg-mainLight/15 cursor-pointer'"
            @click="if(active === 'nl') $event.preventDefault()"
        > 
            {{ __('messages.general.toggle_nl')}} 
        </a>
    </li>
    <li>
        <a 
            href="language/en"
            class="block font-bold py-1.5 pl-2 pr-6 rounded-r-full bg-mainLight/10 transition-colors duration-200"
            title="{{ __('messages.general.eng') }}"
            :class="active === 'en' ? 'text-mainLight/90 cursor-default' : 'hover:bg-mainLight/15 cursor-pointer'"
            @click="if(active === 'en') $event.preventDefault()"
        > 
            {{ __('messages.general.toggle_eng')}} 
        </a>
    </li>
</ul>
