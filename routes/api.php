<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RemedyController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\PasswordController;
use App\Http\Controllers\Api\RegisterController;

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

Route::post('registration', [UserController::class, 'postRegistrationAPI'])->name('post.register');
Route::get('remedy', [RemedyController::class, 'getRemedies']);
Route::get('slide-chart/{state}/{project_type_id}', [ProjectController::class, 'getSlideChart']);

Route::post('login', [AuthController::class, 'login'])->name('api.login');
Route::post('signup', [RegisterController::class, 'signup'])->name('api.signup');
Route::post('/forgot-password', [PasswordController::class, 'forgot']);
Route::post('/reset-password', [PasswordController::class, 'reset']);

Route::group(['middleware' => 'auth:sanctum'], function () {
    Route::post('logout', [AuthController::class, 'logout'])->name('api.logout');
});

