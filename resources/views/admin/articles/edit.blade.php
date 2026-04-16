<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ویرایش مقاله</title>
</head>
<body style="font-family:sans-serif;background:#f7f7f9;padding:20px;">
    <h1>ویرایش مقاله</h1>

    @if ($errors->any())
        <ul style="background:#ffe4e4;color:#8a1111;padding:12px;border-radius:6px;">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('admin.articles.update', $article) }}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @include('admin.articles._form', ['article' => $article])
    </form>

    <p><a href="{{ route('admin.articles.index') }}">بازگشت به لیست</a></p>
</body>
</html>
