<?php

namespace App\Http\Controllers\management;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::latest()->get();
        $activeNews = $news->where('is_active', true)->count();
        $inactiveNews = $news->where('is_active', false)->count();
        return view('pages.management.news.index', compact('news', 'activeNews', 'inactiveNews'));
    }

    public function create()
    {
        return view('pages.management.news.create');
    }

public function store(Request $request)
    {
        // Validate the input
        $validated = $request->validate([
            'title_en'      => 'required|string|max:255',
            'title_sw'      => 'required|string|max:255',
            'content_en'    => 'required|string',
            'content_sw'    => 'required|string',
            'feature_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'date'          => 'required|date',
        ]);

        $imageName = null;

        // Handle feature image upload
        if ($request->hasFile('feature_image')) {
            $file = $request->file('feature_image');
            $imageName = Str::slug($validated['title_en']) . '-' . time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/news'), $imageName);
        }

        // Create the news record
        News::create([
            'title_en'    => $validated['title_en'],
            'title_sw'    => $validated['title_sw'],
            'content_en'  => $validated['content_en'],
            'content_sw'  => $validated['content_sw'],
            'image'       => $imageName,
            'news_date'   => $validated['date'],
            'is_active'   => true, // default active
        ]);

        return redirect()->route('news.index')->with([
            'notify' => [
                'type' => 'success',
                'message' => 'News created successfully!'
            ]
        ]);
    }

// Show the edit form
    public function edit(News $news)
    {
        return view('pages.management.news.edit', compact('news'));
    }

    // Update news
    public function update(Request $request, News $news)
    {
        // Validate the input
        $validated = $request->validate([
            'title_en'      => 'required|string|max:255',
            'title_sw'      => 'required|string|max:255',
            'content_en'    => 'required|string',
            'content_sw'    => 'required|string',
            'feature_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'date'          => 'required|date',
        ]);

        // Handle feature image upload if exists
        if ($request->hasFile('feature_image')) {
            $file = $request->file('feature_image');
            $imageName = Str::slug($validated['title_en']) . '-' . time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/news'), $imageName);
            $news->image = $imageName;
        }

        // Update the news
        $news->update([
            'title_en'    => $validated['title_en'],
            'title_sw'    => $validated['title_sw'],
            'content_en'  => $validated['content_en'],
            'content_sw'  => $validated['content_sw'],
            'news_date'   => $validated['date'],
        ]);

        return redirect()->route('news.index')->with([
            'notify' => [
                'type' => 'success',
                'message' => 'News updated successfully!'
            ]
        ]);
    }

    // Activate news
    public function activate(News $news)
    {
        $news->update(['is_active' => true]);
        return redirect()->route('news.index')->with([
            'notify' => [
                'type' => 'success',
                'message' => 'News activated successfully!'
            ]
        ]);
    }

    // Deactivate news
    public function deactivate(News $news)
    {
        $news->update(['is_active' => false]);
        return redirect()->route('news.index')->with([
            'notify' => [
                'type' => 'success',
                'message' => 'News deactivated successfully!'
            ]
        ]);
    }
}
