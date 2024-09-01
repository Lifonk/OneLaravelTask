<?php
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'welcome';
});
use app\Http\Controllers\MyPlaceController;

Route::get('/my_page', [MyPlaceController::class, 'index']);
?>