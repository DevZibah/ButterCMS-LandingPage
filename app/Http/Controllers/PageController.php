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
        $Featuresdata1 = $userData["data"]["fields"]["body"][0]["fields"]["features"][0];
        $Featuresdata2 = $userData["data"]["fields"]["body"][0]["fields"]["features"][1];
        $Featuresdata3 = $userData["data"]["fields"]["body"][0]["fields"]["features"][2];
        // dd($Featuresdata1);

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
            'header1' => $Featuresdata1['header'],
            'description1' => $Featuresdata1['description'],
            'icon1' => $Featuresdata1['icons'],
            'header2' => $Featuresdata2['header'],
            'description2' => $Featuresdata2['description'],
            'icon2' => $Featuresdata2['icons'],
            'header3' => $Featuresdata3['header'],
            'description3' => $Featuresdata3['description'],
            'icon3' => $Featuresdata3['icons'],

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
