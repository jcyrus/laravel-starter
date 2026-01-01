<footer class="bg-white dark:bg-gray-900 border-t border-gray-200 dark:border-gray-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8">

            <!-- Column 1: Branding -->
            <div class="col-span-2 md:col-span-1">
                <div class="flex items-center space-x-2 mb-4">
                    <svg class="w-8 h-8 text-blue-600 dark:text-blue-500" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5" />
                    </svg>
                    <span class="text-lg font-semibold text-gray-900 dark:text-white">
                        Laravel Starter
                    </span>
                </div>
                <p class="text-sm text-gray-600 dark:text-gray-400 mb-4">
                    A production-ready Laravel starter kit with modern best practices.
                </p>
                <!-- Social Links -->
                <div class="flex space-x-4">
                    <a href="https://github.com/jcyrus/laravel-mvp" target="_blank" rel="noopener noreferrer"
                        class="text-gray-400 hover:text-gray-600 dark:hover:text-gray-300 transition-colors">
                        <span class="sr-only">GitHub</span>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd"
                                d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                    <a href="https://twitter.com/CyrusEspiritu" target="_blank" rel="noopener noreferrer"
                        class="text-gray-400 hover:text-gray-600 dark:hover:text-gray-300 transition-colors">
                        <span class="sr-only">Twitter</span>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z" />
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Column 2: Product -->
            <div>
                <h3 class="text-sm font-semibold text-gray-900 dark:text-white mb-4 uppercase tracking-wider">
                    Product
                </h3>
                <ul class="space-y-3">
                    <li>
                        <a href="/#features"
                            class="text-sm text-gray-600 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-400 transition-colors">
                            Features
                        </a>
                    </li>
                    <li>
                        <a href="/about"
                            class="text-sm text-gray-600 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-400 transition-colors">
                            About
                        </a>
                    </li>
                    @auth
                        <li>
                            <a href="{{ route('dashboard') }}"
                                class="text-sm text-gray-600 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-400 transition-colors">
                                Dashboard
                            </a>
                        </li>
                    @endauth
                </ul>
            </div>

            <!-- Column 3: Resources -->
            <div>
                <h3 class="text-sm font-semibold text-gray-900 dark:text-white mb-4 uppercase tracking-wider">
                    Resources
                </h3>
                <ul class="space-y-3">
                    <li>
                        <a href="https://github.com/jcyrus/laravel-mvp" target="_blank" rel="noopener noreferrer"
                            class="text-sm text-gray-600 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-400 transition-colors">
                            GitHub
                        </a>
                    </li>
                    <li>
                        <a href="https://laravel.com/docs" target="_blank" rel="noopener noreferrer"
                            class="text-sm text-gray-600 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-400 transition-colors">
                            Laravel Docs
                        </a>
                    </li>
                    <li>
                        <a href="mailto:support@example.com"
                            class="text-sm text-gray-600 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-400 transition-colors">
                            Support
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Column 4: Legal -->
            <div>
                <h3 class="text-sm font-semibold text-gray-900 dark:text-white mb-4 uppercase tracking-wider">
                    Legal
                </h3>
                <ul class="space-y-3">
                    <li>
                        <a href="{{ route('terms.show') }}"
                            class="text-sm text-gray-600 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-400 transition-colors">
                            Terms of Service
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('policy.show') }}"
                            class="text-sm text-gray-600 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-400 transition-colors">
                            Privacy Policy
                        </a>
                    </li>
                </ul>
            </div>

        </div>

        <!-- Bottom Bar -->
        <div class="mt-12 pt-8 border-t border-gray-200 dark:border-gray-800">
            <div class="flex flex-col md:flex-row justify-between items-center gap-4">
                <p class="text-sm text-gray-500 dark:text-gray-400">
                    &copy; {{ date('Y') }} Laravel Starter Kit. Built with Laravel.
                </p>
                <p class="text-sm text-gray-500 dark:text-gray-400">
                    Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                </p>
            </div>
        </div>
    </div>
</footer>