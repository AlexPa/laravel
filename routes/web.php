<?php

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
Route::middleware(['guest', 'admin'])->group(function() {
    Route::get('/', [\App\Http\Controllers\ImageController::class, 'index']);
});

Route::get('/test', function () {
    //$posts = \App\Models\Post::factory()->count(5)->create();

    $posts = \App\Models\Post::paginate(2);



    return view('test', [
        'posts' => $posts
    ]);
});

Route::get('/test1', function () {
    //$posts = \App\Models\Post::factory()->count(5)->create();

    $res = \App\Models\Post::create([
        'title' => 'fsdfsdf',
        'slug' => 'fsdfsdf',
        'content' => 'gddsgfdfgd',
        'user_id' => 1,
        'date' => date("Y-m-d H:i:s")
    ]);
    dd($res);
});

Route::get('/test2', function () {
    //$users = \App\Models\User::factory()->count(5)->create();
    $post = \App\Models\Post::where('id', 1)->first();
    echo $post->user->id;
    return view('about');
});
Route::get('/test3', function () {
    //$users = \App\Models\User::factory()->count(5)->create();
    $user = \App\Models\User::where('id', 1)->first();
    print_r($user->posts);
    return view('about');
});

Route::get('/about', [\App\Http\Controllers\HomeController::class, 'about']);

Route::get('/create', [\App\Http\Controllers\ImageController::class, 'create']);

Route::get('/show/{id}', [\App\Http\Controllers\ImageController::class, 'show']);

Route::get('/edit/{id}', [\App\Http\Controllers\ImageController::class, 'edit']);

Route::post('/store', [\App\Http\Controllers\ImageController::class, 'store']);

Route::post('/update/{id}', [\App\Http\Controllers\ImageController::class, 'update']);

Route::get('/delete/{id}', [\App\Http\Controllers\ImageController::class, 'delete']);

Route::get('/test/{id}', function (int $id) {
    dd($id);
});
