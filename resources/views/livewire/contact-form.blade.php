<div>
    <form action="/contact" method="POST" class="w-full lg:max-w-2xl xl:max-w-3xl my-6">
        @csrf
        <x-forms-label for="name">{{ __('messages.contact.form.name') }}</x-forms-label>
        @error('name')
            <x-forms-error>{{ $message }}</x-forms-error>
        @enderror
        <x-forms-input name="name" id="name" autocomplete="name"/>
        <x-forms-label for="email">{{ __('messages.contact.form.email') }}</x-forms-label>
        @error('email')
            <x-forms-error>{{ $message }}</x-forms-error>
        @enderror                    
        <x-forms-input type="email" name="email" id="email" autocomplete="email"/>
        <x-forms-label for="message">{{ __('messages.contact.form.message') }}</x-forms-label>
        @error('message')
            <x-forms-error>{{ $message }}</x-forms-error>
        @enderror
        <x-forms-textarea name="message" id="message" />
        <input type="submit" value="{{ __('messages.contact.form.send') }}" class="block w-full text-mainLight bg-red hover:bg-red/80 py-2 px-3 mt-6 uppercase font-bold rounded-xl shadow shadow-black/40 hover:shadow-black/50 border border-black/15 border-t-white/20 duration-300 cursor-pointer">
    </form>
</div>
