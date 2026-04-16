<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>پنل ادمین - مقالات</title>
</head>
<body style="font-family:sans-serif;background:#f7f7f9;padding:20px;">
    <h1>پنل مدیریت مقالات</h1>

    @if (session('status'))
        <p style="background:#d6ffe2;color:#074f1f;padding:10px;border-radius:6px;">{{ session('status') }}</p>
    @endif

    @if ($errors->any())
        <ul style="background:#ffe4e4;color:#8a1111;padding:12px;border-radius:6px;">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <p>
        <a href="{{ route('admin.articles.create') }}" style="background:#111827;color:#fff;padding:8px 14px;border-radius:6px;text-decoration:none;">+ افزودن مقاله</a>
    </p>

    <table style="width:100%;border-collapse:collapse;background:#fff;">
        <thead>
        <tr>
            <th style="border:1px solid #ddd;padding:8px;">عنوان</th>
            <th style="border:1px solid #ddd;padding:8px;">موضوع</th>
            <th style="border:1px solid #ddd;padding:8px;">تاریخ انتشار</th>
            <th style="border:1px solid #ddd;padding:8px;">عملیات</th>
        </tr>
        </thead>
        <tbody>
        @forelse ($articles as $article)
            <tr>
                <td style="border:1px solid #ddd;padding:8px;">{{ $article->title }}</td>
                <td style="border:1px solid #ddd;padding:8px;">{{ $article->subject }}</td>
                <td style="border:1px solid #ddd;padding:8px;">{{ optional($article->published_at)->format('Y-m-d H:i') ?? '-' }}</td>
                <td style="border:1px solid #ddd;padding:8px;display:flex;gap:8px;">
                    <a href="{{ route('theme.single-blog', $article->slug) }}" target="_blank">نمایش</a>
                    <a href="{{ route('admin.articles.edit', $article) }}">ویرایش</a>
                    <form action="{{ route('admin.articles.destroy', $article) }}" method="POST" onsubmit="return confirm('مطمئن هستید؟')">
                        @csrf
                        @method('DELETE')
                        <button type="submit">حذف</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="4" style="border:1px solid #ddd;padding:8px;text-align:center;">هنوز مقاله‌ای ثبت نشده است.</td>
            </tr>
        @endforelse
        </tbody>
    </table>

    <div style="margin-top:12px;">{{ $articles->links() }}</div>
</body>
</html>
