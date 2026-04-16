<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <base href="{{ asset('theme') }}/">
    <link rel="stylesheet" href="assets/css/all.css">
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/blog.css">
    <title>مقالات</title>
</head>
<body class="blog-page">

@include('theme.partials.header')

<main class="blog-main">
    <section class="blog-hero">
        <div class="blog-shell">
            <nav class="blog-breadcrumb" aria-label="breadcrumb">
                <a href="{{ route('theme.landing') }}">خانه</a>
                <span>/</span>
                <span>مقالات</span>
            </nav>

            <div class="blog-hero__content">
                <div>
                    <h1>مقالات آموزشی</h1>
                    <p>
                        مجموعه‌ای از مقاله‌های کاربردی برای والدین، مربیان و درمانگران
                        در حوزه رشد، یادگیری و مهارت‌های کودکان.
                    </p>
                </div>

                <div class="blog-hero__badge">
                    <span>جدیدترین مطالب آموزشی</span>
                </div>
            </div>
        </div>
    </section>

    <section class="blog-section">
        <div class="blog-shell blog-layout">
            <aside class="blog-sidebar">
                <div class="sidebar-card">
                    <div class="sidebar-card__head">
                        <div class="sidebar-icon">
                            <img src="assets/images/filter.svg" alt="فیلتر">
                        </div>
                        <div>
                            <h2>فیلتر مقالات</h2>
                            <p>موضوع مورد نظر را انتخاب کنید.</p>
                        </div>
                    </div>

                    <form class="filter-form" method="GET" action="{{ route('theme.blog') }}">
                        <div class="form-group">
                            <label for="subject">موضوع</label>
                            <select id="subject" name="subject" onchange="this.form.submit()">
                                <option value="">همه موضوعات</option>
                                @foreach($subjects as $availableSubject)
                                    <option value="{{ $availableSubject }}" @selected($subject === $availableSubject)>{{ $availableSubject }}</option>
                                @endforeach
                            </select>
                        </div>
                    </form>
                </div>
            </aside>

            <div class="blog-content-area">
                <div class="blog-toolbar">
                    <div class="toolbar-text">
                        <h3>مقاله‌های پیشنهادی</h3>
                        <p>{{ $articles->total() }} مقاله</p>
                    </div>
                </div>

                <div class="articles-grid">
                    @forelse($articles as $article)
                        <article class="article-card">
                            <a href="{{ route('theme.single-blog', $article->slug) }}" class="article-card__image">
                                <img src="{{ $article->image_path ? asset('storage/'.$article->image_path) : asset('theme/assets/images/blog-card.png') }}" alt="{{ $article->title }}">
                            </a>

                            <div class="article-card__body">
                                <span class="article-badge">{{ $article->subject }}</span>

                                <h2>
                                    <a href="{{ route('theme.single-blog', $article->slug) }}">{{ $article->title }}</a>
                                </h2>

                                <p class="article-excerpt">
                                    {{ $article->excerpt ?: \Illuminate\Support\Str::limit(strip_tags($article->content), 160) }}
                                </p>

                                <div class="article-card__footer">
                                    <div class="article-meta">
                                        <span>{{ max(1, (int) ceil(str_word_count(strip_tags($article->content)) / 180)) }} دقیقه مطالعه</span>
                                        <span>{{ optional($article->published_at)->format('Y/m/d') ?? $article->created_at->format('Y/m/d') }}</span>
                                    </div>

                                    <a href="{{ route('theme.single-blog', $article->slug) }}" class="read-more">
                                        مطالعه مقاله
                                        <span class="read-more__icon">←</span>
                                    </a>
                                </div>
                            </div>
                        </article>
                    @empty
                        <p>هنوز مقاله‌ای برای نمایش وجود ندارد.</p>
                    @endforelse
                </div>

                <div style="margin-top: 16px;">{{ $articles->links() }}</div>
            </div>
        </div>
    </section>
</main>

@include('theme.partials.footer')

</body>
</html>
