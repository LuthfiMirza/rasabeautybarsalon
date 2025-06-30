<!DOCTYPE html>
<html>
<head>
    <title>Terima Kasih - RasaBeauty Bar</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="shortcut icon" type="image/png" href="{{ asset('images/rasa.png') }}">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body { 
            font-family: 'Poppins', sans-serif; 
            background: linear-gradient(135deg, #fce4ec 0%, #f8bbd0 100%);
            min-height: 100vh;
            padding: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
        }

        /* Back Button */
        .back-button {
            position: fixed;
            top: 20px;
            left: 20px;
            background: rgba(255, 255, 255, 0.9);
            border: 2px solid #F987C4;
            border-radius: 50px;
            padding: 12px 20px;
            color: #F987C4;
            text-decoration: none;
            font-weight: 500;
            font-size: 0.9rem;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(249, 135, 196, 0.2);
            z-index: 1000;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .back-button:hover {
            background: #F987C4;
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(249, 135, 196, 0.3);
        }

        .back-button::before {
            content: '←';
            font-size: 1.2rem;
            font-weight: bold;
        }

        .thankyou-container {
            background: rgba(255, 255, 255, 0.95);
            max-width: 480px; 
            width: 100%;
            margin: 0 auto;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 20px 40px rgba(249, 135, 196, 0.25);
            text-align: center;
            position: relative;
            overflow: hidden;
            border: 1px solid rgba(249, 135, 196, 0.1);
            backdrop-filter: blur(10px);
        }

        /* Success Icon */
        .success-icon {
            width: 80px;
            height: 80px;
            background: linear-gradient(45deg, #F987C4, #ff9fd4);
            border-radius: 50%;
            margin: 0 auto 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2.5rem;
            color: white;
            box-shadow: 0 8px 25px rgba(249, 135, 196, 0.3);
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.05); }
            100% { transform: scale(1); }
        }

        .thankyou-container h2 { 
            font-family: 'Playfair Display', serif;
            color: #F987C4;
            margin-bottom: 10px;
            font-size: 2.2rem;
            font-weight: 700;
            text-shadow: 0 2px 4px rgba(249, 135, 196, 0.15);
        }

        .subtitle {
            color: #666;
            font-size: 1.1rem;
            margin-bottom: 30px;
            font-weight: 400;
        }

        .reservation-details {
            background: linear-gradient(135deg, rgba(249, 135, 196, 0.05), rgba(255, 255, 255, 0.8));
            border-radius: 15px;
            padding: 25px;
            margin: 25px 0;
            border: 1px solid rgba(249, 135, 196, 0.1);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }

        .details-title {
            font-family: 'Playfair Display', serif;
            color: #F987C4;
            font-size: 1.3rem;
            margin-bottom: 20px;
            font-weight: 600;
        }

        .detail-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 12px 0;
            border-bottom: 1px solid rgba(249, 135, 196, 0.1);
            transition: all 0.3s ease;
        }

        .detail-item:last-child {
            border-bottom: none;
        }

        .detail-item:hover {
            background: rgba(249, 135, 196, 0.05);
            margin: 0 -15px;
            padding: 12px 15px;
            border-radius: 8px;
        }

        .detail-label {
            color: #666;
            font-weight: 500;
            font-size: 0.95rem;
        }

        .detail-value {
            color: #F987C4;
            font-weight: 600;
            font-size: 0.95rem;
            text-align: right;
        }

        .button-group {
            display: flex;
            gap: 15px;
            margin-top: 30px;
            flex-wrap: wrap;
            justify-content: center;
        }

        .btn {
            border: none;
            padding: 14px 28px;
            border-radius: 25px;
            font-size: 1rem;
            cursor: pointer;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            transition: all 0.3s ease;
            font-weight: 500;
            letter-spacing: 0.5px;
            min-width: 180px;
            justify-content: center;
        }

        .btn-wa {
            background: linear-gradient(45deg, #25D366, #128C7E);
            color: white;
            box-shadow: 0 5px 15px rgba(37, 211, 102, 0.3);
        }

        .btn-wa:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(37, 211, 102, 0.4);
            background: linear-gradient(45deg, #128C7E, #25D366);
        }

        .btn-home {
            background: linear-gradient(45deg, #F987C4, #ff9fd4);
            color: white;
            box-shadow: 0 5px 15px rgba(249, 135, 196, 0.3);
        }

        .btn-home:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(249, 135, 196, 0.4);
            background: linear-gradient(45deg, #ff9fd4, #F987C4);
        }

        .signature {
            margin-top: 30px;
            font-family: 'Playfair Display', serif;
            color: #F987C4;
            font-style: italic;
            font-size: 1rem;
            text-shadow: 0 1px 2px rgba(249, 135, 196, 0.1);
            font-weight: 500;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .thankyou-container {
                max-width: 95%;
                padding: 30px 20px;
                margin: 20px auto;
            }

            .thankyou-container h2 {
                font-size: 1.8rem;
            }

            .button-group {
                flex-direction: column;
                align-items: center;
            }

            .btn {
                width: 100%;
                max-width: 280px;
            }

            .back-button {
                top: 15px;
                left: 15px;
                padding: 10px 16px;
                font-size: 0.85rem;
            }

            .detail-item {
                flex-direction: column;
                align-items: flex-start;
                gap: 5px;
            }

            .detail-value {
                text-align: left;
                font-size: 1rem;
            }
        }

        /* Loading Animation */
        .fade-in {
            opacity: 0;
            transform: translateY(20px);
            animation: fadeInUp 0.8s ease forwards;
        }

        @keyframes fadeInUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<body>
    <!-- Back Button -->
    <a href="{{ url('/') }}" class="back-button">
        Kembali ke Beranda
    </a>

    <div class="thankyou-container fade-in">
        <!-- Success Icon -->
        <div class="success-icon">✓</div>
        
        <h2>Terima kasih, {{ $reservation->name }}!</h2>
        <p class="subtitle">Reservasi Anda di <strong>RasaBeauty Bar</strong> telah berhasil diterima</p>

        <!-- Reservation Details -->
        <div class="reservation-details">
            <div class="details-title">📋 Detail Reservasi</div>
            
            <div class="detail-item">
                <span class="detail-label">📅 Tanggal</span>
                <span class="detail-value">{{ \Carbon\Carbon::parse($reservation->date)->format('d/m/Y') }}</span>
            </div>
            
            <div class="detail-item">
                <span class="detail-label">🕐 Waktu</span>
                <span class="detail-value">{{ $reservation->time }}</span>
            </div>
            
            <div class="detail-item">
                <span class="detail-label">💅 Layanan</span>
                <span class="detail-value">{{ $reservation->service }}</span>
            </div>
            
            <div class="detail-item">
                <span class="detail-label">📱 No. HP</span>
                <span class="detail-value">{{ $reservation->phone }}</span>
            </div>
            
            <div class="detail-item">
                <span class="detail-label">📧 Email</span>
                <span class="detail-value">{{ $reservation->email }}</span>
            </div>
        </div>

        @php
            // Format nomor WhatsApp admin
            $waNumber = '6282210626474';
            
            // Format pesan dengan emoji dan formatting yang lebih baik
            $waMessage = urlencode(
                "Halo Admin RasaBeauty Bar! 🌸\n\n".
                "Saya *{$reservation->name}* ingin konfirmasi reservasi:\n\n".
                "*Detail Reservasi:*\n".
                "━━━━━━━━━━\n".
                "📅 Tanggal: ".\Carbon\Carbon::parse($reservation->date)->format('d/m/Y')."\n".
                "🕐 Jam: {$reservation->time}\n".
                "💅 Layanan: {$reservation->service}\n".
                "📱 No HP: {$reservation->phone}\n".
                "📧 Email: {$reservation->email}\n\n".
                "Mohon konfirmasi ketersediaan jadwal. Terima kasih! ✨"
            );

            // Gunakan format URL wa.me yang merupakan shortlink resmi WhatsApp
            $waLink = "https://wa.me/{$waNumber}?text={$waMessage}";
        @endphp

        <!-- Action Buttons -->
        <div class="button-group">
            <a href="{{ $waLink }}" target="_blank" class="btn btn-wa">
                📱 Konfirmasi via WhatsApp
            </a>
            <a href="{{ url('/') }}" class="btn btn-home">
                🏠 Kembali ke Beranda
            </a>
        </div>

        <p class="signature">✨ Dengan Cinta, Tim RasaBeauty Bar ✨</p>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Add staggered animation to detail items
            const detailItems = document.querySelectorAll('.detail-item');
            detailItems.forEach((item, index) => {
                item.style.opacity = '0';
                item.style.transform = 'translateX(-20px)';
                setTimeout(() => {
                    item.style.transition = 'all 0.5s ease';
                    item.style.opacity = '1';
                    item.style.transform = 'translateX(0)';
                }, 300 + (index * 100));
            });

            // Add animation to buttons
            const buttons = document.querySelectorAll('.btn');
            buttons.forEach((btn, index) => {
                btn.style.opacity = '0';
                btn.style.transform = 'translateY(20px)';
                setTimeout(() => {
                    btn.style.transition = 'all 0.5s ease';
                    btn.style.opacity = '1';
                    btn.style.transform = 'translateY(0)';
                }, 800 + (index * 200));
            });
        });
    </script>
</body>
</html>