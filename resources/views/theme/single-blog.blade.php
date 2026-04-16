<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <base href="{{ asset('theme') }}/">
    <link rel="stylesheet" href="assets/css/all.css">
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/single-blog.css">
    <title>{{ $article->title }}</title>
</head>
<body>
@include('theme.partials.header')

<main>
    <h1 class="title">
        <a href="{{ route('theme.landing') }}">خانه</a> |
        <a href="{{ route('theme.blog') }}">مقالات</a> |
        <span>{{ $article->title }}</span>
    </h1>

    <section class="single-blog-container">
        <div class="blog-information">
            <img src="{{ $article->image_path ? asset('storage/'.$article->image_path) : asset('theme/assets/images/Frame 1116606961.png') }}" alt="{{ $article->title }}" class="blog-image">
            <div class="title-one">
                <h1>{{ $article->title }}</h1>
                @if($article->category)
                    <p>دسته: {{ $article->category->name }}</p>
                @endif
                <div class="time">
                    <div class="date">
                        <img src="assets/images/Calendar Minimalistic.svg" alt="">
                        <span>{{ optional($article->published_at)->format('Y/m/d') ?? $article->created_at->format('Y/m/d') }}</span>
                    </div>
                    <div class="clock">
                        <img src="assets/images/alarm.svg" alt="">
                        <span>{{ max(1, (int) ceil(str_word_count(strip_tags($article->content)) / 180)) }} دقیقه</span>
                    </div>
                </div>
            </div>

            @if($article->excerpt)
                <p>{{ $article->excerpt }}</p>
            @endif

            <div class="paragraph">{!! nl2br(e($article->content)) !!}</div>
        </div>

        <aside class="aside">
            <div class="aside-title">
                <img src="assets/images/book.png" alt="مقالات جدید">
                <h1>جدیدترین مقالات</h1>
            </div>

            @forelse($latestArticles as $latestArticle)
                <a class="aside-card" href="{{ route('theme.single-blog', $latestArticle->slug) }}">
                    <div class="card-image">
                        <img src="{{ $latestArticle->image_path ? asset('storage/'.$latestArticle->image_path) : asset('theme/assets/images/blog-card.png') }}" alt="{{ $latestArticle->title }}">
                    </div>
                    <div class="card-text">
                        <h1>{{ $latestArticle->title }}</h1>
                        <p>{{ $latestArticle->excerpt ?: \Illuminate\Support\Str::limit(strip_tags($latestArticle->content), 60) }}</p>
                    </div>
                </a>
            @empty
                <p>مقاله دیگری وجود ندارد.</p>
            @endforelse
        </aside>
    </section>
</main>
@include('theme.partials.footer')

<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/main.js"></script>
</body>
</html>
