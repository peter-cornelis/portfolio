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
        $urls = array_slice($urls, 0, 1); // always allow only the first URL

        if (!empty($urls)) {
            $url = $urls[0];
            $vacancyData = $this->getJobVacancyData($url);
            session(['vacancyData' => $vacancyData]);
            $question .= ' Job vacancy: ' . $vacancyData;
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
        $vacancyData = session('vacancyData', '');
        $instructions = str_replace('{vacancyData}', $vacancyData, config('gemini.system_instructions'));
        $answer = Gemini::generativeModel(model: 'gemini-2.5-flash')
            ->withSystemInstruction(
                Content::parse($instructions)
            )
            ->generateContent($question)
            ->text();
        
            $answer = preg_replace('@(https?://([-\w\.]+)+(:\d+)?(/([\w/_\.]*(\?\S+)?)?)?)@', '<a href="$1" target="_blank" class="underline">$1</a>', $answer);
        return $answer;
    }
}

