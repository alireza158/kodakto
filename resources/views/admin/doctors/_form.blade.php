@csrf
<div class="row g-3">
    <div class="col-md-6"><label class="form-label">نام پزشک</label><input class="form-control" name="name" required value="{{ old('name', $doctor->name ?? '') }}"></div>
    <div class="col-md-6"><label class="form-label">تخصص</label><input class="form-control" name="specialty" required value="{{ old('specialty', $doctor->specialty ?? '') }}"></div>
    <div class="col-md-6"><label class="form-label">شهر</label><input class="form-control" name="city" value="{{ old('city', $doctor->city ?? '') }}"></div>
    <div class="col-md-6"><label class="form-label">امتیاز</label><input type="number" step="0.1" min="0" max="5" class="form-control" name="rating" value="{{ old('rating', $doctor->rating ?? 4.5) }}"></div>
    <div class="col-md-6"><label class="form-label">نوبت موفق</label><input type="number" min="0" class="form-control" name="successful_appointments" value="{{ old('successful_appointments', $doctor->successful_appointments ?? 0) }}"></div>
    <div class="col-md-6"><label class="form-label">درصد پیشنهاد</label><input type="number" min="0" max="100" class="form-control" name="recommendation_percent" value="{{ old('recommendation_percent', $doctor->recommendation_percent ?? 0) }}"></div>
    <div class="col-12"><label class="form-label">آدرس</label><input class="form-control" name="address" value="{{ old('address', $doctor->address ?? '') }}"></div>
    <div class="col-12"><label class="form-label">بیوگرافی</label><textarea class="form-control" rows="5" name="bio">{{ old('bio', $doctor->bio ?? '') }}</textarea></div>
    <div class="col-md-6"><label class="form-label">تصویر</label><input type="file" name="image" class="form-control" accept="image/*"></div>
    <div class="col-md-6 d-flex align-items-end"><div class="form-check form-switch"><input class="form-check-input" type="checkbox" id="is_active" name="is_active" value="1" @checked(old('is_active', $doctor->is_active ?? true))><label class="form-check-label" for="is_active">فعال باشد</label></div></div>
    @if(!empty($doctor?->image_path))<div class="col-12"><img src="{{ asset('storage/'.$doctor->image_path) }}" class="img-thumbnail" style="max-width:220px;"></div>@endif
    <div class="col-12"><button class="btn btn-primary">ذخیره</button></div>
</div>
