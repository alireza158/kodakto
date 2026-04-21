<?php

namespace App\Http\Controllers;

use App\Models\Webinar;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\View\View;

class WebinarAdminController extends Controller
{
    public function index(): View
    {
        $webinars = Webinar::query()->latest('starts_at')->latest('id')->paginate(10);

        return view('admin.webinars.index', compact('webinars'));
    }

    public function create(): View
    {
        return view('admin.webinars.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $this->validateRequest($request);
        $validated['slug'] = $this->ensureUniqueSlug(Str::slug($validated['title']));
        $validated['is_active'] = $request->boolean('is_active');

        if ($request->hasFile('image')) {
            $validated['image_path'] = $request->file('image')->store('webinars', 'public');
        }

        unset($validated['image']);

        Webinar::query()->create($validated);

        return redirect()->route('admin.webinars.index')->with('status', 'وبینار با موفقیت اضافه شد.');
    }

    public function edit(Webinar $webinar): View
    {
        return view('admin.webinars.edit', compact('webinar'));
    }

    public function update(Request $request, Webinar $webinar): RedirectResponse
    {
        $validated = $this->validateRequest($request);

        if ($webinar->title !== $validated['title']) {
            $validated['slug'] = $this->ensureUniqueSlug(Str::slug($validated['title']), $webinar->id);
        }

        if ($request->hasFile('image')) {
            if ($webinar->image_path) {
                Storage::disk('public')->delete($webinar->image_path);
            }

            $validated['image_path'] = $request->file('image')->store('webinars', 'public');
        }

        $validated['is_active'] = $request->boolean('is_active');
        unset($validated['image']);

        $webinar->update($validated);

        return redirect()->route('admin.webinars.index')->with('status', 'وبینار با موفقیت ویرایش شد.');
    }

    public function destroy(Webinar $webinar): RedirectResponse
    {
        if ($webinar->image_path) {
            Storage::disk('public')->delete($webinar->image_path);
        }

        $webinar->delete();

        return redirect()->route('admin.webinars.index')->with('status', 'وبینار حذف شد.');
    }

    private function validateRequest(Request $request): array
    {
        return $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'description' => ['nullable', 'string'],
            'starts_at' => ['nullable', 'date'],
            'duration_minutes' => ['nullable', 'integer', 'min:1', 'max:1440'],
            'watch_url' => ['nullable', 'url', 'max:2048'],
            'image' => ['nullable', 'image', 'max:5120'],
        ]);
    }

    private function ensureUniqueSlug(string $slug, ?int $ignoreId = null): string
    {
        $baseSlug = $slug !== '' ? $slug : 'webinar';
        $newSlug = $baseSlug;
        $counter = 2;

        while (Webinar::query()->where('slug', $newSlug)->when($ignoreId, fn ($q) => $q->where('id', '!=', $ignoreId))->exists()) {
            $newSlug = $baseSlug.'-'.$counter;
            $counter++;
        }

        return $newSlug;
    }
}

