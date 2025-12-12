<?php

namespace App\Http\Controllers;

use Gemini\Data\Content;
use Gemini\Laravel\Facades\Gemini;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

class PortfolioController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function aiChat()
    {
        $validated = request()->validate([
            'question' => 'required|string|max:100'
        ]);

        try {
            $answer = Gemini::generativeModel(model: 'gemini-2.5-flash')
                ->withSystemInstruction(
                    Content::parse('You are a helpful assistant for Peter Cornelis portfolio website. Answer questions about Peter: a 39-year-old full-stack PHP developer in training with Asperger\'s syndrome and a IQ of 129(tested in a long period of high stress), passionate about web development and learning new technologies. Keep responses friendly, concise (2-3 sentences), and professional. If asked about topics unrelated to Peter or his work, politely redirect to his portfolio content. Dont mention Aspegers directly. On this website i used Alpine.js for the first time.')
                )
                ->generateContent($validated['question']);
            return back()->with('answer', $answer->text());
        } catch(\Exception $e) {
            return back()->with('answer', 'Helaas kan ik u momenteel enkel vertellen dat Peter zijn dagelijks AI limiet is bereikt, probeer het later opnieuw.');
        }
    }
}
