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
<style>
:root {
    --primary: #2b59ff;
    --primary-dark: #1f45d8;
    --text-main: #111827;
    --text-soft: #6b7280;
    --border: #e5e7eb;
    --bg-soft: #f8fafc;
    --white: #ffffff;
    --shadow: 0 10px 30px rgba(15, 23, 42, 0.08);
    --shadow-hover: 0 18px 40px rgba(15, 23, 42, 0.12);
    --radius-xl: 24px;
    --radius-lg: 18px;
    --radius-md: 14px;
}

* {
    box-sizing: border-box;
}

body {
    margin: 0;
    background: #f8fafc;
    color: var(--text-main);
    font-family: inherit;
}

img {
    max-width: 100%;
    display: block;
}

a {
    text-decoration: none;
}

.single-webinar-main {
    min-height: 100vh;
}

.single-webinar-shell {
    width: min(1200px, calc(100% - 32px));
    margin-inline: auto;
}

/* hero */
.single-webinar-hero {
    padding: 34px 0 30px;
    background:
        radial-gradient(circle at top right, rgba(43, 89, 255, 0.12), transparent 32%),
        linear-gradient(135deg, #ffffff 0%, #f5f8ff 100%);
    border-bottom: 1px solid rgba(0, 0, 0, 0.05);
}

.breadcrumb-wrap {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    gap: 10px;
    margin-bottom: 22px;
    color: var(--text-soft);
    font-size: 14px;
}

.breadcrumb-wrap a {
    color: var(--text-soft);
    transition: color 0.25s ease;
}

.breadcrumb-wrap a:hover {
    color: var(--primary);
}

.breadcrumb-wrap .current {
    color: var(--text-main);
    font-weight: 700;
}

.breadcrumb-separator {
    color: #9ca3af;
    font-size: 12px;
}

.hero-head {
    max-width: 780px;
}

.hero-badge {
    display: inline-flex;
    align-items: center;
    padding: 8px 14px;
    background: rgba(43, 89, 255, 0.08);
    color: var(--primary);
    border-radius: 999px;
    font-size: 13px;
    font-weight: 700;
    margin-bottom: 16px;
}

.hero-head h1 {
    margin: 0 0 12px;
    font-size: clamp(28px, 4vw, 42px);
    line-height: 1.5;
    font-weight: 800;
    color: #0f172a;
}

.hero-head p {
    margin: 0;
    color: var(--text-soft);
    font-size: 15px;
    line-height: 2;
}

/* layout */
.single-webinar-section {
    padding: 36px 0 64px;
}

.single-webinar-layout {
    display: grid;
    grid-template-columns: minmax(0, 1.7fr) minmax(300px, 0.9fr);
    gap: 24px;
    align-items: start;
}

.webinar-detail-card,
.aside-box {
    background: var(--white);
    border: 1px solid rgba(15, 23, 42, 0.06);
    border-radius: var(--radius-xl);
    box-shadow: var(--shadow);
}

/* content */
.webinar-detail-card {
    overflow: hidden;
}

.webinar-detail-image-wrap {
    position: relative;
    aspect-ratio: 16 / 8.5;
    background: #eef2ff;
    overflow: hidden;
}

.single-webinar-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.image-badge {
    position: absolute;
    top: 16px;
    right: 16px;
    background: rgba(17, 24, 39, 0.76);
    color: #fff;
    padding: 8px 12px;
    border-radius: 999px;
    font-size: 12px;
    font-weight: 700;
    backdrop-filter: blur(6px);
}

.webinar-detail-body {
    padding: 28px;
}

.webinar-title {
    margin: 0 0 22px;
    font-size: clamp(24px, 3vw, 34px);
    line-height: 1.7;
    font-weight: 800;
    color: #111827;
}

.single-webinar-meta {
    display: grid;
    grid-template-columns: repeat(2, minmax(0, 1fr));
    gap: 16px;
    margin-bottom: 26px;
}

.meta-card {
    display: flex;
    align-items: center;
    gap: 14px;
    padding: 18px;
    border: 1px solid var(--border);
    border-radius: 18px;
    background: #fbfcfe;
}

.meta-card__icon {
    width: 50px;
    height: 50px;
    border-radius: 14px;
    display: grid;
    place-items: center;
    background: rgba(43, 89, 255, 0.08);
    color: var(--primary);
    font-size: 20px;
    flex-shrink: 0;
}

.meta-card__content {
    display: flex;
    flex-direction: column;
    gap: 4px;
}

.meta-card__content span {
    font-size: 13px;
    color: var(--text-soft);
}

.meta-card__content strong {
    font-size: 15px;
    color: var(--text-main);
    font-weight: 800;
}

.content-box {
    margin-top: 8px;
    padding: 24px;
    background: #fcfdff;
    border: 1px solid var(--border);
    border-radius: 20px;
}

.content-box__head {
    margin-bottom: 14px;
}

.content-box__head h3 {
    margin: 0;
    font-size: 20px;
    font-weight: 800;
    color: #111827;
}

.single-webinar-description {
    color: #374151;
    font-size: 15px;
    line-height: 2.2;
    word-break: break-word;
}

.webinar-actions {
    margin-top: 24px;
    display: flex;
    justify-content: flex-start;
}

.watch-btn {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
    min-width: 190px;
    padding: 14px 22px;
    border-radius: 16px;
    background: linear-gradient(135deg, var(--primary) 0%, var(--primary-dark) 100%);
    color: #fff;
    font-size: 15px;
    font-weight: 800;
    box-shadow: 0 10px 24px rgba(43, 89, 255, 0.2);
    transition: transform 0.25s ease, box-shadow 0.25s ease;
}

.watch-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 16px 30px rgba(43, 89, 255, 0.24);
    color: #fff;
}

