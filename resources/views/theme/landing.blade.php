@php
    $ageGroups = [
        'نوزاد تا 1 سالگی',
        '1 تا 2 سالگی',
        '2 تا 3 سالگی',
        '3 تا 5 سالگی',
        '6 تا 8 سالگی',
        '9 تا 11 سالگی',
        '12 تا 14 سالگی',
        '15 تا 17 سالگی',
    ];

    $topics = [
        [
            'title' => 'خلاقیت کودکان',
            'image' => asset('theme/assets/images/section2 image1.png'),
        ],
        [
            'title' => 'خانواده کودکان',
            'image' => asset('theme/assets/images/section2 image2.png'),
        ],
        [
            'title' => 'اختلالات یادگیری',
            'image' => asset('theme/assets/images/section2 image3.png'),
        ],
        [
            'title' => 'پزشک کودکان',
            'image' => asset('theme/assets/images/section2 image4.png'),
        ],
    ];

    $faqs = [
        [
            'q' => 'آیا این دوره پیش‌نیاز دارد؟',
            'a' => 'خیر، بیشتر دوره‌ها به‌گونه‌ای طراحی شده‌اند که والدین و مربیان بدون پیش‌نیاز تخصصی هم بتوانند از آن‌ها استفاده کنند.'
        ],
        [
            'q' => 'محتوا برای چه رده سنی مناسب است؟',
            'a' => 'محتواها برای گروه‌های سنی مختلف دسته‌بندی شده‌اند و شما می‌توانید متناسب با سن کودک، بخش مناسب را انتخاب کنید.'
        ],
        [
            'q' => 'آیا امکان مشاوره با متخصص وجود دارد؟',
            'a' => 'بله، در بخش پزشکان و متخصصان می‌توانید افراد مناسب را پیدا کرده و برای دریافت مشاوره اقدام کنید.'
        ],
        [
            'q' => 'آیا مقالات سایت به‌روز می‌شوند؟',
            'a' => 'بله، مقالات و راهنماها به‌صورت مداوم به‌روزرسانی می‌شوند تا اطلاعات کاربردی و جدید در اختیار شما قرار گیرد.'
        ],
    ];

    $places = [
        ['title' => 'شهر بازی پارک ارم', 'city' => 'تهران', 'image' => asset('theme/assets/images/park.png')],
        ['title' => 'باغ کتاب کودکان', 'city' => 'تهران', 'image' => asset('theme/assets/images/park.png')],
        ['title' => 'پارک ژوراسیک', 'city' => 'تهران', 'image' => asset('theme/assets/images/park.png')],
        ['title' => 'خانه بازی رنگین‌کمان', 'city' => 'کرج', 'image' => asset('theme/assets/images/park.png')],
        ['title' => 'دهکده بازی کودک', 'city' => 'اصفهان', 'image' => asset('theme/assets/images/park.png')],
    ];
@endphp

