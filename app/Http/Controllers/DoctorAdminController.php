<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\View\View;

class DoctorAdminController extends Controller
{
    public function index(): View
    {
        $doctors = Doctor::query()->latest()->paginate(10);

        return view('admin.doctors.index', compact('doctors'));
    }

    public function create(): View
    {
        return view('admin.doctors.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $this->validateRequest($request);
        $validated['slug'] = $this->ensureUniqueSlug(Str::slug($validated['name']));

        if ($request->hasFile('image')) {
            $validated['image_path'] = $request->file('image')->store('doctors', 'public');
        }

        $validated['is_active'] = $request->boolean('is_active');
        unset($validated['image']);

        Doctor::query()->create($validated);

        return redirect()->route('admin.doctors.index')->with('status', 'پروفایل پزشک اضافه شد.');
    }

    public function edit(Doctor $doctor): View
    {
        return view('admin.doctors.edit', compact('doctor'));
    }

    public function update(Request $request, Doctor $doctor): RedirectResponse
    {
        $validated = $this->validateRequest($request);

        if ($doctor->name !== $validated['name']) {
            $validated['slug'] = $this->ensureUniqueSlug(Str::slug($validated['name']), $doctor->id);
        }

        if ($request->hasFile('image')) {
            if ($doctor->image_path) {
                Storage::disk('public')->delete($doctor->image_path);
            }

            $validated['image_path'] = $request->file('image')->store('doctors', 'public');
        }

        $validated['is_active'] = $request->boolean('is_active');
        unset($validated['image']);

        $doctor->update($validated);

        return redirect()->route('admin.doctors.index')->with('status', 'پروفایل پزشک ویرایش شد.');
    }

    public function destroy(Doctor $doctor): RedirectResponse
    {
        if ($doctor->image_path) {
            Storage::disk('public')->delete($doctor->image_path);
        }

        $doctor->delete();

        return redirect()->route('admin.doctors.index')->with('status', 'پروفایل پزشک حذف شد.');
    }

    private function validateRequest(Request $request): array
    {
        return $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'specialty' => ['required', 'string', 'max:255'],
            'city' => ['nullable', 'string', 'max:255'],
            'address' => ['nullable', 'string', 'max:255'],
            'bio' => ['nullable', 'string'],
            'rating' => ['nullable', 'numeric', 'min:0', 'max:5'],
            'successful_appointments' => ['nullable', 'integer', 'min:0'],
            'recommendation_percent' => ['nullable', 'integer', 'min:0', 'max:100'],
            'image' => ['nullable', 'image', 'max:5120'],
        ]);
    }

    private function ensureUniqueSlug(string $slug, ?int $ignoreId = null): string
    {
        $baseSlug = $slug !== '' ? $slug : 'doctor';
        $newSlug = $baseSlug;
        $counter = 2;

        while (Doctor::query()->where('slug', $newSlug)->when($ignoreId, fn ($q) => $q->where('id', '!=', $ignoreId))->exists()) {
            $newSlug = $baseSlug.'-'.$counter;
            $counter++;
        }

        return $newSlug;
    }
}
