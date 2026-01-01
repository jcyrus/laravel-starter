<x-sidebar-app>
    <x-slot name="header">
        Activity Log
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 lg:p-8 bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-700">
                    <h1 class="text-2xl font-medium text-gray-900 dark:text-white">
                        Activity Log
                    </h1>

                    <p class="mt-2 text-gray-500 dark:text-gray-400 text-sm">
                        Track all system activities and changes.
                    </p>
                </div>

                <div class="bg-gray-200 dark:bg-gray-800 bg-opacity-25">
                    <div class="p-6">
                        <div class="space-y-4">
                            @forelse($activities as $activity)
                                <div class="bg-white dark:bg-gray-900 rounded-lg shadow p-4">
                                    <div class="flex items-start justify-between">
                                        <div class="flex-1">
                                            <div class="flex items-center gap-2">
                                                <span class="px-2 py-1 text-xs font-semibold rounded-full
                                                    @if($activity->description === 'created') bg-green-100 text-green-800 dark:bg-green-900 dark:text-green-200
                                                    @elseif($activity->description === 'updated') bg-blue-100 text-blue-800 dark:bg-blue-900 dark:text-blue-200
                                                    @elseif($activity->description === 'deleted') bg-red-100 text-red-800 dark:bg-red-900 dark:text-red-200
                                                    @else bg-gray-100 text-gray-800 dark:bg-gray-700 dark:text-gray-200
                                                    @endif">
                                                    {{ $activity->description }}
                                                </span>
                                                <span class="text-sm font-medium text-gray-900 dark:text-white">
                                                    {{ class_basename($activity->subject_type ?? 'Unknown') }}
                                                </span>
                                                @if($activity->subject_id)
                                                    <span class="text-sm text-gray-500 dark:text-gray-400">
                                                        #{{ $activity->subject_id }}
                                                    </span>
                                                @endif
                                            </div>

                                            @if($activity->causer)
                                                <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                                                    by <strong>{{ $activity->causer->name }}</strong>
                                                    ({{ $activity->causer->email }})
                                                </p>
                                            @endif

                                            @if($activity->properties && count($activity->properties) > 0)
                                                <div class="mt-3">
                                                    <details class="text-xs">
                                                        <summary class="cursor-pointer text-gray-500 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-300">
                                                            View changes
                                                        </summary>
                                                        <pre class="mt-2 p-3 bg-gray-50 dark:bg-gray-800 rounded overflow-x-auto text-gray-700 dark:text-gray-300">{{ json_encode($activity->properties, JSON_PRETTY_PRINT) }}</pre>
                                                    </details>
                                                </div>
                                            @endif
                                        </div>

                                        <div class="ml-4 flex-shrink-0 text-right">
                                            <p class="text-sm text-gray-500 dark:text-gray-400">
                                                {{ $activity->created_at->format('M d, Y') }}
                                            </p>
                                            <p class="text-xs text-gray-400 dark:text-gray-500">
                                                {{ $activity->created_at->format('H:i:s') }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <div class="bg-white dark:bg-gray-900 rounded-lg shadow p-8 text-center">
                                    <p class="text-gray-500 dark:text-gray-400">No activity recorded yet.</p>
                                </div>
                            @endforelse
                        </div>

                        <div class="mt-6">
                            {{ $activities->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-sidebar-app>
