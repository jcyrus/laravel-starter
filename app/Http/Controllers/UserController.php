<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use Illuminate\View\View;

class UserController extends Controller
{
    use AuthorizesRequests;

    public function index(): View
    {
        $this->authorize('view users');

        $users = User::with('roles')
            ->latest()
            ->paginate(15);

        return view('users.index', compact('users'));
    }
}
