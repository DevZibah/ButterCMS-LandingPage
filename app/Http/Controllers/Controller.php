<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
    // private static $apiToken = '<API-token>';
    // private $client;

    // public function __construct() {
    //     $this->client = new ButterCMS(PageController::$apiToken);
    // }
    
    // $page = $this->client->fetchPage('*', 'home-page');
    // $data = (array) $page;
    // dd($data);

}
