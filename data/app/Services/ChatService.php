<?php

namespace App\Services;

use Gemini\Data\Content;
use Gemini\Laravel\Facades\Gemini;
use MillerPHP\LaravelBrowserless\Facades\Browserless;

class ChatService
{
    public function addJobVacanciesData(string $question): string
    {
        preg_match_all('/https?:\/\/[^\s"]+/i', $question, $matches);
        $urls = $matches[0];
        array_slice($urls, 0, config('gemini.max_urls')); //silent limit 

        if($urls) {
            foreach($urls as $url) {
                $question = $question.' Job vacancy: '.$this->getJobVacancyData($url);
            }
        }

        return $question;
    }

    private function getJobVacancyData(string $url)
{
        $result = Browserless::scrape()
            ->url($url)
            ->waitForTimeout(5000)
            ->element('main', ['text' => true])
            ->send();

        $content = $result->results('main');
        $text = collect($content)->pluck('text')->implode("\n");

        return trim(substr($text, 0, 5000));
}

    public function getGeminiAnswer(string $question)
    {
        
            $answer = Gemini::generativeModel(model: 'gemini-2.5-flash')
                ->withSystemInstruction(
                    Content::parse(config('gemini.system_instructions'))
                )
                ->generateContent($question)
                ->text();
            
            return $answer;
    }
}
