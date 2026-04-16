<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <base href="{{ asset('theme') }}/">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets/css/all.css">
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/vebinar.css">
    <title>Document</title>
</head>
<body>
    @include('theme.partials.header')

    <main>
        <img class="body-image" src="assets/images/Rectangle 6.png" alt="">
        <h1 class="title">خانه | <span style="color: #858586;">مقالات</span></h1>

        <div class="vebinar-title-container">
            <h1>وبینار ها</h1>
            <div class="search-vebinar">
                <div class="vebinar-filter">
                    <img src="assets/images/menu-line-horizontal 01.png" alt="">
                    <span>فیلترها</span>
                    <img src="assets/images/Vector 175.png" alt="">
                </div>
                <div class="input-vebinar">
                    <img src="assets/images/search 01.svg" alt="">
                    <input type="search" id="search-vebinar-input" placeholder="جستجوی وبینار مورد نطر">
                </div>
            </div>

            <div class="container">
                <div class="owl-vebinar owl-carousel owl-theme">
                    <div class="item vebinar-card">
                        <div class="card-information"></div>
                    </div>
                </div>
            </div>
        </div>

        <section class="vebinar"></section>
    </main>


    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>