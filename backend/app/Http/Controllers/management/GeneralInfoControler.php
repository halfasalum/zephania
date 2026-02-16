<?php

namespace App\Http\Controllers\management;

use App\Http\Controllers\Controller;
use App\Models\GeneralInfo;
use Illuminate\Http\Request;

class GeneralInfoControler extends Controller
{
    public function create()
    {
        $general = GeneralInfo::first(); // only one welcome note expected

        return view(
            'pages.management.general.create',
            compact('general')
        );
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'email'   => 'required',
            'phone'   => 'required',
            'working_hours' => 'required',
            'facebook' => 'required',
            'twitter' => 'required',
            'instagram' => 'required',
            'linkedin' => 'required',
            'address' => 'required',
            'bio' => 'required',
        ]);

        $stat = GeneralInfo::first();



        // Create or update single record
        if ($stat) {
            $stat->update($validated);
        } else {
            GeneralInfo::create($validated);
        }

        return back()->with([
            'notify' => [
                'type'    => 'success',
                'message' => 'General info saved successfully!',
            ],
        ]);
    }
}
