<?php

namespace App\Http\Controllers\Management;
use App\Http\Controllers\Controller;

use App\Models\Menu;
use Illuminate\Http\Request;


class MenuController extends Controller
{
    public function index()
    {
        $menus = Menu::where('status', '!=', 'deleted')->get();
        $activeMenus = $menus->where('status', 'active')->count();
        $inactiveMenus = $menus->where('status', 'inactive')->count();
        return view('pages.management.menus.index', compact('menus', 'activeMenus', 'inactiveMenus'));
    }

    public function create()
    {
        return view('pages.management.menus.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name_en' => 'required|string|max:255',
            'name_sw' => 'required|string|max:255',
            'menu_path' => 'nullable|string|max:255',
            'has_submenu' => 'nullable|boolean',
            'status' => 'in:active,inactive'
        ]);

        Menu::create($validated);

        return redirect()->route('menus.index')->with([
                'notify' => [
                    'type' => 'success',
                    'message' => 'Menu created successfully!'
                ]
            ]);
    }

    public function edit(Menu $menu)
    {
        return view('pages.management.menus.edit', compact('menu'));
    }

    public function update(Request $request, Menu $menu)
    {
        $validated = $request->validate([
            'name_en' => 'required|string|max:255',
            'name_sw' => 'required|string|max:255',
            'menu_path' => 'nullable|string|max:255',
            'has_submenu' => 'boolean',
            'status' => 'in:active,inactive,deleted'
        ]);

        $menu->update($validated);

        return redirect()->route('menus.index')->with([
            'notify' => [
                'type' => 'success',
                'message' => 'Menu updated successfully!'
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
