<div>
    <form wire:submit="submit" class="w-full lg:max-w-2xl xl:max-w-3xl my-6">
        <!-- csrf handled automatic in Livewire -->
        <x-forms-label for="name">{{ __('messages.contact.form.name') }}</x-forms-label>
        @error('name')
            <x-forms-error>{{ $message }}</x-forms-error>
        @enderror
        <x-forms-input wire:model="name" name="name" id="name" autocomplete="name"/>
        <x-forms-label for="email">{{ __('messages.contact.form.email') }}</x-forms-label>
        @error('email')
            <x-forms-error>{{ $message }}</x-forms-error>
        @enderror                    
        <x-forms-input wire:model="email" type="email" name="email" id="email" autocomplete="email"/>
        <x-forms-label for="letter">{{ __('messages.contact.form.message') }}</x-forms-label>
        @error('message')
            <x-forms-error>{{ $message }}</x-forms-error>
        @enderror
        <x-forms-textarea wire:model="message" name="message" id="message" />
        <button 
            type="submit"
            wire:loading.attr="disabled"
            x-data="{success: @entangle('success')}"
            x-init="$watch('success', value => { if(value) setTimeout(() => success = false, 4000) })"
            class="flex justify-center items-center w-full h-12 text-mainLight mt-6 uppercase font-bold rounded-xl shadow shadow-black/40 hover:shadow-black/50 border border-black/15 border-t-white/20 cursor-pointer disabled:opacity-80 transition-colors ease-in-out duration-500"
            :class="success ? 'bg-green' : 'bg-red hover:bg-red/80'"
        >
            <span x-show="success">
                {{ __('messages.contact.form.success') }}
                <x-svgs.checkmark class="ml-1 inline"/>
            </span>
            <span x-show="!success" wire:loading.remove>
                {{ __('messages.contact.form.send') }}
            </span>
            <x-svgs.spinner wire:loading.class.remove="hidden" class="hidden"/>
        </button>
    </form>
</div>
