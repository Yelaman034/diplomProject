<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ChildrenController;

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
    return view('welcome');
});

Route::get('/children',[ChildrenController::class,'children']);

//Form аас post аар өгөгдлүүд шидэх
Route::post('/children/create',[ChildrenController::class,'create']);

//Edit дарсныг нь авна
Route::get('/children/{id}/edit',[ChildrenController::class,'edit']);

//Edit авсан өгөдлийг шинэжлээд DB шидэх
Route::post('/children/{id}/update',[ChildrenController::class,'update']);
