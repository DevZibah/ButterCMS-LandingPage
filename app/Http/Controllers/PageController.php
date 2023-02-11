<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use ButterCMS\ButterCMS;


class PageController extends Controller
{
   public function showLandingPage()
{
    $butterCms = new ButterCMS("708d9c0cb21ad2cba1ce07631519020719545a10");
    
    $params = [
        'preview' => 1
    ];

    $page = $butterCms->fetchPage('*', 'home-page', $params);

    return view('hero', ['content' => $page['data']]);
}
}
