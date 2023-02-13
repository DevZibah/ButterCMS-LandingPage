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
        $Navresponse = Http::get('https://api.buttercms.com/v2/content/nav_menu/?auth_token=708d9c0cb21ad2cba1ce07631519020719545a10');

        $navData = $Navresponse->json();
        $NavHeading = $navData["data"]["nav_menu"][0];
        $Navdata = $navData["data"]["nav_menu"][0]["menu_items"][0];
        $Navdata1 = $navData["data"]["nav_menu"][0]["menu_items"][1];
        $Navdata2 = $navData["data"]["nav_menu"][0]["menu_items"][2];
        // dd($NavHeading);


        $response = Http::get('https://api.buttercms.com/v2/pages/landing-page/home-page/?preview=1&auth_token=708d9c0cb21ad2cba1ce07631519020719545a10');

        $userData = $response->json();
        $Herodata = $userData["data"]["fields"]["body"][1]["fields"];
        $Featuresdata = $userData["data"]["fields"]["body"][0]["fields"];
        // dd($Featuresdata);

        $TestimonialResponse = Http::get('https://api.buttercms.com/v2/content/testimonial_menu/?auth_token=708d9c0cb21ad2cba1ce07631519020719545a10');

        $TestimonialData = $TestimonialResponse->json();
        $TestMenu = $TestimonialData["data"]["testimonial_menu"][0];
        $TestData = $TestimonialData["data"]["testimonial_menu"][0]["testimonial_items"][0];
        $TestData1 = $TestimonialData["data"]["testimonial_menu"][0]["testimonial_items"][1];
        // dd($TestMenu);


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

            'NavHeading' => $NavHeading['menu'],
            'HomeLabel' => $Navdata2['label'],
            'HomeUrl' => $Navdata2['url'],
            'TestimonialLabel' => $Navdata['label'],
            'TestimonialUrl' => $Navdata['url'],
            'AboutLabel' => $Navdata1['label'],
            'AboutUrl' => $Navdata1['url'],

            "testimonialMenu" => $TestMenu["testimonial_menu"],
            "fullname" => $TestData["fullname"],
            "occupation" => $TestData["occupation"],
            "content" => $TestData["content"],
            "image" => $TestData["image"],
            "fullname1" => $TestData1["fullname"],
            "occupation1" => $TestData1["occupation"],
            "content1" => $TestData1["content"],
            "image1" => $TestData1["image"],

        ]);
    }
    
}
