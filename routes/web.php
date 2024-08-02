<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return 'this is the home page';
});

Route::get('/greet', function () {
    return 'Hello World on Home page';
});

Route::get('/pst/{post}/com/{comment}', function (string $post, string $comment) {
    return "Post id is ".$post."<br>And The Comment id is ".$comment;
});
Route::get('/pst/{post}/rat/{rats}', function (string $post, string $rats) {
    return "Post id is ".$post."<br>And The rats id is ".$rats;
});

Route::prefix('tst1')->group(base_path('routes/testrout1.php'));
