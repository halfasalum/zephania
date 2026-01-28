<?php

namespace App\Http\Controllers\Management;

use App\Events\UserCreated;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Illuminate\Support\Str;
use App\Mail\WelcomeUserMail;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
    public function index()
    {
        $users = User::latest()->get();
        $activeUsers = $users->where('is_active', true)->count();
        $inactiveUsers = $users->where('is_active', false)->count();

        return view('pages.management.users.index', compact('users', 'activeUsers', 'inactiveUsers'));
    }

    public function create()
    {
        $roles = Role::all();

        return view(
            'pages.management.users.create',
            [
                'roles' => $roles,
            ]
        );
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name'     => 'required|string|max:255',
            'email'    => 'required|email|unique:users,email',
            'roles'    => 'required|array|min:1',
        ]);

        $password = Str::random(8);

        $user = User::create([
            'name'      => $data['name'],
            'email'     => $data['email'],
            'password'  => Hash::make($password),
            'roles'     => $data['roles'],
            'is_active' => true,
        ]);

        // ✅ Send welcome email in background
        event(new UserCreated($user, $password));

        return redirect()
            ->route('users.index')
            ->with([
                'notify' => [
                    'type' => 'success',
                    'message' => 'User created successfully! Welcome email is being sent.'
                ]
            ]);
    }

    public function edit(User $user)
    {
        $roles = Role::all();

        return view('pages.management.users.edit', compact('user', 'roles'));
    }

    public function update(Request $request, User $user)
    {
        $data = $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => [
                'required',
                'email',
                Rule::unique('users')->ignore($user->id),
            ],
            'roles'   => 'required|array|min:1',
        ]);

        $user->update($data);

        return redirect()
            ->route('users.index')
            ->with([
                'notify' => [
                    'type' => 'success',
                    'message' => 'User updated successfully!'
                ]
            ]);
    }

    public function activate(User $user)
    {
        $user->update(['is_active' => true]);

        return back()->with([
            'notify' => [
                'type' => 'success',
                'message' => 'User activated successfully!'
            ]
        ]);
    }

    public function deactivate(User $user)
    {
        if ($user->id === Auth::id()) {
            return back()->withErrors('You cannot deactivate your own account');
        }

        $user->update(['is_active' => false]);

        return back()->with([
            'notify' => [
                'type' => 'success',
                'message' => 'User deactivated successfully!'
            ]
        ]);
    }

    public function destroy(User $user)
    {
        if ($user->id === Auth::id()) {
            return back()->withErrors('You cannot delete your own account');
        }

        $user->delete();

        return back()->with([
            'notify' => [
                'type' => 'success',
                'message' => 'User deleted successfully!'
            ]
        ]);
    }
}
