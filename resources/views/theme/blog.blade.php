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
                    <a href="#">خانه</a>
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

                <!-- سایدبار -->
                <aside class="blog-sidebar">
                    <div class="sidebar-card">
                        <div class="sidebar-card__head">
                            <div class="sidebar-icon">
                                <img src="assets/images/filter.svg" alt="فیلتر">
                            </div>
                            <div>
                                <h2>فیلتر مقالات</h2>
                                <p>دسته‌بندی موردنظر را انتخاب کنید.</p>
                            </div>
                        </div>

                        <form class="filter-form">
                            <div class="form-group">
                                <label for="category">دسته‌بندی</label>
                                <select id="category" name="category">
                                    <option value="">همه دسته‌بندی‌ها</option>
                                    <option value="learning-disorders" selected>اختلالات یادگیری</option>
                                    <option value="speech">گفتاردرمانی</option>
                                    <option value="occupational-therapy">کاردرمانی</option>
                                    <option value="parenting">مهارت‌های فرزندپروری</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="sort">مرتب‌سازی</label>
                                <select id="sort" name="sort">
                                    <option value="latest" selected>جدیدترین</option>
                                    <option value="popular">پربازدیدترین</option>
                                    <option value="oldest">قدیمی‌ترین</option>
                                </select>
                            </div>

                            <div class="quick-tags">
                                <button type="button" class="tag-btn active">همه</button>
                                <button type="button" class="tag-btn">یادگیری</button>
                                <button type="button" class="tag-btn">توجه و تمرکز</button>
                                <button type="button" class="tag-btn">آموزش کودک</button>
                            </div>
                        </form>
                    </div>
                </aside>

                <!-- محتوا -->
                <div class="blog-content-area">
                    <div class="blog-toolbar">
                        <div class="toolbar-text">
                            <h3>مقاله‌های پیشنهادی</h3>
                            <p>۴ مقاله در دسته اختلالات یادگیری</p>
                        </div>

                        <a href="#" class="toolbar-link">مشاهده همه</a>
                    </div>

                    <div class="articles-grid">
                        <!-- کارت 1 -->
                        <article class="article-card">
                            <a href="#" class="article-card__image">
                                <img src="assets/images/blog-card.png" alt="دیر یاد گرفتن مطالب توسط کودکان">
                            </a>

                            <div class="article-card__body">
                                <span class="article-badge">اختلالات یادگیری</span>

                                <h2>
                                    <a href="#">دیر یاد گرفتن مطالب توسط کودکان</a>
                                </h2>

                                <p class="article-excerpt">
                                    نشانه‌های دیر یادگیری در کودکان می‌تواند از تفاوت‌های ساده آموزشی
                                    تا مشکلات عمیق‌تر در پردازش اطلاعات متغیر باشد. آشنایی با این علائم
                                    به والدین کمک می‌کند زودتر اقدام کنند.
                                </p>

                                <div class="article-card__footer">
                                    <div class="article-meta">
                                        <span>۶ دقیقه مطالعه</span>
                                        <span>۱۲ اردیبهشت ۱۴۰۴</span>
                                    </div>

                                    <a href="#" class="read-more">
                                        مطالعه مقاله
                                        <span class="read-more__icon">←</span>
                                    </a>
                                </div>
                            </div>
                        </article>

                        <!-- کارت 2 -->
                        <article class="article-card">
                            <a href="#" class="article-card__image">
                                <img src="assets/images/blog-card2.png" alt="چطور اختلال یادگیری را زودتر تشخیص بدهیم">
                            </a>

                            <div class="article-card__body">
                                <span class="article-badge">اختلالات یادگیری</span>

                                <h2>
                                    <a href="#">چطور اختلال یادگیری را زودتر تشخیص بدهیم؟</a>
                                </h2>

                                <p class="article-excerpt">
                                    تشخیص زودهنگام اختلالات یادگیری باعث می‌شود مسیر آموزش و درمان
                                    مؤثرتر پیش برود. در این مطلب مهم‌ترین نشانه‌ها و زمان مناسب مراجعه
                                    به متخصص را مرور می‌کنیم.
                                </p>

                                <div class="article-card__footer">
                                    <div class="article-meta">
                                        <span>۵ دقیقه مطالعه</span>
                                        <span>۱۰ اردیبهشت ۱۴۰۴</span>
                                    </div>

                                    <a href="#" class="read-more">
                                        مطالعه مقاله
                                        <span class="read-more__icon">←</span>
                                    </a>
                                </div>
                            </div>
                        </article>

                        <!-- کارت 3 -->
                        <article class="article-card">
                            <a href="#" class="article-card__image">
                                <img src="assets/images/blog-card.png" alt="راهکارهای تقویت تمرکز در کودکان">
                            </a>

                            <div class="article-card__body">
                                <span class="article-badge">آموزش کودک</span>

                                <h2>
                                    <a href="#">راهکارهای تقویت تمرکز در کودکان در خانه</a>
                                </h2>

                                <p class="article-excerpt">
                                    با چند تکنیک ساده و اصولی می‌توان تمرکز کودک را در محیط خانه افزایش داد.
                                    ایجاد روتین، بازی‌های هدفمند و حذف محرک‌های اضافی از مهم‌ترین این روش‌ها هستند.
                                </p>

                                <div class="article-card__footer">
                                    <div class="article-meta">
                                        <span>۷ دقیقه مطالعه</span>
                                        <span>۸ اردیبهشت ۱۴۰۴</span>
                                    </div>

                                    <a href="#" class="read-more">
                                        مطالعه مقاله
                                        <span class="read-more__icon">←</span>
                                    </a>
                                </div>
                            </div>
                        </article>

                        <!-- کارت 4 -->
                        <article class="article-card">
                            <a href="#" class="article-card__image">
                                <img src="assets/images/blog-card2.png" alt="نقش والدین در بهبود یادگیری کودک">
                            </a>

                            <div class="article-card__body">
                                <span class="article-badge">فرزندپروری</span>

                                <h2>
                                    <a href="#">نقش والدین در بهبود روند یادگیری کودک</a>
                                </h2>

                                <p class="article-excerpt">
                                    حمایت عاطفی، پیگیری منظم تکالیف و همکاری با درمانگر یا معلم،
                                    سه عامل مهم در بهبود روند یادگیری کودک هستند. این مقاله نقش والدین
                                    را به‌صورت کاربردی بررسی می‌کند.
                                </p>

                                <div class="article-card__footer">
                                    <div class="article-meta">
                                        <span>۴ دقیقه مطالعه</span>
                                        <span>۶ اردیبهشت ۱۴۰۴</span>
                                    </div>

                                    <a href="#" class="read-more">
                                        مطالعه مقاله
                                        <span class="read-more__icon">←</span>
                                    </a>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>

            </div>
        </section>
    </main>

    @include('theme.partials.footer')

</body>
</html>