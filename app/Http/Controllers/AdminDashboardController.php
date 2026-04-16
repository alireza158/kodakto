<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\View\View;

class AdminDashboardController extends Controller
{
    public function index(): View
    {
        $totalArticles = Article::query()->count();
        $publishedArticles = Article::query()->whereNotNull('published_at')->count();
        $latestArticles = Article::query()->latest('published_at')->latest('id')->limit(5)->get();

        return view('admin.dashboard', compact('totalArticles', 'publishedArticles', 'latestArticles'));
    }
}
