<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <base href="{{ asset('theme') }}/">
    <link rel="stylesheet" href="assets/css/all.css">
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/single-vebinar.css">
    <title>{{ $webinar->title }}</title>
</head>
<body>
@include('theme.partials.header')

<main class="single-webinar-main">
    <h1 class="breadcrumb-title">
        <a href="{{ route('theme.landing') }}">خانه</a> |
        <a href="{{ route('theme.vebinar') }}">وبینارها</a> |
        <span>{{ $webinar->title }}</span>
    </h1>

    <section class="single-webinar-container">
        <div class="single-webinar-content">
            <img src="{{ $webinar->image_path ? asset('storage/'.$webinar->image_path) : asset('theme/assets/images/Frame 1116606961.png') }}" alt="{{ $webinar->title }}" class="single-webinar-image">
            <h1>{{ $webinar->title }}</h1>

            <div class="single-webinar-meta">
                <div class="meta-item">زمان شروع (شمسی): {{ $webinar->starts_at_jalali ?? 'نامشخص' }}</div>
                <div class="meta-item">مدت وبینار: {{ $webinar->duration_minutes }} دقیقه</div>
            </div>

            @if($webinar->description)
                <div class="single-webinar-description">{!! nl2br(e($webinar->description)) !!}</div>
            @endif

            @if($webinar->watch_url)
                <a class="watch-btn" href="{{ $webinar->watch_url }}" target="_blank" rel="noopener noreferrer">مشاهده</a>
            @endif
        </div>

        <aside class="single-webinar-aside">
            <h2>سایر وبینارها</h2>
            @forelse($latestWebinars as $item)
                <a class="aside-card" href="{{ route('theme.single-vebinar', $item->slug) }}">
                    <img src="{{ $item->image_path ? asset('storage/'.$item->image_path) : asset('theme/assets/images/blog-card.png') }}" alt="{{ $item->title }}">
                    <div>
                        <h3>{{ $item->title }}</h3>
                        <p>{{ $item->starts_at_jalali ?? 'نامشخص' }}</p>
                    </div>
                </a>
            @empty
                <p>وبینار دیگری موجود نیست.</p>
            @endforelse
        </aside>
    </section>
</main>

@include('theme.partials.footer')
</body>
</html>
