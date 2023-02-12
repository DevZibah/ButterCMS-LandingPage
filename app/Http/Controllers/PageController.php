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
    private static $apiToken = '708d9c0cb21ad2cba1ce07631519020719545a10';
    private $client;

    public function __construct() {
        $this->client = new ButterCMS(PageController::$apiToken);
    }
    public function showLandingPage() {
        $page = $this->client->fetchPage('*', 'home-page');
        return view('hero', [
        'header' => $page->getField('header'),
        'subHeader' => $page->getField('sub-header'),
        'herobuttonurl' => $page->getField('hero-button_url'),
        'herobuttonlabel' => $page->getField('hero-button_label'),
        'heroimage' => $page->getField('hero-image'),
        'scrollanchorid' => $page->getField('scroll-anchor-id'),
        'features' => $page->getField('features'),
        ]);
        
        echo $page[data];
    }


//    public function showLandingPage()
// {
//     $butterCms = new ButterCMS("708d9c0cb21ad2cba1ce07631519020719545a10");
    
//     $params = [
//         'preview' => 1
//     ];

//     $page = $butterCms->fetchPage('*', 'home-page', $params);

//     echo $page['data'];

//     return view('hero', ['content' => $page['data']]);
// }
}
