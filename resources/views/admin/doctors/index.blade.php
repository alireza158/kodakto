@extends('admin.layouts.app', ['title' => 'مدیریت پزشکان'])
@section('content')
<div class="d-flex justify-content-between align-items-center mb-4"><h1 class="h3 mb-0">مدیریت پزشکان</h1><a href="{{ route('admin.doctors.create') }}" class="btn btn-primary">+ افزودن پزشک</a></div>
<div class="card border-0 shadow-sm"><div class="table-responsive"><table class="table table-hover mb-0"><thead class="table-light"><tr><th>پزشک</th><th>تخصص</th><th>شهر</th><th>امتیاز</th><th>عملیات</th></tr></thead><tbody>
@forelse($doctors as $doctor)
<tr><td>{{ $doctor->name }}</td><td>{{ $doctor->specialty }}</td><td>{{ $doctor->city }}</td><td>{{ number_format((float)$doctor->rating,1) }}</td><td class="d-flex gap-2"><a class="btn btn-sm btn-outline-secondary" target="_blank" href="{{ route('theme.single-docter', $doctor->slug) }}">نمایش</a><a class="btn btn-sm btn-outline-primary" href="{{ route('admin.doctors.edit', $doctor) }}">ویرایش</a><form method="POST" action="{{ route('admin.doctors.destroy', $doctor) }}" onsubmit="return confirm('حذف شود؟')">@csrf @method('DELETE')<button class="btn btn-sm btn-outline-danger">حذف</button></form></td></tr>
@empty<tr><td colspan="5" class="text-center py-4">پزشکی ثبت نشده است.</td></tr>@endforelse
</tbody></table></div></div>
<div class="mt-3">{{ $doctors->links() }}</div>
@endsection
