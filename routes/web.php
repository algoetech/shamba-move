<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\GeneralController;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\PostCategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\SubscriberController;
use App\Http\Controllers\TopicCategoryController;
use App\Http\Controllers\TopicController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


// Auth::routes();
Route::get('/', [GeneralController::class, 'index'])->name('index');

Route::prefix('OAuth')->get('/dashboard', [PageController::class, 'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/categs', [GeneralController::class, 'post_categories'])->name('categories');
Route::get('/categs/{slug}', [GeneralController::class, 'category_show'])->name('cateshows');
Route::get('/read/{slug}', [GeneralController::class, 'postRead'])->name('readpost');
Route::get('/gallery', [GeneralController::class, 'media'])->name('media');
Route::get('/watchvideo/{id}', [GeneralController::class, 'watchVideo'])->name('watchvideo');




Route::prefix('OAuth')->middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__.'/auth.php';

//
Route::group([
    'as' => 'frontend.',
], function () {

 Route::get('/{slug}', [GeneralController::class, 'page'])->name('page');
});


Route::prefix('OAuth')->as('admin.')->middleware(['auth', 'role:admin|user|expert'])->group(function () {
    Route::resources([
        'users' => UserController::class,
        'articles' => ArticleController::class,
        'topics' => TopicController::class,
        'posts' => PostController::class,
        'qnans' => QuestionController::class,
        'topic-categories' => TopicCategoryController::class,
        'roles' => RoleController::class,
        'subscribers' => SubscriberController::class,
        'pages' => PageController::class,
        'post-categories' => PostCategoryController::class,
        'permissions' => PermissionController::class,
        'sites' => SiteController::class,
        'media' => MediaController::class,
    ]);

    Route::post('/permit/{role}/ability', [RoleController::class, 'closure'])->name('assign');
});