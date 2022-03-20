<?php

use App\Http\Controllers\OrganizationController;
use App\Http\Controllers\PetProfileController;
use App\Http\Controllers\PostController;
use Illuminate\Routing\Router;
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

Route::get('/', function () {
    return view('welcome');
});

Route::group([
    'prefix' => 'organizations'
], function (Router $router) {
    $router->get('/', [OrganizationController::class,'index']);
});

// Pet profile
Route::group(['prefix' => 'pets', 'middleware' => 'cors'], function (Router $router) {
    $router->get('/', [PetProfileController::class,'index']);
    $router->get('/{id}', [PetProfileController::class, 'show']);
    $router->get('/org/{email}',[PetProfileController::class, 'byEmail']);
});

Route::group(['prefix' => 'posts'], function (Router $router) {
    $router->get('/', [PostController::class,'index']);
});

