<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\View\View;

class ProductAdminController extends Controller
{
    public function index(): View
    {
        $products = Product::query()->with('categoryRelation')->latest()->paginate(10);

        return view('admin.products.index', compact('products'));
    }

    public function create(): View
    {
        $categories = ProductCategory::query()->orderBy('name')->get();

        return view('admin.products.create', compact('categories'));
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $this->validateRequest($request);

        $validated['slug'] = $this->ensureUniqueSlug(Str::slug($validated['name']));

        if ($request->hasFile('image')) {
            $validated['image_path'] = $request->file('image')->store('products', 'public');
        }

        $category = ProductCategory::query()->find($validated['category_id']);
        $validated['category'] = $category?->name;
        $validated['is_active'] = $request->boolean('is_active');
        unset($validated['image']);

        Product::query()->create($validated);

        return redirect()->route('admin.products.index')->with('status', 'محصول با موفقیت اضافه شد.');
    }

    public function edit(Product $product): View
    {
        $categories = ProductCategory::query()->orderBy('name')->get();

        return view('admin.products.edit', compact('product', 'categories'));
    }

    public function update(Request $request, Product $product): RedirectResponse
    {
        $validated = $this->validateRequest($request);

        if ($product->name !== $validated['name']) {
            $validated['slug'] = $this->ensureUniqueSlug(Str::slug($validated['name']), $product->id);
        }

        if ($request->hasFile('image')) {
            if ($product->image_path) {
                Storage::disk('public')->delete($product->image_path);
            }
            $validated['image_path'] = $request->file('image')->store('products', 'public');
        }

        $category = ProductCategory::query()->find($validated['category_id']);
        $validated['category'] = $category?->name;
        $validated['is_active'] = $request->boolean('is_active');
        unset($validated['image']);

        $product->update($validated);

        return redirect()->route('admin.products.index')->with('status', 'محصول با موفقیت ویرایش شد.');
    }

    public function destroy(Product $product): RedirectResponse
    {
        if ($product->image_path) {
            Storage::disk('public')->delete($product->image_path);
        }

        $product->delete();

        return redirect()->route('admin.products.index')->with('status', 'محصول حذف شد.');
    }

    private function validateRequest(Request $request): array
    {
        return $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'category_id' => ['required', 'exists:product_categories,id'],
            'short_description' => ['nullable', 'string'],
            'description' => ['nullable', 'string'],
            'price' => ['required', 'numeric', 'min:0'],
            'discount_price' => ['nullable', 'numeric', 'min:0', 'lte:price'],
            'rating' => ['nullable', 'numeric', 'min:0', 'max:5'],
            'image' => ['nullable', 'image', 'max:5120'],
            'published_at' => ['nullable', 'date'],
        ]);
    }

    private function ensureUniqueSlug(string $slug, ?int $ignoreId = null): string
    {
        $baseSlug = $slug !== '' ? $slug : 'product';
        $newSlug = $baseSlug;
        $counter = 2;

        while (Product::query()
            ->where('slug', $newSlug)
            ->when($ignoreId, fn ($query) => $query->where('id', '!=', $ignoreId))
            ->exists()) {
            $newSlug = $baseSlug.'-'.$counter;
            $counter++;
        }

        return $newSlug;
    }
}
