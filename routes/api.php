<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Http\Controllers\Api\AuthController;


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
/*
Route::post('/sanctum/token',    [LoginController::class,'Create_Token']);

Route::middleware('auth:sanctum')->get('/user/revoke', function (Request $request) {
    $user = $request->user();
    $user->tokens()->delete();
    return 'tokens is deleted';
});*/



Route::get('/ListCaractere', [App\Http\Controllers\Api\ApiCaractererController::class, 'ListCaractere'])->name('ListCaractere');


Route::get('/ListClasse', [App\Http\Controllers\Api\ApiArchiveeController::class, 'ListClass']);


Route::post('/login', [App\Http\Controllers\Api\AuthController::class, 'login']);

Route::post('/refresh-token', [App\Http\Controllers\Api\AuthController::class, 'refreshToken']);

Route::get('/ListEtat/{id}', [App\Http\Controllers\Api\ApiEtatController::class, 'ListEtat']);

Route::post('/AddRapport', [App\Http\Controllers\Api\ApiLanceTourController::class, 'AddRapport']);

Route::get('/ListRapport/{id}', [App\Http\Controllers\Api\ApiLanceTourController::class, 'ListRapport']);

Route::post('/AddImage', [App\Http\Controllers\Api\ImageController::class, 'AddImage']);


Route::post('/AddDercri-Rapport', [App\Http\Controllers\Api\ApiLanceTourController::class, 'AddDescriRapport']);

Route::get('/ListDerci/{id}', [App\Http\Controllers\Api\ApiArchiveeController::class, 'ListDerci']);

Route::get('/ListDsceriRapport/{id}', [App\Http\Controllers\Api\ApiLanceTourController::class, 'ListDsceriRapport']);



