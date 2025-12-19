<?php

namespace App\Livewire;

use Gemini\Data\Content;
use Gemini\Laravel\Facades\Gemini;
use Spatie\Browsershot\Browsershot;
use Symfony\Component\DomCrawler\Crawler;
use Illuminate\Support\Facades\Log;
use Livewire\Component;

class AiChat extends Component
{
    public string $question ='';
    public string $answer = '';
    public string $vacancy = '';

    public function chat()
    {
        $this->validate([
            'question' => 'required|string|min:10|max:500',
        ],[
            'question.required' => __('messages.error.question_required'),
            'question.string' => __('messages.error.question_string'),
            'question.max' => __('messages.error.question_min'),
            'question.max' => __('messages.error.question_max'),
        ]);

        $url = 'https://www.vdab.be/vindeenjob/vacatures/72578946';
        $html = Browsershot::url($url)->bodyHtml();

        $crawler = new Crawler($html);
        $text = $crawler->filter('main, article, .job-description, .vacature, .job-content')->each(function ($node) {
            return $node->text();
        });
        $text = implode("\n", $text);
        $text = trim(substr($text, 0, 5000));

        try {
            $this->answer = Gemini::generativeModel(model: 'gemini-2.5-flash')
                ->withSystemInstruction(
                    Content::parse(config('gemini.system_instructions'))
                )
                ->generateContent($this->question.' Job vacancy: '.$this->vacancy)
                ->text();
            
            Log::info('AI Chat response generated', [
                'question' => $this->question,
                'answer_length' => strlen($this->answer)
            ]);
            
            $this->question = '';
        } catch(\Exception $e) {
            Log::error('AI Chat failed', [
                'question' => $this->question,
                'error' => $e->getMessage(),
            ]);

            $this->answer = __('messages.chat.failed');
            $this->question = '';
        }
    }

    public function render()
    {
        return view('livewire.ai-chat');
    }
}
