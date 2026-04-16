@csrf

<div class="row g-3">
    <div class="col-md-6">
        <label class="form-label">نام محصول</label>
        <input type="text" name="name" value="{{ old('name', $product->name ?? '') }}" required class="form-control">
    </div>
    <div class="col-md-6">
        <label class="form-label">دسته‌بندی</label>
        <input type="text" name="category" value="{{ old('category', $product->category ?? '') }}" class="form-control">
    </div>
    <div class="col-md-4">
        <label class="form-label">قیمت</label>
        <input type="number" step="0.01" min="0" name="price" value="{{ old('price', $product->price ?? '') }}" required class="form-control">
    </div>
    <div class="col-md-4">
        <label class="form-label">قیمت با تخفیف</label>
        <input type="number" step="0.01" min="0" name="discount_price" value="{{ old('discount_price', $product->discount_price ?? '') }}" class="form-control">
    </div>
    <div class="col-md-4">
        <label class="form-label">امتیاز (0 تا 5)</label>
        <input type="number" step="0.1" min="0" max="5" name="rating" value="{{ old('rating', $product->rating ?? 4.5) }}" class="form-control">
    </div>
    <div class="col-12">
        <label class="form-label">توضیح کوتاه</label>
        <textarea name="short_description" rows="3" class="form-control">{{ old('short_description', $product->short_description ?? '') }}</textarea>
    </div>
    <div class="col-12">
        <label class="form-label">توضیحات کامل</label>
        <textarea name="description" rows="8" class="form-control">{{ old('description', $product->description ?? '') }}</textarea>
    </div>
    <div class="col-md-6">
        <label class="form-label">تصویر</label>
        <input type="file" name="image" accept="image/*" class="form-control">
    </div>
    <div class="col-md-6">
        <label class="form-label">تاریخ انتشار</label>
        <input type="datetime-local" name="published_at" value="{{ old('published_at', isset($product?->published_at) ? $product->published_at->format('Y-m-d\TH:i') : '') }}" class="form-control">
    </div>
    <div class="col-12">
        <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" role="switch" id="is_active" name="is_active" value="1" @checked(old('is_active', $product->is_active ?? true))>
            <label class="form-check-label" for="is_active">محصول فعال باشد</label>
        </div>
    </div>

    @if (!empty($product?->image_path))
        <div class="col-12">
            <img src="{{ asset('storage/'.$product->image_path) }}" alt="{{ $product->name }}" class="img-thumbnail" style="max-width: 220px;">
        </div>
    @endif

    <div class="col-12 d-flex gap-2">
        <button type="submit" class="btn btn-primary">ذخیره محصول</button>
        <a href="{{ route('admin.products.index') }}" class="btn btn-outline-secondary">انصراف</a>
    </div>
</div>
