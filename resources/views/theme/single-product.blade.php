<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>صفحه محصول</title>

    <base href="{{ asset('theme') }}/">

    <!-- Bootstrap 5 RTL -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
        :root {
            --primary: #6d5dfc;
            --primary-dark: #5647e8;
            --secondary: #00bcd4;
            --success: #16a34a;
            --warning: #ffb020;
            --danger: #ef4444;
            --text-dark: #172033;
            --text-muted: #6b7280;
            --border: #e9eef7;
            --card-bg: rgba(255,255,255,0.9);
            --soft-bg: #f6f8fc;
            --shadow-sm: 0 10px 30px rgba(15, 23, 42, 0.05);
            --shadow-md: 0 16px 40px rgba(15, 23, 42, 0.10);
            --radius-xl: 28px;
            --radius-lg: 22px;
            --radius-md: 18px;
            --radius-sm: 14px;
        }

        * {
            box-sizing: border-box;
        }

        body {
            background:
                radial-gradient(circle at top right, rgba(109, 93, 252, 0.10), transparent 28%),
                radial-gradient(circle at bottom left, rgba(0, 188, 212, 0.08), transparent 22%),
                linear-gradient(180deg, #f8faff 0%, #f5f7fb 100%);
            color: var(--text-dark);
            font-family: inherit;
            min-height: 100vh;
        }

        a {
            text-decoration: none;
        }

        .section-space {
            padding: 70px 0;
        }

        .product-gallery-card,
        .purchase-card,
        .content-card,
        .related-card {
            background: var(--card-bg);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255,255,255,0.7);
            border-radius: var(--radius-xl);
            box-shadow: var(--shadow-sm);
        }

        .product-gallery-card,
        .content-card {
            position: relative;
            overflow: hidden;
        }

        .product-gallery-card::before,
        .content-card::before {
            content: "";
            position: absolute;
            inset: 0;
            background: linear-gradient(135deg, rgba(109, 93, 252, 0.04), rgba(0, 188, 212, 0.03));
            pointer-events: none;
        }

        .product-gallery-card {
            padding: 26px;
        }

        .main-product-image {
            background:
                radial-gradient(circle at top, rgba(109, 93, 252, 0.10), transparent 35%),
                linear-gradient(180deg, #ffffff 0%, #f8fbff 100%);
            border: 1px solid var(--border);
            border-radius: 24px;
            min-height: 520px;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 28px;
            position: relative;
            overflow: hidden;
        }

        .main-product-image::after {
            content: "";
            position: absolute;
            width: 280px;
            height: 280px;
            background: radial-gradient(circle, rgba(109, 93, 252, 0.12), transparent 70%);
            border-radius: 50%;
            z-index: 0;
        }

        .main-product-image img {
            max-width: 100%;
            max-height: 430px;
            object-fit: contain;
            position: relative;
            z-index: 1;
            transition: transform 0.35s ease;
            filter: drop-shadow(0 20px 35px rgba(15, 23, 42, 0.10));
        }

        .main-product-image:hover img {
            transform: scale(1.04);
        }

        .thumb-image {
            width: 88px;
            height: 88px;
            border-radius: 18px;
            border: 1px solid var(--border);
            background: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            cursor: pointer;
            transition: all 0.25s ease;
            box-shadow: 0 6px 18px rgba(15, 23, 42, 0.04);
        }

        .thumb-image img {
            width: 100%;
            height: 100%;
            object-fit: contain;
            padding: 10px;
        }

        .thumb-image.active,
        .thumb-image:hover {
            border-color: var(--primary);
            transform: translateY(-3px);
            box-shadow: 0 0 0 5px rgba(109, 93, 252, 0.10);
        }

        .purchase-card {
            padding: 30px;
            position: sticky;
            top: 24px;
        }

        .purchase-card .top-badges {
            gap: 12px;
        }

        .badge.text-bg-primary {
            background: linear-gradient(135deg, var(--primary), var(--primary-dark)) !important;
            border: none;
            font-size: 13px;
            font-weight: 700;
            padding: 10px 16px !important;
            box-shadow: 0 10px 24px rgba(109, 93, 252, 0.18);
        }

        .product-title {
            font-size: 2.1rem;
            font-weight: 900;
            line-height: 1.5;
            color: var(--text-dark);
            margin-bottom: 16px;
        }

        .rating-box {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            background: #fff7e8;
            color: #b7791f;
            border: 1px solid #ffe2a8;
            border-radius: 999px;
            padding: 8px 14px;
            font-size: 14px;
            font-weight: 800;
            box-shadow: 0 8px 20px rgba(255, 176, 32, 0.15);
        }

        .product-desc {
            color: var(--text-muted);
            line-height: 2.15;
            font-size: 15px;
        }

        .feature-list {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }

        .feature-badge {
            background: linear-gradient(180deg, #ffffff 0%, #f7f9fd 100%);
            color: #334155;
            border: 1px solid var(--border);
            border-radius: 999px;
            padding: 11px 15px;
            font-size: 14px;
            font-weight: 700;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            box-shadow: 0 8px 20px rgba(15, 23, 42, 0.04);
        }

        .feature-badge i {
            color: var(--primary);
        }

        .price-wrap {
            background: linear-gradient(135deg, rgba(109, 93, 252, 0.06), rgba(0, 188, 212, 0.04));
            border: 1px solid rgba(109, 93, 252, 0.14);
            border-radius: 22px;
            padding: 22px;
            position: relative;
            overflow: hidden;
        }

        .price-wrap::after {
            content: "پیشنهاد ویژه";
            position: absolute;
            top: 14px;
            left: 14px;
            background: rgba(22, 163, 74, 0.10);
            color: var(--success);
            border: 1px solid rgba(22, 163, 74, 0.18);
            font-size: 12px;
            font-weight: 800;
            padding: 6px 10px;
            border-radius: 999px;
        }

        .old-price {
            color: #98a2b3;
            text-decoration: line-through;
            font-size: 15px;
            margin-bottom: 6px;
        }

        .new-price {
            color: var(--success);
            font-size: 2.1rem;
            font-weight: 900;
            line-height: 1.2;
        }

        .new-price small {
            font-size: 15px;
            font-weight: 700;
            color: #475467;
            margin-right: 4px;
        }

        .btn-cart {
            height: 56px;
            border-radius: 16px;
            font-weight: 800;
            font-size: 15px;
            transition: all 0.25s ease;
            border: none;
        }

        .btn-success.btn-cart {
            background: linear-gradient(135deg, #1db954, #149845);
            box-shadow: 0 14px 30px rgba(22, 163, 74, 0.18);
        }

        .btn-success.btn-cart:hover {
            transform: translateY(-2px);
            box-shadow: 0 18px 34px rgba(22, 163, 74, 0.22);
        }

        .btn-outline-soft {
            border: 1px solid var(--border);
            background: #fff;
            color: #344054;
            box-shadow: 0 8px 20px rgba(15, 23, 42, 0.04);
        }

        .btn-outline-soft:hover {
            border-color: var(--primary);
            color: var(--primary);
            transform: translateY(-2px);
        }

        .soft-divider {
            height: 1px;
            background: linear-gradient(to left, transparent, #e5ebf5, transparent);
            margin: 24px 0;
        }

        .meta-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .meta-list li {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 12px 0;
            border-bottom: 1px dashed #edf1f7;
            color: #475467;
            font-size: 14px;
            font-weight: 500;
        }

        .meta-list li:last-child {
            border-bottom: none;
        }

        .meta-list li i {
            font-size: 18px;
        }

        .content-card {
            padding: 30px;
        }

        .section-title {
            font-size: 1.45rem;
            font-weight: 900;
            color: var(--text-dark);
            margin-bottom: 22px;
        }

        .nav.nav-pills {
            background: #f4f7fc;
            border: 1px solid var(--border);
            border-radius: 18px;
            padding: 8px;
            display: inline-flex;
            flex-wrap: wrap;
        }

        .nav-pills .nav-link {
            border-radius: 14px;
            color: #475467;
            font-weight: 800;
            padding: 12px 20px;
            transition: all 0.25s ease;
        }

        .nav-pills .nav-link:hover {
            color: var(--primary);
        }

        .nav-pills .nav-link.active {
            background: linear-gradient(135deg, var(--primary), var(--primary-dark));
            color: #fff;
            box-shadow: 0 12px 24px rgba(109, 93, 252, 0.20);
        }

        .tab-content {
            margin-top: 12px;
        }

        .spec-item {
            background: linear-gradient(180deg, #ffffff 0%, #f8fbff 100%);
            border: 1px solid var(--border);
            border-radius: 18px;
            padding: 18px;
            height: 100%;
            transition: all 0.25s ease;
            box-shadow: 0 8px 22px rgba(15, 23, 42, 0.04);
        }

        .spec-item:hover {
            transform: translateY(-4px);
            box-shadow: 0 14px 30px rgba(15, 23, 42, 0.08);
            border-color: rgba(109, 93, 252, 0.22);
        }

        .spec-item .label {
            color: var(--text-muted);
            font-size: 13px;
            margin-bottom: 8px;
        }

        .spec-item .value {
            color: #1f2937;
            font-weight: 900;
            font-size: 15px;
        }

        .review-card {
            background: linear-gradient(180deg, #ffffff 0%, #fbfcfe 100%);
            border: 1px solid var(--border);
            border-radius: 20px;
            padding: 20px;
            height: 100%;
            transition: all 0.25s ease;
            box-shadow: 0 8px 22px rgba(15, 23, 42, 0.04);
            position: relative;
            overflow: hidden;
        }

        .review-card::before {
            content: "\F6B0";
            font-family: "bootstrap-icons";
            position: absolute;
            top: 14px;
            left: 16px;
            font-size: 34px;
            color: rgba(109, 93, 252, 0.10);
        }

        .review-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 14px 28px rgba(15, 23, 42, 0.08);
        }

        .review-user {
            font-weight: 900;
            color: #1f2937;
        }

        .review-text {
            color: var(--text-muted);
            line-height: 2;
            margin: 14px 0 0;
            font-size: 14px;
        }

        .related-card {
            overflow: hidden;
            transition: all 0.3s ease;
            height: 100%;
            position: relative;
        }

        .related-card:hover {
            transform: translateY(-8px);
            box-shadow: var(--shadow-md);
        }

        .related-image {
            height: 230px;
            background:
                radial-gradient(circle at top, rgba(109, 93, 252, 0.10), transparent 35%),
                linear-gradient(180deg, #fafcff 0%, #f4f8ff 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 22px;
        }

        .related-image img {
            max-width: 100%;
            max-height: 175px;
            object-fit: contain;
            transition: transform 0.35s ease;
            filter: drop-shadow(0 16px 24px rgba(15, 23, 42, 0.08));
        }

        .related-card:hover .related-image img {
            transform: scale(1.06);
        }

        .related-body {
            padding: 18px;
        }

        .related-title {
            font-size: 1rem;
            font-weight: 800;
            color: #1f2937;
            min-height: 52px;
            line-height: 1.9;
        }

        .related-price {
            color: var(--primary);
            font-weight: 900;
            font-size: 19px;
        }

        .view-all-link {
            color: var(--primary);
            font-weight: 800;
            transition: all 0.25s ease;
        }

        .view-all-link:hover {
            color: var(--primary-dark);
        }

        @media (max-width: 991.98px) {
            .section-space {
                padding: 40px 0;
            }

            .main-product-image {
                min-height: 380px;
            }

            .purchase-card {
                position: static;
            }

            .product-title {
                font-size: 1.75rem;
            }

            .content-card,
            .purchase-card,
            .product-gallery-card {
                padding: 22px;
            }
        }

        @media (max-width: 575.98px) {
            .product-title {
                font-size: 1.45rem;
            }

            .new-price {
                font-size: 1.8rem;
            }

            .thumb-image {
                width: 74px;
                height: 74px;
            }

            .related-image {
                height: 185px;
            }

            .nav.nav-pills {
                width: 100%;
            }
        }
    </style>
</head>
<body>

    @include('theme.partials.header')

    <main class="section-space">
        <div class="container">
            <div class="row g-4 align-items-start">

                <!-- تصویر محصول -->
                <div class="col-lg-7">
                    <div class="product-gallery-card">
                        <div class="main-product-image mb-3">
                            <img id="mainImage" src="assets/images/16 1.png" alt="شیشه شیر">
                        </div>

                        <div class="d-flex flex-wrap gap-2">
                            <div class="thumb-image active" onclick="changeImage(this, 'assets/images/16 1.png')">
                                <img src="assets/images/16 1.png" alt="تصویر محصول">
                            </div>
                            <div class="thumb-image" onclick="changeImage(this, 'assets/images/16 1.png')">
                                <img src="assets/images/16 1.png" alt="تصویر محصول">
                            </div>
                            <div class="thumb-image" onclick="changeImage(this, 'assets/images/16 1.png')">
                                <img src="assets/images/16 1.png" alt="تصویر محصول">
                            </div>
                            <div class="thumb-image" onclick="changeImage(this, 'assets/images/16 1.png')">
                                <img src="assets/images/16 1.png" alt="تصویر محصول">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- اطلاعات خرید -->
                <div class="col-lg-5">
                    <div class="purchase-card">
                        <div class="d-flex align-items-center justify-content-between flex-wrap top-badges mb-3">
                            <span class="badge text-bg-primary rounded-pill">برند پینو</span>
                            <span class="rating-box">
                                <i class="bi bi-star-fill"></i>
                                4.5
                            </span>
                        </div>

                        <h1 class="product-title">شیشه شیر نوزاد پینو</h1>

                        <p class="product-desc mb-4">
                            این شیشه شیر از برند پینو، با طراحی ارگونومیک و بدنه سبک، برای استفاده روزمره نوزادان بسیار مناسب است.
                            کیفیت ساخت بالا، استفاده از مواد اولیه ایمن و طراحی کاربردی، این محصول را به انتخابی مطمئن برای والدین تبدیل کرده است.
                        </p>

                        <div class="feature-list mb-4">
                            <span class="feature-badge"><i class="bi bi-shield-check"></i> بدون BPA</span>
                            <span class="feature-badge"><i class="bi bi-heart"></i> مناسب نوزاد</span>
                            <span class="feature-badge"><i class="bi bi-award"></i> کیفیت بالا</span>
                            <span class="feature-badge"><i class="bi bi-truck"></i> ارسال سریع</span>
                        </div>

                        <div class="price-wrap mb-4">
                            <div class="old-price">260,000 تومان</div>
                            <div class="new-price">200,000 <small>تومان</small></div>
                        </div>

                        <div class="d-grid gap-2 mb-4">
                            <button class="btn btn-success btn-cart">
                                <i class="bi bi-bag-plus ms-1"></i>
                                افزودن به سبد خرید
                            </button>
                            <button class="btn btn-outline-soft btn-cart">
                                <i class="bi bi-heart ms-1"></i>
                                افزودن به علاقه‌مندی‌ها
                            </button>
                        </div>

                        <div class="soft-divider"></div>

                        <ul class="meta-list">
                            <li><i class="bi bi-check-circle-fill text-success"></i> موجود در انبار</li>
                            <li><i class="bi bi-arrow-repeat text-primary"></i> ضمانت سلامت فیزیکی کالا</li>
                            <li><i class="bi bi-box-seam text-warning"></i> بسته‌بندی ایمن و استاندارد</li>
                            <li><i class="bi bi-headset text-info"></i> پشتیبانی و پاسخگویی سریع</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- تب‌ها -->
            <div class="content-card mt-5">
                <ul class="nav nav-pills mb-4 gap-2" id="productTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="specs-tab" data-bs-toggle="pill" data-bs-target="#specs" type="button" role="tab">
                            مشخصات محصول
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="reviews-tab" data-bs-toggle="pill" data-bs-target="#reviews" type="button" role="tab">
                            نظرات کاربران
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="desc-tab" data-bs-toggle="pill" data-bs-target="#desc" type="button" role="tab">
                            توضیحات تکمیلی
                        </button>
                    </li>
                </ul>

                <div class="tab-content" id="productTabContent">
                    <!-- مشخصات -->
                    <div class="tab-pane fade show active" id="specs" role="tabpanel">
                        <h3 class="section-title">مشخصات محصول</h3>
                        <div class="row g-3">
                            <div class="col-md-6 col-lg-3">
                                <div class="spec-item">
                                    <div class="label">حجم</div>
                                    <div class="value">250 میلی‌لیتر</div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="spec-item">
                                    <div class="label">جنس</div>
                                    <div class="value">پلاستیک بدون BPA</div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="spec-item">
                                    <div class="label">نوع طراحی</div>
                                    <div class="value">ارگونومیک و سبک</div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="spec-item">
                                    <div class="label">رده سنی</div>
                                    <div class="value">نوزادان تا 1 سال</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- نظرات -->
                    <div class="tab-pane fade" id="reviews" role="tabpanel">
                        <h3 class="section-title">نظرات کاربران</h3>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="review-card">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <span class="review-user">مریم احمدی</span>
                                        <span class="text-warning">
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                        </span>
                                    </div>
                                    <p class="review-text">
                                        من چند بار از این مدل خریدم، هم ظاهر خوبی داره هم برای دست گرفتن خیلی راحته.
                                        کیفیتش نسبت به قیمت واقعاً خوبه.
                                    </p>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="review-card">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <span class="review-user">سعید رضایی</span>
                                        <span class="text-warning">
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-half"></i>
                                        </span>
                                    </div>
                                    <p class="review-text">
                                        بدنه سبک و خوش‌فرم داره و برای استفاده روزانه خیلی مناسبه.
                                        بسته‌بندی هم خوب بود و سالم به دستم رسید.
                                    </p>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="review-card">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <span class="review-user">نرگس کریمی</span>
                                        <span class="text-warning">
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star"></i>
                                        </span>
                                    </div>
                                    <p class="review-text">
                                        ظاهر محصول خیلی قشنگه و کیفیت متریالش هم خوبه.
                                        برای سیسمونی گزینه شیک و کاربردیه.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- توضیحات -->
                    <div class="tab-pane fade" id="desc" role="tabpanel">
                        <h3 class="section-title">توضیحات تکمیلی</h3>
                        <p class="product-desc mb-0">
                            شیشه شیر پینو با در نظر گرفتن نیاز والدین و راحتی نوزاد طراحی شده است.
                            فرم بدنه به‌گونه‌ای است که به‌راحتی در دست قرار می‌گیرد و جنس بدنه نیز از مواد اولیه باکیفیت و ایمن تولید شده است.
                            این محصول برای استفاده روزمره، سیسمونی، فروشگاه‌های کودک و سفارش‌های عمده انتخاب مناسبی به‌شمار می‌رود.
                        </p>
                    </div>
                </div>
            </div>

            <!-- محصولات مشابه -->
            <div class="mt-5">
                <div class="d-flex align-items-center justify-content-between mb-4 flex-wrap gap-2">
                    <h3 class="section-title mb-0">محصولات مشابه</h3>
                    <a href="#" class="view-all-link">مشاهده همه</a>
                </div>

                <div class="row g-4">
                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="related-card">
                            <div class="related-image">
                                <img src="assets/images/16 1.png" alt="محصول مشابه">
                            </div>
                            <div class="related-body">
                                <h5 class="related-title">شیشه شیر مدل جدید</h5>
                                <div class="related-price mb-3">180,000 تومان</div>
                                <a href="#" class="btn btn-primary w-100 rounded-3">افزودن به سبد خرید</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="related-card">
                            <div class="related-image">
                                <img src="assets/images/16 1.png" alt="محصول مشابه">
                            </div>
                            <div class="related-body">
                                <h5 class="related-title">شیشه شیر پینو مدل کلاسیک</h5>
                                <div class="related-price mb-3">220,000 تومان</div>
                                <a href="#" class="btn btn-primary w-100 rounded-3">افزودن به سبد خرید</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="related-card">
                            <div class="related-image">
                                <img src="assets/images/16 1.png" alt="محصول مشابه">
                            </div>
                            <div class="related-body">
                                <h5 class="related-title">شیشه شیر ارگونومیک</h5>
                                <div class="related-price mb-3">250,000 تومان</div>
                                <a href="#" class="btn btn-primary w-100 rounded-3">افزودن به سبد خرید</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="related-card">
                            <div class="related-image">
                                <img src="assets/images/16 1.png" alt="محصول مشابه">
                            </div>
                            <div class="related-body">
                                <h5 class="related-title">شیشه شیر کودک پینو</h5>
                                <div class="related-price mb-3">230,000 تومان</div>
                                <a href="#" class="btn btn-primary w-100 rounded-3">افزودن به سبد خرید</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </main>

    @include('theme.partials.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        function changeImage(element, src) {
            document.getElementById('mainImage').src = src;

            document.querySelectorAll('.thumb-image').forEach(item => {
                item.classList.remove('active');
            });

            element.classList.add('active');
        }
    </script>
</body>
</html>