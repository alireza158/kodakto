<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <base href="{{ asset('theme') }}/">
    <link rel="stylesheet" href="assets/css/all.css">
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/vebinar.css">
    <title>وبینارها</title>
</head>
<body>
@include('theme.partials.header')

<main class="webinar-main">
    <section class="webinar-hero">
        <div class="webinar-shell">
            <div class="webinar-hero__content">
                <span class="webinar-hero__badge">آموزش آنلاین</span>
                <h1>وبینارهای آموزشی</h1>
                <p>
                    مجموعه‌ای از وبینارهای کاربردی و تخصصی برای یادگیری بهتر،
                    رشد حرفه‌ای و دسترسی سریع به محتوای آموزشی به‌روز
                </p>

                <div class="webinar-hero__stats">
                    <div class="hero-stat">
                        <strong>{{ method_exists($webinars, 'total') ? $webinars->total() : $webinars->count() }}</strong>
                        <span>وبینار</span>
                    </div>
                    <div class="hero-stat">
                        <strong>{{ $webinars->count() }}</strong>
                        <span>در این صفحه</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="webinar-list-section">
        <div class="webinar-shell">
            <div class="section-head">
                <div>
                    <span class="section-head__mini">لیست وبینارها</span>
                    <h2>جدیدترین وبینارهای منتشر شده</h2>
                </div>
            </div>

            @if($webinars->count())
                <div class="webinar-grid">
                    @foreach($webinars as $webinar)
                        <article class="webinar-card">
                            <div class="webinar-card__image-wrap">
                                <img
                                    src="{{ $webinar->image_path ? asset('storage/' . $webinar->image_path) : asset('theme/assets/images/Frame 1116606961.png') }}"
                                    alt="{{ $webinar->title }}"
                                    class="webinar-card__image"
                                >
                                <span class="webinar-card__tag">وبینار آموزشی</span>
                            </div>

                            <div class="webinar-card__body">
                                <div class="webinar-card__meta-top">
                                    <span class="meta-chip">
                                        <i class="fa-regular fa-calendar"></i>
                                        {{ $webinar->starts_at_jalali ?? 'زمان نامشخص' }}
                                    </span>

                                    <span class="meta-chip">
                                        <i class="fa-regular fa-clock"></i>
                                        {{ $webinar->duration_minutes ?? 0 }} دقیقه
                                    </span>
                                </div>

                                <h3 class="webinar-card__title">{{ $webinar->title }}</h3>

                                <p class="webinar-card__desc">
                                    {{ \Illuminate\Support\Str::limit(strip_tags($webinar->description), 145) }}
                                </p>

                                <div class="webinar-card__footer">
                                    <a href="{{ route('theme.single-vebinar', $webinar->slug) }}" class="details-btn">
                                        مشاهده جزئیات
                                        <i class="fa-solid fa-arrow-left"></i>
                                    </a>
                                </div>
                            </div>
                        </article>
                    @endforeach
                </div>

                <div class="pagination-wrap">
                    {{ $webinars->links() }}
                </div>
            @else
                <div class="empty-state">
                    <div class="empty-state__icon">
                        <i class="fa-solid fa-video"></i>
                    </div>
                    <h3>فعلاً وبیناری برای نمایش وجود ندارد</h3>
                    <p>به‌زودی وبینارهای جدید در این بخش قرار می‌گیرند.</p>
                </div>
            @endif
        </div>
    </section>
</main>

@include('theme.partials.footer')
</body>
</html>