<div x-data="{showChat: false}" class="fixed z-40 right-8 bottom-8">
    <span 
        class="fixed right-8 bottom-17 animate-bounce"
        x-show="!showChat"
        x-transition:enter="transition transform ease-out duration-[300ms]"
        x-transition:enter-start="opacity-0 scale-75"
        x-transition:leave="transition transform ease-in duration-[200ms]"
        x-transition:leave-end="opacity-0 scale-75" 
    >
        <div class="bg-purple/90 text-mainLight rounded-2xl py-2 px-3 w-42 shadow-lg/20 border border-black/10 border-t-white/10">
            Hey, Ik kan je meer vertellen over Peter!
        </div>
        <div class="ml-auto mr-8 w-0 border-8 border-transparent border-t-purple"></div>
    </span>

    <button 
        aria-label="{{ __('messages.general.chat') }}" 
        class="font-semibold bg-mainLight/60 hover:bg-mainLight/80 py-2 px-3 rounded-full shadow shadow-black/40 border-t border-white/20 hover:shadow-black/60 duration-300 cursor-pointer"
        @click="showChat = !showChat">
        <x-svgs.conversation class="h-6 inline"/>
        Chat
    </button>
    <section 
        class="fixed dark:text-mainLight top-1/4 right-0 sm:max-w-sm bg-lightGrey dark:bg-grey w-full py-4 px-6 sm:rounded-l-xl shadow-lg/30 border-t border-t-white/10 transition duration-300"
        x-show="showChat"
        x-transition:enter-start="transform translate-x-full ease-in opacity-0"
        x-transition:enter-end="transform translate-x-0 opacity-100"
        x-transition:leave-start="transform translate-x-0 ease-out opacity-100 "
        x-transition:leave-end="transform translate-x-full opacity-0"
    >
        <!--Typing effect to be added-->
        <h2>{{ __('messages.chat.title') }}</h2>
        <x-close-button 
            class="absolute top-4 right-4 light:text-mainDark" 
            aria-label="{{ __('messages.general.close_chat') }}" 
            @click="showChat = false"
            />
        <p class="text-mainLight font-semibold bg-purple py-2 px-4 my-6 rounded-xl inset-shadow-sm/20 border border-mainDark/40 dark:border-mainDark/70">
            {{ $answer ? $answer : __('messages.chat.introduction') }}
        </p>
        <form wire:submit="chat">
            <x-forms.label for="question">{{ __('messages.chat.ask') }}</x-forms.label>
            <x-forms.input wire:model="question" name="question" id="question"/>
            <x-forms.label for="link">{{ __('messages.chat.ask') }}</x-forms.label>
            <x-forms.input wire:model="link" name="link" id="link"/>
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
