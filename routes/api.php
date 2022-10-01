<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\apiController;

Route::get("/numtoAraay/{number}", [apiController::class, 'numtoAraay']);
Route::get("/translateToBinary/{string}", [apiController::class, 'translateToBinary']);
