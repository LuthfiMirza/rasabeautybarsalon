<?php

namespace App\Filament\Widgets;

use App\Models\Reservation;
use Carbon\Carbon;
use Filament\Widgets\ChartWidget;
use Illuminate\Support\Facades\DB;

class ServicePopularityChart extends ChartWidget
{
    protected static ?string $heading = 'Popularitas Layanan';
    protected static ?int $sort = 3;
    
    public ?string $filter = 'month';

    protected function getData(): array
    {
        $filter = $this->filter;
        
        switch ($filter) {
            case 'today':
                $query = Reservation::whereDate('date', Carbon::today());
                break;
            case 'week':
                $query = Reservation::whereBetween('date', [
                    Carbon::now()->startOfWeek(),
                    Carbon::now()->endOfWeek()
                ]);
                break;
            case 'month':
                $query = Reservation::whereMonth('date', Carbon::now()->month)
                    ->whereYear('date', Carbon::now()->year);
                break;
            case 'year':
                $query = Reservation::whereYear('date', Carbon::now()->year);
                break;
            default:
                $query = Reservation::whereMonth('date', Carbon::now()->month)
                    ->whereYear('date', Carbon::now()->year);
        }

        $serviceData = $query
            ->select('service', DB::raw('count(*) as total'))
            ->groupBy('service')
            ->orderBy('total', 'desc')
            ->get();

        // Truncate service names for mobile display
        $labels = $serviceData->pluck('service')->map(function($service) {
            return strlen($service) > 15 ? substr($service, 0, 15) . '...' : $service;
        })->toArray();
        
        $data = $serviceData->pluck('total')->toArray();

        // Warna yang menarik untuk setiap layanan
        $colors = [
            'rgba(255, 99, 132, 0.8)',   // Pink
            'rgba(54, 162, 235, 0.8)',   // Blue
            'rgba(255, 205, 86, 0.8)',   // Yellow
            'rgba(75, 192, 192, 0.8)',   // Teal
            'rgba(153, 102, 255, 0.8)',  // Purple
            'rgba(255, 159, 64, 0.8)',   // Orange
            'rgba(199, 199, 199, 0.8)',  // Gray
            'rgba(83, 102, 255, 0.8)',   // Indigo
        ];

        return [
            'datasets' => [
                [
                    'label' => 'Jumlah Reservasi',
                    'data' => $data,
                    'backgroundColor' => array_slice($colors, 0, count($data)),
                    'borderColor' => array_map(function($color) {
                        return str_replace('0.8', '1', $color);
                    }, array_slice($colors, 0, count($data))),
                    'borderWidth' => 2,
                ],
            ],
            'labels' => $labels,
        ];
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
        return 'doughnut';
    }

    protected function getOptions(): array
    {
        return [
            'plugins' => [
                'legend' => [
                    'display' => true,
                    'position' => 'bottom',
                    'labels' => [
                        'usePointStyle' => true,
                        'padding' => 8,
                        'font' => [
                            'size' => 10,
                        ],
                    ],
                ],
            ],
            'responsive' => true,
            'maintainAspectRatio' => false,
            'cutout' => '50%',
        ];
    }
}