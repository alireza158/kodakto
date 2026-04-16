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
        $categories = ArticleCategory::query()->with('parent')->latest()->paginate(12);

        return view('admin.article-categories.index', compact('categories'));
    }

    public function create(): View
    {
        $parentCategories = ArticleCategory::query()->whereNull('parent_id')->orderBy('name')->get();

        return view('admin.article-categories.create', compact('parentCategories'));
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'parent_id' => ['nullable', 'exists:article_categories,id'],
        ]);
        $validated['slug'] = $this->uniqueSlug(Str::slug($validated['name']));

        ArticleCategory::query()->create($validated);

        return redirect()->route('admin.article-categories.index')->with('status', 'دسته‌بندی مقاله اضافه شد.');
    }

    public function edit(ArticleCategory $articleCategory): View
    {
        $parentCategories = ArticleCategory::query()->whereNull('parent_id')->where('id', '!=', $articleCategory->id)->orderBy('name')->get();

        return view('admin.article-categories.edit', ['category' => $articleCategory, 'parentCategories' => $parentCategories]);
    }

    public function update(Request $request, ArticleCategory $articleCategory): RedirectResponse
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'parent_id' => ['nullable', 'exists:article_categories,id', 'not_in:'.$articleCategory->id],
        ]);
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

        while (ArticleCategory::query()->where('slug', $candidate)->when($ignoreId, fn ($q) => $q->where('id', '!=', $ignoreId))->exists()) {
            $candidate = $base.'-'.$counter;
            $counter++;
        }

        return $candidate;
    }
}
