<?php


use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;



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
    return view ('home' , [
        "title" => "Home"
    ]);
});

Route::get('/About', function () {
    return view ('about', [
        "title" => "About",
        "name" => "Muhammad Faqih Al Firdaus",
        "email" => "firdausfaqih727@gmail.com",
        "univ" => "Universitas Singaperbangsa Karawang",
        "image" => "faqih.webp"

]);
});


Route::get('/Blog',[PostController::class, 'index']);


//halaman single post
Route::get('/posts/{slug}', [PostController::class, 'show']);
