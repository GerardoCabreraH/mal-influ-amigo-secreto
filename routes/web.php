<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SecretFriendController;

Route::get('/', function () {
    return view('index');
});

Route::get('/secret-friend/{game_uuid}/{player:uuid}', [SecretFriendController::class, 'show'])
    ->name('secret-friend.show');
    