<?php

namespace App\Http\Controllers\management;

use App\Http\Controllers\Controller;
use App\Models\Experts;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ExpertsController extends Controller
{

    public function list()
    {
        $experts = Experts::where('status', 'active')
            ->get();
        return response()->json($experts);
    }
    public function index()
    {
        $experts = Experts::where('status', '!=', 'deleted')->get();
        $activeExperts = $experts->where('status', 'active')->count();
        $inactiveExperts = $experts->where('status', 'inactive')->count();
        return view('pages.management.experts.index', compact('experts', 'activeExperts', 'inactiveExperts'));
    }

    public function create()
    {
        return view('pages.management.experts.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'designation' => 'required|string|max:255',
            'image'      => 'image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $validated['status'] = 'active';
        if ($request->hasFile('image')) {

            // Store new image
            $imagePath = $request->file('image')
                ->store('experts', 'public');

            // Save path to DB column
            $validated['image_path'] = $imagePath;
        }

        // Remove 'image' key so it doesn't try to save it
        unset($validated['image']);
        Experts::create($validated);

        return redirect()->route('experts.index')->with([
            'notify' => [
                'type' => 'success',
                'message' => 'Expert  created successfully!'
            ]
        ]);
    }

    public function edit(Experts $expert)
    {
        return view('pages.management.experts.edit', compact('expert'));
    }

    public function update(Request $request, Experts $expert)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'designation' => 'required|string|max:255',
            'image'      => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);
        if ($request->hasFile('image')) {

            // Delete old image if exists
            if ($expert && $expert->image_path) {
                Storage::disk('public')->delete($expert->image_path);
            }

            // Store new image
            $imagePath = $request->file('image')
                ->store('experts', 'public');

            // Save path to DB column
            $validated['image_path'] = $imagePath;
        }

        $expert->update($validated);

        return redirect()->route('experts.index')->with([
            'notify' => [
                'type' => 'success',
                'message' => 'Expert updated successfully!'
            ]
        ]);
    }

    public function activate(Menu $menu)
    {
        $menu->update(['status' => 'active']);

        return back()->with([
            'notify' => [
                'type' => 'success',
                'message' => 'Menu activated successfully!'
            ]
        ]);
    }

    public function deactivate(Menu $menu)
    {

        $menu->update(['status' => 'inactive']);

        return back()->with([
            'notify' => [
                'type' => 'success',
                'message' => 'Menu deactivated successfully!'
            ]
        ]);
    }
}
