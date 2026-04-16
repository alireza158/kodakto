<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <base href="{{ asset('theme') }}/">
    <link rel="stylesheet" href="assets/css/all.css">
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/single-blog.css">
    <title>دیر یادگرفتن مطالب توسط کودکان</title>
</head>
<body>
    @include('theme.partials.header')

    <main>
        <h1 class="title">خانه | مقالات | <span>دیر یادگرفتن مطالب توسط کودکان</span></h1>

        <section class="single-blog-container">
            <div class="blog-information">
                <img src="assets/images/Frame 1116606961.png" alt="دیر یادگرفتن مطالب توسط کودکان" class="blog-image">
                <div class="title-one">
                    <h1>دیر یاد گرفتن مطالب توسط کودکان</h1>
                    <div class="time">
                        <div class="date">
                            <img src="assets/images/Calendar Minimalistic.svg" alt="">
                            <span>5 مرداد 1403</span>
                        </div>
                        <div class="clock">
                            <img src="assets/images/Clock.svg" alt="">
                            <span>8 دقیقه</span>
                        </div>
                    </div>
                </div>

                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ...</p>

                <h1 class="title-two">5 دلیل عدم یادگیری کودک شما:</h1>

                <div class="paragraph">
                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ...</p>
                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ...</p>
                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ...</p>
                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ...</p>
                </div>
            </div>

            <aside class="aside">
                <div class="aside-title">
                    <img src="assets/images/book.png" alt="مقالات جدید">
                    <h1>جدیدترین مقالات</h1>
                </div>

                <div class="aside-card">
                    <div class="card-image">
                        <img src="assets/images/blog-card.png" alt="">
                    </div>
                    <div class="card-text">
                        <h1>دیر یادگرفتن مطالب توسط کودکان</h1>
                        <p>لورم اپیسوم متن ساختگی با تولید سادگی نامفهوم...</p>
                    </div>
                </div>

                <div class="aside-card">
                    <div class="card-image">
                        <img src="assets/images/blog-card.png" alt="">
                    </div>
                    <div class="card-text">
                        <h1>دیر یادگرفتن مطالب توسط کودکان</h1>
                        <p>لورم اپیسوم متن ساختگی با تولید سادگی نامفهوم...</p>
                    </div>
                </div>

                <!-- Additional Cards as needed -->
            </aside>
        </section>
    </main>
    @include('theme.partials.footer')

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>