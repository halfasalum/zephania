<?php

namespace App\Http\Controllers\management;

use App\Http\Controllers\Controller;
use App\Models\PageStats;
use Illuminate\Http\Request;

class PageStatsController extends Controller
{
    public function create()
    {
        $stats = PageStats::first(); // only one welcome note expected

        return view(
            'pages.management.stats.create',
            compact('stats')
        );
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'project_done'   => 'required|integer',
            'happy_clients'   => 'required|integer',
            'expert_staff' => 'required|integer',
            'win_awards' => 'required|integer',
        ]);

        $stat = PageStats::first();



        // Create or update single record
        if ($stat) {
            $stat->update($validated);
        } else {
            PageStats::create($validated);
        }

        return back()->with([
            'notify' => [
                'type'    => 'success',
                'message' => 'Page stats saved successfully!',
            ],
        ]);
    }
}