/* aside */
.aside-box {
    padding: 22px;
    position: sticky;
    top: 24px;
}

.aside-box__head {
    margin-bottom: 18px;
}

.aside-box__head h2 {
    margin: 0 0 6px;
    font-size: 22px;
    font-weight: 800;
    color: #111827;
}

.aside-box__head span {
    color: var(--text-soft);
    font-size: 14px;
}

.aside-list {
    display: flex;
    flex-direction: column;
    gap: 14px;
}

.aside-card {
    display: flex;
    gap: 12px;
    align-items: center;
    padding: 12px;
    border: 1px solid var(--border);
    border-radius: 18px;
    background: #fff;
    transition: transform 0.25s ease, box-shadow 0.25s ease, border-color 0.25s ease;
}

.aside-card:hover {
    transform: translateY(-3px);
    box-shadow: 0 14px 26px rgba(15, 23, 42, 0.08);
    border-color: rgba(43, 89, 255, 0.18);
}

.aside-card__image-wrap {
    width: 96px;
    height: 76px;
    border-radius: 14px;
    overflow: hidden;
    flex-shrink: 0;
    background: #eef2ff;
}

.aside-card__image-wrap img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.aside-card__content {
    min-width: 0;
    flex: 1;
}

.aside-card__content h3 {
    margin: 0 0 8px;
    font-size: 15px;
    font-weight: 800;
    line-height: 1.9;
    color: #111827;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
}

.aside-card__content p {
    margin: 0;
    color: var(--text-soft);
    font-size: 13px;
    display: flex;
    align-items: center;
    gap: 8px;
}

.aside-card__content p i {
    color: var(--primary);
}

.aside-empty {
    text-align: center;
    padding: 30px 16px;
    border: 1px dashed var(--border);
    border-radius: 18px;
    background: #fafcff;
    color: var(--text-soft);
}

.aside-empty i {
    font-size: 28px;
    color: var(--primary);
    margin-bottom: 10px;
    display: block;
}

.aside-empty p {
    margin: 0;
    font-size: 14px;
}

/* responsive */
@media (max-width: 991px) {
    .single-webinar-layout {
        grid-template-columns: 1fr;
    }

    .aside-box {
        position: static;
        top: auto;
    }
}

@media (max-width: 767px) {
    .single-webinar-shell {
        width: min(100% - 20px, 1200px);
    }

    .single-webinar-hero {
        padding: 28px 0 24px;
    }

    .hero-head h1 {
        font-size: 26px;
    }

    .webinar-detail-body {
        padding: 18px;
    }

    .single-webinar-meta {
        grid-template-columns: 1fr;
    }

    .content-box {
        padding: 18px;
    }

    .watch-btn {
        width: 100%;
    }

    .aside-box {
        padding: 18px;
    }

    .aside-card {
        align-items: flex-start;
    }

    .aside-card__image-wrap {
        width: 88px;
        height: 70px;
    }
}
    </style>
