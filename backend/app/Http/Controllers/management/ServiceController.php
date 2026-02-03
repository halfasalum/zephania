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
        $users = User::latest()->get();
        $activeUsers = $users->where('is_active', true)->count();
        $inactiveUsers = $users->where('is_active', false)->count();

        return view('pages.management.services.index', compact('users', 'activeUsers', 'inactiveUsers'));
    }

    public function create()
    {
        return view('pages.management.services.create');
    }
}
