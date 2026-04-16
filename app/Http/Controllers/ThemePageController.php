<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Product;
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
        $category = $request->string('category')->toString();

        $products = Product::query()
            ->where('is_active', true)
            ->when($category, fn ($query) => $query->where('category', $category))
            ->orderByDesc('published_at')
            ->latest('id')
            ->paginate(12)
            ->withQueryString();

        $categories = Product::query()
            ->where('is_active', true)
            ->whereNotNull('category')
            ->select('category')
            ->distinct()
            ->orderBy('category')
            ->pluck('category');

        return view('theme.products', compact('products', 'categories', 'category'));
    }

    public function singleProduct(string $slug): View
    {
        $product = Product::query()->where('slug', $slug)->where('is_active', true)->firstOrFail();
        $relatedProducts = Product::query()
            ->where('is_active', true)
            ->where('id', '!=', $product->id)
            ->when($product->category, fn ($query) => $query->where('category', $product->category))
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
        $subject = $request->string('subject')->toString();

        $articles = Article::query()
            ->when($subject, fn ($query) => $query->where('subject', $subject))
            ->orderByDesc('published_at')
            ->latest('id')
            ->paginate(8)
            ->withQueryString();

        $subjects = Article::query()->select('subject')->distinct()->orderBy('subject')->pluck('subject');

        return view('theme.blog', compact('articles', 'subjects', 'subject'));
    }

    public function singleBlog(string $slug): View
    {
        $article = Article::query()->where('slug', $slug)->firstOrFail();
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
