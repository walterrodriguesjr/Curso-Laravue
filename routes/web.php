<?php

use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserController2;
use App\Http\Controllers\UserController5;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

/* 2.4 */

Route::view('/welcome', 'welcome');

Route::get('/', function () {
    return view('welcome');
});

/* 2 */
Route::get('users2', function () {
    return 'Hello World2!';
});

/* 2.1 */
Route::match(['get', 'post'], 'users2.1', function () {
    return 'Hello World 2.1';
});

/* 2.2 */
Route::get('users2.2', function () {
    return 'Hello World 2.2';
})->name('nomeDaRota');

/* 2.3 */
Route::redirect('rota-a', 'rota-b');
Route::get('rota-b', function () {
    return 'Rota-b';
});

/* 2.5 */
Route::get('/user/{id}/{name}', function ($id, $name) {
    return 'User' . ' ' . $id . ' ' . $name;
});

/* 2.6 */
Route::get('user2/{id}/{name}', function ($id = null, $name = null) {
    return 'User-2 ' . $id . ' - ' . $name;
})->where([
    'id' => '[0-9]+',
    'name' => '[A-Za-z]+'
]);

/* 2.7 */
Route::get('user3/{id}/{name}', function ($id = null, $name = null) {
    return 'User-3' . $id . ' - ' . $name;
});

/* 2.8 */
Route::prefix('user')->group(function () {
    Route::get('', function () {
        return 'Hello World';
    })->name('users');

    Route::get('{id}', function ($id) {
        return 'Hello World com grupo de rotas' . $id;
    })->name('user');
});

/* 2.10 */
Route::domain('{user}.cursoLaravel.test')->group(function () {
    Route::get('', function () {
        return 'Hello World 5';
    });
});

/* 2.11 */
Route::fallback(function () {
    return "Rota de fallback";
});

/* 2.12 */
Route::get('request', function (Request $request) {
    /* dd($request->query); */
    return $request;
});

/* 2.13 */
Route::get('injetandoModel/{user}', function (User $user) {
    dd($user);
});

/* 3 e 3.1 */
Route::get('user4', function () {
    dd('x');
})->middleware('userAgent');

/* 3,2 */
route::middleware('userAgent2')->group(function () {

    Route::get('posts1', function () {
        dd('posts1');
    });

    Route::get('posts2', function () {
        dd('posts2');
    });
});

/* 3.3 */
route::middleware(['userAgent2', 'userAgent3'])->group(function () {

    Route::get('posts3', function () {
        dd('posts3');
    });

    Route::get('posts4', function () {
        dd('posts4');
    });
});

/* 4 */
Route::get('/userControler', [UserController::class, 'index']);

/* 4.1 e 4.2 */
Route::get('users5/{user}', [UserController::class, 'show']);

/* 4.5 */
Route::get('/checkout', CheckoutController::class);

/* 4.6 e 4.7 */
Route::resource('users6', UserController2::class)->only(['index', 'destroy']);

/* 4.9 */
Route::apiResource('users7', UserController5::class);
