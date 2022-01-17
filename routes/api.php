<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::post('/', function (\Illuminate\Http\Request $request){
//     \Illuminate\Support\Facedes\Storage::append("arduino-log.txt",
//         "sensorSuhu: " . $request->get("temperature", "n/n") . 'C, ' .
//         "sensor_pin: " . $request->get("humidity", "n/a") . '%' . 
//         "relayPin: " . $request->get("defuzzy", "n/a") . 's' 
//     );
// });
