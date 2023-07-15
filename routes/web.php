<?php

use App\models\Listing;
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

/*Route::get('/', function () {
    return view('welcome');
});
Route::get('/hello',function(){
    return 'Hello cok';
});
Route::get('/posts/{id}', function($id){
    return response('post' .$id);
});

Route::get('/search',function(Request $request){
    return $request->name . '' . $request->city;
});
*/
//all listing
Route::get('/', 
    [ListingController::class, 'index']
);

//Show Create form
Route::get('/listings/create', 
    [ListingController::class, 'create']
);

//store listing data
Route::post('/listings', 
    [ListingController::class, 'store']
);

//Show Edit Form
Route::get('/listings/{listing}/edit',[ListingController::class, 'edit']);

// Update Listing
Route::put('/listings/{listing}',[ListingController::class, 'update']);

// DeleteListing
Route::delete('/listings/{listing}',[ListingController::class, 'destroy']);


//single listing
Route::get('/listings/{listing}', [ListingController::class, 'show']
);

// Show Register/Create Form
Route::get('/register', [UserController::class, 'create']);

//Create New User
Route::post('/users', [UserController::class, 'store']);

//Log User out
Route::post('/logout', [UserController::class, 'logout']);

//show login 
Route::get('/login', [UserController::class, 'login']);

//Log in User
Route::post('/users/authenticate', [UserController::class, 'authenticate']);