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
            <h1>وبینارها</h1>
            <p>لیست کامل وبینارهای آموزشی به‌صورت داینامیک از پنل مدیریت</p>
        </div>
    </section>

    <section class="webinar-list-section">
        <div class="webinar-shell">
            <div class="webinar-grid">
                @forelse($webinars as $webinar)
                    <article class="webinar-card">
                        <img src="{{ $webinar->image_path ? asset('storage/'.$webinar->image_path) : asset('theme/assets/images/Frame 1116606961.png') }}" alt="{{ $webinar->title }}">
                        <div class="webinar-card__body">
                            <h2>{{ $webinar->title }}</h2>
                            <div class="webinar-meta">
                                <span>شروع: {{ $webinar->starts_at_jalali ?? 'نامشخص' }}</span>
                                <span>مدت: {{ $webinar->duration_minutes }} دقیقه</span>
                            </div>
                            <p>{{ \Illuminate\Support\Str::limit(strip_tags($webinar->description), 130) }}</p>
                            <a href="{{ route('theme.single-vebinar', $webinar->slug) }}" class="details-btn">جزئیات وبینار</a>
                        </div>
                    </article>
                @empty
                    <p class="empty-text">وبیناری برای نمایش وجود ندارد.</p>
                @endforelse
            </div>

            <div class="pagination-wrap">{{ $webinars->links() }}</div>
        </div>
    </section>
</main>

@include('theme.partials.footer')
</body>
</html>
