<?php

namespace App\Filament\Widgets;

use App\Models\Reservation;
use Carbon\Carbon;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class CustomerAnalyticsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        // Hari ini
        $todayReservations = Reservation::whereDate('date', Carbon::today())->count();
        $todayRevenue = $this->calculateRevenue(
            Reservation::whereDate('date', Carbon::today())->get()
        );

        // Minggu ini
        $weeklyReservations = Reservation::whereBetween('date', [
            Carbon::now()->startOfWeek(),
            Carbon::now()->endOfWeek()
        ])->count();
        $weeklyRevenue = $this->calculateRevenue(
            Reservation::whereBetween('date', [
                Carbon::now()->startOfWeek(),
                Carbon::now()->endOfWeek()
            ])->get()
        );

        // Bulan ini
        $monthlyReservations = Reservation::whereMonth('date', Carbon::now()->month)
            ->whereYear('date', Carbon::now()->year)
            ->count();
        $monthlyRevenue = $this->calculateRevenue(
            Reservation::whereMonth('date', Carbon::now()->month)
                ->whereYear('date', Carbon::now()->year)
                ->get()
        );

        // Perbandingan dengan periode sebelumnya
        $yesterdayReservations = Reservation::whereDate('date', Carbon::yesterday())->count();
        $lastWeekReservations = Reservation::whereBetween('date', [
            Carbon::now()->subWeek()->startOfWeek(),
            Carbon::now()->subWeek()->endOfWeek()
        ])->count();
        $lastMonthReservations = Reservation::whereMonth('date', Carbon::now()->subMonth()->month)
            ->whereYear('date', Carbon::now()->subMonth()->year)
            ->count();

        return [
            Stat::make('Reservasi Hari Ini', $todayReservations)
                ->description($this->getChangeDescription($todayReservations, $yesterdayReservations, 'kemarin'))
                ->descriptionIcon($this->getChangeIcon($todayReservations, $yesterdayReservations))
                ->color($this->getChangeColor($todayReservations, $yesterdayReservations))
                ->chart($this->getDailyChart()),

            Stat::make('Reservasi Minggu Ini', $weeklyReservations)
                ->description($this->getChangeDescription($weeklyReservations, $lastWeekReservations, 'minggu lalu'))
                ->descriptionIcon($this->getChangeIcon($weeklyReservations, $lastWeekReservations))
                ->color($this->getChangeColor($weeklyReservations, $lastWeekReservations))
                ->chart($this->getWeeklyChart()),

            Stat::make('Reservasi Bulan Ini', $monthlyReservations)
                ->description($this->getChangeDescription($monthlyReservations, $lastMonthReservations, 'bulan lalu'))
                ->descriptionIcon($this->getChangeIcon($monthlyReservations, $lastMonthReservations))
                ->color($this->getChangeColor($monthlyReservations, $lastMonthReservations))
                ->chart($this->getMonthlyChart()),

            Stat::make('Pendapatan Hari Ini', 'Rp ' . number_format($todayRevenue, 0, ',', '.'))
                ->description('Estimasi berdasarkan layanan')
                ->descriptionIcon('heroicon-m-currency-dollar')
                ->color('success'),

            Stat::make('Pendapatan Minggu Ini', 'Rp ' . number_format($weeklyRevenue, 0, ',', '.'))
                ->description('Estimasi berdasarkan layanan')
                ->descriptionIcon('heroicon-m-currency-dollar')
                ->color('success'),

            Stat::make('Pendapatan Bulan Ini', 'Rp ' . number_format($monthlyRevenue, 0, ',', '.'))
                ->description('Estimasi berdasarkan layanan')
                ->descriptionIcon('heroicon-m-currency-dollar')
                ->color('success'),
        ];
    }

    private function calculateRevenue($reservations)
    {
        $servicePrices = [
            'Nail Art' => 125000,
            'Remove Nail' => 5000,
            'Manicure' => 100000,
            'Pedicure' => 100000,
            'Eyelash Rusian' => 125000,
            'Eyelash Japanase' => 190000,
            'Remove Eyelash' => 50000,
            'Lashlift' => 125000,
        ];

        $total = 0;
        foreach ($reservations as $reservation) {
            $total += $servicePrices[$reservation->service] ?? 0;
        }

        return $total;
    }

    private function getChangeDescription($current, $previous, $period)
    {
        if ($previous == 0) {
            return $current > 0 ? "Naik dari {$period}" : "Sama dengan {$period}";
        }

        $change = (($current - $previous) / $previous) * 100;
        $changeText = abs(round($change, 1));

        if ($change > 0) {
            return "Naik {$changeText}% dari {$period}";
        } elseif ($change < 0) {
            return "Turun {$changeText}% dari {$period}";
        } else {
            return "Sama dengan {$period}";
        }
    }

    private function getChangeIcon($current, $previous)
    {
        if ($current > $previous) {
            return 'heroicon-m-arrow-trending-up';
        } elseif ($current < $previous) {
            return 'heroicon-m-arrow-trending-down';
        } else {
            return 'heroicon-m-minus';
        }
    }

    private function getChangeColor($current, $previous)
    {
        if ($current > $previous) {
            return 'success';
        } elseif ($current < $previous) {
            return 'danger';
        } else {
            return 'gray';
        }
    }

    private function getDailyChart()
    {
        $data = [];
        for ($i = 6; $i >= 0; $i--) {
            $date = Carbon::now()->subDays($i);
            $count = Reservation::whereDate('date', $date)->count();
            $data[] = $count;
        }
        return $data;
    }

    private function getWeeklyChart()
    {
        $data = [];
        for ($i = 6; $i >= 0; $i--) {
            $startOfWeek = Carbon::now()->subWeeks($i)->startOfWeek();
            $endOfWeek = Carbon::now()->subWeeks($i)->endOfWeek();
            $count = Reservation::whereBetween('date', [$startOfWeek, $endOfWeek])->count();
            $data[] = $count;
        }
        return $data;
    }

    private function getMonthlyChart()
    {
        $data = [];
        for ($i = 11; $i >= 0; $i--) {
            $month = Carbon::now()->subMonths($i);
            $count = Reservation::whereMonth('date', $month->month)
                ->whereYear('date', $month->year)
                ->count();
            $data[] = $count;
        }
        return $data;
    }
}