<div>
    <section id="ai-chat" popover class="fixed {{ session('answer') ? 'block':'' }} dark:text-mainLight z-40 top-1/4 sm:left-1/2 sm:-translate-x-1/2 sm:max-w-xl dark:bg-grey w-full py-4 px-6 sm:rounded-xl shadow/40 border-t border-t-white/10">
        <!--Typing effect to be added-->
        <h2>{{ __('messages.chat.title') }}</h2>
        @if(session('answer'))
            <p class="py-2 px-4 my-6 border-2 border-purple rounded-xl">
                {{ session('answer') }}
            </p>
        @else
        <p class="py-2 px-4 my-6 border-2 border-purple rounded-xl">
            {{ __('messages.chat.introduction') }}
        </p>
        @endif
        <form action="/ai-chat" method="POST">
            @csrf
            <x-forms-label for="question">{{ __('messages.chat.ask') }}</x-forms-label>
            <x-forms-input name="question" id="question"/>
            <input type="submit" value="{{ __('messages.chat.submit') }}" class="block text-mainLight bg-red hover:bg-red/80 py-2 px-3 mt-6 mx-auto uppercase font-bold rounded-xl shadow shadow-black/40 hover:shadow-black/50 border border-black/15 border-t-white/20 duration-300 cursor-pointer">

        </form>
        <x-close-button class="absolute top-4 right-4 light:text-mainDark" aria-label="{{ __('messages.general.close_chat') }}" target="ai-chat"/>
    </section>
</div>
