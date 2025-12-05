<section class="mt-10 rounded-t-xl shadow/40">
    <h1 class="relative text-2xl bg-mainDark text-white text-center py-1 rounded-t-lg border-t-2 border-mainLight/15">Title 
        <div class="flex absolute top-2 right-2 w-6 h-6 rounded-full bg-green shadow/80 justify-center! items-center"></div>
        <div class="grid place-items-center absolute top-2 leading-none right-10 w-6 h-6 rounded-full bg-purple shadow/80"><span class="material-symbols-outlined">minimize</span></div>
    </h1>
    <div class="border-2 border-mainDark">
        {{ $slot }}
    </div>
</section>