<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>صفحه اصلی</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
        :root{
            --primary:#AC3DEB;
            --primary-dark:#612385;
            --primary-soft:#F7E8FF;
            --text-dark:#39342F;
            --text-muted:#7B7680;
            --bg-soft:#FCF8FF;
            --white:#ffffff;
            --radius-xl:32px;
            --radius-lg:24px;
            --shadow-soft:0 20px 60px rgba(172, 61, 235, 0.12);
            --shadow-card:0 16px 40px rgba(17, 12, 46, 0.08);
        }

        body{
            font-family: Yekan, IRANSans, Vazirmatn, sans-serif;
            background: #fff;
            color: var(--text-dark);
            overflow-x: hidden;
        }

        a{
            text-decoration: none;
        }

        .section-space{
            padding: 90px 0;
        }

        .section-title{
            margin-bottom: 1rem;
        }

        .section-title .badge-title{
            background: var(--primary-soft);
            color: var(--primary);
            border-radius: 999px;
            padding: .6rem 1rem;
            font-size: .875rem;
            display: inline-flex;
            align-items: center;
            gap: .5rem;
            margin-bottom: 1rem;
        }

        .section-title h2{
            font-size: clamp(1.6rem, 2vw, 2.3rem);
            font-weight: 800;
            margin-bottom: .75rem;
        }

        .section-title p{
            color: var(--text-muted);
            margin-bottom: 0;
            line-height: 2;
        }

        .hero-section{
            padding-top: 40px;
            padding-bottom: 70px;
        }

        .hero-box{
            position: relative;
            border-radius: 40px;
            overflow: hidden;
            background: linear-gradient(135deg, #c85cfb 0%, #8d32c4 40%, #612385 100%);
            box-shadow: var(--shadow-soft);
        }

        .hero-overlay{
            position: absolute;
            inset: 0;
            background:
                radial-gradient(circle at top right, rgba(255,255,255,.20), transparent 25%),
                radial-gradient(circle at bottom left, rgba(255,255,255,.12), transparent 20%);
        }

        .hero-content{
            position: relative;
            z-index: 2;
            padding: 60px 40px;
        }

        .hero-content h1{
            color: #fff;
            font-weight: 900;
            font-size: clamp(2rem, 4vw, 3.2rem);
            line-height: 1.5;
            margin-bottom: 1rem;
        }

        .hero-content p{
            color: rgba(255,255,255,.92);
            max-width: 560px;
            line-height: 2.1;
            margin-bottom: 1.75rem;
        }

        .hero-badge{
            display: inline-flex;
            align-items: center;
            background: rgba(255,255,255,.16);
            color: #fff;
            border: 1px solid rgba(255,255,255,.18);
            border-radius: 999px;
            padding: .75rem 1rem;
            margin-bottom: 1rem;
            font-size: .92rem;
            font-weight: 600;
            backdrop-filter: blur(4px);
        }

        .hero-actions .btn{
            border-radius: 999px;
            padding: .9rem 1.5rem;
            font-weight: 700;
        }

        .hero-visual{
            position: relative;
            z-index: 2;
            padding: 30px;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100%;
        }

        .hero-image-box{
            width: 100%;
            max-width: 420px;
            background: rgba(255,255,255,.12);
            border: 1px solid rgba(255,255,255,.18);
            backdrop-filter: blur(6px);
            border-radius: 34px;
            padding: 22px;
            box-shadow: 0 25px 60px rgba(0,0,0,.15);
        }

        .hero-image-box img{
            width: 100%;
            border-radius: 28px;
            object-fit: cover;
            display: block;
        }

        .age-section-box{
            margin-top: 28px;
            background: #fff;
            border-radius: 30px;
            padding: 24px;
            box-shadow: var(--shadow-soft);
        }

        .age-grid{
            display: grid;
            grid-template-columns: repeat(4, minmax(0, 1fr));
            gap: 16px;
        }

        .age-chip{
            display: flex;
            align-items: center;
            gap: 12px;
            background: #fff;
            border: 1px solid #f0d7ff;
            border-radius: 22px;
            padding: 14px 16px;
            transition: .25s ease;
            cursor: pointer;
            min-height: 84px;
        }

        .age-chip:hover,
        .age-chip.active{
            background: var(--primary-soft);
            border-color: rgba(172,61,235,.25);
            transform: translateY(-2px);
        }

        .age-icon{
            width: 52px;
            height: 52px;
            border-radius: 18px;
            background: #fde9ff;
            color: var(--primary);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.3rem;
            flex-shrink: 0;
        }

        .age-chip span{
            font-size: .95rem;
            color: #6d6570;
            font-weight: 700;
            line-height: 1.8;
        }

        .topic-card{
            position: relative;
            overflow: hidden;
            border-radius: 120px 120px 24px 24px;
            box-shadow: var(--shadow-soft);
            min-height: 290px;
        }

        .topic-card img{
            width: 100%;
            height: 100%;
            min-height: 290px;
            object-fit: cover;
            display: block;
        }

        .topic-card::after{
            content:'';
            position:absolute;
            inset:0;
            background: linear-gradient(to top, rgba(97,35,133,.9), rgba(172,61,235,.15));
        }

        .topic-content{
            position: absolute;
            right: 0;
            left: 0;
            bottom: 0;
            z-index: 2;
            color: #fff;
            padding: 20px 22px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 12px;
        }

        .topic-content h3{
            font-size: 1rem;
            font-weight: 700;
            margin: 0;
        }

        .floating-icon{
            width: 42px;
            height: 42px;
            border-radius: 14px;
            background: rgba(255,255,255,.18);
            border: 1px solid rgba(255,255,255,.25);
            color: #fff;
            display: inline-flex;
            align-items: center;
            justify-content: center;
        }

        .soft-section{
            background: linear-gradient(180deg, #fff 0%, #fcf7ff 100%);
        }

        .search-box{
            background: #fff;
            border-radius: 999px;
            padding: .5rem;
            border: 1px solid #efe4f7;
            box-shadow: var(--shadow-card);
        }

        .search-box .form-control,
        .search-box .form-select{
            border: none;
            box-shadow: none !important;
            background: transparent;
            min-height: 48px;
        }

        .search-box .input-group-text{
            background: transparent;
            border: none;
            color: var(--primary);
        }

        .doctor-card,
        .blog-card,
        .place-card,
        .product-card{
            border: none;
            border-radius: 28px;
            box-shadow: var(--shadow-card);
            transition: .25s ease;
            overflow: hidden;
            background: #fff;
        }

        .doctor-card:hover,
        .blog-card:hover,
        .place-card:hover,
        .product-card:hover{
            transform: translateY(-6px);
            box-shadow: 0 22px 50px rgba(172, 61, 235, 0.16);
        }

        .doctor-avatar{
            width: 62px;
            height: 62px;
            border-radius: 20px;
            background: linear-gradient(135deg, var(--primary), var(--primary-dark));
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.4rem;
            flex-shrink: 0;
        }

        .rating-badge{
            background: #fff7d6;
            color: #9d6a00;
            border-radius: 999px;
            padding: .35rem .7rem;
            font-size: .85rem;
            font-weight: 700;
            white-space: nowrap;
        }

        .custom-pills{
            gap: .75rem;
            justify-content: center;
            flex-wrap: wrap;
            margin-bottom: 2rem;
        }

        .custom-pills .nav-link{
            border: none;
            border-radius: 999px;
            background: #fde7ff;
            color: #d452e9;
            padding: .85rem 1.3rem;
            font-weight: 700;
        }

        .custom-pills .nav-link.active{
            background: var(--primary);
            color: #fff;
        }

        .blog-thumb{
            width: 100%;
            height: 220px;
            object-fit: cover;
            border-radius: 22px;
        }

        .icon-btn{
            width: 46px;
            height: 46px;
            border-radius: 16px;
            border: none;
            background: #fde7ff;
            color: var(--primary);
            display: inline-flex;
            align-items: center;
            justify-content: center;
            transition: .2s ease;
        }

        .icon-btn:hover{
            background: var(--primary);
            color: #fff;
        }

        .scroll-wrapper{
            position: relative;
        }

        .scroll-track{
            display: flex;
            gap: 1.25rem;
            overflow-x: auto;
            scroll-behavior: smooth;
            padding-bottom: .5rem;
        }

        .scroll-track::-webkit-scrollbar{
            height: 8px;
        }

        .scroll-track::-webkit-scrollbar-thumb{
            background: #ead8f6;
            border-radius: 999px;
        }

        .place-card,
        .product-card{
            min-width: 300px;
            max-width: 300px;
            flex: 0 0 auto;
        }

        .place-img{
            width: 100%;
            height: 210px;
            object-fit: cover;
            border-radius: 120px 120px 26px 26px;
        }

        .place-meta{
            color: var(--text-muted);
            font-size: .92rem;
        }

        .btn-theme{
            background: var(--primary);
            color: #fff;
            border: none;
            border-radius: 999px;
            padding: .85rem 1.3rem;
            font-weight: 700;
        }

        .btn-theme:hover{
            background: var(--primary-dark);
            color: #fff;
        }

        .btn-soft{
            background: #f4e3ff;
            color: var(--primary);
            border: none;
            border-radius: 999px;
            padding: .85rem 1.3rem;
            font-weight: 700;
        }

        .faq-box{
            background: #fff;
            border-radius: 34px;
            padding: 24px;
            box-shadow: var(--shadow-card);
        }

        .accordion-item{
            border: 1px solid #f0dff8 !important;
            border-radius: 20px !important;
            overflow: hidden;
            margin-bottom: 16px;
        }

        .accordion-button{
            font-weight: 700;
            color: var(--text-dark);
            background: #fff;
            box-shadow: none !important;
            padding: 1.2rem 1.25rem;
        }

        .accordion-button:not(.collapsed){
            background: var(--primary-soft);
            color: var(--primary);
        }

        .accordion-body{
            color: var(--text-muted);
            line-height: 2;
            padding-top: 0;
        }

        .question-visual{
            background: linear-gradient(135deg, #f8ecff, #fff);
            border-radius: 34px;
            padding: 24px;
            box-shadow: var(--shadow-card);
            text-align: center;
        }

        .question-visual img{
            max-width: 100%;
            height: auto;
        }

        .products-box{
            background: linear-gradient(135deg, #fff 0%, #fcf7ff 100%);
            border-radius: 40px;
            padding: 36px;
            box-shadow: var(--shadow-card);
        }

        .product-thumb{
            width: 160px;
            height: 160px;
            object-fit: contain;
            margin: 0 auto;
            display: block;
        }

        .old-price{
            text-decoration: line-through;
            color: #9b94a0;
            font-size: .9rem;
        }

        .new-price{
            color: var(--primary);
            font-size: 1.05rem;
            font-weight: 800;
        }

        .add-cart{
            width: 44px;
            height: 44px;
            border-radius: 14px;
            background: #f4e1ff;
            color: var(--primary);
            border: none;
            display: inline-flex;
            align-items: center;
            justify-content: center;
        }

        @media (max-width: 1199.98px){
            .age-grid{
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }
        }

        @media (max-width: 991.98px){
            .section-space{
                padding: 70px 0;
            }

            .hero-content{
                padding: 40px 24px;
                text-align: center;
            }

            .hero-content p{
                margin-inline: auto;
            }

            .hero-actions{
                justify-content: center;
            }

            .hero-visual{
                padding: 0 24px 24px;
            }

            .age-section-box{
                padding: 20px;
            }
        }

        @media (max-width: 767.98px){
            .hero-section{
                padding-top: 24px;
                padding-bottom: 50px;
            }

            .hero-box{
                border-radius: 28px;
            }

            .hero-content{
                padding: 30px 18px 18px;
            }

            .hero-content h1{
                font-size: 1.8rem;
                line-height: 1.8;
            }

            .hero-content p{
                font-size: .95rem;
                line-height: 2;
            }

            .hero-badge{
                font-size: .82rem;
                padding: .65rem .9rem;
            }

            .hero-actions .btn{
                width: 100%;
            }

            .hero-visual{
                padding: 0 18px 18px;
            }

            .hero-image-box{
                padding: 14px;
                border-radius: 24px;
            }

            .hero-image-box img{
                border-radius: 18px;
            }

            .age-section-box{
                margin-top: 20px;
                padding: 16px;
                border-radius: 22px;
            }

            .age-grid{
                grid-template-columns: 1fr;
                gap: 12px;
            }

            .age-chip{
                min-height: auto;
                padding: 12px 14px;
                border-radius: 18px;
            }

            .age-icon{
                width: 44px;
                height: 44px;
                border-radius: 14px;
                font-size: 1.1rem;
            }

            .age-chip span{
                font-size: .9rem;
            }

            .topic-card{
                border-radius: 80px 80px 24px 24px;
                min-height: 220px;
            }

            .topic-card img{
                min-height: 220px;
            }

            .products-box{
                padding: 22px;
            }

            .place-card,
            .product-card{
                min-width: 260px;
                max-width: 260px;
            }
        }
    </style>
</head>
<body>

    @include('theme.partials.header')

    <main>
        <section class="hero-section">
            <div class="container">
                <div class="hero-box">
                    <div class="hero-overlay"></div>

                    <div class="row align-items-center g-0">
                        <div class="col-lg-7">
                            <div class="hero-content">
                                <span class="hero-badge">
                                    <i class="bi bi-stars ms-2"></i>
                                    همراه خانواده‌ها در رشد بهتر کودک
                                </span>

                                <h1>مرجع کامل آموزش، رشد، سرگرمی و محصولات کودک</h1>

                                <p>
                                    در این صفحه می‌توانید متناسب با سن کودک، مقالات آموزشی، پزشکان و متخصصان،
                                    مکان‌های تفریحی و محصولات کاربردی را به‌صورت دسته‌بندی‌شده مشاهده کنید.
                                </p>

                                <div class="hero-actions d-flex flex-wrap gap-3">
                                    <a href="#blogs" class="btn btn-light">مشاهده مقالات</a>
                                    <a href="#products" class="btn btn-outline-light">محصولات پیشنهادی</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-5">
                            <div class="hero-visual">
                                <div class="hero-image-box">
                                    <img src="{{ asset('theme/assets/images/section2 image1.png') }}" alt="کودک">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="age-section-box">
                    <div class="d-flex align-items-center justify-content-between flex-wrap gap-3 mb-4">
                        <div>
                            <h5 class="mb-1 fw-bold">دسته‌بندی سنی</h5>
                            <p class="mb-0 text-secondary">سن کودک را انتخاب کنید تا محتواها هدفمندتر نمایش داده شوند.</p>
                        </div>

                        <span class="text-secondary small">
                            <i class="bi bi-grid-3x3-gap-fill ms-1"></i>
                            8 گروه سنی
                        </span>
                    </div>

                    <div class="age-grid">
                        @forelse($ageGroups as $age)
                            <div class="age-chip {{ $loop->first ? 'active' : '' }}">
                                <div class="age-icon">
                                    <i class="bi bi-balloon-heart"></i>
                                </div>
                                <span>{{ $age }}</span>
                            </div>
                        @empty
                            <p class="text-muted text-center mb-0">گروه سنی ثبت نشده است.</p>
                        @endforelse
                    </div>
                </div>
            </div>
        </section>

        <section class="section-space pt-0">
            <div class="container">
                <div class="row g-4">
                    @foreach($topics as $topic)
                        <div class="col-6 col-lg-3">
                            <a href="#" class="topic-card d-block">
                                <img src="{{ $topic['image'] }}" alt="{{ $topic['title'] }}">
                                <div class="topic-content">
                                    <h3>{{ $topic['title'] }}</h3>
                                    <span class="floating-icon">
                                        <i class="bi bi-arrow-left"></i>
                                    </span>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <section class="section-space soft-section">
            <div class="container">
                <div class="row align-items-end justify-content-between g-4 mb-4">
                    <div class="col-lg-5">
                        <div class="section-title">
                            <span class="badge-title">
                                <i class="bi bi-heart-pulse-fill"></i>
                                برترین پزشکان
                            </span>
                            <h2>متخصص مناسب کودک خود را سریع‌تر پیدا کنید</h2>
                            <p>جستجو بر اساس نام، تخصص یا حوزه فعالیت برای دسترسی راحت‌تر به پزشکان و متخصصان کودک.</p>
                        </div>
                    </div>

                    <div class="col-lg-7">
                        <div class="search-box">
                            <div class="row g-2 align-items-center">
                                <div class="col-md-4">
                                    <select class="form-select">
                                        <option>انتخاب شهر</option>
                                        <option>تهران</option>
                                        <option>کرج</option>
                                        <option>اصفهان</option>
                                    </select>
                                </div>
                                <div class="col-md-5">
                                    <div class="input-group">
                                        <span class="input-group-text">
                                            <i class="bi bi-search"></i>
                                        </span>
                                        <input type="text" id="doctorSearch" class="form-control" placeholder="نام پزشک، تخصص و ...">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <select class="form-select">
                                        <option>پزشک کودکان</option>
                                        <option>روانشناس کودک</option>
                                        <option>کاردرمانگر</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row g-4" id="doctorList">
                    @forelse($landingDoctors as $doctor)
                        <div class="col-sm-6 col-xl-3 doctor-item">
                            <a href="{{ route('theme.single-docter', $doctor->slug) }}" class="doctor-card p-3 h-100 d-block">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="doctor-avatar">
                                        <i class="bi bi-person-fill"></i>
                                    </div>

                                    <div class="flex-grow-1">
                                        <h6 class="mb-1 fw-bold doctor-name">{{ $doctor->name }}</h6>
                                        <div class="text-secondary small doctor-specialty">{{ $doctor->specialty }}</div>
                                    </div>

                                    <span class="rating-badge">
                                        <i class="bi bi-star-fill ms-1"></i>
                                        {{ number_format((float) ($doctor->rating ?? 4.5), 1) }}
                                    </span>
                                </div>
                            </a>
                        </div>
                    @empty
                        <p class="text-muted text-center">پزشکی ثبت نشده است.</p>
                    @endforelse
                </div>
            </div>
        </section>

        <section class="section-space" id="blogs">
            <div class="container">
                <div class="section-title text-center mb-5">
                    <span class="badge-title justify-content-center">
                        <i class="bi bi-journal-richtext"></i>
                        مقالات وبسایت
                    </span>
                    <h2>مطالب آموزشی و کاربردی برای والدین و کودکان</h2>
                    <p>دسته‌بندی‌های زیر به‌صورت داینامیک از پنل مدیریت خوانده می‌شوند.</p>
                </div>

                <ul class="nav nav-pills custom-pills" id="blogTab" role="tablist">
                    @forelse($landingArticleCategories as $category)
                        <li class="nav-item" role="presentation">
                            <button class="nav-link {{ $loop->first ? 'active' : '' }}" id="cat-{{ $category->slug }}-tab" data-bs-toggle="pill" data-bs-target="#cat-{{ $category->slug }}" type="button" role="tab">
                                {{ $category->name }}
                            </button>
                        </li>
                    @empty
                        <li class="text-muted">دسته‌بندی مقاله‌ای ثبت نشده است.</li>
                    @endforelse
                </ul>

                <div class="tab-content">
                    @forelse($landingArticleCategories as $category)
                        @php
                            $items = $landingArticles->filter(function ($article) use ($category) {
                                if (!$article->category) {
                                    return false;
                                }
                                return $article->category->id === $category->id || $article->category->parent_id === $category->id;
                            })->take(3);
                        @endphp

                        <div class="tab-pane fade {{ $loop->first ? 'show active' : '' }}" id="cat-{{ $category->slug }}" role="tabpanel">
                            <div class="row g-4">
                                @forelse($items as $blog)
                                    <div class="col-md-6 col-xl-4">
                                        <div class="blog-card p-3 h-100">
                                            <img src="{{ $blog->image_path ? asset('storage/'.$blog->image_path) : asset('theme/assets/images/blog-card.png') }}" class="blog-thumb mb-4" alt="{{ $blog->title }}">
                                            <h5 class="fw-bold mb-3">{{ $blog->title }}</h5>
                                            <div class="d-flex align-items-end justify-content-between gap-3">
                                                <p class="text-secondary mb-0 lh-lg">{{ $blog->excerpt ?: \Illuminate\Support\Str::limit(strip_tags($blog->content), 90) }}</p>
                                                <a href="{{ route('theme.single-blog', $blog->slug) }}" class="icon-btn flex-shrink-0">
                                                    <i class="bi bi-arrow-left"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                @empty
                                    <p class="text-muted">در این دسته هنوز مقاله‌ای وجود ندارد.</p>
                                @endforelse
                            </div>
                        </div>
                    @empty
                        <p class="text-muted text-center">دسته‌بندی مقاله‌ای ثبت نشده است.</p>
                    @endforelse
                </div>
            </div>
        </section>

        <section class="section-space soft-section">
            <div class="container">
                <div class="row align-items-end justify-content-between g-4 mb-4">
                    <div class="col-lg-5">
                        <div class="section-title">
                            <span class="badge-title">
                                <i class="bi bi-emoji-smile-fill"></i>
                                تفریح کودکان
                            </span>
                            <h2>مکان‌های مناسب کودک را پیدا کنید</h2>
                            <p>جستجو و بررسی مکان‌های تفریحی، بازی و سرگرمی مناسب برای کودکان در شهرهای مختلف.</p>
                        </div>
                    </div>

                    <div class="col-lg-7">
                        <div class="d-flex flex-column flex-md-row gap-3 align-items-stretch">
                            <div class="search-box flex-grow-1">
                                <div class="row g-2 align-items-center">
                                    <div class="col-md-4">
                                        <select class="form-select">
                                            <option>فیلترها</option>
                                            <option>شهر بازی</option>
                                            <option>خانه بازی</option>
                                            <option>پارک</option>
                                        </select>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="input-group">
                                            <span class="input-group-text">
                                                <i class="bi bi-search"></i>
                                            </span>
                                            <input type="text" id="placeSearch" class="form-control" placeholder="جستجو مکان مورد نظر">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="d-flex gap-2">
                                <button class="icon-btn" type="button" onclick="scrollTrack('placesTrack', -340)">
                                    <i class="bi bi-arrow-right"></i>
                                </button>
                                <button class="icon-btn" type="button" onclick="scrollTrack('placesTrack', 340)">
                                    <i class="bi bi-arrow-left"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="scroll-wrapper">
                    <div class="scroll-track" id="placesTrack">
                        @foreach($places as $place)
                            <div class="place-card p-3 js-place-card">
                                <img src="{{ $place['image'] }}" class="place-img mb-3" alt="{{ $place['title'] }}">
                                <div class="d-flex justify-content-between align-items-center mb-3 gap-2">
                                    <h5 class="mb-0 fw-bold js-place-title">{{ $place['title'] }}</h5>
                                    <span class="place-meta js-place-city">
                                        <i class="bi bi-geo-alt-fill ms-1"></i>
                                        {{ $place['city'] }}
                                    </span>
                                </div>

                                <a href="#" class="btn-soft w-100 text-center d-inline-block">بزن بریم!</a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>

        <section class="section-space">
            <div class="container">
                <div class="section-title text-center mb-5">
                    <span class="badge-title justify-content-center">
                        <i class="bi bi-patch-question-fill"></i>
                        سوالات متداول
                    </span>
                    <h2><span class="text-dark">سوالات</span> متداول</h2>
                    <p>پاسخ پرتکرارترین سوالات کاربران را در این بخش مشاهده کنید.</p>
                </div>

                <div class="row g-4 align-items-start">
                    <div class="col-lg-7">
                        <div class="faq-box">
                            <div class="accordion accordion-flush" id="faqAccordion">
                                @foreach($faqs as $faq)
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button {{ $loop->first ? '' : 'collapsed' }}"
                                                    type="button"
                                                    data-bs-toggle="collapse"
                                                    data-bs-target="#faq{{ $loop->index }}">
                                                {{ $faq['q'] }}
                                            </button>
                                        </h2>
                                        <div id="faq{{ $loop->index }}"
                                             class="accordion-collapse collapse {{ $loop->first ? 'show' : '' }}"
                                             data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                {{ $faq['a'] }}
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-5">
                        <div class="question-visual">
                            <img src="{{ asset('theme/assets/images/Group 238045.png') }}" alt="سوالات متداول">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-space pt-0" id="products">
            <div class="container">
                <div class="products-box">
                    <div class="row align-items-start g-4">
                        <div class="col-lg-3">
                            <div class="section-title mb-0">
                                <span class="badge-title"><i class="bi bi-bag-heart-fill"></i> محصولات منتخب</span>
                                <h2>پیشنهادهای ویژه برای کودک</h2>
                                <p class="mb-4">این بخش هم به‌صورت داینامیک از پنل مدیریت محصولات پر می‌شود.</p>
                                <a href="{{ route('theme.products') }}" class="btn-theme d-inline-block">مشاهده همه</a>
                            </div>
                        </div>

                        <div class="col-lg-9">
                            <div class="d-flex justify-content-end gap-2 mb-3">
                                <button class="icon-btn" type="button" onclick="scrollTrack('productsTrack', -340)">
                                    <i class="bi bi-arrow-right"></i>
                                </button>
                                <button class="icon-btn" type="button" onclick="scrollTrack('productsTrack', 340)">
                                    <i class="bi bi-arrow-left"></i>
                                </button>
                            </div>

                            <div class="scroll-track" id="productsTrack">
                                @forelse($landingProducts as $product)
                                    <div class="product-card p-4 d-flex flex-column">
                                        <img src="{{ $product->image_path ? asset('storage/'.$product->image_path) : asset('theme/assets/images/16 1.png') }}" class="product-thumb mb-3" alt="{{ $product->name }}">
                                        <div class="d-flex align-items-center justify-content-between mb-2 gap-2">
                                            <h5 class="mb-0 fw-bold">{{ $product->name }}</h5>
                                            <span class="rating-badge">
                                                <i class="bi bi-star-fill ms-1"></i>
                                                {{ number_format((float) ($product->rating ?? 4.5), 1) }}
                                            </span>
                                        </div>
                                        <p class="text-secondary lh-lg mb-4">{{ $product->short_description ?: \Illuminate\Support\Str::limit(strip_tags($product->description), 80) }}</p>
                                        <div class="d-flex align-items-center justify-content-between gap-3 mt-auto">
                                            <a class="add-cart" href="{{ route('theme.single-product', $product->slug) }}">
                                                <i class="bi bi-bag-plus"></i>
                                            </a>
                                            <div class="text-end">
                                                @if($product->discount_price)
                                                    <div class="old-price">{{ number_format((float) $product->price) }} تومان</div>
                                                    <div class="new-price">{{ number_format((float) $product->discount_price) }} تومان</div>
                                                @else
                                                    <div class="new-price">{{ number_format((float) $product->price) }} تومان</div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                @empty
                                    <p class="text-muted">محصولی ثبت نشده است.</p>
                                @endforelse
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    @include('theme.partials.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        function scrollTrack(trackId, amount) {
            const track = document.getElementById(trackId);
            if (track) {
                track.scrollBy({
                    left: amount,
                    behavior: 'smooth'
                });
            }
        }

        document.querySelectorAll('.age-chip').forEach(chip => {
            chip.addEventListener('click', function () {
                document.querySelectorAll('.age-chip').forEach(item => item.classList.remove('active'));
                this.classList.add('active');
            });
        });

        const doctorSearch = document.getElementById('doctorSearch');
        if (doctorSearch) {
            doctorSearch.addEventListener('input', function () {
                const value = this.value.trim().toLowerCase();
                const items = document.querySelectorAll('.doctor-item');

                items.forEach(item => {
                    const name = item.querySelector('.doctor-name')?.textContent.toLowerCase() || '';
                    const specialty = item.querySelector('.doctor-specialty')?.textContent.toLowerCase() || '';
                    item.style.display = (name.includes(value) || specialty.includes(value)) ? '' : 'none';
                });
            });
        }

        const placeSearch = document.getElementById('placeSearch');
        if (placeSearch) {
            placeSearch.addEventListener('input', function () {
                const value = this.value.trim().toLowerCase();
                const cards = document.querySelectorAll('.js-place-card');

                cards.forEach(card => {
                    const title = card.querySelector('.js-place-title')?.textContent.toLowerCase() || '';
                    const city = card.querySelector('.js-place-city')?.textContent.toLowerCase() || '';

                    card.style.display = (title.includes(value) || city.includes(value)) ? 'block' : 'none';
                });
            });
        }
    </script>
</body>
</html>