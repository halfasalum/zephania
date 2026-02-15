<?php

namespace App\Http\Controllers\management;

use App\Http\Controllers\Controller;
use App\Models\WhyUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class WhyUsController extends Controller
{


    public function create()
    {
        $whyus = WhyUs::first(); // only one welcome note expected

        return view(
            'pages.management.why_us.create',
            compact('whyus')
        );
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'header_en'   => 'required|string|max:255',
            'header_sw'   => 'required|string|max:255',
            'sub_header_en'   => 'required|string|max:255',
            'sub_header_sw'   => 'required|string|max:255',
            'item1_header_en'   => 'required|string|max:255',
            'item1_header_sw'   => 'required|string|max:255',
            'item1_sub_header_en'   => 'required|string|max:255',
            'item1_sub_header_sw'   => 'required|string|max:255',
            'item2_header_en'   => 'required|string|max:255',
            'item2_header_sw'   => 'required|string|max:255',
            'item2_sub_header_en'   => 'required|string|max:255',
            'item2_sub_header_sw'   => 'required|string|max:255',
            'item3_header_en'   => 'required|string|max:255',
            'item3_header_sw'   => 'required|string|max:255',
            'item3_sub_header_en'   => 'required|string|max:255',
            'item3_sub_header_sw'   => 'required|string|max:255',
            'image_front'      => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'image_back'      => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $whyus = WhyUs::first();

        // Handle image upload
        if ($request->hasFile('image_front')) {

            // Delete old image if exists
            if ($whyus && $whyus->image_front) {
                Storage::disk('public')->delete($whyus->image_front);
            }

            // Store new image
            $image_front = $request->file('image_front')
                ->store('why_us', 'public');

            // Save path to DB column
            $validated['image_front'] = $image_front;
        }
        if ($request->hasFile('image_back')) {

            // Delete old image if exists
            if ($whyus && $whyus->image_back) {
                Storage::disk('public')->delete($whyus->image_back);
            }

            // Store new image
            $image_back = $request->file('image_back')
                ->store('why_us', 'public');

            // Save path to DB column
            $validated['image_back'] = $image_back;
        }

        // Remove 'image' key so it doesn't try to save it
        unset($validated['image']);

        // Create or update single record
        if ($whyus) {
            $whyus->update($validated);
        } else {
            WhyUs::create($validated);
        }

        return back()->with([
            'notify' => [
                'type'    => 'success',
                'message' => 'Why Us saved successfully!',
            ],
        ]);
    }

    public function edit(WhyUs $welcomeNote)
    {
        return view(
            'pages.management.welcome-note.edit',
            compact('welcomeNote')
        );
    }

    public function update(Request $request, WhyUs $welcomeNote)
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
