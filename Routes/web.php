<?php

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

use Modules\Notification\Http\Controllers\NotificationController;

Route::prefix('notifications')->group(function() {
    Route::get('/', [NotificationController::class , 'getUserNotification'])->name('user.all.notifications');
});
