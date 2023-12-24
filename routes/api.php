<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\ToktokController;

Route::group(["prefix" => "toktok"],function (){
    Route::post("store",[ToktokController::class,"store"]);
    Route::get("index",[ToktokController::class,"index"]);
});
