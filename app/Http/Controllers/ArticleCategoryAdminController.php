<?php

namespace App\Http\Controllers;

use App\Models\ArticleCategory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\View\View;

class ArticleCategoryAdminController extends Controller
{
    public function index(): View
    {
        $categories = ArticleCategory::query()->latest()->paginate(12);

        return view('admin.article-categories.index', compact('categories'));
    }

    public function create(): View
    {
        return view('admin.article-categories.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate(['name' => ['required', 'string', 'max:255']]);
        $validated['slug'] = $this->uniqueSlug(Str::slug($validated['name']));

        ArticleCategory::query()->create($validated);

        return redirect()->route('admin.article-categories.index')->with('status', 'دسته‌بندی مقاله اضافه شد.');
    }

    public function edit(ArticleCategory $articleCategory): View
    {
        return view('admin.article-categories.edit', ['category' => $articleCategory]);
    }

    public function update(Request $request, ArticleCategory $articleCategory): RedirectResponse
    {
        $validated = $request->validate(['name' => ['required', 'string', 'max:255']]);
        $validated['slug'] = $this->uniqueSlug(Str::slug($validated['name']), $articleCategory->id);

        $articleCategory->update($validated);

        return redirect()->route('admin.article-categories.index')->with('status', 'دسته‌بندی مقاله ویرایش شد.');
    }

    public function destroy(ArticleCategory $articleCategory): RedirectResponse
    {
        $articleCategory->delete();

        return redirect()->route('admin.article-categories.index')->with('status', 'دسته‌بندی مقاله حذف شد.');
    }

    private function uniqueSlug(string $slug, ?int $ignoreId = null): string
    {
        $base = $slug !== '' ? $slug : 'article-category';
        $candidate = $base;
        $counter = 2;

        while (ArticleCategory::query()
            ->where('slug', $candidate)
            ->when($ignoreId, fn ($q) => $q->where('id', '!=', $ignoreId))
            ->exists()) {
            $candidate = $base.'-'.$counter;
            $counter++;
        }

        return $candidate;
    }
}
