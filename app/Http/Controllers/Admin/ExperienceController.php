<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Experience;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    /**
     * Display a listing of the experiences.
     */
    public function index()
    {
        $experiences = Experience::orderBy('start_date', 'desc')->paginate(10);
        return view('admin.experiences.index', compact('experiences'));
    }

    /**
     * Show the form for creating a new experience.
     */
    public function create()
    {
        return view('admin.experiences.create');
    }

    /**
     * Store a newly created experience in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'company' => 'required|string|max:255',
            'description' => 'nullable|string',
            'start_date' => 'required|date',
            'end_date' => 'nullable|date|after_or_equal:start_date',
            'is_current' => 'boolean',
        ]);

        $validated['is_current'] = $request->has('is_current');

        Experience::create($validated);

        return redirect()->route('admin.experiences.index')
            ->with('success', 'Experience berhasil ditambahkan.');
    }

    /**
     * Show the form for editing the specified experience.
     */
    public function edit(Experience $experience)
    {
        return view('admin.experiences.edit', compact('experience'));
    }

    /**
     * Update the specified experience in storage.
     */
    public function update(Request $request, Experience $experience)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'company' => 'required|string|max:255',
            'description' => 'nullable|string',
            'start_date' => 'required|date',
            'end_date' => 'nullable|date|after_or_equal:start_date',
            'is_current' => 'boolean',
        ]);

        $validated['is_current'] = $request->has('is_current');

        $experience->update($validated);

        return redirect()->route('admin.experiences.index')
            ->with('success', 'Experience berhasil diperbarui.');
    }

    /**
     * Remove the specified experience from storage.
     */
    public function destroy(Experience $experience)
    {
        $experience->delete();

        return redirect()->route('admin.experiences.index')
            ->with('success', 'Experience berhasil dihapus.');
    }
}
