<?php

use Illuminate\Support\Facades\Route;

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
use App\Http\Controllers\PagesController;

Route::get("/",[PagesController::class, "index"]);

Route::get('/airport-transfer', [PagesController::class, "airportTransfer"]);

Route::get("/book",[PagesController::class, "book"]);

Route::get("/about-us", [PagesController::class, "aboutus"]);

Route::get("/contactus",[PagesController::class, "contactus"]);

Route::get("/hotels",[PagesController::class,"hotels"]);

Route::post("/email", [PagesController::class,"sendEmail"]);