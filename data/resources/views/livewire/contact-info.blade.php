<div class="not-print:hidden">
    <h2 class="text-4xl font-semibold text-shadow-none pb-2">
        Peter Cornelis
    </h2>
    <address class="grid grid-cols-2 mt-2">
        <ul
            x-data="{
                async handlePrint(e) {
                    e.preventDefault();
                    await $wire.reveal();
                    await new Promise(resolve => setTimeout(resolve, 700));
                    window.print();
                    await $wire.hide();
                }
            }"
            @beforeprint.window="handlePrint($event)"
            @afterprint.window="$wire.hide()"
        >
            <li class="flex items-start">
                <x-svgs.house class="inline mr-2 mt-1 w-5"/>
                <span class="inline-block">
                    {{ __('messages.contact.street') }}
                    <span class="block">{{ __('messages.contact.city') }},</span>
                    {{ __('messages.contact.country') }}
                </span>
            </li>
            <li class="hidden print:flex">
                <x-svgs.phone class="mr-1 w-5"/>
                {{ is_string($phone) ? $phone : '' }}
            </li>
            <li class="hidden print:flex">
                <x-svgs.mail class="mr-1 w-5"/>
                {{ is_string($email) ? $email : '' }}
            </li>
            <li class="mt-4">
                <x-svgs.car class="inline mr-1 w-5"/>
                Rijbewijs B
            </li>
        </ul>
        <ul class="ml-auto mb-auto text-right">
            <li>
                www.petercornelis.be
                <x-svgs.link class="inline mx-1.5 w-5"/>
            </li>
            <li>
                <a href="{{ config('app.contact.linkedin') }}">peter-cornelis-dev</a>
                <x-svgs.linkedin class="inline h-6"/>
            </li>
            <li>
                <a href="{{ config('app.contact.github') }}">peter-cornelis</a>
                <x-svgs.github class="inline h-6 px-1"/>
            </li>
        </ul>
    </address>
</div>