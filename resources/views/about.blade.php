<x-guest-layout>
    <div class="py-12 bg-white dark:bg-gray-900">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">

            <!-- Instructional Banner -->
            <div
                class="bg-blue-50 dark:bg-blue-900/20 border border-blue-200 dark:border-blue-800 rounded-lg p-6 mb-12">
                <div class="flex items-start">
                    <svg class="w-6 h-6 text-blue-600 dark:text-blue-400 mt-0.5 mr-3 flex-shrink-0" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <div>
                        <h3 class="text-lg font-semibold text-blue-900 dark:text-blue-100 mb-2">
                            Customize This Page
                        </h3>
                        <p class="text-blue-800 dark:text-blue-200 text-sm mb-3">
                            This is a placeholder About page. Edit this file to tell your story:
                        </p>
                        <code
                            class="inline-block px-3 py-1.5 bg-blue-100 dark:bg-blue-800 text-blue-800 dark:text-blue-200 rounded text-sm font-mono">
                            resources/views/about.blade.php
                        </code>
                        <p class="text-blue-800 dark:text-blue-200 text-sm mt-3">
                            Replace this content with information about your project, team, or company. Remove this
                            banner when you're done.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Page Header -->
            <div class="text-center mb-16">
                <h1 class="text-4xl sm:text-5xl font-bold text-gray-900 dark:text-white mb-6">
                    About This Starter Kit
                </h1>
                <p class="text-xl text-gray-600 dark:text-gray-300 max-w-2xl mx-auto">
                    A modern, opinionated Laravel boilerplate designed to help you ship production-ready applications
                    faster.
                </p>
            </div>

            <!-- Mission Section -->
            <div class="mb-16">
                <h2 class="text-2xl sm:text-3xl font-bold text-gray-900 dark:text-white mb-4">
                    Our Mission
                </h2>
                <p class="text-lg text-gray-600 dark:text-gray-300 leading-relaxed">
                    We believe that every new Laravel project shouldn't require setting up the same foundational
                    features over and over. This starter kit provides a solid, production-tested foundation so you can
                    focus on building unique features that matter to your users.
                </p>
            </div>

            <!-- Philosophy Section -->
            <div class="mb-16">
                <h2 class="text-2xl sm:text-3xl font-bold text-gray-900 dark:text-white mb-6">
                    Design Philosophy
                </h2>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="bg-gray-50 dark:bg-gray-800 p-6 rounded-xl">
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-3">
                            Opinionated
                        </h3>
                        <p class="text-gray-600 dark:text-gray-400">
                            We've made the tough decisions for you. Best practices are enforced, not optional. This
                            reduces decision fatigue and keeps your codebase consistent.
                        </p>
                    </div>

                    <div class="bg-gray-50 dark:bg-gray-800 p-6 rounded-xl">
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-3">
                            Production-Ready
                        </h3>
                        <p class="text-gray-600 dark:text-gray-400">
                            Every feature is battle-tested and ready for real-world use. Security, performance, and
                            reliability are built in from day one.
                        </p>
                    </div>

                    <div class="bg-gray-50 dark:bg-gray-800 p-6 rounded-xl">
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-3">
                            Type-Safe
                        </h3>
                        <p class="text-gray-600 dark:text-gray-400">
                            Strict types everywhere, PHPStan Level 9 compliance. Catch bugs at development time, not in
                            production. Your IDE will thank you.
                        </p>
                    </div>

                    <div class="bg-gray-50 dark:bg-gray-800 p-6 rounded-xl">
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-3">
                            Well-Tested
                        </h3>
                        <p class="text-gray-600 dark:text-gray-400">
                            Comprehensive test suite with Pest PHP. Architecture tests ensure your code stays clean as
                            your project grows.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Tech Stack Section -->
            <div class="mb-16">
                <h2 class="text-2xl sm:text-3xl font-bold text-gray-900 dark:text-white mb-6">
                    Technology Stack
                </h2>

                <div class="bg-gray-50 dark:bg-gray-800 rounded-xl p-6">
                    <dl class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <dt class="text-sm font-semibold text-gray-900 dark:text-white mb-1">Backend</dt>
                            <dd class="text-gray-600 dark:text-gray-400">Laravel 12, PHP 8.5, PostgreSQL 16</dd>
                        </div>
                        <div>
                            <dt class="text-sm font-semibold text-gray-900 dark:text-white mb-1">Frontend</dt>
                            <dd class="text-gray-600 dark:text-gray-400">Livewire 3, Alpine.js, Tailwind CSS</dd>
                        </div>
                        <div>
                            <dt class="text-sm font-semibold text-gray-900 dark:text-white mb-1">Authentication</dt>
                            <dd class="text-gray-600 dark:text-gray-400">Laravel Fortify, Sanctum, Jetstream</dd>
                        </div>
                        <div>
                            <dt class="text-sm font-semibold text-gray-900 dark:text-white mb-1">UI Components</dt>
                            <dd class="text-gray-600 dark:text-gray-400">Mary UI (prefixed), Jetstream Components</dd>
                        </div>
                        <div>
                            <dt class="text-sm font-semibold text-gray-900 dark:text-white mb-1">Permissions</dt>
                            <dd class="text-gray-600 dark:text-gray-400">Spatie Laravel Permission</dd>
                        </div>
                        <div>
                            <dt class="text-sm font-semibold text-gray-900 dark:text-white mb-1">Activity Logging</dt>
                            <dd class="text-gray-600 dark:text-gray-400">Spatie Laravel Activity Log</dd>
                        </div>
                        <div>
                            <dt class="text-sm font-semibold text-gray-900 dark:text-white mb-1">Testing</dt>
                            <dd class="text-gray-600 dark:text-gray-400">Pest PHP 3, Architecture Tests</dd>
                        </div>
                        <div>
                            <dt class="text-sm font-semibold text-gray-900 dark:text-white mb-1">Code Quality</dt>
                            <dd class="text-gray-600 dark:text-gray-400">PHPStan (Level 9), Laravel Pint</dd>
                        </div>
                    </dl>
                </div>
            </div>

            <!-- Features Included Section -->
            <div class="mb-16">
                <h2 class="text-2xl sm:text-3xl font-bold text-gray-900 dark:text-white mb-6">
                    What's Included
                </h2>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    @php
                        $features = [
                            'Role-Based Access Control (4 roles, 12 permissions)',
                            'Comprehensive activity logging system',
                            'Two-factor authentication (2FA)',
                            'API token management',
                            'User profile management',
                            'Session management',
                            'Dark mode with preference persistence',
                            'Docker configuration for local development',
                            'CI/CD pipeline with GitHub Actions',
                            'Admin panels for users, roles, and activity logs',
                            'Email verification & password reset flows',
                            'Responsive mobile-friendly design',
                        ];
                    @endphp

                    @foreach ($features as $feature)
                        <div class="flex items-start">
                            <svg class="w-5 h-5 text-green-500 mr-3 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span class="text-gray-700 dark:text-gray-300">{{ $feature }}</span>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- Getting Started CTA -->
            <div class="bg-gradient-to-r from-blue-600 to-purple-600 rounded-2xl p-8 sm:p-12 text-center">
                <h2 class="text-2xl sm:text-3xl font-bold text-white mb-4">
                    Ready to Get Started?
                </h2>
                <p class="text-lg text-blue-100 mb-8 max-w-2xl mx-auto">
                    Clone the repository and have a production-ready app running in minutes.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    @guest
                        <a href="{{ route('register') }}"
                            class="inline-flex items-center justify-center px-8 py-3.5 text-base font-medium text-blue-600 bg-white hover:bg-gray-100 rounded-lg shadow-lg transition-all">
                            Create Account
                        </a>
                        <a href="https://github.com/jcyrus/laravel-mvp" target="_blank" rel="noopener noreferrer"
                            class="inline-flex items-center justify-center px-8 py-3.5 text-base font-medium text-white border-2 border-white hover:bg-white/10 rounded-lg transition-all">
                            View on GitHub
                        </a>
                    @else
                        <a href="{{ route('dashboard') }}"
                            class="inline-flex items-center justify-center px-8 py-3.5 text-base font-medium text-blue-600 bg-white hover:bg-gray-100 rounded-lg shadow-lg transition-all">
                            Go to Dashboard
                        </a>
                    @endguest
                </div>
            </div>

        </div>
    </div>
</x-guest-layout>