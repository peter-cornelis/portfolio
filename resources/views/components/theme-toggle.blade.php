<button 
    class="absolute top-1.5 right-0 text-mainLight p-1 rounded-full transition-all duration-300 cursor-pointer material-symbols-outlined"
    x-data="{ dark: localStorage.getItem('theme') === 'dark', switching: false }"
    x-init="document.documentElement.classList.toggle('dark', dark);
            $watch('dark', val => {
                localStorage.setItem('theme', val ? 'dark' : 'light');
                document.documentElement.classList.toggle('dark', val);
            })"
    @click="switching = true; setTimeout(() => { dark = !dark; switching = false; }, 200)"
    :class="switching ? 'opacity-0 scale-0 rotate-180' : 'opacity-100 scale-100 rotate-0'"
    x-text="dark ? 'dark_mode' : 'brightness_empty'"
></button>
