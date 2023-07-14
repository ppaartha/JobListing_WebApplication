<?php

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ListingController;

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
//all listings
Route::get('/', [ListingController::class,'index']);



//show create form

Route::get('/listings/create',[ListingController::class,'create'])
->middleware('auth');


//store listing data

Route::post('/listings',[ListingController::class,'store'])
->middleware('auth');

//show edit data

Route::get('/listings/{listing}/edit',[ListingController::class,'edit'])
->middleware('auth');
//update data

Route::put('/listings/{listing}',[ListingController::class,'update'])
->middleware('auth');


//delete data
Route::delete('/listings/{listing}',[ListingController::class,'destroy'])
->middleware('auth');

//Manage Listing

Route::get('/listings/manage', [ListingController::class, 'manage'])->middleware('auth');

//single listing
Route::get('/listings/{listing}', [ListingController::class,'show']);


//show register

Route::get('/register', [UserController::class,'create'])
->middleware('guest');

//Register user

Route::post('/users', [UserController::class,'store'])->middleware('guest');
//LogOut
Route::post('/logout', [UserController::class,'logout'])
->middleware('auth');

//show LogIn
Route::get('/login', [UserController::class,'login'])
->name('login')->middleware('guest');


//LogIn
Route::post('/users/authenticate', [UserController::class,'authenticate'])->middleware('guest');


