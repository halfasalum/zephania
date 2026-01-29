<?php

namespace App\Http\Controllers\Management;

use App\Http\Controllers\Controller;
use App\Models\WelcomeNote;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class WelcomeNoteController extends Controller
{
    public function create()
    {
        $welcomeNote = WelcomeNote::first(); // only one welcome note expected

        return view(
            'pages.management.welcome-note.create',
            compact('welcomeNote')
        );
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title_en'   => 'required|string|max:255',
            'title_sw'   => 'required|string|max:255',
            'content_en' => 'required|string',
            'content_sw' => 'required|string',
            'image'      => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $welcomeNote = WelcomeNote::first();

        // Handle image upload
        if ($request->hasFile('image')) {

            // Delete old image if exists
            if ($welcomeNote && $welcomeNote->image_path) {
                Storage::disk('public')->delete($welcomeNote->image_path);
            }

            // Store new image
            $imagePath = $request->file('image')
                ->store('welcome-notes', 'public');

            // Save path to DB column
            $validated['image_path'] = $imagePath;
        }

        // Remove 'image' key so it doesn't try to save it
        unset($validated['image']);

        // Create or update single record
        if ($welcomeNote) {
            $welcomeNote->update($validated);
        } else {
            WelcomeNote::create($validated);
        }

        return back()->with([
            'notify' => [
                'type'    => 'success',
                'message' => 'Welcome note saved successfully!',
            ],
        ]);
    }

    public function edit(WelcomeNote $welcomeNote)
    {
        return view(
            'pages.management.welcome-note.edit',
            compact('welcomeNote')
        );
    }

    public function update(Request $request, WelcomeNote $welcomeNote)
    {
        $validated = $request->validate([
            'title_en'   => 'required|string|max:255',
            'title_sw'   => 'required|string|max:255',
            'content_en' => 'required|string',
            'content_sw' => 'required|string',
            'image_path' => 'required|string|max:255',
        ]);

        $welcomeNote->update($validated);

        return redirect()
            ->route('welcome-note.edit', $welcomeNote)
            ->with([
                'notify' => [
                    'type'    => 'success',
                    'message' => 'Welcome note updated successfully!',
                ],
            ]);
    }
}
