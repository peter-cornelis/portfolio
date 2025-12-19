<?php

namespace App\Livewire;

use App\Services\ChatService;
use Illuminate\Support\Facades\Log;
use Livewire\Component;

class AiChat extends Component
{
    public string $question ='';
    public string $answer = '';

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

        $chatService = new ChatService();

        $this->question = $chatService->addJobVacanciesData($this->question);
        try {
            $this->answer = $chatService->getGeminiAnswer($this->question);
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
