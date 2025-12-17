<?php

namespace App\Livewire;

use Gemini\Data\Content;
use Gemini\Laravel\Facades\Gemini;
use Livewire\Component;

class AiChat extends Component
{
    public string $question ='';
    public string $answer = '';

    public function chat()
    {
        $this->validate([
            'question' => 'required|string|max:500'
        ]);

        try {
            $this->answer = Gemini::generativeModel(model: 'gemini-2.5-flash')
                ->withSystemInstruction(
                    Content::parse(config('gemini.system_instructions'))
                )
                ->generateContent($this->question)
                ->text();

            $this->question = '';
        } catch(\Exception $e) {
            $this->answer = __('messages.chat.failed');
            $this->question = '';
        }
    }

    public function render()
    {
        return view('livewire.ai-chat');
    }
}
