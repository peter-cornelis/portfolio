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
    <body class="bg-white text-mainDark w-[190mm] mx-auto p-2">
        <!-- Header -->
        <header class="grid grid-cols-3">
            <div class="col-span-2">
                <h1 class="text-4xl font-semibold text-shadow-none pb-4">
                    Peter Cornelis
                </h1>
                <address class="">
                    <ul>
                        <li>
                            {{ __('messages.contact.street') }}, {{ __('messages.contact.city') }}
                            <span class="block">{{ __('messages.contact.country') }}</span>
                        </li>
                        <li>
                            0451/06.08.82
                        </li>
                        <li>
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
            <h2 class="lg:mt-8 lg:pr-0">{{ __('messages.about.hey') }} <span class="block">{{ __('messages.about.hey_2') }}</span></h2>
            <p  class="col-span-3">
                {{ __('messages.about.introduction') }}
            </p>
        </header>

        <main>

        </main>
        
        <footer style="text-align: center; margin-top: 20pt; padding-top: 10pt; border-top: 1pt solid #ddd;">
            <p>&copy; Peter Cornelis | 2025</p>
        </footer>
    </body>
</html>