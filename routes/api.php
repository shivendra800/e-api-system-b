<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
// Route::get('/apidata', function (Request $request) {
//     $key = 'Authorization';
//     $header = $request->header($key, '');
//     $token = '';
//     if (Str::of($header)->startsWith('Bearer')) {
//         $token = Str::of($header)->substr(7);
//     }
//     return $token;
// });

// Route::get('connect', function (Request $request) {
//     $http = new GuzzleHttp\Client;

//     $response = $http->post('https://kastlebaseulsapi.cbhfl.com/KASTLE-BASE-ULS-API/oauth/token', [
//         'form_params' => [
//             'grant_type' => 'password',
//             'client_id' => "9ad89f2a-392f-4a80-a162-f6634a68dbbc",
//             'client_secret' => "kLdEFaYRom3Sre0A7myi1icQpUp1NvocuIyAwfK5",
//             'username' => "user_admin",
//             'password' => "Infotech@1",
//             'scope' => ''
//         ],
//     ]);

//     return json_decode((string) $response->getBody(), true);
// });
Route::namespace('App\Http\Controllers\Front')->group(function () {
    Route::controller(\HomeController::class)->group(function () {
        Route::post('callback-mandate-creation', 'CallBackMandateCreation');
        Route::post('callback-mandate-executions', 'CallBackMandateExecutions');
        Route::post('callback-dynamicqr-trans', 'CallBackDynamicQrTrans');
    });
});
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    // return $request->user();

});
