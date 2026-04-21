@csrf
<div class="row g-3" id="webinar-form">
    <div class="col-md-8">
        <label class="form-label">عنوان وبینار</label>
        <input class="form-control" name="title" required value="{{ old('title', $webinar->title ?? '') }}">
    </div>

    <div class="col-md-4">
        <label class="form-label">مدت زمان (دقیقه)</label>
        <input type="number" min="1" max="1440" class="form-control" name="duration_minutes" value="{{ old('duration_minutes', $webinar->duration_minutes ?? 60) }}">
    </div>

    <div class="col-md-6">
        <label class="form-label">تاریخ شروع (شمسی)</label>
        <input
            type="text"
            class="form-control"
            id="starts_at_jalali"
            inputmode="numeric"
            dir="ltr"
            placeholder="1405/01/01"
            value=""
        >
        <small class="text-muted">فرمت: ۱۴۰۵/۰۱/۰۱</small>
    </div>

    <div class="col-md-6">
        <label class="form-label">ساعت شروع</label>
        <input type="time" class="form-control" id="starts_at_time" value="">
    </div>

    <input
        type="hidden"
        name="starts_at"
        id="starts_at"
        value="{{ old('starts_at', isset($webinar?->starts_at) ? $webinar->starts_at->format('Y-m-d\\TH:i') : '') }}"
    >

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
        @error('starts_at')
            <div class="text-danger small mb-2">{{ $message }}</div>
        @enderror
        <button class="btn btn-primary">ذخیره</button>
    </div>
</div>

<script>
    (() => {
        const form = document.getElementById('webinar-form')?.closest('form');
        const hiddenInput = document.getElementById('starts_at');
        const jalaliInput = document.getElementById('starts_at_jalali');
        const timeInput = document.getElementById('starts_at_time');

        if (!form || !hiddenInput || !jalaliInput || !timeInput) {
            return;
        }

        const div = (a, b) => Math.floor(a / b);

        const gregorianToJalali = (gy, gm, gd) => {
            const gDMonth = [0, 31, (gy % 4 === 0 && gy % 100 !== 0) || gy % 400 === 0 ? 29 : 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];
            let gy2 = gm > 2 ? gy + 1 : gy;
            let days = 355666 + (365 * gy) + div(gy2 + 3, 4) - div(gy2 + 99, 100) + div(gy2 + 399, 400) + gd;

            for (let i = 0; i < gm; ++i) {
                days += gDMonth[i];
            }

            let jy = -1595 + (33 * div(days, 12053));
            days %= 12053;
            jy += 4 * div(days, 1461);
            days %= 1461;

            if (days > 365) {
                jy += div(days - 1, 365);
                days = (days - 1) % 365;
            }

            const jm = days < 186 ? 1 + div(days, 31) : 7 + div(days - 186, 30);
            const jd = 1 + (days < 186 ? (days % 31) : ((days - 186) % 30));

            return { jy, jm, jd };
        };

        const jalaliToGregorian = (jy, jm, jd) => {
            jy += 1595;
            let days = -355668 + (365 * jy) + div(jy, 33) * 8 + div((jy % 33) + 3, 4) + jd + (jm < 7 ? (jm - 1) * 31 : ((jm - 7) * 30) + 186);

            let gy = 400 * div(days, 146097);
            days %= 146097;

            if (days > 36524) {
                gy += 100 * div(--days, 36524);
                days %= 36524;
                if (days >= 365) {
                    days++;
                }
            }

            gy += 4 * div(days, 1461);
            days %= 1461;

            if (days > 365) {
                gy += div(days - 1, 365);
                days = (days - 1) % 365;
            }

            let gd = days + 1;
            const salA = [0, 31, ((gy % 4 === 0 && gy % 100 !== 0) || gy % 400 === 0) ? 29 : 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];
            let gm;

            for (gm = 1; gm <= 12 && gd > salA[gm]; gm++) {
                gd -= salA[gm];
            }

            return { gy, gm, gd };
        };

        const toLatinDigits = (value) => {
            return value
                .replace(/[۰-۹]/g, (d) => '۰۱۲۳۴۵۶۷۸۹'.indexOf(d))
                .replace(/[٠-٩]/g, (d) => '٠١٢٣٤٥٦٧٨٩'.indexOf(d));
        };

        const pad2 = (n) => String(n).padStart(2, '0');

        const syncVisibleInputsFromHidden = () => {
            const value = hiddenInput.value;
            if (!value) {
                return;
            }

            const [datePart, timePartRaw] = value.split('T');
            if (!datePart || !timePartRaw) {
                return;
            }

            const [gy, gm, gd] = datePart.split('-').map(Number);
            const [hh, mm] = timePartRaw.split(':').map(Number);

            if ([gy, gm, gd, hh, mm].some(Number.isNaN)) {
                return;
            }

            const { jy, jm, jd } = gregorianToJalali(gy, gm, gd);
            jalaliInput.value = `${jy}/${pad2(jm)}/${pad2(jd)}`;
            timeInput.value = `${pad2(hh)}:${pad2(mm)}`;
        };

        const syncHiddenInput = () => {
            const jDate = toLatinDigits(jalaliInput.value.trim());
            const time = timeInput.value;

            if (!jDate && !time) {
                hiddenInput.value = '';
                return;
            }

            const match = jDate.match(/^(\d{4})[\/\-](\d{1,2})[\/\-](\d{1,2})$/);
            if (!match || !time) {
                hiddenInput.value = '';
                return;
            }

            const jy = Number(match[1]);
            const jm = Number(match[2]);
            const jd = Number(match[3]);

            if (jm < 1 || jm > 12 || jd < 1 || jd > 31) {
                hiddenInput.value = '';
                return;
            }

            const { gy, gm, gd } = jalaliToGregorian(jy, jm, jd);
            hiddenInput.value = `${gy}-${pad2(gm)}-${pad2(gd)}T${time}`;
        };

        syncVisibleInputsFromHidden();

        jalaliInput.addEventListener('input', syncHiddenInput);
        timeInput.addEventListener('input', syncHiddenInput);
        form.addEventListener('submit', syncHiddenInput);
    })();
</script>
