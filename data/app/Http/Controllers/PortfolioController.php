<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Cookie;
use Spatie\Browsershot\Browsershot;
use App\Http\Controllers\Controller;

class PortfolioController extends Controller
{
    public function index()
    {
        $url = config('app.url');
        
        return view('home', [
            'markup' => [
                "@context" => "https://schema.org",
                "@graph" => [
                    [
                        "@type" => "Person",
                        "name" => config('app.contact.name'),
                        "@id" => $url,
                        "url" => $url,
                        "image" => $url . "/images/profiel-15.avif",
                        "jobTitle" => "Full-Stack PHP Developer",
                        "knowsAbout" => config('app.technologies'),
                        "sameAs" => [
                            config('app.contact.github'),
                            config('app.contact.linkedin')
                        ]
                    ],
                    [
                        "@type" => "WebSite",
                        "name" => config('app.name'),
                        "url" => $url,
                        "publisher" => [ "@id" => $url ],
                        "author" => [ "@id" => $url ]
                    ]
                ]
            ]
        ]);
    }

    public function toggleLanguage(string $locale)
    {
        if (in_array($locale, ['en', 'nl'])) {
            Cookie::queue('language', $locale, 525600);
        }
        return redirect()->back();
    }

    public function downloadPdf()
    {
        if (app()->environment('local')) {
            $html = view('home', ['showContact' => true])->render();

            $pdf = Browsershot::html($html)
                ->setBasePath(public_path())
                ->emulateMedia('print')
                ->waitUntilNetworkIdle()
                ->format('A4')
                ->margins(10, 10, 10, 10)
                ->pdf();

            return response($pdf, 200, [
                'Content-Type' => 'application/pdf',
                'Content-Disposition' => 'inline; filename="CV_Peter_Cornelis.pdf"',
            ]);
        }

        return response()->file(public_path('assets/cv_'.app()->getLocale().'.pdf'),[
            'Vary' => 'Cookie',
            'Content-Disposition' => 'inline; filename="cv_peter_cornelis.pdf"'
            ]);
    }
}