<body>
@include('theme.partials.header')

<main class="single-webinar-main">
    <section class="single-webinar-hero">
        <div class="single-webinar-shell">
            <div class="breadcrumb-wrap">
                <a href="{{ route('theme.landing') }}">خانه</a>
                <span class="breadcrumb-separator">
                    <i class="fa-solid fa-angle-left"></i>
                </span>
                <a href="{{ route('theme.vebinar') }}">وبینارها</a>
                <span class="breadcrumb-separator">
                    <i class="fa-solid fa-angle-left"></i>
                </span>
                <span class="current">{{ $webinar->title }}</span>
            </div>

            <div class="hero-head">
                <span class="hero-badge">وبینار آموزشی</span>
                <h1>{{ $webinar->title }}</h1>
                <p>
                    مشاهده جزئیات کامل وبینار، زمان برگزاری، مدت زمان و توضیحات آموزشی
                </p>
            </div>
        </div>
    </section>

    <section class="single-webinar-section">
        <div class="single-webinar-shell">
            <div class="single-webinar-layout">
                <div class="single-webinar-content">
                    <article class="webinar-detail-card">
                        <div class="webinar-detail-image-wrap">
                            <img
                                src="{{ $webinar->image_path ? asset('storage/' . $webinar->image_path) : asset('theme/assets/images/Frame 1116606961.png') }}"
                                alt="{{ $webinar->title }}"
                                class="single-webinar-image"
                            >
                            <span class="image-badge">آموزش آنلاین</span>
                        </div>

                        <div class="webinar-detail-body">
                            <h2 class="webinar-title">{{ $webinar->title }}</h2>

                            <div class="single-webinar-meta">
                                <div class="meta-card">
                                    <div class="meta-card__icon">
                                        <i class="fa-regular fa-calendar"></i>
                                    </div>
                                    <div class="meta-card__content">
                                        <span>زمان شروع</span>
                                        <strong>{{ $webinar->starts_at_jalali ?? 'نامشخص' }}</strong>
                                    </div>
                                </div>

                                <div class="meta-card">
                                    <div class="meta-card__icon">
                                        <i class="fa-regular fa-clock"></i>
                                    </div>
                                    <div class="meta-card__content">
                                        <span>مدت وبینار</span>
                                        <strong>{{ $webinar->duration_minutes ?? 0 }} دقیقه</strong>
                                    </div>
                                </div>
                            </div>

                            @if($webinar->description)
                                <div class="content-box">
                                    <div class="content-box__head">
                                        <h3>توضیحات وبینار</h3>
                                    </div>
                                    <div class="single-webinar-description">
                                        {!! nl2br(e($webinar->description)) !!}
                                    </div>
                                </div>
                            @endif

                            @if($webinar->watch_url)
                                <div class="webinar-actions">
                                    <a class="watch-btn" href="{{ $webinar->watch_url }}" target="_blank" rel="noopener noreferrer">
                                        <i class="fa-solid fa-play"></i>
                                        مشاهده وبینار
                                    </a>
                                </div>
                            @endif
                        </div>
                    </article>
                </div>

                <aside class="single-webinar-aside">
                    <div class="aside-box">
                        <div class="aside-box__head">
                            <h2>سایر وبینارها</h2>
                            <span>پیشنهادهای بیشتر</span>
                        </div>

                        <div class="aside-list">
                            @forelse($latestWebinars as $item)
                                <a class="aside-card" href="{{ route('theme.single-vebinar', $item->slug) }}">
                                    <div class="aside-card__image-wrap">
                                        <img
                                            src="{{ $item->image_path ? asset('storage/' . $item->image_path) : asset('theme/assets/images/blog-card.png') }}"
                                            alt="{{ $item->title }}"
                                        >
                                    </div>

                                    <div class="aside-card__content">
                                        <h3>{{ $item->title }}</h3>
                                        <p>
                                            <i class="fa-regular fa-calendar"></i>
                                            {{ $item->starts_at_jalali ?? 'نامشخص' }}
                                        </p>
                                    </div>
                                </a>
                            @empty
                                <div class="aside-empty">
                                    <i class="fa-solid fa-video"></i>
                                    <p>وبینار دیگری موجود نیست.</p>
                                </div>
                            @endforelse
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </section>
</main>

@include('theme.partials.footer')
</body>
</html>