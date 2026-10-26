<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the testimonials.
     */
    public function index()
    {
        $testimonials = Testimonial::latest()->paginate(10);
        return view('admin.testimonials.index', compact('testimonials'));
    }

    /**
     * Show the form for creating a new testimonial.
     */
    public function create()
    {
        return view('admin.testimonials.create');
    }

    /**
     * Store a newly created testimonial in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'position' => 'nullable|string|max:255',
            'company' => 'nullable|string|max:255',
            'message' => 'required|string',
            'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'rating' => 'nullable|integer|min:1|max:5',
        ]);

        if ($request->hasFile('avatar')) {
            $validated['avatar'] = $request->file('avatar')->store('testimonials', 'public');
        }

        Testimonial::create($validated);

        return redirect()->route('admin.testimonials.index')
            ->with('success', 'Testimonial berhasil ditambahkan.');
    }

    /**
     * Show the form for editing the specified testimonial.
     */
    public function edit(Testimonial $testimonial)
    {
        return view('admin.testimonials.edit', compact('testimonial'));
    }

    /**
     * Update the specified testimonial in storage.
     */
    public function update(Request $request, Testimonial $testimonial)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'position' => 'nullable|string|max:255',
            'company' => 'nullable|string|max:255',
            'message' => 'required|string',
            'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'rating' => 'nullable|integer|min:1|max:5',
        ]);

        if ($request->hasFile('avatar')) {
            $validated['avatar'] = $request->file('avatar')->store('testimonials', 'public');
        }

        $testimonial->update($validated);

        return redirect()->route('admin.testimonials.index')
            ->with('success', 'Testimonial berhasil diperbarui.');
    }

    /**
     * Remove the specified testimonial from storage.
     */
    public function destroy(Testimonial $testimonial)
    {
        $testimonial->delete();

        return redirect()->route('admin.testimonials.index')
            ->with('success', 'Testimonial berhasil dihapus.');
    }
}
