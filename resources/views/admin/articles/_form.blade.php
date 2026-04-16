@csrf

<div style="display:grid;gap:12px;max-width:760px;">
    <label>
        عنوان
        <input type="text" name="title" value="{{ old('title', $article->title ?? '') }}" required style="width:100%;padding:8px;">
    </label>

    <label>
        موضوع
        <input type="text" name="subject" value="{{ old('subject', $article->subject ?? '') }}" required style="width:100%;padding:8px;">
    </label>

    <label>
        خلاصه
        <textarea name="excerpt" rows="4" style="width:100%;padding:8px;">{{ old('excerpt', $article->excerpt ?? '') }}</textarea>
    </label>

    <label>
        متن کامل مقاله
        <textarea name="content" rows="12" required style="width:100%;padding:8px;">{{ old('content', $article->content ?? '') }}</textarea>
    </label>

    <label>
        تاریخ انتشار
        <input type="datetime-local" name="published_at" value="{{ old('published_at', isset($article?->published_at) ? $article->published_at->format('Y-m-d\TH:i') : '') }}" style="width:100%;padding:8px;">
    </label>

    <label>
        تصویر مقاله
        <input type="file" name="image" accept="image/*" style="width:100%;padding:8px;">
    </label>

    @if (!empty($article?->image_path))
        <div>
            <p>تصویر فعلی:</p>
            <img src="{{ asset('storage/'.$article->image_path) }}" alt="{{ $article->title }}" style="max-width:220px;border-radius:8px;">
        </div>
    @endif

    <button type="submit" style="background:#5b5cf0;color:#fff;border:none;padding:10px 16px;border-radius:6px;cursor:pointer;">
        ذخیره مقاله
    </button>
</div>
