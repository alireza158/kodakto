<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $product->name }}</title>
    <base href="{{ asset('theme') }}/">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/header.css">
</head>
<body style="background:#f7f8fc;">
@include('theme.partials.header')

<main class="py-5">
    <div class="container">
        <div class="mb-3 text-muted">
            <a href="{{ route('theme.landing') }}">خانه</a> /
            <a href="{{ route('theme.products') }}">محصولات</a> /
            <span>{{ $product->name }}</span>
        </div>

        <div class="row g-4">
            <div class="col-lg-6">
                <div class="card border-0 shadow-sm">
                    <div class="card-body text-center">
                        <img src="{{ $product->image_path ? asset('storage/'.$product->image_path) : asset('theme/assets/images/16 1.png') }}" alt="{{ $product->name }}" class="img-fluid" style="max-height:420px;object-fit:contain;">
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body d-flex flex-column">
                        @if($product->category)
                            <span class="badge text-bg-primary align-self-start mb-3">{{ $product->category }}</span>
                        @endif
                        <h1 class="h3 mb-3">{{ $product->name }}</h1>
                        <p class="text-secondary">{{ $product->short_description }}</p>
                        <div class="mb-4">امتیاز: <strong>{{ number_format((float) ($product->rating ?? 4.5), 1) }}</strong> / 5</div>

                        <div class="bg-light rounded p-3 mb-4">
                            @if($product->discount_price)
                                <div class="text-muted text-decoration-line-through">{{ number_format((float) $product->price) }} تومان</div>
                                <div class="h3 text-success mb-0">{{ number_format((float) $product->discount_price) }} تومان</div>
                            @else
                                <div class="h3 text-success mb-0">{{ number_format((float) $product->price) }} تومان</div>
                            @endif
                        </div>

                        <div class="mt-auto">
                            <button class="btn btn-primary w-100" type="button">افزودن به سبد خرید</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card border-0 shadow-sm mt-4">
            <div class="card-body">
                <h2 class="h5 mb-3">توضیحات کامل</h2>
                <div class="text-secondary" style="line-height:2;">{!! nl2br(e($product->description ?: $product->short_description)) !!}</div>
            </div>
        </div>

        <section class="mt-5">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h2 class="h5 mb-0">محصولات مرتبط</h2>
                <a href="{{ route('theme.products') }}">مشاهده همه</a>
            </div>
            <div class="row g-3">
                @forelse($relatedProducts as $item)
                    <div class="col-md-6 col-lg-3">
                        <a href="{{ route('theme.single-product', $item->slug) }}" class="card border-0 shadow-sm h-100 text-decoration-none">
                            <img src="{{ $item->image_path ? asset('storage/'.$item->image_path) : asset('theme/assets/images/16 1.png') }}" alt="{{ $item->name }}" class="card-img-top p-3" style="height:180px;object-fit:contain;">
                            <div class="card-body">
                                <h3 class="h6 text-dark">{{ $item->name }}</h3>
                                <p class="small text-secondary mb-1">{{ \Illuminate\Support\Str::limit($item->short_description, 45) }}</p>
                                <strong class="text-success">{{ number_format((float) ($item->discount_price ?: $item->price)) }} تومان</strong>
                            </div>
                        </a>
                    </div>
                @empty
                    <p>محصول مرتبطی وجود ندارد.</p>
                @endforelse
            </div>
        </section>
    </div>
</main>

@include('theme.partials.footer')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
