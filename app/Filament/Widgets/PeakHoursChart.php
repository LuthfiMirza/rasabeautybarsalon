<?php

namespace App\Filament\Widgets;

use App\Models\Reservation;
use Carbon\Carbon;
use Filament\Widgets\ChartWidget;
use Illuminate\Support\Facades\DB;

class PeakHoursChart extends ChartWidget
{
    protected static ?string $heading = 'Jam Sibuk';
    protected static ?int $sort = 5;
    
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

        $hourlyData = $query
            ->select('time', DB::raw('count(*) as total'))
            ->groupBy('time')
            ->orderBy('time')
            ->get();

        // Buat array untuk semua jam operasional
        $allHours = [];
        for ($hour = 9; $hour <= 18; $hour++) {
            $timeString = sprintf('%02d:00', $hour);
            $allHours[$timeString] = 0;
        }

        // Isi data yang ada
        foreach ($hourlyData as $data) {
            if (isset($allHours[$data->time])) {
                $allHours[$data->time] = $data->total;
            }
        }

        $labels = array_keys($allHours);
        $data = array_values($allHours);

        // Format label untuk tampilan mobile yang lebih baik
        $formattedLabels = array_map(function($time) {
            return Carbon::createFromFormat('H:i', $time)->format('H:i');
        }, $labels);

        return [
            'datasets' => [
                [
                    'label' => 'Jumlah Reservasi',
                    'data' => $data,
                    'backgroundColor' => 'rgba(59, 130, 246, 0.6)',
                    'borderColor' => 'rgb(59, 130, 246)',
                    'borderWidth' => 2,
                    'borderRadius' => 4,
                ],
            ],
            'labels' => $formattedLabels,
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
        return 'bar';
    }

    protected function getOptions(): array
    {
        return [
            'plugins' => [
                'legend' => [
                    'display' => false,
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
            'responsive' => true,
            'maintainAspectRatio' => false,
        ];
    }
}