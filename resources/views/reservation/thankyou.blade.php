<!DOCTYPE html>
<html>
<head>
    <title>Terima Kasih Reservasi</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Poppins:wght@300;400;500&display=swap" rel="stylesheet">
    <style>
        body { 
            font-family: 'Poppins', sans-serif; 
            background: linear-gradient(135deg, #fce4ec 0%, #f8bbd0 100%);
            min-height: 100vh;
            margin: 0;
            padding: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .thankyou-container {
            background: rgba(255, 255, 255, 0.95);
            max-width: 400px; 
            width: 100%;
            margin: 15px auto;
            padding: 35px 55px;
            border-radius: 18px;
            box-shadow: 0 15px 35px rgba(249, 135, 196, 0.25);
            text-align: center;
            position: relative;
            overflow: hidden;
            border: 1px solid rgba(249, 135, 196, 0.1);
        }

        .thankyou-container h2 { 
            font-family: 'Playfair Display', serif;
            color: #F987C4;
            margin-bottom: 15px;
            font-size: 2rem;
            position: relative;
            text-shadow: 0 2px 4px rgba(249, 135, 196, 0.15);
        }

        .thankyou-container p {
            color: #666;
            line-height: 1.5;
            margin-bottom: 15px;
            font-size: 0.95rem;
        }

        .thankyou-container ul { 
            text-align: left;
            margin: 12px 0;
            padding: 15px;
            list-style: none;
            background: rgba(255, 255, 255, 0.9);
            border-radius: 12px;
            box-shadow: 0 3px 8px rgba(0, 0, 0, 0.05);
            font-size: 0.9rem;
            border: 1px solid rgba(249, 135, 196, 0.1);
        }

        .thankyou-container li { 
            margin-bottom: 8px;
            color: #555;
            display: flex;
            align-items: center;
            position: relative;
            padding-left: 12px;
            font-size: 0.9rem;
            transition: all 0.3s ease;
        }

        .thankyou-container li:hover {
            transform: translateX(3px);
            color: #F987C4;
        }

        .thankyou-container li::before {
            content: '•';
            position: absolute;
            left: 0;
            color: #F987C4;
            font-size: 0.9rem;
        }

        .thankyou-container li strong {
            color: #F987C4;
            margin-right: 6px;
            font-size: 0.9rem;
            font-weight: 500;
        }

        .btn-wa {
            background: linear-gradient(45deg, #F987C4, #ff9fd4);
            color: #fff;
            border: none;
            padding: 14px 30px;
            border-radius: 25px;
            font-size: 1rem;
            margin-top: 20px;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
            transition: all 0.3s ease;
            box-shadow: 0 5px 15px rgba(249, 135, 196, 0.3);
            font-weight: 500;
            letter-spacing: 0.5px;
        }

        .btn-wa:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(249, 135, 196, 0.4);
            background: linear-gradient(45deg, #ff9fd4, #F987C4);
        }

        .signature {
            margin-top: 25px;
            font-family: 'Playfair Display', serif;
            color: #F987C4;
            font-style: italic;
            font-size: 0.9rem;
            text-shadow: 0 1px 2px rgba(249, 135, 196, 0.1);
        }
    </style>
</head>
<body>
    <div class="thankyou-container">
        <h2>Terima kasih, {{ $reservation->name }}!</h2>
        <p>Reservasi kamu di <strong>RasaBeauty Bar</strong> telah kami terima.</p>

        <p><strong>Bukti Reservasi:</strong></p>
        <ul>
            <li><strong>Tanggal:</strong> {{ \Carbon\Carbon::parse($reservation->date)->format('d/m/Y') }}</li>
            <li><strong>Jam:</strong> {{ $reservation->time }}</li>
            <li><strong>Layanan:</strong> {{ $reservation->service }}</li>
            <li><strong>No. HP:</strong> {{ $reservation->phone }}</li>
            <li><strong>Email:</strong> {{ $reservation->email }}</li>
        </ul>

        @php
            // Format nomor WhatsApp admin
            $waNumber = '6282210626474';
            
            // Format pesan dengan emoji dan formatting yang lebih baik
            $waMessage = urlencode(
                "Halo Admin RasaBeauty Bar! 🌸\n\n".
                "Saya *{$reservation->name}* ingin konfirmasi reservasi:\n\n".
                "*Detail Reservasi:*\n".
                "━━━━━━━━━━\n".
                "Tanggal: ".\Carbon\Carbon::parse($reservation->date)->format('d/m/Y')."\n".
                "Jam: {$reservation->time}\n".
                "Layanan: {$reservation->service}\n".
                "No HP: {$reservation->phone}\n".
                "Email: {$reservation->email}\n\n".
                "Terima kasih! ✨"
            );

            // Gunakan format URL wa.me yang merupakan shortlink resmi WhatsApp
            $waLink = "https://wa.me/{$waNumber}?text={$waMessage}";
        @endphp

        <a href="{{ $waLink }}" target="_blank" class="btn-wa">Konfirmasi via WhatsApp</a>

        <p class="signature">✨ Dengan Cinta, Tim RasaBeauty Bar ✨</p>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const container = document.querySelector('.thankyou-container');
            container.style.opacity = '0';
            container.style.transform = 'translateY(20px)';
            
            setTimeout(() => {
                container.style.transition = 'all 0.8s ease';
                container.style.opacity = '1';
                container.style.transform = 'translateY(0)';
            }, 100);
        });
    </script>
</body>
</html>
