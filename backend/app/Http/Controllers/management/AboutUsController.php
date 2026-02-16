<?php

namespace App\Http\Controllers\management;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AboutUsController extends Controller
{
    public function create()
    {
        $whyus = AboutUs::first(); // only one welcome note expected

        return view(
            'pages.management.about_us.create',
            compact('whyus')
        );
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'header_en'   => 'required|string|max:255',
            'header_sw'   => 'required|string|max:255',
            'contents_en'   => 'required|string|max:255',
            'contents_sw'   => 'required|string|max:255',
            'item1_header_en'   => 'required|string|max:255',
            'item1_header_sw'   => 'required|string|max:255',
            'item1_subheader_en'   => 'required|string|max:255',
            'item1_subheader_sw'   => 'required|string|max:255',
            'item2_header_en'   => 'required|string|max:255',
            'item2_header_sw'   => 'required|string|max:255',
            'item2_subheader_en'   => 'required|string|max:255',
            'item2_subheader_sw'   => 'required|string|max:255',
            'experience'   => 'required|integer',
            'image_front'      => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'image_back'      => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $whyus = AboutUs::first();

        // Handle image upload
        if ($request->hasFile('image_front')) {

            // Delete old image if exists
            if ($whyus && $whyus->image_front) {
                Storage::disk('public')->delete($whyus->image_front);
            }

            // Store new image
            $image_front = $request->file('image_front')
                ->store('about_us', 'public');

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
                ->store('about_us', 'public');

            // Save path to DB column
            $validated['image_back'] = $image_back;
        }

        // Remove 'image' key so it doesn't try to save it
        unset($validated['image']);

        // Create or update single record
        if ($whyus) {
            $whyus->update($validated);
        } else {
            AboutUs::create($validated);
        }

        return back()->with([
            'notify' => [
                'type'    => 'success',
                'message' => 'Why Us saved successfully!',
            ],
        ]);
    }
}
