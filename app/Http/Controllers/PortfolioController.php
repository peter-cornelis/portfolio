<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Cookie;
use Spatie\Browsershot\Browsershot;

class PortfolioController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function toggleLanguage(string $locale)
    {
        if (in_array($locale, ['en', 'nl'])) {
            Cookie::queue('language', $locale, 525600);
        }
        return redirect()->back();
    }
    
    public function printView()
    {
        return view('print');
    }

    public function downloadPdf()
    {
        return response()->download('assets/cv.pdf', 'CV_Peter_Cornelis.pdf');
    }

    /* private function makePdf()
    {
        $html = view('print')->render();
    
        $pdf = Browsershot::html($html)
            ->waitUntilNetworkIdle() //Make sure everything is loaded (wait for image)
            ->format('A4')
            ->margins(10, 10, 10, 10)
            ->pdf();

        return response($pdf, 200, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'attachment; filename="portfolio.pdf"'
        ]);
    } */
}
