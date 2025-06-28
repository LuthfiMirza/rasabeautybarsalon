<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ReservationResource\Pages;
use App\Models\Reservation;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TimePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\table;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\ToggleButtons;
use Filament\Tables\Filters\Filter;
use Carbon\Carbon;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\DeleteBulkAction;




class ReservationResource extends Resource
{
    protected static ?string $model = Reservation::class;

    protected static ?string $navigationIcon = 'heroicon-o-calendar-days';

    public static function form(Form $form): Form
{
    return $form->schema([
        TextInput::make('name')->required(),
        TextInput::make('phone')->required(),
        TextInput::make('email')->email()->required(),
        DatePicker::make('date')
        ->required()
        ->native(false),
       // TimePicker::make('jam_masuk')
       // ->label('Jam Masuk') // Label untuk waktu masuk
       // ->required() // Wajib diisi
        //->format('H:i') // Format jam dan menit
        //->placeholder('Pilih Jam Masuk') // Placeholder untuk tampilan awal
       // ->displayFormat('h:i A') // Format tampilan 12 jam (AM/PM)
        //->hint('Pilih jam masuk untuk reservasi'),
        
        Select::make('time')
        ->label('Jam Masuk')
        ->options([
            '09:00' => '09:00 AM',
            '10:00' => '10:00 AM',
            '11:00' => '11:00 AM',
            '12:00' => '12:00 PM',
            '13:00' => '01:00 PM',
            '14:00' => '02:00 PM',
            '15:00' => '03:00 PM',
            '16:00' => '04:00 PM',
            '17:00' => '05:00 PM',
            '18:00' => '06:00 PM',
        ])
        ->required()
        ->placeholder('Pilih jam masuk')
        ->searchable(),
        
        ToggleButtons::make('service')
        ->label('Select Service')
        ->options([
            'Nail Art' => 'Nail Art',
            'Remove Nail' => 'Remove Nail',
            'Manicure' => 'Manicure',
            'Pedicure' => 'Pedicure',
            'Eyelash Rusian' => 'Eyelash Rusian',
            'Eyelash Japanase' => 'Eyelash Japanase',
            'Remove Eyelash' => 'Remove Eyelash',
            'Lashlift' => 'Lashlift',
        ])
        ->icons([
            'Nail Art' => 'heroicon-o-paint-brush',  // Icon for Nail Art
            'Remove Nail' => 'heroicon-o-x-circle',  // Icon for Remove Nail
            'Manicure' => 'heroicon-o-sparkles',  // Icon for Manicure (Sparkles)
            'Pedicure' => 'heroicon-o-scissors',  // Icon for Pedicure
            'Eyelash Rusian' => 'heroicon-o-eye',  // Icon for Eyelash Russian
            'Eyelash Japanase' => 'heroicon-o-eye',  // Icon for Eyelash Japanese
            'Remove Eyelash' => 'heroicon-o-x-circle',  // Icon for Remove Eyelash
            'Lashlift' => 'heroicon-o-arrow-up',  // Icon for Lashlift
        ])
        ->colors([
            'Nail Art' => 'primary',  // Warna untuk Nail Art
            'Remove Nail' => 'info',  // Warna untuk Remove Nail
            'Manicure' => 'success',  // Warna untuk Manicure
            'Pedicure' => 'warning',  // Warna untuk Pedicure
            'Eyelash Rusian' => 'danger',  // Warna untuk Eyelash Russian
            'Eyelash Japanase' => 'danger',  // Warna untuk Eyelash Japanese
            'Remove Eyelash' => 'secondary',  // Warna untuk Remove Eyelash
            'Lashlift' => 'primary',  // Warna untuk Lashlift
        ])
        ->required()
        ->inline(),

    ]);
}

public static function table(Table $table): Table
{
    return $table
        ->poll('5s') // ← refresh setiap 5 detik
        ->columns([
            TextColumn::make('no')
            ->label('No')
            ->state(function ($record, $livewire, $rowLoop) {
                return $rowLoop->iteration;
            }),
            TextColumn::make('name')->searchable(),
            TextColumn::make('phone'),
            TextColumn::make('email'),
            TextColumn::make('date')->date()->sortable(),
            TextColumn::make('time')->sortable(),
            TextColumn::make('service'),
        ])
        ->filters([
            Filter::make('Hari Ini')
                ->query(fn ($query) => $query->whereDate('date', Carbon::today()))
                ->label('Tampilkan Hari Ini'),
        ])
        ->actions([
            EditAction::make(),
            DeleteAction::make(),
        ])
     
        ->defaultSort('date', 'desc'); 
        
}


    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListReservations::route('/'),
            'create' => Pages\CreateReservation::route('/create'),
            'edit' => Pages\EditReservation::route('/{record}/edit'),
        ];
    }
}
