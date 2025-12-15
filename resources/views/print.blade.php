<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <title>Peter Cornelis - Curriculum Vitae</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">

        <!-- Styles / Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

    </head>
    <body 
        class="bg-white text-mainDark w-[190mm] mx-auto p-2 bg-top-red bg-no-repeat bg-size-[100vw_218px] bg-linear-to-l from-red/95 to-red forced-color-adjust-auto"
    >
        <header class="grid grid-cols-3">
            <div class="col-span-2">
                <h1 class="text-white text-4xl font-semibold text-shadow-none pb-4">
                    Peter Cornelis
                </h1>
                <address class="text-white">
                    <ul>
                        <li class="flex items-start">
                            <x-svgs.house class="inline mr-2 mt-1"/>
                            <span class="inline-block">
                                {{ __('messages.contact.street') }}
                                <span class="block">{{ __('messages.contact.city') }},</span>
                                {{ __('messages.contact.country') }}
                            </span>
                        </li>
                        <li>
                            <x-svgs.phone class="inline mr-1"/>
                            0451/06.08.82
                        </li>
                        <li>
                            <x-svgs.mail class="inline mr-1"/>
                            peter.cornelis86@gmail.com
                        </li>
                    </ul>

                </address>
            </div>
            <img 
                src="images/profiel-15.avif" 
                loading="lazy" 
                alt="{{ __('messages.about.img_alt') }}" 
                class="rounded-[60%_40%_60%_40%] shadow/30 h-48"
            >
        </header>

        <main>
            <p  class="col-span-3 mt-6 py-2">

                {{ __('messages.about.introduction') }}
            </p>
            <section class="grid grid-cols-2">
                <h2 class="text-3xl col-span-2">{{ __('messages.skills.title') }}</h2>
                <article>
                    <h3 class="text-xl py-2">{{ __('messages.skills.sub_1_title') }}</h3>
                    <ul class="w-fit">
                        <x-star-rating filled='3' size="4" class="py-0 px-0">{{ __('messages.general.html') }}</x-star-rating>
                        <x-star-rating filled='3' size="4" class="py-0 px-0">{{ __('messages.general.css') }}</x-star-rating>
                        <x-star-rating filled='3' size="4" class="py-0 px-0">{{ __('messages.general.mysql') }}</x-star-rating>
                        <x-star-rating filled='3' size="4" class="py-0 px-0">{{ __('messages.general.javascript') }}</x-star-rating>
                        <x-star-rating filled='3' size="4" class="py-0 px-0">{{ __('messages.general.php') }}</x-star-rating>
                    </ul>
                    <div>
                        <h3 class="text-xl pt-4 pb-2">{{ __('messages.skills.sub_5_title') }}</h3>
                        <ul class="w-fit">
                            <li class="grid grid-cols-2 gap-8 text-left">
                                <span class="font-bold text-right">{{ __('messages.skills.sub_5_nl') }}</span>
                                {{ __('messages.skills.sub_5_nl_state') }}
                            </li>
                            <li class="grid grid-cols-2 gap-8 text-left">
                                <span class="font-bold text-right">{{ __('messages.skills.sub_5_eng') }}</span>
                                {{ __('messages.skills.sub_5_eng_state') }} 
                            </li>
                        </ul>
                    </div>
                </article>
                <article class="grid grid-cols-1 w-fit ml-auto">
                    <div>
                        <h3 class="text-xl pt-2 pb-2">{{ __('messages.skills.sub_2_title') }}</h3>
                        <p>{{ __('messages.skills.sub_2_info') }}</p>
                    </div>
                    <div>
                        <h3 class="text-xl pt-4 pb-2">{{ __('messages.skills.sub_3_title') }}</h3>
                        <p>{{ __('messages.skills.sub_3_info') }}</p>
                    </div>
                    <div>
                        <h3 class="text-xl pt-4 pb-2">{{ __('messages.skills.sub_4_title') }}</h3>
                        <p>{{ __('messages.skills.sub_4_info') }}</p>
                    </div>
                </article>
            </section>

            <section>
                <h2 class="text-3xl py-4">{{ __('messages.experience.title') }}</h2>
                <div class="w-fit">
                    <ol class="relative flex w-fit mt-28 ml-6 border-t border-mainDark/20 dark:border-mainLight/20">                  
                        <x-timeline-vert-item 
                            start="2025" end="{{ __('messages.experience.present') }} " at="vdab"
                            class="relative -top-28 w-45"
                        >
                            {{ __('messages.experience.sub_1_title') }} 
                        </x-timeline-vert-item>
                        <x-timeline-vert-item start="2015" end="2024" at="Codima BV" :work="true"
                        class="relative top-9 w-30"
                        >
                            {{ __('messages.experience.sub_2_title') }}  
                        </x-timeline-vert-item>
                        <x-timeline-vert-item 
                            start="2007" end="2012" at="Colora Gent" :work="true"
                            class="relative -top-28 w-50"
                        >
                            {{ __('messages.experience.sub_3_title') }}  
                        </x-timeline-vert-item>
                        <x-timeline-vert-item 
                            end="2006" at="Sint-Vincentius Deinze"
                            class="absolute top-9 left-115 w-50"
                        >
                            {{ __('messages.experience.sub_4_title') }} 
                        </x-timeline-vert-item>
                    </ol>
                </div>
            </section>

        </main>
    </body>
</html>