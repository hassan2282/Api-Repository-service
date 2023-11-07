<?php

use App\Http\Controllers\ProjectController;
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

Route::resource('/project', ProjectController::class);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/json-test', function () {
    return response()->json([
        'name' => 'ali',
        'updated' => true,
    ]);
});


Route::get('/view-test', function () {
    return view('test', ['name' => 'tylor']);
});
