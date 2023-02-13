<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
    // private static $apiToken = '708d9c0cb21ad2cba1ce07631519020719545a10';
    // private $client;

    // public function __construct() {
    //     $this->client = new ButterCMS(PageController::$apiToken);
    // }
    
    // $page = $this->client->fetchPage('*', 'home-page');
    // $data = (array) $page;
    // dd($data);

}
