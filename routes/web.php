<?php

use App\Http\Controllers\Admin\AdminAchievementController;
use App\Http\Controllers\Admin\AdminFamilyController;
use App\Http\Controllers\Admin\AdminMainPageItemController;
use App\Http\Controllers\Admin\AdminMenuItemController;
use App\Http\Controllers\Admin\AdminPluginController;
use App\Http\Controllers\Admin\AdminPostController;
use App\Http\Controllers\Admin\AdminServiceController;
use App\Http\Controllers\Admin\AdminStarController;
use App\Http\Controllers\Admin\AdminTeammateController;
use App\Http\Controllers\Admin\AdminTestimonialController;
use App\Http\Controllers\Admin\AdminWorkController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\DonateController;
use App\Http\Controllers\FamilyController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PluginController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [PageController::class, 'main'])->name('main');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/blog', [PostController::class, 'index'])->name('blog');
Route::get('/blog/subscribe', [PostController::class, 'subscribe'])->name('subscribe');
Route::get('/post/{post}', [PostController::class, 'show'])->name('post');

Route::get('/products', [PluginController::class, 'index'])->name('products');
Route::get('/get-plugin/{plugin}', [PluginController::class, 'downloadPlugin'])->name('downloadPlugin');

Route::get('/families', [FamilyController::class, 'index'])->name('families');
Route::get('/get-family/{family}', [FamilyController::class, 'downloadFamily'])->name('downloadFamily');

Route::post('/donate', [DonateController::class, 'index'])->name('donate');

Route::get('/service/{slug}', [ServiceController::class, 'showService'])->name('service');
Route::get('/get-service/{slug}', [ServiceController::class, 'downloadService'])->name('downloadService');


Route::get('/send', [PageController::class, 'send'])->name('send');
Route::get('/success', [PageController::class, 'success'])->name('success');

Auth::routes([
    'register' => false,
    'reset' => false,
]);

//Route::get('/home', [HomeController::class, 'index'])->name('adminHome');

Route::middleware('auth')->group(function () {
    Route::group([
        'middleware' => 'is_admin',
//        'namespace' => 'Admin',
        'prefix' => 'admin',
    ], function () {
        Route::get('home', [HomeController::class, 'index'])->name('adminHome');

        Route::resource('services', AdminServiceController::class);

        Route::resource('achievements', AdminAchievementController::class);

        Route::resource('stars', AdminStarController::class);

        Route::resource('testimonials', AdminTestimonialController::class);

        Route::resource('works', AdminWorkController::class);

        Route::resource('teammates', AdminTeammateController::class);

        Route::resource('menu-items', AdminMenuItemController::class);

        Route::resource('plugins', AdminPluginController::class);

        Route::resource('families', AdminFamilyController::class);

        Route::resource('posts', AdminPostController::class);

        Route::resource('mainPageItems', AdminMainPageItemController::class);
    });
});
