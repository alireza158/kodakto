@extends('admin.layouts.app', ['title' => 'مدیریت وبینارها'])

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3 mb-0">مدیریت وبینارها</h1>
        <a href="{{ route('admin.webinars.create') }}" class="btn btn-primary">+ افزودن وبینار</a>
    </div>

    <div class="card border-0 shadow-sm">
        <div class="table-responsive">
            <table class="table table-hover mb-0">
                <thead class="table-light">
                <tr>
                    <th>عنوان</th>
                    <th>زمان شروع</th>
                    <th>مدت</th>
                    <th>وضعیت</th>
                    <th>عملیات</th>
                </tr>
                </thead>
                <tbody>
                @forelse($webinars as $webinar)
                    <tr>
                        <td>{{ $webinar->title }}</td>
                        <td>{{ $webinar->starts_at_jalali ?? '-' }}</td>
                        <td>{{ $webinar->duration_minutes }} دقیقه</td>
                        <td>
                            <span class="badge {{ $webinar->is_active ? 'bg-success' : 'bg-secondary' }}">{{ $webinar->is_active ? 'فعال' : 'غیرفعال' }}</span>
                        </td>
                        <td class="d-flex gap-2">
                            <a class="btn btn-sm btn-outline-secondary" target="_blank" href="{{ route('theme.single-vebinar', $webinar->slug) }}">نمایش</a>
                            <a class="btn btn-sm btn-outline-primary" href="{{ route('admin.webinars.edit', $webinar) }}">ویرایش</a>
                            <form method="POST" action="{{ route('admin.webinars.destroy', $webinar) }}" onsubmit="return confirm('حذف شود؟')">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-outline-danger">حذف</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center py-4">وبیناری ثبت نشده است.</td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <div class="mt-3">{{ $webinars->links() }}</div>
@endsection
