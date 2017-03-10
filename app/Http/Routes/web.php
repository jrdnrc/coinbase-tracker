<?php

use JrdnRc\CoinbaseTracker\Laravel\Http\Controllers;
use Illuminate\Routing\Router;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/** @var Router $router */

$router->group(
    [
        'middleware' => ['web'],
    ],
    function (Router $router) {
        $router->get('/', function () {
            return response()->redirectTo('https://jcrocker.uk');
        });
    }
);