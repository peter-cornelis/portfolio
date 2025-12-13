<div 
    class="fixed left-0 bottom-0 z-200 w-full py-4 px-8 bg-lightGrey dark:bg-grey border-t-3 border-t-purple"
    x-data="{ show: !@js($bannerViewed) }"
    x-show="show"
    x-transition:leave="transition ease-in duration-300"
    x-transition:leave-start="transform translate-y-0"
    x-transition:leave-end="transform translate-y-full"
    >
    <section class="grid grid-cols-[1fr_auto] max-w-4xl mx-auto">
            <h3 class="text-3xl col-span-2 pb-0">
                {{ __('messages.banner.title') }} 
            </h3>    
            <p class="pt-2 pb-4 lg:pr-12 max-sm:text-balance">
                {{ __('messages.banner.info') }}
            </p>
            <div class="self-center text-6xl">&#x1F36A;</div>
        <button
            class="mx-auto h-12 px-4 col-span-2 text-mainLight uppercase font-bold bg-purple hover:bg-purple/90 dark:hover:bg-purple/70 rounded-xl shadow shadow-black/40 hover:shadow-black/50 border border-black/15 border-t-white/20 cursor-pointer disabled:opacity-80 transition-colors ease-in-out duration-500"
            wire:click="viewed"
            @click="show = false"
        >
            {{ __('messages.banner.understood') }}
        </button>
    </section>
</div>