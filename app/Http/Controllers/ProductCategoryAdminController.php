<?php

namespace App\Http\Controllers;

use App\Models\ProductCategory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\View\View;

class ProductCategoryAdminController extends Controller
{
    public function index(): View
    {
        $categories = ProductCategory::query()->with('parent')->latest()->paginate(12);

        return view('admin.product-categories.index', compact('categories'));
    }

    public function create(): View
    {
        $parentCategories = ProductCategory::query()->whereNull('parent_id')->orderBy('name')->get();

        return view('admin.product-categories.create', compact('parentCategories'));
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'parent_id' => ['nullable', 'exists:product_categories,id'],
        ]);
        $validated['slug'] = $this->uniqueSlug(Str::slug($validated['name']));

        ProductCategory::query()->create($validated);

        return redirect()->route('admin.product-categories.index')->with('status', 'دسته‌بندی محصول اضافه شد.');
    }

    public function edit(ProductCategory $productCategory): View
    {
        $parentCategories = ProductCategory::query()->whereNull('parent_id')->where('id', '!=', $productCategory->id)->orderBy('name')->get();

        return view('admin.product-categories.edit', ['category' => $productCategory, 'parentCategories' => $parentCategories]);
    }

    public function update(Request $request, ProductCategory $productCategory): RedirectResponse
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'parent_id' => ['nullable', 'exists:product_categories,id', 'not_in:'.$productCategory->id],
        ]);
        $validated['slug'] = $this->uniqueSlug(Str::slug($validated['name']), $productCategory->id);

        $productCategory->update($validated);

        return redirect()->route('admin.product-categories.index')->with('status', 'دسته‌بندی محصول ویرایش شد.');
    }

    public function destroy(ProductCategory $productCategory): RedirectResponse
    {
        $productCategory->delete();

        return redirect()->route('admin.product-categories.index')->with('status', 'دسته‌بندی محصول حذف شد.');
    }

    private function uniqueSlug(string $slug, ?int $ignoreId = null): string
    {
        $base = $slug !== '' ? $slug : 'product-category';
        $candidate = $base;
        $counter = 2;

        while (ProductCategory::query()->where('slug', $candidate)->when($ignoreId, fn ($q) => $q->where('id', '!=', $ignoreId))->exists()) {
            $candidate = $base.'-'.$counter;
            $counter++;
        }

        return $candidate;
    }
}
