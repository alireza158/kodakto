@csrf

<div class="row g-3">
    <div class="col-md-6">
        <label class="form-label">عنوان مقاله</label>
        <input type="text" name="title" value="{{ old('title', $article->title ?? '') }}" required class="form-control">
    </div>

    <div class="col-md-6">
        <label class="form-label">دسته‌بندی مقاله</label>
        <select name="category_id" required class="form-select">
            <option value="">انتخاب دسته</option>
            @foreach($categories as $category)
                <option value="{{ $category->id }}" @selected((int) old('category_id', $article->category_id ?? 0) === $category->id)>{{ $category->name }}</option>
            @endforeach
        </select>
    </div>

    <div class="col-12">
        <label class="form-label">خلاصه کوتاه</label>
        <textarea name="excerpt" rows="3" class="form-control">{{ old('excerpt', $article->excerpt ?? '') }}</textarea>
    </div>

    <div class="col-12">
        <label class="form-label">متن کامل مقاله</label>
        <textarea name="content" rows="10" required class="form-control">{{ old('content', $article->content ?? '') }}</textarea>
    </div>

    <div class="col-md-6">
        <label class="form-label">تاریخ انتشار</label>
        <input type="datetime-local" name="published_at" value="{{ old('published_at', isset($article?->published_at) ? $article->published_at->format('Y-m-d\TH:i') : '') }}" class="form-control">
    </div>

    <div class="col-md-6">
        <label class="form-label">تصویر مقاله</label>
        <input type="file" name="image" accept="image/*" class="form-control">
    </div>

    @if (!empty($article?->image_path))
        <div class="col-12">
            <p class="mb-2">تصویر فعلی:</p>
            <img src="{{ asset('storage/'.$article->image_path) }}" alt="{{ $article->title }}" class="img-thumbnail" style="max-width: 220px;">
        </div>
    @endif

    <div class="col-12 d-flex gap-2">
        <button type="submit" class="btn btn-primary">ذخیره مقاله</button>
        <a href="{{ route('admin.articles.index') }}" class="btn btn-outline-secondary">انصراف</a>
    </div>
</div>
