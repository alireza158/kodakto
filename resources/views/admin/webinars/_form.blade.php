@csrf
<div class="row g-3">
    <div class="col-md-8">
        <label class="form-label">عنوان وبینار</label>
        <input class="form-control" name="title" required value="{{ old('title', $webinar->title ?? '') }}">
    </div>

    <div class="col-md-4">
        <label class="form-label">مدت زمان (دقیقه)</label>
        <input type="number" min="1" max="1440" class="form-control" name="duration_minutes" value="{{ old('duration_minutes', $webinar->duration_minutes ?? 60) }}">
    </div>

    <div class="col-md-6">
        <label class="form-label">تاریخ و ساعت شروع</label>
        <input type="datetime-local" class="form-control" name="starts_at" value="{{ old('starts_at', isset($webinar?->starts_at) ? $webinar->starts_at->format('Y-m-d\\TH:i') : '') }}">
    </div>

    <div class="col-md-6">
        <label class="form-label">لینک مشاهده</label>
        <input type="url" class="form-control" name="watch_url" placeholder="https://example.com" value="{{ old('watch_url', $webinar->watch_url ?? '') }}">
    </div>

    <div class="col-12">
        <label class="form-label">توضیحات</label>
        <textarea class="form-control" rows="6" name="description">{{ old('description', $webinar->description ?? '') }}</textarea>
    </div>

    <div class="col-md-6">
        <label class="form-label">تصویر</label>
        <input type="file" name="image" class="form-control" accept="image/*">
    </div>

    <div class="col-md-6 d-flex align-items-end">
        <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" id="is_active" name="is_active" value="1" @checked(old('is_active', $webinar->is_active ?? true))>
            <label class="form-check-label" for="is_active">فعال باشد</label>
        </div>
    </div>

    @if(!empty($webinar?->image_path))
        <div class="col-12">
            <img src="{{ asset('storage/'.$webinar->image_path) }}" class="img-thumbnail" style="max-width:220px;" alt="{{ $webinar->title }}">
        </div>
    @endif

    <div class="col-12">
        <button class="btn btn-primary">ذخیره</button>
    </div>
</div>
