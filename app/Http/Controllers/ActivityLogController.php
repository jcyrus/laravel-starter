<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\View\View;
use Spatie\Activitylog\Models\Activity;

class ActivityLogController extends Controller
{
    use AuthorizesRequests;

    public function index(): View
    {
        $this->authorize('view activity log');

        $activities = Activity::with('subject', 'causer')
            ->latest()
            ->paginate(20);

        return view('activity-log.index', compact('activities'));
    }
}
