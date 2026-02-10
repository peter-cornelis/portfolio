<button 
    class="text-mainLight py-2 rounded-full self-center hover:scale-125 transition-all duration-300 cursor-pointer material-symbols-outlined"
    x-data="{ 
        theme: localStorage.getItem('theme'),
        dark: false, 
        switching: false 
    }"
    x-init="
        if (theme === null) {
            systemTheme = window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light';         //detect OS level dark mode onload
            localStorage.setItem('theme', systemTheme);
        }

        dark = theme === 'dark';
        document.documentElement.classList.toggle('dark', theme === 'dark');

        $watch('theme', value => {
            dark = value === 'dark';
            localStorage.setItem('theme', value);
            document.documentElement.classList.toggle('dark', value === 'dark');
        })
        dark = theme === 'dark';"

    @click="switching = true; setTimeout(() => { theme = theme === 'dark' ? 'light' : 'dark'; switching = false; }, 200)"
    :class="switching ? 'opacity-0 scale-0 rotate-180' : 'opacity-100 scale-100 rotate-0'"
    x-text="dark ? 'brightness_empty' : 'dark_mode'"
>
<span class="sr-only" x-text="dark ? '{{ __('messages.general.toggle_dark') }}' : '{{ __('messages.general.toggle_light') }}'"></span>
</button>
