<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CheckoutURLController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Checkout (URL) User Part
Route::post('/bkash/create', [CheckoutURLController::class, 'create'])->name('url-create');
Route::get('/bkash/callback', [CheckoutURLController::class, 'callback'])->name('url-callback');

// Checkout (URL) Admin Part
Route::post('/bkash/refund', [CheckoutURLController::class, 'refund'])->name('url-post-refund');
