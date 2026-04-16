<?php

use App\Http\Controllers\ArticleAdminController;
use App\Http\Controllers\ThemePageController;
use Illuminate\Support\Facades\Route;

Route::controller(ThemePageController::class)->group(function (): void {
    Route::get('/', 'landing')->name('theme.landing');

    Route::prefix('theme')->name('theme.')->group(function (): void {
        Route::get('/landing', 'landing')->name('landing');
        Route::get('/products', 'products')->name('products');
        Route::get('/single-product', 'singleProduct')->name('single-product');
        Route::get('/search-docter', 'searchDocter')->name('search-docter');
        Route::get('/single-docter', 'singleDocter')->name('single-docter');
        Route::get('/blog', 'blog')->name('blog');
        Route::get('/single-blog/{slug}', 'singleBlog')->name('single-blog');
        Route::get('/vebinar', 'vebinar')->name('vebinar');
        Route::get('/about-us', 'aboutUs')->name('about-us');
        Route::get('/contact-us', 'contactUs')->name('contact-us');
    });
});

Route::prefix('admin')->name('admin.')->group(function (): void {
    Route::resource('articles', ArticleAdminController::class)->except(['show']);
});
