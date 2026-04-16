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
    <link rel="stylesheet" href="assets/css/search-docter.css">
    <title>جستجوی پزشک</title>
</head>
<body>
@include('theme.partials.header')

<main>
    <section class="search-docter-container">
        <form class="filter-container" method="GET" action="{{ route('theme.search-docter') }}">
            <div class="filter-content"><img src="assets/images/filter.svg" alt=""><h1>فیلترها</h1></div>
            <div class="fillter">
                <span>نام یا تخصص:</span>
                <div class="docter-acoordian"><input type="text" name="q" value="{{ $search }}" placeholder="نام پزشک، تخصص، شهر" style="border:none;outline:none;width:100%;background:transparent;"></div>
                <span>تخصص:</span>
                <div class="docter-acoordian"><select name="specialty" style="border:none;outline:none;width:100%;background:transparent;"><option value="">همه تخصص‌ها</option>@foreach($specialties as $item)<option value="{{ $item }}" @selected($specialty===$item)>{{ $item }}</option>@endforeach</select></div>
                <span>شهر:</span>
                <div class="docter-acoordian"><select name="city" style="border:none;outline:none;width:100%;background:transparent;"><option value="">همه شهرها</option>@foreach($cities as $item)<option value="{{ $item }}" @selected($city===$item)>{{ $item }}</option>@endforeach</select></div>
                <button class="search-doc" type="submit" style="border:none;cursor:pointer;">جستجو</button>
            </div>
        </form>

        <div class="docters">
            @forelse($doctors as $doctor)
                <div class="docters-card">
                    <div class="card-head">
                        <img src="{{ $doctor->image_path ? asset('storage/'.$doctor->image_path) : asset('theme/assets/images/doc.png') }}" alt="{{ $doctor->name }}">
                        <div class="group">
                            <div class="text">
                                <div class="name"><h1>{{ $doctor->name }}</h1><span>{{ $doctor->specialty }}</span></div>
                                <div class="rating"><span>{{ number_format((float)$doctor->rating,1) }}</span><img src="assets/images/Star 5.png" alt=""></div>
                            </div>
                            <div class="information">
                                <div class="information-one"><img src="assets/images/Subtract.png" alt=""><span>{{ number_format($doctor->successful_appointments) }} نوبت موفق</span></div>
                                <div class="information-two"><img src="assets/images/like.png" alt=""><span>{{ $doctor->recommendation_percent }}% پیشنهاد کاربران</span></div>
                                <div class="information-three"><img src="assets/images/smile.png" alt=""><span>پزشک فعال</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="card-foot">
                        <div class="address"><img src="assets/images/location Vector.svg" alt=""><span>{{ $doctor->address ?: ($doctor->city ?: 'بدون آدرس') }}</span></div>
                        <a href="{{ route('theme.single-docter', $doctor->slug) }}" class="submit"><span>مشاهده پروفایل</span></a>
                    </div>
                </div>
            @empty
                <p>پزشکی با این فیلتر پیدا نشد.</p>
            @endforelse
            <div style="margin-top:16px;">{{ $doctors->links() }}</div>
        </div>
    </section>
</main>

<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/main.js"></script>
</body>
</html>
