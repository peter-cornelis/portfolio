<?php

namespace App\Services;

use Gemini\Data\Content;
use Gemini\Laravel\Facades\Gemini;
use Illuminate\Support\Facades\Log;
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

    private function getJobVacancyData(string $url): string
    {
        try {
            $result = Browserless::scrape()
                ->url($url)
                ->waitForTimeout(5000)
                ->element('main', ['text' => true])
                ->send();

            $content = $result->results('main');
            $text = collect($content)->pluck('text')->implode("\n");

            return trim(substr($text, 0, 5000));
        } catch (\Throwable $e) {
            Log::warning('Browserless scrape failed', [
                'url' => $url,
                'error' => $e->getMessage(),
            ]);
            return 'failed to collect job vacancy data for this url';
        }
    }

    public function getGeminiAnswer(string $question): string
    {
        
            $answer = Gemini::generativeModel(model: 'gemini-2.5-flash')
                ->withSystemInstruction(
                    Content::parse(config('gemini.system_instructions'))
                )
                ->generateContent($question)
                ->text();
            
                $answer = preg_replace('@(https?://([-\w\.]+)+(:\d+)?(/([\w/_\.]*(\?\S+)?)?)?)@', '<a href="$1" target="_blank" class="underline">$1</a>', $answer);
            return $answer;
    }
}
