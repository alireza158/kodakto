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
    <link rel="stylesheet" href="assets/css/single-docter.css">
    <title>{{ $doctor->name }}</title>
</head>
<body>
@include('theme.partials.header')

<main>
    <section class="single-docter-container">
        <div class="aside">
            <div class="content">
                <div class="docter-information">
                    <img src="{{ $doctor->image_path ? asset('storage/'.$doctor->image_path) : asset('theme/assets/images/doc.png') }}" alt="{{ $doctor->name }}">
                    <div class="doc-text">
                        <div class="doc-name"><h1>{{ $doctor->name }}</h1><p>{{ $doctor->specialty }}</p><span>{{ $doctor->city ?: '---' }}</span></div>
                        <div class="doc-ratting"><span>{{ number_format((float)$doctor->rating,1) }}</span><img src="assets/images/Star 5.png" alt=""></div>
                    </div>
                </div>
                <div class="address"><img src="assets/images/location Vector.svg" alt=""><p>آدرس: {{ $doctor->address ?: 'ثبت نشده' }}</p></div>
                <div class="docter-services">
                    <div class="service-one"><img src="assets/images/Subtract.png" alt=""><p>{{ number_format($doctor->successful_appointments) }} نوبت موفق</p></div>
                    <div class="service-two"><img src="assets/images/like.png" alt=""><p>{{ $doctor->recommendation_percent }}% پیشنهاد کاربران</p></div>
                    <div class="service-three"><img src="assets/images/smile.png" alt=""><p>پزشک فعال</p></div>
                </div>
            </div>
            <div class="submit"><h1>همین الان نوبت بگیر!</h1><div class="sub-btn"><span>رزرو نوبت</span></div></div>
        </div>

        <div class="comments">
            <div class="comment-text"><h1>درباره پزشک</h1><div class="service-two"><img src="assets/images/like.png" alt=""><p>{{ $doctor->recommendation_percent }}% پیشنهاد کاربران</p></div></div>
            <div class="people-comment"><p class="people-text">{{ $doctor->bio ?: 'توضیحاتی برای این پزشک ثبت نشده است.' }}</p></div>
            <div class="comment-text" style="margin-top:16px;"><h1>پزشکان دیگر</h1></div>
            @forelse($otherDoctors as $item)
                <a class="people-comment" href="{{ route('theme.single-docter', $item->slug) }}" style="display:block; text-decoration:none; color:inherit;">
                    <div class="people-information">
                        <div class="user-img"><img src="{{ $item->image_path ? asset('storage/'.$item->image_path) : asset('theme/assets/images/user.png') }}" alt="{{ $item->name }}"></div>
                        <div class="people-name-conatiner"><div class="people-name"><h1>{{ $item->name }}</h1><p>{{ $item->specialty }}</p></div><div class="rating"><img src="assets/images/Star.png" alt=""><span>{{ number_format((float)$item->rating,1) }}</span></div></div>
                    </div>
                </a>
            @empty
                <p>پزشک دیگری وجود ندارد.</p>
            @endforelse
        </div>
    </section>
</main>

<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/main.js"></script>
</body>
</html>
