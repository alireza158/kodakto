<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\ArticleCategory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\View\View;

class ArticleAdminController extends Controller
{
    public function index(): View
    {
        $articles = Article::query()->with('category')->latest()->paginate(10);

        return view('admin.articles.index', compact('articles'));
    }

    public function create(): View
    {
        $categories = ArticleCategory::query()->orderBy('name')->get();

        return view('admin.articles.create', compact('categories'));
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'category_id' => ['required', 'exists:article_categories,id'],
            'excerpt' => ['nullable', 'string'],
            'content' => ['required', 'string'],
            'image' => ['nullable', 'image', 'max:5120'],
            'published_at' => ['nullable', 'date'],
        ]);

        $slug = Str::slug($validated['title']);
        $validated['slug'] = $this->ensureUniqueSlug($slug);

        if ($request->hasFile('image')) {
            $validated['image_path'] = $request->file('image')->store('articles', 'public');
        }

        $category = ArticleCategory::query()->find($validated['category_id']);
        $validated['subject'] = $category?->name;

        unset($validated['image']);

        Article::query()->create($validated);

        return redirect()->route('admin.articles.index')->with('status', 'مقاله با موفقیت اضافه شد.');
    }

    public function edit(Article $article): View
    {
        $categories = ArticleCategory::query()->orderBy('name')->get();

        return view('admin.articles.edit', compact('article', 'categories'));
    }

    public function update(Request $request, Article $article): RedirectResponse
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'category_id' => ['required', 'exists:article_categories,id'],
            'excerpt' => ['nullable', 'string'],
            'content' => ['required', 'string'],
            'image' => ['nullable', 'image', 'max:5120'],
            'published_at' => ['nullable', 'date'],
        ]);

        if ($article->title !== $validated['title']) {
            $slug = Str::slug($validated['title']);
            $validated['slug'] = $this->ensureUniqueSlug($slug, $article->id);
        }

        if ($request->hasFile('image')) {
            if ($article->image_path) {
                Storage::disk('public')->delete($article->image_path);
            }

            $validated['image_path'] = $request->file('image')->store('articles', 'public');
        }

        $category = ArticleCategory::query()->find($validated['category_id']);
        $validated['subject'] = $category?->name;

        unset($validated['image']);

        $article->update($validated);

        return redirect()->route('admin.articles.index')->with('status', 'مقاله با موفقیت ویرایش شد.');
    }

    public function destroy(Article $article): RedirectResponse
    {
        if ($article->image_path) {
            Storage::disk('public')->delete($article->image_path);
        }

        $article->delete();

        return redirect()->route('admin.articles.index')->with('status', 'مقاله حذف شد.');
    }

    private function ensureUniqueSlug(string $slug, ?int $ignoreId = null): string
    {
        $baseSlug = $slug !== '' ? $slug : 'article';
        $newSlug = $baseSlug;
        $counter = 2;

        while (Article::query()
            ->where('slug', $newSlug)
            ->when($ignoreId, fn ($query) => $query->where('id', '!=', $ignoreId))
            ->exists()) {
            $newSlug = $baseSlug.'-'.$counter;
            $counter++;
        }

        return $newSlug;
    }
}
