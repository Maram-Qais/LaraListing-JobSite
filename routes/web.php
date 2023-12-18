<?php

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ListingController;


// show all listings
Route::get('/', [ListingController::class, 'index']);


//show create form
Route::get('/listings/create',[ListingController::class,'create'])->middleware('auth');


// store  listing data
Route::post('/listings', [ListingController::class, 'store'])->middleware('auth');;


// show edit form
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit'])->middleware('auth');;

// update edit form to db
Route::put('/listings/{listing}', [ListingController::class, 'update'])->middleware('auth');;

// manage lists
Route::get('/listings/manage', [ListingController::class, 'manage'])->middleware('auth');;


// delete listing
Route::delete('/listings/{listing}',[ListingController::class,'destroy'])->middleware('auth');;

// show single listing
Route::get('/listings/{listing}', [ListingController::class, 'show']);

// show  register create form
Route::get('/register', [UserController::class, 'create'])->middleware('guest');;


//create new user
Route::post('/users', [UserController::class, 'store']);

//logging out
Route::post('/logout', [UserController::class, 'logout']);

// show  login create form

Route::get('/login', [UserController::class, 'login'])->name('login');

// login user

Route::post('/users/authenticate', [UserController::class, 'authenticate']);