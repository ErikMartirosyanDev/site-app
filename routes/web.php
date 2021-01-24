<?php

use App\Http\Controllers\CreateMessageController;
use App\Http\Controllers\RetrieveFirstPageController;
use App\Http\Controllers\RetrieveSecondPageController;

Route::redirect('/', '/first_page');

Route::name('first-page')->get('/first_page', RetrieveFirstPageController::class);
Route::name('second-page')->get('/second_page', RetrieveSecondPageController::class);

Route::name('create-message')->post('/messages', CreateMessageController::class);
