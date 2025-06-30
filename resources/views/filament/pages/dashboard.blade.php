<x-filament-panels::page>
    <div class="space-y-4 sm:space-y-6">
        <!-- Header Section -->
        <div class="bg-gradient-to-r from-pink-500 to-purple-600 rounded-lg p-4 sm:p-6 text-white">
            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between space-y-3 sm:space-y-0">
                <div class="text-center sm:text-left"<h1 class="text-xl sm:text-2xl font-bold">Dashboard Analytics</h1>
                    <p class="text-pink-100 mt-1 text-sm sm:text-base">RasaBeauty Bar - Analitik Pelanggan & Reservasi</p>
                </div>
                <div class="text-center sm:text-right">
                    <div id="dashboard-jakarta-clock" class="jakarta-clock-mini"></div>
                </div>
            </div>
        </div>

        <!-- Quick Stats Cards - Theme Aware -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-3 sm:gap-4">
            <!-- Total Reservasi Card -->
            <div class="bg-white dark:bg-gray-800 rounded-lg p-3 sm:p-4 shadow-sm border border-gray-200 dark:border-gray-700 transition-colors duration-200">
                <div class="flex items-center">
                    <div class="p-2 bg-blue-100 dark:bg-blue-900/30 rounded-lg flex-shrink-0 transition-colors duration-200">
                        <svg class="w-5 h-5 sm:w-6 sm:h-6 text-blue-600 dark:text-blue-400 transition-colors duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <div class="ml-3 sm:ml-4 min-w-0 flex-1">
                        <p class="text-xs sm:text-sm font-medium text-gray-600 dark:text-gray-400 truncate transition-colors duration-200">Total Reservasi</p>
                        <p class="text-lg sm:text-2xl font-semibold text-gray-900 dark:text-gray-100 transition-colors duration-200">{{ \App\Models\Reservation::count() }}</p>
                    </div>
                </div>
            </div>

            <!-- Bulan Ini Card -->
            <div class="bg-white dark:bg-gray-800 rounded-lg p-3 sm:p-4 shadow-sm border border-gray-200 dark:border-gray-700 transition-colors duration-200">
                <div class="flex items-center">
                    <div class="p-2 bg-green-100 dark:bg-green-900/30 rounded-lg flex-shrink-0 transition-colors duration-200">
                        <svg class="w-5 h-5 sm:w-6 sm:h-6 text-green-600 dark:text-green-400 transition-colors duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1"></path>
                        </svg>
                    </div>
                    <div class="ml-3 sm:ml-4 min-w-0 flex-1">
                        <p class="text-xs sm:text-sm font-medium text-gray-600 dark:text-gray-400 truncate transition-colors duration-200">Bulan Ini</p>
                        <p class="text-lg sm:text-2xl font-semibold text-gray-900 dark:text-gray-100 transition-colors duration-200">{{ \App\Models\Reservation::whereMonth('date', now()->month)->whereYear('date', now()->year)->count() }}</p>
                    </div>
                </div>
            </div>

            <!-- Hari Ini Card -->
            <div class="bg-white dark:bg-gray-800 rounded-lg p-3 sm:p-4 shadow-sm border border-gray-200 dark:border-gray-700 transition-colors duration-200">
                <div class="flex items-center">
                    <div class="p-2 bg-yellow-100 dark:bg-yellow-900/30 rounded-lg flex-shrink-0 transition-colors duration-200">
                        <svg class="w-5 h-5 sm:w-6 sm:h-6 text-yellow-600 dark:text-yellow-400 transition-colors duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                        </svg>
                    </div>
                    <div class="ml-3 sm:ml-4 min-w-0 flex-1">
                        <p class="text-xs sm:text-sm font-medium text-gray-600 dark:text-gray-400 truncate transition-colors duration-200">Hari Ini</p>
                        <p class="text-lg sm:text-2xl font-semibold text-gray-900 dark:text-gray-100 transition-colors duration-200">{{ \App\Models\Reservation::whereDate('date', today())->count() }}</p>
                    </div>
                </div>
            </div>

            <!-- Layanan Populer Card -->
            <div class="bg-white dark:bg-gray-800 rounded-lg p-3 sm:p-4 shadow-sm border border-gray-200 dark:border-gray-700 transition-colors duration-200">
                <div class="flex items-center">
                    <div class="p-2 bg-purple-100 dark:bg-purple-900/30 rounded-lg flex-shrink-0 transition-colors duration-200">
                        <svg class="w-5 h-5 sm:w-6 sm:h-6 text-purple-600 dark:text-purple-400 transition-colors duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                    </div>
                    <div class="ml-3 sm:ml-4 min-w-0 flex-1">
                        <p class="text-xs sm:text-sm font-medium text-gray-600 dark:text-gray-400 truncate transition-colors duration-200">Layanan Populer</p>
                        <p class="text-sm sm:text-lg font-semibold text-gray-900 dark:text-gray-100 truncate transition-colors duration-200">{{ \App\Models\Reservation::select('service')->groupBy('service')->orderByRaw('COUNT(*) DESC')->first()->service ?? 'N/A' }}</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Widgets Section -->
        <div class="space-y-4 sm:space-y-6">
            <x-filament-widgets::widgets
                :widgets="$this->getWidgets()"
                :columns="$this->getColumns()"
            />
        </div>

        <!-- Footer Info -->
        <div class="bg-gray-50 dark:bg-gray-800 rounded-lg p-3 sm:p-4 text-center border border-gray-200 dark:border-gray-700 transition-colors duration-200">
            <p class="text-xs sm:text-sm text-gray-600 dark:text-gray-400 leading-relaxed transition-colors duration-200">
                Dashboard ini menampilkan analitik real-time untuk membantu Anda memahami pola reservasi pelanggan.
                <span class="block sm:inline mt-1 sm:mt-0">Data diperbarui secara otomatis setiap 5 menit.</span>
            </p>
        </div>
    </div>

    <!-- Mobile Responsive Styles with Dark Mode Support -->
    <style>
        /* Mobile-first responsive improvements with theme support */
        @media (max-width: 640px) {
            /* Main container adjustments */
            .fi-main {
                padding: 0.75rem !important;
            }
            
            /* Widget improvements */
            .fi-wi {
                margin-bottom: 1rem !important;
                overflow-x: auto;
            }
            
            /* Stats overview widgets */
            .fi-wi-stats-overview {
                gap: 0.75rem !important;
            }
            
            .fi-wi-stats-overview-stat {
                padding: 0.75rem !important;
                min-height: auto !important;
            }
            
            .fi-wi-stats-overview-stat-value {
                font-size: 1.25rem !important;
                line-height: 1.75rem !important;
                margin-bottom: 0.25rem !important;
            }
            
            .fi-wi-stats-overview-stat-description {
                font-size: 0.75rem !important;
                line-height: 1rem !important;
            }
            
            /* Chart widgets */
            .fi-wi-chart {
                height: 250px !important;
                padding: 0.75rem !important;
            }
            
            .fi-wi-chart-heading {
                font-size: 1rem !important;
                margin-bottom: 0.5rem !important;
            }
            
            /* Chart filter tabs */
            .fi-tabs {
                gap: 0.25rem !important;
                flex-wrap: wrap !important;
            }
            
            .fi-tabs-item {
                padding: 0.375rem 0.5rem !important;
                font-size: 0.75rem !important;
                min-width: auto !important;
            }
            
            /* Table widgets */
            .fi-wi-table {
                overflow-x: auto !important;
            }
            
            .fi-ta-table {
                font-size: 0.75rem !important;
                min-width: 100% !important;
            }
            
            .fi-ta-header-cell,
            .fi-ta-cell {
                padding: 0.5rem 0.25rem !important;
                white-space: nowrap !important;
            }
            
            /* Hide less important columns on mobile */
            .fi-ta-table .fi-ta-cell:nth-child(n+5),
            .fi-ta-table .fi-ta-header-cell:nth-child(n+5) {
                display: none !important;
            }
            
            /* Action buttons */
            .fi-ta-actions {
                gap: 0.25rem !important;
            }
            
            .fi-ta-action {
                padding: 0.25rem !important;
                min-width: 32px !important;
                min-height: 32px !important;
            }
            
            /* Badge improvements */
            .fi-badge {
                font-size: 0.625rem !important;
                padding: 0.125rem 0.375rem !important;
            }
            
            /* Widget headers */
            .fi-wi-header {
                margin-bottom: 0.75rem !important;
            }
            
            .fi-wi-heading {
                font-size: 1rem !important;
                font-weight: 600 !important;
            }
            
            /* Improve touch targets */
            button, 
            .fi-btn,
            .fi-ta-action,
            .fi-tabs-item {
                min-height: 44px !important;
                min-width: 44px !important;
            }
            
            /* Form improvements */
            input,
            select,
            textarea {
                font-size: 16px !important; /* Prevents zoom on iOS */
            }
        }
        
        /* Tablet improvements */
        @media (min-width: 641px) and (max-width: 1024px) {
            .fi-wi-chart {
                height: 300px !important;
            }
            
            .fi-wi-stats-overview-stat {
                padding: 1rem !important;
            }
            
            .fi-ta-table {
                font-size: 0.875rem !important;
            }
            
            .fi-ta-header-cell,
            .fi-ta-cell {
                padding: 0.75rem 0.5rem !important;
            }
        }
        
        /* Landscape mobile optimizations */
        @media (max-width: 896px) and (orientation: landscape) {
            .fi-wi-chart {
                height: 200px !important;
            }
        }
        
        /* Very small screens */
        @media (max-width: 375px) {
            .fi-wi-stats-overview-stat-value {
                font-size: 1.125rem !important;
            }
            
            .fi-wi-chart {
                height: 220px !important;
            }
            
            .fi-ta-table {
                font-size: 0.6875rem !important;
            }
            
            .fi-tabs-item {
                font-size: 0.6875rem !important;
                padding: 0.25rem 0.375rem !important;
            }
        }
        
        /* Dark mode specific improvements */
        .dark .fi-wi-stats-overview-stat {
            background-color: rgb(31 41 55) !important;
            border-color: rgb(55 65 81) !important;
        }

        .dark .fi-wi-chart {
            background-color: rgb(31 41 55) !important;
            border-color: rgb(55 65 81) !important;
        }

        .dark .fi-wi-table {
            background-color: rgb(31 41 55) !important;
            border-color: rgb(55 65 81) !important;
        }
        
        /* Scrollbar improvements */
        .fi-wi-table::-webkit-scrollbar {
            height: 4px;
        }
        
        .fi-wi-table::-webkit-scrollbar-track {
            background: #f1f5f9;
        }
        
        .dark .fi-wi-table::-webkit-scrollbar-track {
            background: #374151;
        }
        
        .fi-wi-table::-webkit-scrollbar-thumb {
            background: #cbd5e1;
            border-radius: 2px;
        }
        
        .dark .fi-wi-table::-webkit-scrollbar-thumb {
            background: #6b7280;
        }
        
        /* Loading states */
        .fi-wi[wire\:loading] {
            opacity: 0.7;
            pointer-events: none;
        }
        
        /* Chart canvas responsiveness */
        .fi-wi-chart canvas {
            max-width: 100% !important;
            height: auto !important;
        }
        
        /* Smooth transitions for theme changes */
        .fi-wi,
        .fi-wi-stats-overview-stat,
        .fi-wi-chart,
        .fi-wi-table {
            transition: background-color 0.2s ease, border-color 0.2s ease, color 0.2s ease !important;
        }
        
        /* Reduce motion for accessibility */
        @media (prefers-reduced-motion: reduce) {
            .fi-wi,
            .fi-wi-stats-overview-stat,
            .fi-wi-chart {
                transition: none !important;
                animation: none !important;
            }
        }
    </style>
</x-filament-panels::page>