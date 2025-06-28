<?php

namespace App\Filament\Resources\ReservationResource\Pages;

use App\Filament\Resources\ReservationResource;
use Filament\Resources\Pages\ListRecords;
use Filament\Resources\Pages\ListRecords\Tab;
use App\Models\Reservation;

class ListReservations extends ListRecords
{
    protected static string $resource = ReservationResource::class;

    public function getTabs(): array
    {
        return [
            'Semua' => Tab::make()
                ->badge(Reservation::count()),

            'Nail Art' => Tab::make()
                ->modifyQueryUsing(fn ($query) => $query->where('service', 'Nail Art'))
                ->badge(Reservation::where('service', 'Nail Art')->count()),

            'Remove Nail' => Tab::make()
                ->modifyQueryUsing(fn ($query) => $query->where('service', 'Remove Nail'))
                ->badge(Reservation::where('service', 'Remove Nail')->count()),

            'Manicure' => Tab::make()
                ->modifyQueryUsing(fn ($query) => $query->where('service', 'Manicure'))
                ->badge(Reservation::where('service', 'Manicure')->count()),

            'Pedicure' => Tab::make()
                ->modifyQueryUsing(fn ($query) => $query->where('service', 'Pedicure'))
                ->badge(Reservation::where('service', 'Pedicure')->count()),

            'Eyelash Rusian' => Tab::make()
                ->modifyQueryUsing(fn ($query) => $query->where('service', 'Eyelash Rusian'))
                ->badge(Reservation::where('service', 'Eyelash Rusian')->count()),

            'Eyelash Japanase' => Tab::make()
                ->modifyQueryUsing(fn ($query) => $query->where('service', 'Eyelash Japanase'))
                ->badge(Reservation::where('service', 'Eyelash Japanase')->count()),

            'Remove Eyelash' => Tab::make()
                ->modifyQueryUsing(fn ($query) => $query->where('service', 'Remove Eyelash'))
                ->badge(Reservation::where('service', 'Remove Eyelash')->count()),

            'Lashlift' => Tab::make()
                ->modifyQueryUsing(fn ($query) => $query->where('service', 'Lashlift'))
                ->badge(Reservation::where('service', 'Lashlift')->count()),
        ];
    }
}
