<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\ArticleCategory;
use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\View\View;

class AdminDashboardController extends Controller
{
    public function index(): View
    {
        $totalArticles = Article::query()->count();
        $publishedArticles = Article::query()->whereNotNull('published_at')->count();
        $totalProducts = Product::query()->count();
        $activeProducts = Product::query()->where('is_active', true)->count();
        $articleCategoriesCount = ArticleCategory::query()->count();
        $productCategoriesCount = ProductCategory::query()->count();
        $latestArticles = Article::query()->latest('published_at')->latest('id')->limit(5)->get();
        $latestProducts = Product::query()->latest('published_at')->latest('id')->limit(5)->get();

        return view('admin.dashboard', compact(
            'totalArticles',
            'publishedArticles',
            'totalProducts',
            'activeProducts',
            'articleCategoriesCount',
            'productCategoriesCount',
            'latestArticles',
            'latestProducts'
        ));
    }
}
