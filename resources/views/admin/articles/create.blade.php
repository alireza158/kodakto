<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>افزودن مقاله</title>
</head>
<body style="font-family:sans-serif;background:#f7f7f9;padding:20px;">
    <h1>افزودن مقاله جدید</h1>

    @if ($errors->any())
        <ul style="background:#ffe4e4;color:#8a1111;padding:12px;border-radius:6px;">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('admin.articles.store') }}" method="POST" enctype="multipart/form-data">
        @include('admin.articles._form')
    </form>

    <p><a href="{{ route('admin.articles.index') }}">بازگشت به لیست</a></p>
</body>
</html>
