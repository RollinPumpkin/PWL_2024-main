<?php

use App\Http\Controllers\aboutController;
use App\Http\Controllers\articlesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HomeControllerController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhotoController;

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
// ROUTE

// Route::get('/world', function () {
//     return 'World';
//    });
// Route::get('/about', function () {
//     return view ('about');
//    });
// Route::get('/user/{name}', function ($name) {
//     return 'Nama saya '.$name;
//     });
// Route::get('/posts/{post}/comments/{comment}', function
//     ($postId, $commentId) {
//      return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
//     });
// Route::get('/articles/{id}', function
//     ($id) {
//      return 'Halaman Artikel Ke-'.$id;
//     });
// Route::get('/user/{name?}', function ($name=null) {
//     return 'Nama saya '.$name;
//     });
// Route::get('/user/profile', function () {
//     //
//     })->name('profile');
// Route::get(
//     '/user/profile',
//     [UserProfileController::class, 'show']
// )->name('profile');
//     // Generating URLs...
// $url = route('profile');
//     // Generating Redirects...
//     return redirect()->route('profile');
// Route::middleware(['first', 'second'])->group(function () {
//     Route::get('/', function () {
//     // Uses first & second middleware...
//         });
// Route::get('/user/profile', function () {
//     // Uses first & second middleware...
//         });
//     });
// Route::domain('{account}.example.com')->group(function () {
//     Route::get('user/{id}', function ($account, $id) {
//     //
//         });
//     });
// Route::middleware('auth')->group(function () {
//    Route::get('/user', [UserController::class, 'index']);
//    Route::get('/post', [PostController::class, 'index']);
//    Route::get('/event', [EventController::class, 'index']);
//     });
// Route::prefix('admin')->group(function () {
//     Route::get('/user', [UserController::class, 'index']);
//     Route::get('/post', [PostController::class, 'index']);
//     Route::get('/event', [EventController::class, 'index']);
//     });  
Route::redirect('/here', '/there');
Route::view('/welcome', 'welcome');
Route::view('/welcome', 'welcome', ['name' => 'Taylor']);
Route::get('/', function () {
    return view('welcome');
    });

//CONTROLLER

Route::get('/hello', [WelcomeController::class,'hello']);
Route::get('/home', [HomeController::class,'index']);
Route::get('/about', [aboutController::class, 'about']);
Route::get('/articles/{id}', [articlesController::class, 'artikel']);
Route::resource('photos', PhotoController::class);
Route::resource('photos', PhotoController::class)->only([
    'index', 'show'
   ]);
   Route::resource('photos', PhotoController::class)->except([
    'create', 'store', 'update', 'destroy'
   ]);

//VIEW

// Route::get('/greeting', function () {
//     return view('blog.hello', ['name' => 'Dika']);
//     });
Route::get('/greeting', [WelcomeController::class, 'greeting']);