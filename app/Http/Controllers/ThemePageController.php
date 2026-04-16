<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\ArticleCategory;
use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ThemePageController extends Controller
{
    public function landing(): View
    {
        return view('theme.landing');
    }

    public function products(Request $request): View
    {
        $categorySlug = $request->string('category')->toString();

        $products = Product::query()
            ->with('categoryRelation')
            ->where('is_active', true)
            ->when($categorySlug, fn ($query) => $query->whereHas('categoryRelation', fn ($q) => $q->where('slug', $categorySlug)))
            ->orderByDesc('published_at')
            ->latest('id')
            ->paginate(12)
            ->withQueryString();

        $categories = ProductCategory::query()->orderBy('name')->get();

        return view('theme.products', compact('products', 'categories', 'categorySlug'));
    }

    public function singleProduct(string $slug): View
    {
        $product = Product::query()->with('categoryRelation')->where('slug', $slug)->where('is_active', true)->firstOrFail();
        $relatedProducts = Product::query()
            ->where('is_active', true)
            ->where('id', '!=', $product->id)
            ->when($product->category_id, fn ($query) => $query->where('category_id', $product->category_id))
            ->latest('published_at')
            ->latest('id')
            ->limit(4)
            ->get();

        return view('theme.single-product', compact('product', 'relatedProducts'));
    }

    public function searchDocter(): View
    {
        return view('theme.search-docter');
    }

    public function singleDocter(): View
    {
        return view('theme.single-docter');
    }

    public function blog(Request $request): View
    {
        $categorySlug = $request->string('category')->toString();

        $articles = Article::query()
            ->with('category')
            ->when($categorySlug, fn ($query) => $query->whereHas('category', fn ($q) => $q->where('slug', $categorySlug)))
            ->orderByDesc('published_at')
            ->latest('id')
            ->paginate(8)
            ->withQueryString();

        $categories = ArticleCategory::query()->orderBy('name')->get();

        return view('theme.blog', compact('articles', 'categories', 'categorySlug'));
    }

    public function singleBlog(string $slug): View
    {
        $article = Article::query()->with('category')->where('slug', $slug)->firstOrFail();
        $latestArticles = Article::query()->where('id', '!=', $article->id)->latest('published_at')->latest('id')->limit(4)->get();

        return view('theme.single-blog', compact('article', 'latestArticles'));
    }

    public function vebinar(): View
    {
        return view('theme.vebinar');
    }

    public function aboutUs(): View
    {
        return view('theme.about-us');
    }

    public function contactUs(): View
    {
        return view('theme.contact-us');
    }
}
