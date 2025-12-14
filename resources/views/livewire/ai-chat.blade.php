<div x-data="{showChat: false}">
    <button 
        aria-label="{{ __('messages.general.chat') }}" 
        class="font-semibold bg-mainLight/60 hover:bg-mainLight/80 py-3 px-4 rounded-xl shadow shadow-black/40 border-t border-white/20 hover:shadow-black/60 duration-300 cursor-pointer"
        @click="showChat = !showChat">
        <x-svgs.conversation class="h-6"/>
    </button>
    <section 
        class="fixed dark:text-mainLight z-40 top-1/4 sm:left-1/2 sm:-translate-x-1/2 sm:max-w-xl bg-lightGrey dark:bg-grey w-full py-4 px-6 sm:rounded-xl shadow-lg/30 border-t border-t-white/10"
        x-show="showChat"
        x-transition:enter="transition transform ease-out duration-[300ms]"
        x-transition:enter-start="opacity-0 scale-75"
        x-transition:leave="transition transform ease-in duration-[200ms]"
        x-transition:leave-end="opacity-0 scale-75"    
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
