<?php

namespace App\Filament\Widgets;

use App\Models\Reservation;
use Carbon\Carbon;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;

class RecentReservationsWidget extends BaseWidget
{
    protected static ?string $heading = 'Reservasi Terbaru';
    protected static ?int $sort = 4;
    protected int | string | array $columnSpan = 'full';

    public function table(Table $table): Table
    {
        return $table
            ->query(
                Reservation::query()
                    ->latest('created_at')
                    ->limit(10)
            )
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->label('Nama')
                    ->searchable()
                    ->sortable(),
                    
                Tables\Columns\TextColumn::make('service')
                    ->label('Layanan')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'Nail Art' => 'success',
                        'Manicure' => 'info',
                        'Pedicure' => 'warning',
                        'Eyelash Rusian' => 'danger',
                        'Eyelash Japanase' => 'danger',
                        'Lashlift' => 'primary',
                        default => 'gray',
                    }),
                    
                Tables\Columns\TextColumn::make('date')
                    ->label('Tanggal')
                    ->date('d/m/Y')
                    ->sortable(),
                    
                Tables\Columns\TextColumn::make('time')
                    ->label('Waktu')
                    ->sortable(),
                    
                Tables\Columns\TextColumn::make('status')
                    ->label('Status')
                    ->badge()
                    ->getStateUsing(function (Reservation $record): string {
                        $reservationDateTime = Carbon::parse($record->date . ' ' . $record->time);
                        $now = Carbon::now();
                        
                        if ($reservationDateTime->isPast()) {
                            return 'Selesai';
                        } elseif ($reservationDateTime->isToday()) {
                            return 'Hari Ini';
                        } elseif ($reservationDateTime->isTomorrow()) {
                            return 'Besok';
                        } else {
                            return 'Mendatang';
                        }
                    })
                    ->color(fn (string $state): string => match ($state) {
                        'Selesai' => 'gray',
                        'Hari Ini' => 'success',
                        'Besok' => 'warning',
                        'Mendatang' => 'info',
                        default => 'gray',
                    }),
            ])
            ->actions([
                Tables\Actions\Action::make('whatsapp')
                    ->label('WhatsApp')
                    ->icon('heroicon-o-chat-bubble-left-right')
                    ->color('success')
                    ->url(function (Reservation $record): string {
                        $message = urlencode(
                            "Halo {$record->name}! 🌸\n\n" .
                            "Ini adalah konfirmasi reservasi Anda di RasaBeauty Bar:\n\n" .
                            "📅 Tanggal: " . Carbon::parse($record->date)->format('d/m/Y') . "\n" .
                            "🕐 Waktu: {$record->time}\n" .
                            "💅 Layanan: {$record->service}\n\n" .
                            "Terima kasih telah memilih RasaBeauty Bar! ✨"
                        );
                        return "https://wa.me/{$record->phone}?text={$message}";
                    })
                    ->openUrlInNewTab(),
            ])
            ->defaultSort('created_at', 'desc')
            ->paginated(false);
    }
}