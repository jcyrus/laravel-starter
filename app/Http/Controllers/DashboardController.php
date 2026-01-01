<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\View\View;
use Spatie\Activitylog\Models\Activity;
use Spatie\Permission\Models\Role;

final class DashboardController extends Controller
{
    public function index(): View
    {
        $stats = [
            'total_users' => User::count(),
            'total_roles' => Role::count(),
            'recent_activities' => Activity::where('created_at', '>=', now()->subDays(7))->count(),
            'new_users_this_month' => User::whereMonth('created_at', now()->month)
                ->whereYear('created_at', now()->year)
                ->count(),
        ];

        return view('dashboard', compact('stats'));
    }
}
