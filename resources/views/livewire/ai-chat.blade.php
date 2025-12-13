<div>
    <section id="ai-chat" popover class="fixed dark:text-mainLight z-40 top-1/4 sm:left-1/2 sm:-translate-x-1/2 sm:max-w-xl bg-lightGrey dark:bg-grey w-full py-4 px-6 sm:rounded-xl shadow-lg/30 border-t border-t-white/10">
        <!--Typing effect to be added-->
        <h2>{{ __('messages.chat.title') }}</h2>
        <x-close-button class="absolute top-4 right-4 light:text-mainDark" aria-label="{{ __('messages.general.close_chat') }}" target="ai-chat"/>
        <p class="bg-mainLight py-2 px-4 my-6 border-2 border-purple rounded-xl">
            {{ $answer ? $answer : __('messages.chat.introduction') }}
        </p>
        <form wire:submit="chat">
            <x-forms-label for="question">{{ __('messages.chat.ask') }}</x-forms-label>
            <x-forms-input wire:model="question" name="question" id="question"/>
            <button 
                type="submit"
                wire:loading.attr="disabled"
                class="flex justify-center items-center px-4 mx-auto h-12 bg-red hover:bg-red/80 text-mainLight mt-6 uppercase font-bold rounded-xl shadow shadow-black/40 hover:shadow-black/50 border border-black/15 border-t-white/20 cursor-pointer disabled:opacity-80 transition-colors ease-in-out duration-500"
            >
                <span wire:loading.remove>
                    {{ __('messages.chat.submit') }}
                </span>
                <x-svgs.spinner wire:loading.class.remove="hidden" class="hidden"/>
            </button>
        </form>
    </section>
</div>
