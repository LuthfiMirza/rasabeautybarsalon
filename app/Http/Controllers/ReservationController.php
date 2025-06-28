<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;
use App\Mail\ReservationConfirmation;
use Illuminate\Support\Facades\Mail;

class ReservationController extends Controller
{
    public function book()
    {
        return view('book');
    }

    public function summary(Request $request)
    {
        // Validasi input dari form
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'date' => 'required|date',
            'time' => 'required',
            'service' => 'required',
        ]);

        // Kirim data ke view summary
        return view('summary', ['data' => $request->all()]);
    }

    public function thankYou($id)
    {
        $reservation = Reservation::findOrFail($id);
        return view('reservation.thankyou', ['reservation' => $reservation]);
    }

    public function store(Request $request)
    {
        // Validasi input dari form
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'date' => 'required|date',
            'time' => 'required',
            'service' => 'required',
        ]);

        // Simpan ke database
        $reservation = Reservation::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'date' => $request->date,
            'time' => $request->time,
            'service' => $request->service,
        ]);

        
       

       // Redirect ke halaman terima kasih
       return redirect()->route('reservation.thankyou', ['id' => $reservation->id]);
    }
}
