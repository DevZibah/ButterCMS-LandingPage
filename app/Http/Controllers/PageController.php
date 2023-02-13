<?php

namespace App\Http\Controllers;

use ButterCMS\ButterCMS;
use App\Http\Controllers\Controller;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\View\View;


class PageController extends Controller
{
    public function showLandingPage() {
        $response = Http::get('https://api.buttercms.com/v2/pages/landing-page/home-page/?preview=1&auth_token=708d9c0cb21ad2cba1ce07631519020719545a10');

        $userData = $response->json();
        $Herodata = $userData["data"]["fields"]["body"][1]["fields"];
        $Featuresdata = $userData["data"]["fields"]["body"][0]["fields"];
        // dd($Featuresdata);

        return view('landingPage', [
            'header' => $Herodata['header'],
            'subHeader' => $Herodata['sub-header'],
            'herobuttonurl' => $Herodata['hero-button_url'],
            'herobuttonlabel' => $Herodata['hero-button_label'],
            'heroimage' => $Herodata['hero-image'],
            'scrollanchorid' => $Herodata['scroll-anchor-id'],

            'featuresHeader' => $Featuresdata['features-header'],
            'featuresSubHeader' => $Featuresdata['features-sub-header'],
            'scrollanchorid' => $Featuresdata['scroll-anchor-id'],
            'features' => $Featuresdata['features'],
        ]);
    }
    
}
