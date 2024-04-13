<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();


Route::prefix('admin')->middleware('auth')->group(function(){


});

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\AfficheDashbordController::class, 'index'])->name('index')->middleware('role:admin');
Route::get('/User', [App\Http\Controllers\UserConstroller::class, 'ListUser'])->name('ListUser')->middleware('role:admin');
Route::get('/AddUser', [App\Http\Controllers\UserConstroller::class, 'getAddUser'])->name('getAddUser')->middleware('role:admin');
Route::post('/AddUser', [App\Http\Controllers\UserConstroller::class, 'AddUser'])->name('adduser')->middleware('role:admin');

Route::get('/getUpdateUser/{id}', [App\Http\Controllers\UserConstroller::class, 'getUpdateUser'])->name('getUpdateUser')->middleware('role:admin');
Route::post('/UpdateUser/{id}', [App\Http\Controllers\UserConstroller::class, 'UpdateUser'])->middleware('role:admin');
Route::get('/DeleteUser/{id}', [App\Http\Controllers\UserConstroller::class, 'DeleteUser'])->middleware('role:admin');


Route::get('/Caractere', [App\Http\Controllers\CaractereController::class, 'ListCarctere'])->name('ListCarctere')->middleware('role:admin');

Route::get('/addCaractere', [App\Http\Controllers\CaractereController::class, 'getAddCaractere'])->name('getAddCaractere')->middleware('role:admin');
Route::post('/AddCaractere', [App\Http\Controllers\CaractereController::class, 'AddCaractere'])->name('AddCaractere')->middleware('role:admin');


Route::get('/update/{id}', [App\Http\Controllers\CaractereController::class, 'getUpdateCaractere'])->name('getUpdateCaractere')->middleware('role:admin');
Route::post('/UpdateCaractere/{id}', [App\Http\Controllers\CaractereController::class, 'UpdateCaractere'])->middleware('role:admin');

Route::get('/DeleteCaracterer/{id}', [App\Http\Controllers\CaractereController::class, 'DeleteCaracterer'])->middleware('role:admin');


Route::get('/Etat', [App\Http\Controllers\EtatController::class, 'ListEtat'])->name('ListEtat')->middleware('role:admin');
Route::get('/addEtat', [App\Http\Controllers\EtatController::class, 'getAddEtat'])->name('addEtat')->middleware('role:admin');
Route::post('/AddEtat', [App\Http\Controllers\EtatController::class, 'AddEtat'])->name('AddEtat')->middleware('role:admin');


Route::get('/getUpdateEtat/{id}', [App\Http\Controllers\EtatController::class, 'getUpdateEtat'])->name('getUpdateEtat')->middleware('role:admin');
Route::post('/UpdateEtat/{id}', [App\Http\Controllers\EtatController::class, 'UpdateEtat'])->middleware('role:admin');


Route::get('/DeleteEtat/{id}', [App\Http\Controllers\EtatController::class, 'DeleteEtat'])->middleware('role:admin');


Route::get('/Tour', [App\Http\Controllers\TourController::class, 'ListTour'])->name('ListTour')->middleware('role:admin');
Route::get('/addTour', [App\Http\Controllers\TourController::class, 'getAddTour'])->name('getAddTour')->middleware('role:admin');

Route::post('/AddTour', [App\Http\Controllers\TourController::class, 'AddTour'])->name('AddTour')->middleware('role:admin');

Route::get('/ListRapport', [App\Http\Controllers\RecevoirRapportController::class, 'ListRapport'])->name('ListRapport')->middleware('role:admin');


Route::get('/ListDescriptionRapport/{id}', [App\Http\Controllers\RecevoirRapportController::class, 'ListDescriRapport'])->name('ListDescriRapport')->middleware('role:admin');


Route::get('/ListRapport-Indice', [App\Http\Controllers\CalculeController::class, 'ListRapport'])->name('ListRapportIndice')->middleware('role:admin');


Route::get('/ListRapport-Classer', [App\Http\Controllers\ClasserController::class, 'ListRapport'])->name('ListRapportClasser')->middleware('role:admin');


Route::get('/Calcul-Indice', [App\Http\Controllers\CalculeController::class, 'Calcul'])->middleware('role:admin');

Route::get('/ListImage/{id}', [App\Http\Controllers\ClasserController::class, 'ListImage'])->name('ListImage')->middleware('role:admin');

Route::get('/ListClass', [App\Http\Controllers\MatriceController::class, 'ListClasse'])->name('ListClasse')->middleware('role:admin');


Route::get('/AddClass', [App\Http\Controllers\MatriceController::class, 'AddClass'])->name('AddClass')->middleware('role:admin');

Route::post('/AddClasse', [App\Http\Controllers\MatriceController::class, 'AddClasse'])->name('AddClasse')->middleware('role:admin');

Route::get('/getUpdateClasse/{id}', [App\Http\Controllers\MatriceController::class, 'getUpdateClasse'])->name('getUpdateClasse')->middleware('role:admin');


Route::post('/UpdateClasse/{id}', [App\Http\Controllers\MatriceController::class, 'UpdateClasse'])->middleware('role:admin');
Route::get('/DeleteClasse/{id}', [App\Http\Controllers\MatriceController::class, 'DeleteClasse'])->middleware('role:admin');


Route::get('/ListDescriClasse/{id}', [App\Http\Controllers\MatriceController::class, 'ListDescriClass'])->name('ListDescriClass')->middleware('role:admin');




Route::get('/getAddDescri', [App\Http\Controllers\MatriceController::class, 'getAddDescri'])->name('getAddDescri')->middleware('role:admin');


Route::get('/null', [App\Http\Controllers\AfficheDashbordController::class, 'null'])->name('null')->middleware('role:ingenieur');


Route::post('/AddDerscri', [App\Http\Controllers\MatriceController::class, 'AddDerscri'])->name('AddDerscri')->middleware('role:admin');


Route::get('/DeleteDerscri/{id}', [App\Http\Controllers\MatriceController::class, 'DeleteDescri'])->middleware('role:admin');
Route::get('getCalcul/{id}', [App\Http\Controllers\CalculeController::class, 'getCalcul'])->name('calc.rapport')->middleware('role:admin');


Route::get('/NameImage', [App\Http\Controllers\ClassificationController::class, 'classification'])->middleware('role:admin');


Route::get('/classify/{id}', [App\Http\Controllers\ClasserController::class, 'classify'])->name('classify')->middleware('role:admin');

