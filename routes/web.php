<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\Admin\AdminController;
// use App\Http\Controllers\Child\ChildController;

include __DIR__ . '/admin.php';
include __DIR__ . '/tourist.php';
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
    return view('index');
});
Route::middleware(['middleware' => 'PreventBackHistory'])->group(function () {
    Auth::routes();
});





