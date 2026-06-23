<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembayaran QRIS</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --bg-main: #070b17;
            --bg-secondary: #121a2f;
            --accent: #7c5cff;
            --accent2: #00d4ff;
            --green: #9dff00;
            --text: #f5f6fa;
            --text-soft: #9aa4b5;
            --border: rgba(255, 255, 255, 0.08);
        }

        body {
            font-family: 'Poppins', sans-serif;

            background:
                radial-gradient(circle at top left, #1c2f59 0%, transparent 30%),
                radial-gradient(circle at bottom right, #2e1461 0%, transparent 35%),
                var(--bg-main);

            color: var(--text);

            min-height: 100vh;

            display: flex;
            justify-content: center;
            align-items: center;

            padding: 30px;
        }

        /* =========================
           QRIS CARD
        ========================= */

        .qris-card {
            width: 100%;
            max-width: 850px;

            background: rgba(255, 255, 255, 0.04);

            border: 1px solid rgba(255, 255, 255, 0.08);

            border-radius: 30px;

            padding: 35px;

            backdrop-filter: blur(14px);

            position: relative;

            overflow: hidden;

            animation: fadeUp .7s ease;
        }

        /* Glow */
        .qris-card::before {
            content: '';

            position: absolute;

            width: 350px;
            height: 350px;

            background:
                radial-gradient(circle,
                    rgba(0, 212, 255, 0.15),
                    transparent 70%);

            top: -120px;
            right: -120px;
        }

        /* Layout */
        .qris-grid {
            display: grid;

            grid-template-columns: 1fr 1fr;

            gap: 35px;

            align-items: center;
        }

        /* Left */
        .left-content h1 {
            font-size: 42px;
            line-height: 1.3;

            margin-bottom: 20px;
        }

        .left-content h1 span {
            color: var(--accent2);
        }

        .left-content p {
            color: var(--text-soft);

            line-height: 2;

            margin-bottom: 30px;
        }

        /* Game Info */
        .game-info {
            background: rgba(255, 255, 255, 0.04);

            border: 1px solid rgba(255, 255, 255, 0.08);

            border-radius: 20px;

            padding: 20px;

            display: flex;
            align-items: center;

            gap: 18px;

            margin-bottom: 25px;
        }

        .game-info img {
            width: 130px;
            height: 80px;

            object-fit: cover;

            border-radius: 14px;
        }

        .game-title {
            font-size: 22px;
            font-weight: 600;

            margin-bottom: 8px;
        }

        .game-price {
            color: var(--green);

            font-size: 20px;
            font-weight: 700;
        }

        /* Right */
        .qris-box {
            background: rgba(255, 255, 255, 0.04);

            border: 1px solid rgba(255, 255, 255, 0.08);

            border-radius: 30px;

            padding: 30px;

            text-align: center;

            position: relative;
        }

        .qris-title {
            font-size: 28px;
            font-weight: 700;

            margin-bottom: 20px;
        }

        /* Fake QR */
        .qris-image {
            width: 260px;
            height: 260px;

            margin: auto;

            border-radius: 20px;

            overflow: hidden;

            background: white;

            padding: 12px;

            margin-bottom: 25px;

            box-shadow:
                0 15px 40px rgba(0, 0, 0, 0.35);
        }

        .qris-image img {
            width: 100%;
            height: 100%;

            object-fit: cover;
        }

        /* Total */
        .payment-total {
            font-size: 18px;

            color: var(--text-soft);

            margin-bottom: 8px;
        }

        .payment-price {
            font-size: 36px;
            font-weight: 700;

            color: var(--green);

            margin-bottom: 25px;
        }

        /* Button */
        .btn-paid {
            width: 100%;

            padding: 18px;

            border: none;

            border-radius: 18px;

            background:
                linear-gradient(135deg,
                    var(--accent),
                    var(--accent2));

            color: white;

            font-size: 17px;
            font-weight: 600;

            cursor: pointer;

            transition: .35s ease;
        }

        .btn-paid:hover {
            transform: translateY(-4px);

            box-shadow:
                0 15px 35px rgba(0, 212, 255, 0.25);
        }

        /* Timer */
        .timer-box {
            margin-top: 22px;

            color: var(--text-soft);

            font-size: 14px;
        }

        .timer-box span {
            color: var(--accent2);

            font-weight: 600;
        }

        /* Notice */
        .notice {
            margin-top: 25px;

            background: rgba(255, 255, 255, 0.04);

            border: 1px solid rgba(255, 255, 255, 0.08);

            border-radius: 18px;

            padding: 18px;

            color: var(--text-soft);

            line-height: 1.8;
        }

        /* Animation */
        @keyframes fadeUp {

            from {
                opacity: 0;
                transform: translateY(40px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }

        }

        /* Responsive */
        @media(max-width:900px) {

            .qris-grid {
                grid-template-columns: 1fr;
            }

        }

        @media(max-width:768px) {

            .qris-card {
                padding: 25px;
            }

            .left-content h1 {
                font-size: 32px;
            }

            .qris-image {
                width: 220px;
                height: 220px;
            }

            .game-info {
                flex-direction: column;
                text-align: center;
            }

            .game-info img {
                width: 100%;
                height: 180px;
            }

        }
    </style>

</head>

<body>

    <div class="qris-card">

        <div class="qris-grid">

            <!-- LEFT -->
            <div class="left-content">

                <h1>
                    Selesaikan Pembayaran
                    <span>QRIS</span>
                </h1>

                <p>
                    Scan QR Code menggunakan aplikasi e-wallet atau mobile banking Anda
                    untuk menyelesaikan transaksi pembelian game.
                </p>

                <!-- GAME -->
                <div class="game-info">

                    <img src="{{ asset('images/' . $game->image) }}" alt="{{ $game->title }}">

                    <div>

                        <div class="game-title">
                            {{ $game->title }}
                        </div>

                        <div class="game-price">

                            @if ($game->price_numeric == 0)
                                Free
                            @else
                                Rp {{ number_format($game->price_numeric, 0, ',', '.') }}
                            @endif

                        </div>

                    </div>

                </div>

                <!-- NOTICE -->
                <div class="notice">
                    Setelah pembayaran berhasil diverifikasi,
                    game akan otomatis masuk ke Library Anda.
                </div>

            </div>

            <!-- RIGHT -->
            <div class="qris-box">

                <h2 class="qris-title">
                    QRIS Payment
                </h2>

                <!-- QR IMAGE -->
                <div class="qris-image">

                    <!-- GANTI DENGAN QRIS ASLI -->
                    <img src="{{ asset('images/qris.jpg') }}" alt="QRIS">

                </div>

                <!-- TOTAL -->
                <div class="payment-total">
                    Total Pembayaran
                </div>

                <div class="payment-price">

                    @if ($game->price_numeric == 0)
                        Free
                    @else
                        Rp {{ number_format($game->price_numeric, 0, ',', '.') }}
                    @endif

                </div>

                <!-- BUTTON -->
                <form action="{{ route('payment.success', $game->id) }}" method="GET">

                    <button type="submit" class="btn-paid">
                        Saya Sudah Bayar
                    </button>

                </form>

                <!-- TIMER -->
                <div class="timer-box">
                    QR Code berlaku selama
                    <span>15 Menit</span>
                </div>

            </div>

        </div>

    </div>

</body>

</html>
