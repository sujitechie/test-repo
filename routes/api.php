<?php

use App\Http\Controllers\Api\V1\Admin\OrderApiController;
use App\Http\Controllers\Api\V1\Admin\PersonApiController;
use App\Http\Controllers\Api\V1\Admin\ProductApiController;

Route::group(['prefix' => 'v1', 'as' => 'api.', 'middleware' => ['auth:sanctum']], function () {
    // Person
    Route::apiResource('people', PersonApiController::class);

    // Product
    Route::apiResource('products', ProductApiController::class);

    // Order
    Route::apiResource('orders', OrderApiController::class);
});
