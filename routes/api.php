<?php

use App\Http\Controllers\ChildController;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Api Route for Login     
Route::post("login",[UserController::class,'login']);

// Api Route for Register the New User
Route::post('register',[UserController::class, 'register']);

Route::group(['middleware' => ['auth:sanctum']], function () {
    // protected routes go here
    Route::get('checkLogin',[UserController::class,'check']);
    // Route to Show the Plans for the Subscription
    Route::get('showPlan',[SubscriptionController::class, 'show']);
    // Route for Select and activate the Package Plan
    Route::get('plan/{id}', [SubscriptionController::class, 'selectPlan']);
    // ROute for Insert the New Child
    Route::get('addChild', [ChildController::class, 'store']);

    // Api Route For Logout
    Route::post('logout',[UserController::class,'logout']);

    });

