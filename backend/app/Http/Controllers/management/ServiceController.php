<?php

namespace App\Http\Controllers\management;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\User;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::latest()->get();
        $activeServices = $services->where('is_active', true)->count();
        $inactiveServices = $services->where('is_active', false)->count();

        return view('pages.management.services.index', compact('services', 'activeServices', 'inactiveServices'));
    }

    public function create()
    {
        return view('pages.management.services.create');
    }

    public function store(Request $request)
    {
        // Validate the request
        $validated = $request->validate([
            'header_en'      => 'required|string|max:255',
            'header_sw'      => 'required|string|max:255',
            'sub_header_en'  => 'required|string|max:255',
            'sub_header_sw'  => 'required|string|max:255',
            'description_en' => 'required|string',
            'description_sw' => 'required|string',
            'icon'           => 'required|string|max:255',
            'is_active'      => 'nullable|boolean',
        ]);

        // Create the service
        Service::create([
            'header_en'      => $validated['header_en'],
            'header_sw'      => $validated['header_sw'],
            'sub_header_en'  => $validated['sub_header_en'],
            'sub_header_sw'  => $validated['sub_header_sw'],
            'description_en' => $validated['description_en'],
            'description_sw' => $validated['description_sw'],
            'icon'           => $validated['icon'],
            'is_active'      =>  true
        ]);

        return redirect()->route('services.index')->with([
            'notify' => [
                'type' => 'success',
                'message' => 'Service created successfully!'
            ]
        ]);
    }

    public function edit(Service $service)
    {
        return view('pages.management.services.edit', compact('service'));
    }

    // Update the service
    public function update(Request $request, Service $service)
    {
        $validated = $request->validate([
            'header_en'      => 'required|string|max:255',
            'header_sw'      => 'required|string|max:255',
            'sub_header_en'  => 'required|string|max:255',
            'sub_header_sw'  => 'required|string|max:255',
            'description_en' => 'required|string',
            'description_sw' => 'required|string',
            'icon'           => 'required|string|max:255',
            'is_active'      => 'nullable|boolean',
        ]);

        $service->update([
            'header_en'      => $validated['header_en'],
            'header_sw'      => $validated['header_sw'],
            'sub_header_en'  => $validated['sub_header_en'],
            'sub_header_sw'  => $validated['sub_header_sw'],
            'description_en' => $validated['description_en'],
            'description_sw' => $validated['description_sw'],
            'icon'           => $validated['icon'],
            'is_active'      => $request->has('is_active') ? true : $service->is_active,
        ]);

        return redirect()->route('services.index')->with([
            'notify' => [
                'type' => 'success',
                'message' => 'Service updated successfully!'
            ]
        ]);
    }

    // Activate the service
    public function activate(Service $service)
    {
        $service->update(['is_active' => true]);
        return redirect()->route('services.index')->with([
            'notify' => [
                'type' => 'success',
                'message' => 'Service activated successfully!'
            ]
        ]);
    }

    // Deactivate the service
    public function deactivate(Service $service)
    {
        $service->update(['is_active' => false]);
        return redirect()->route('services.index')->with([
            'notify' => [
                'type' => 'success',
                'message' => 'Service deactivated successfully!'
            ]
        ]);
    }
}
