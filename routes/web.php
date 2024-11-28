<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\todoController;

Route::get('/', [todoController::class,'index']);
Route::post('/saveItemRoute',[todoController::class,'saveItem'])->name('saveItem');
Route::post('/markCompleteRoute/{id}',[todoController::class,'markComplete'])->name('markComplete');
?>