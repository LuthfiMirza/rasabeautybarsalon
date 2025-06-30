<?php

namespace App\Filament\Pages;

use Filament\Pages\Dashboard as BaseDashboard;

class Dashboard extends BaseDashboard
{
    protected static ?string $navigationIcon = 'heroicon-o-chart-bar';
    protected static string $view = 'filament.pages.dashboard';
    
    public function getWidgets(): array
    {
        return [
            \App\Filament\Widgets\CustomerAnalyticsOverview::class,
            \App\Filament\Widgets\CustomerInsightsWidget::class,
            \App\Filament\Widgets\ReservationChart::class,
            \App\Filament\Widgets\ServicePopularityChart::class,
            \App\Filament\Widgets\PeakHoursChart::class,
            \App\Filament\Widgets\RecentReservationsWidget::class,
        ];
    }
    
    public function getColumns(): int | string | array
    {
        return [
            'default' => 1,
            'sm' => 1,
            'md' => 2,
            'lg' => 2,
            'xl' => 3,
            '2xl' => 3,
        ];
    }
}