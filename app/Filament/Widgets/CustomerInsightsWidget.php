<?php

namespace App\Filament\Widgets;

use App\Models\Reservation;
use Carbon\Carbon;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Illuminate\Support\Facades\DB;

class CustomerInsightsWidget extends BaseWidget
{
    protected static ?string $pollingInterval = '30s';
    protected static ?int $sort = 6;

    protected function getStats(): array
    {
        // Customer dengan reservasi terbanyak
        $topCustomer = Reservation::select('name', DB::raw('count(*) as total'))
            ->groupBy('name')
            ->orderBy('total', 'desc')
            ->first();

        // Layanan paling populer bulan ini
        $popularService = Reservation::whereMonth('date', Carbon::now()->month)
            ->whereYear('date', Carbon::now()->year)
            ->select('service', DB::raw('count(*) as total'))
            ->groupBy('service')
            ->orderBy('total', 'desc')
            ->first();

        // Rata-rata reservasi per hari
        $avgDaily = Reservation::whereMonth('date', Carbon::now()->month)
            ->whereYear('date', Carbon::now()->year)
            ->count() / Carbon::now()->day;

        


        // Customer baru bulan ini (berdasarkan email unik)
        $newCustomers = Reservation::whereMonth('created_at', Carbon::now()->month)
            ->whereYear('created_at', Carbon::now()->year)
            ->distinct('email')
            ->count();

        // Tingkat retensi (customer yang booking lebih dari sekali)
        $repeatCustomers = Reservation::select('email')
            ->groupBy('email')
            ->havingRaw('count(*) > 1')
            ->count();

        $totalUniqueCustomers = Reservation::distinct('email')->count();
        $retentionRate = $totalUniqueCustomers > 0 ? ($repeatCustomers / $totalUniqueCustomers) * 100 : 0;

        return [

            Stat::make('Layanan Terpopuler', $popularService ? $popularService->service : 'Belum ada data')
                ->description($popularService ? "{$popularService->total} kali dipilih bulan ini" : 'Tidak ada data')
                ->descriptionIcon('heroicon-m-star')
                ->color('warning'),

            



            Stat::make('Customer Baru', $newCustomers)
                ->description('Bulan ini')
                ->descriptionIcon('heroicon-m-user-plus')
                ->color('primary'),

            
        ];
    }
}