<?php

namespace App\Services;

use Spatie\Browsershot\Browsershot;
use Symfony\Component\DomCrawler\Crawler;
use Gemini\Data\Content;
use Gemini\Laravel\Facades\Gemini;

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
        $html = Browsershot::url($url)->bodyHtml();
        $crawler = new Crawler($html);
        $text = $crawler->filter('main, article, .job-description, .vacature, .job-content')->each(function ($node) {
            return $node->text();
        });
        $text = implode("\n", $text);

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
