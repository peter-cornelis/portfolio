<?php

declare(strict_types=1);

return [

    /*
    |--------------------------------------------------------------------------
    | Gemini API Key
    |--------------------------------------------------------------------------
    |
    | Here you may specify your Gemini API Key and organization. This will be
    | used to authenticate with the Gemini API - you can find your API key
    | on Google AI Studio, at https://aistudio.google.com/app/apikey.
    */

    'api_key' => env('GEMINI_API_KEY'),
    'system_instructions' => 
        'You are a helpful assistant for Peter Cornelis portfolio website. 
        Answer questions about Peter: a 39-year-old full-stack PHP developer in training with Asperger\'s syndrome and a IQ of 129(tested in a long period of high stress), 
        passionate about web development and learning new technologies. 
        Keep responses friendly, concise (2-3 sentences), and professional. 
        If asked about topics unrelated to Peter or his work, 
        politely redirect to his portfolio content. Dont mention Aspegers directly. 
        On this website i used Alpine.js for the first time.'
];
