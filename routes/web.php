<?php

use App\Http\Controllers\formController;
use App\Http\Controllers\userController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/logout', [userController::class,'logout'])->name('logout');

Route::post('/registerProcess',[userController::class,'register'])->name('register');
Route::post('/loginProcess',[userController::class,'login'])->name('login');

Route::post('/save-location-armoir',[formController::class,'saveLocationArmoir']);
Route::post('/save-location-point',[formController::class,'saveLocationPoints']);

Route::get('/forms',[formController::class,'formView']);

Route::get('/',[formController::class,'home']);

Route::get('/borough',[formController::class,'borough'])->name("borough");
Route::get('/points ',[formController::class,'points'])->name("points");

Route::get('/armoir/data',[formController::class,'dataArmoir'])->name("data");
Route::get('/point/data',[formController::class,'dataPoint'])->name("pointData");
Route::post('/saveArmoir',[formController::class,'saveArmoir'])->name("saveArmoir");
Route::post('/savePoint',[formController::class,'savePoint'])->name("savePoint");

Route::post('/sendarrondissementArmoir',[formController::class,'sendarrondissementArmoir'])->name('sendarrondissementArmoir');
Route::post('/sendarrondissementPoint',[formController::class,'sendarrondissementPoint'])->name('sendarrondissementPoint');
Route::get('/location',[formController::class,'location'])->name('location');

Route::get('/exportFilesArmoir', [formController::class, 'exportFilesArmoir']);
Route::get('/exportFilesPoint', [formController::class, 'exportFilesPoint']);


Route::get('/register',[userController::class,'registerView']);
Route::get('/login',[userController::class,'loginView']);
