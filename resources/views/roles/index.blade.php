<x-sidebar-app>
    <x-slot name="header">
        Roles & Permissions
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 lg:p-8 bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-700">
                    <h1 class="text-2xl font-medium text-gray-900 dark:text-white">
                        Roles & Permissions
                    </h1>

                    <p class="mt-2 text-gray-500 dark:text-gray-400 text-sm">
                        Manage roles and their associated permissions.
                    </p>
                </div>

                <div class="bg-gray-200 dark:bg-gray-800 bg-opacity-25">
                    <div class="p-6">
                        @foreach($roles as $role)
                            <div class="mb-6 bg-white dark:bg-gray-900 rounded-lg shadow p-6">
                                <div class="flex items-center justify-between mb-4">
                                    <div>
                                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white capitalize">
                                            {{ $role->name }}
                                        </h3>
                                        <p class="text-sm text-gray-500 dark:text-gray-400">
                                            {{ $role->permissions->count() }} permissions
                                        </p>
                                    </div>
                                </div>

                                <div class="flex flex-wrap gap-2">
                                    @forelse($role->permissions as $permission)
                                        <span class="px-3 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-100 text-blue-800 dark:bg-blue-900 dark:text-blue-200">
                                            {{ $permission->name }}
                                        </span>
                                    @empty
                                        <span class="text-sm text-gray-500 dark:text-gray-400">No permissions assigned</span>
                                    @endforelse
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-sidebar-app>
