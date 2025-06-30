<?php

namespace App\Filament\Widgets;

use App\Models\Reservation;
use Carbon\Carbon;
use Filament\Widgets\ChartWidget;

class ReservationChart extends ChartWidget
{
    protected static ?string $heading = 'Grafik Reservasi';
    protected static ?int $sort = 2;
    
    public ?string $filter = 'week';

    protected function getData(): array
    {
        $filter = $this->filter;

        switch ($filter) {
            case 'today':
                return $this->getTodayData();
            case 'week':
                return $this->getWeekData();
            case 'month':
                return $this->getMonthData();
            case 'year':
                return $this->getYearData();
            default:
                return $this->getWeekData();
        }
    }

    protected function getFilters(): ?array
    {
        return [
            'today' => 'Hari Ini',
            'week' => 'Minggu Ini',
            'month' => 'Bulan Ini',
            'year' => 'Tahun Ini',
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }

    protected function getOptions(): array
    {
        return [
            'responsive' => true,
            'maintainAspectRatio' => false,
            'plugins' => [
                'legend' => [
                    'display' => true,
                    'position' => 'top',
                    'labels' => [
                        'usePointStyle' => true,
                        'padding' => 15,
                        'font' => [
                            'size' => 11,
                        ],
                    ],
                ],
            ],
            'scales' => [
                'y' => [
                    'beginAtZero' => true,
                    'ticks' => [
                        'stepSize' => 1,
                        'font' => [
                            'size' => 10,
                        ],
                    ],
                ],
                'x' => [
                    'ticks' => [
                        'font' => [
                            'size' => 9,
                        ],
                        'maxRotation' => 45,
                        'minRotation' => 0,
                    ],
                ],
            ],
            'elements' => [
                'point' => [
                    'radius' => 2,
                    'hoverRadius' => 4,
                ],
                'line' => [
                    'tension' => 0.4,
                ],
            ],
        ];
    }

    private function getTodayData(): array
    {
        $labels = [];
        $data = [];
        
        for ($hour = 9; $hour <= 18; $hour++) {
            $labels[] = sprintf('%02d:00', $hour);
            $count = Reservation::whereDate('date', Carbon::today())
                ->where('time', sprintf('%02d:00', $hour))
                ->count();
            $data[] = $count;
        }

        return [
            'datasets' => [
                [
                    'label' => 'Reservasi per Jam',
                    'data' => $data,
                    'borderColor' => 'rgb(59, 130, 246)',
                    'backgroundColor' => 'rgba(59, 130, 246, 0.1)',
                    'fill' => true,
                ],
            ],
            'labels' => $labels,
        ];
    }

    private function getWeekData(): array
    {
        $labels = [];
        $data = [];
        
        $startOfWeek = Carbon::now()->startOfWeek();
        
        for ($i = 0; $i < 7; $i++) {
            $date = $startOfWeek->copy()->addDays($i);
            $labels[] = $date->format('D');
            $count = Reservation::whereDate('date', $date)->count();
            $data[] = $count;
        }

        return [
            'datasets' => [
                [
                    'label' => 'Reservasi per Hari',
                    'data' => $data,
                    'borderColor' => 'rgb(16, 185, 129)',
                    'backgroundColor' => 'rgba(16, 185, 129, 0.1)',
                    'fill' => true,
                ],
            ],
            'labels' => $labels,
        ];
    }

    private function getMonthData(): array
    {
        $labels = [];
        $data = [];
        
        $startOfMonth = Carbon::now()->startOfMonth();
        $daysInMonth = Carbon::now()->daysInMonth;
        
        // Show only every 3rd day for mobile readability
        $step = $daysInMonth > 20 ? 3 : 1;
        
        for ($i = 1; $i <= $daysInMonth; $i += $step) {
            $date = $startOfMonth->copy()->addDays($i - 1);
            $labels[] = $date->format('j');
            $count = Reservation::whereDate('date', $date)->count();
            $data[] = $count;
        }

        return [
            'datasets' => [
                [
                    'label' => 'Reservasi per Hari',
                    'data' => $data,
                    'borderColor' => 'rgb(245, 158, 11)',
                    'backgroundColor' => 'rgba(245, 158, 11, 0.1)',
                    'fill' => true,
                ],
            ],
            'labels' => $labels,
        ];
    }

    private function getYearData(): array
    {
        $labels = [];
        $data = [];
        
        for ($i = 0; $i < 12; $i++) {
            $month = Carbon::now()->startOfYear()->addMonths($i);
            $labels[] = $month->format('M');
            $count = Reservation::whereMonth('date', $month->month)
                ->whereYear('date', $month->year)
                ->count();
            $data[] = $count;
        }

        return [
            'datasets' => [
                [
                    'label' => 'Reservasi per Bulan',
                    'data' => $data,
                    'borderColor' => 'rgb(139, 92, 246)',
                    'backgroundColor' => 'rgba(139, 92, 246, 0.1)',
                    'fill' => true,
                ],
            ],
            'labels' => $labels,
        ];
    }
}