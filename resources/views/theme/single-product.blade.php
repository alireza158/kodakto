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
    <link rel="stylesheet" href="assets/css/single-product.css">
    <title>Document</title>
</head>
<body>
    @include('theme.partials.header')

    <main>
        <div class="title">
            <p>خانه | محصولات | <span style="color: #858586;">شیشه شیر</span></p>
        </div>

        <section class="single-product">
            <div class="product-images"></div>
        </section>
    </main>


    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>