<button 
    class="absolute top-1 right-0 text-[20px]! text-white p-2 rounded-full ring-2 ring-transparent hover:ring-white/15 active:ring-white/15 transition-all duration-300 material-symbols-outlined"
    x-data="{ dark: localStorage.getItem('theme') === 'dark', switching: false }"
    x-init="document.documentElement.classList.toggle('dark', dark);
            $watch('dark', val => {
                localStorage.setItem('theme', val ? 'dark' : 'light');
                document.documentElement.classList.toggle('dark', val);
            })"
    @click="switching = true; setTimeout(() => { dark = !dark; switching = false; }, 200)"
    :class="switching ? 'opacity-0 scale-0 rotate-180' : 'opacity-100 scale-100 rotate-0'"
    x-text="dark ? 'dark_mode' : 'light_mode'"
></button>
