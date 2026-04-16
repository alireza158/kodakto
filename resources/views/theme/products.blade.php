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
    <link rel="stylesheet" href="assets/css/product.css">
    <title>محصولات</title>
</head>
<body>

<div class="background">
    <img src="assets/images/Rectangle 6.png" alt="">
</div>

@include('theme.partials.header')

<main>
    <div class="product-title">
        <h1>محصولات ما</h1>
        <form class="product-filter" method="GET" action="{{ route('theme.products') }}">
            <img src="assets/images/filter.png" alt="">
            <select name="category" onchange="this.form.submit()" style="border:none;background:transparent;color:#fff;outline:none;">
                <option value="">همه دسته‌ها</option>
                @foreach($categories as $item)
                    <option value="{{ $item }}" @selected($category === $item)>{{ $item }}</option>
                @endforeach
            </select>
            <img src="assets/images/Vector 175.png" alt="">
        </form>
    </div>

    <div class="title">
        <p>خانه | <span style="color: #fff;">محصولات</span></p>
    </div>

    <section class="product-container">
        @forelse($products as $product)
            <div class="product-card">
                <a href="{{ route('theme.single-product', $product->slug) }}">
                    <img src="{{ $product->image_path ? asset('storage/'.$product->image_path) : asset('theme/assets/images/16 1.png') }}" alt="{{ $product->name }}">
                </a>
                <div class="product-card-title">
                    <h1>{{ $product->name }}</h1>
                    <span>{{ number_format((float) ($product->rating ?? 4.5), 1) }}</span>
                    <img src="assets/images/Star 5.png" alt="">
                </div>
                <p>{{ $product->short_description ?: \Illuminate\Support\Str::limit(strip_tags($product->description), 80) }}</p>
                <div class="product-price">
                    <a class="add-product" href="{{ route('theme.single-product', $product->slug) }}"><img src="assets/images/bag-add.png" alt=""></a>
                    <div class="price">
                        @if($product->discount_price)
                            <span>{{ number_format((float) $product->price) }} تومان</span>
                            <h1><span style="color: #AC3DEB; text-decoration: none; font-size: 15px;">{{ number_format((float) $product->discount_price) }}</span> تومان</h1>
                        @else
                            <h1>{{ number_format((float) $product->price) }} تومان</h1>
                        @endif
                    </div>
                </div>
            </div>
        @empty
            <p style="grid-column: 1 / -1; text-align:center; color:#fff;">محصولی برای نمایش وجود ندارد.</p>
        @endforelse
    </section>

    <div style="max-width:1200px;margin:20px auto;">{{ $products->links() }}</div>
</main>

<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/main.js"></script>
</body>
</html>
