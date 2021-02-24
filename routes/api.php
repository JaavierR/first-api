<?php

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

// posts
// CRUD is basically

// 1. get all (GET) /api/posts
// 2. create a post (POST) /api/posts
// 3. get a single (GET) /api/posts/{id}
// 4. update a single (PUT/PATCH) /api/posts/{id}
// 5. delete (DELETE) /api/posts/{id}

// The following lines of code is to do the routes
// by hand.
// Route::get('posts', [PostController::class, 'index']);
// Route::post('posts', 'PostController@store');
// Route::put('posts', 'PostController@update');
// Route::delete('posts', 'PostController@destroy');

// Now the short-hand to do it:

Route::apiResource('posts', PostController::class);

// to create a resource (posts) in laravel
//  1. create the database and migrations
//  2. create a model to connect with the database
//  2.5. create a service? Eloquent ORM
//  3. create a controller to go get info from the database
//  4. return that info

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
