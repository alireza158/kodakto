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
    <section class="blog-hero"><div class="blog-shell"><div class="blog-hero__content"><h1>مقالات آموزشی</h1></div></div></section>
    <section class="blog-section">
        <div class="blog-shell blog-layout">
            <aside class="blog-sidebar">
                <div class="sidebar-card">
                    <form class="filter-form" method="GET" action="{{ route('theme.blog') }}">
                        <div class="form-group">
                            <label for="category">دسته‌بندی</label>
                            <select id="category" name="category" onchange="this.form.submit()">
                                <option value="">همه دسته‌ها</option>
                                @foreach($categories as $category)
                                    <option value="{{ $category->slug }}" @selected($categorySlug === $category->slug)>{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </form>
                </div>
            </aside>

            <div class="blog-content-area">
                <div class="articles-grid">
                    @forelse($articles as $article)
                        <article class="article-card">
                            <a href="{{ route('theme.single-blog', $article->slug) }}" class="article-card__image">
                                <img src="{{ $article->image_path ? asset('storage/'.$article->image_path) : asset('theme/assets/images/blog-card.png') }}" alt="{{ $article->title }}">
                            </a>
                            <div class="article-card__body">
                                <span class="article-badge">{{ $article->category?->name ?: 'عمومی' }}</span>
                                <h2><a href="{{ route('theme.single-blog', $article->slug) }}">{{ $article->title }}</a></h2>
                                <p class="article-excerpt">{{ $article->excerpt ?: \Illuminate\Support\Str::limit(strip_tags($article->content), 160) }}</p>
                            </div>
                        </article>
                    @empty
                        <p>مقاله‌ای وجود ندارد.</p>
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
