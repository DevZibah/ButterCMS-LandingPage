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
        $data = $userData["data"]["fields"]["body"][1]["fields"];
        // dd($data);

        return view('hero', [
            'header' => $data['header'],
            'subHeader' => $data['sub-header'],
            'herobuttonurl' => $data['hero-button_url'],
            'herobuttonlabel' => $data['hero-button_label'],
            'heroimage' => $data['hero-image'],
            'scrollanchorid' => $data['scroll-anchor-id'],
        ]);
    }
    
}
