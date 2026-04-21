<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\ArticleCategory;
use App\Models\Doctor;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\Webinar;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ThemePageController extends Controller
{
    public function landing(): View
    {
        $landingArticles = Article::query()->with('category')->latest('published_at')->latest('id')->limit(8)->get();
        $landingProducts = Product::query()->with('categoryRelation')->where('is_active', true)->latest('published_at')->latest('id')->limit(8)->get();
        $landingArticleCategories = ArticleCategory::query()->whereNull('parent_id')->orderBy('name')->get();
        $landingDoctors = Doctor::query()->where('is_active', true)->latest('id')->limit(8)->get();

        return view('theme.landing', compact('landingArticles', 'landingProducts', 'landingArticleCategories', 'landingDoctors'));
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

    public function searchDocter(Request $request): View
    {
        $search = $request->string('q')->toString();
        $specialty = $request->string('specialty')->toString();
        $city = $request->string('city')->toString();

        $doctors = Doctor::query()
            ->where('is_active', true)
            ->when($search, fn ($query) => $query->where(fn ($q) => $q->where('name', 'like', "%$search%")
                ->orWhere('specialty', 'like', "%$search%")
                ->orWhere('city', 'like', "%$search%")))
            ->when($specialty, fn ($query) => $query->where('specialty', $specialty))
            ->when($city, fn ($query) => $query->where('city', $city))
            ->latest('id')
            ->paginate(10)
            ->withQueryString();

        $specialties = Doctor::query()->where('is_active', true)->select('specialty')->distinct()->orderBy('specialty')->pluck('specialty');
        $cities = Doctor::query()->where('is_active', true)->whereNotNull('city')->select('city')->distinct()->orderBy('city')->pluck('city');

        return view('theme.search-docter', compact('doctors', 'specialties', 'cities', 'search', 'specialty', 'city'));
    }

    public function singleDocter(string $slug): View
    {
        $doctor = Doctor::query()->where('slug', $slug)->where('is_active', true)->firstOrFail();
        $otherDoctors = Doctor::query()->where('is_active', true)->where('id', '!=', $doctor->id)->latest('id')->limit(4)->get();

        return view('theme.single-docter', compact('doctor', 'otherDoctors'));
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
        $webinars = Webinar::query()
            ->where('is_active', true)
            ->orderByDesc('starts_at')
            ->latest('id')
            ->paginate(9);

        return view('theme.vebinar', compact('webinars'));
    }

    public function singleVebinar(string $slug): View
    {
        $webinar = Webinar::query()->where('slug', $slug)->where('is_active', true)->firstOrFail();
        $latestWebinars = Webinar::query()
            ->where('is_active', true)
            ->where('id', '!=', $webinar->id)
            ->orderByDesc('starts_at')
            ->latest('id')
            ->limit(4)
            ->get();

        return view('theme.single-vebinar', compact('webinar', 'latestWebinars'));
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
