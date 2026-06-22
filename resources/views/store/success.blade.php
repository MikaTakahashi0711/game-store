<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembayaran Berhasil</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --bg-main: #070b17;
            --bg-secondary: #121a2f;
            --card-bg: rgba(255, 255, 255, 0.05);
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

            overflow-x: hidden;
        }

        /* =========================
           SUCCESS CARD
        ========================= */

        .success-card {
            width: 100%;
            max-width: 700px;

            background: rgba(255, 255, 255, 0.04);

            border: 1px solid rgba(255, 255, 255, 0.08);

            border-radius: 30px;

            padding: 50px;

            text-align: center;

            backdrop-filter: blur(14px);

            position: relative;

            overflow: hidden;

            animation: fadeUp .8s ease;
        }

        /* Glow */
        .success-card::before {
            content: '';

            position: absolute;

            width: 350px;
            height: 350px;

            background: radial-gradient(circle,
                    rgba(0, 212, 255, 0.15),
                    transparent 70%);

            top: -120px;
            right: -120px;
        }

        /* Success Icon */
        .success-icon {
            width: 120px;
            height: 120px;

            margin: auto;

            border-radius: 50%;

            display: flex;
            justify-content: center;
            align-items: center;

            font-size: 60px;

            background:
                linear-gradient(135deg,
                    rgba(124, 92, 255, 0.2),
                    rgba(0, 212, 255, 0.2));

            border: 2px solid rgba(0, 212, 255, 0.2);

            box-shadow:
                0 0 40px rgba(0, 212, 255, 0.2);

            margin-bottom: 30px;

            animation: pulse 2s infinite;
        }

        /* Title */
        .success-title {
            font-size: 42px;
            font-weight: 700;

            margin-bottom: 20px;
        }

        .success-title span {
            color: var(--accent2);
        }

        /* Description */
        .success-desc {
            color: var(--text-soft);

            line-height: 2;

            font-size: 16px;

            max-width: 550px;

            margin: auto;

            margin-bottom: 35px;
        }

        /* Game Box */
        .game-box {
            background: rgba(255, 255, 255, 0.04);

            border: 1px solid rgba(255, 255, 255, 0.08);

            border-radius: 22px;

            padding: 20px;

            display: flex;
            align-items: center;
            gap: 20px;

            margin-bottom: 35px;
        }

        .game-box img {
            width: 140px;
            height: 80px;

            object-fit: cover;

            border-radius: 14px;
        }

        .game-info {
            text-align: left;
        }

        .game-info h3 {
            font-size: 24px;

            margin-bottom: 8px;
        }

        .game-info p {
            color: var(--text-soft);
        }

        /* Status */
        .status-box {
            display: flex;
            justify-content: center;
            gap: 15px;

            flex-wrap: wrap;

            margin-bottom: 35px;
        }

        .status-item {
            padding: 12px 20px;

            border-radius: 40px;

            background: rgba(255, 255, 255, 0.04);

            border: 1px solid rgba(255, 255, 255, 0.08);

            color: var(--text-soft);

            font-size: 14px;
        }

        /* Buttons */
        .button-group {
            display: flex;
            gap: 18px;

            justify-content: center;

            flex-wrap: wrap;
        }

        .btn {
            padding: 16px 28px;

            border-radius: 16px;

            text-decoration: none;

            font-weight: 600;

            transition: .3s ease;
        }

        /* Primary */
        .btn-primary {
            background:
                linear-gradient(135deg,
                    var(--accent),
                    var(--accent2));

            color: white;
        }

        .btn-primary:hover {
            transform: translateY(-4px);

            box-shadow:
                0 12px 30px rgba(0, 212, 255, 0.25);
        }

        /* Secondary */
        .btn-secondary {
            background: rgba(255, 255, 255, 0.05);

            border: 1px solid rgba(255, 255, 255, 0.08);

            color: white;
        }

        .btn-secondary:hover {
            background: rgba(255, 255, 255, 0.08);

            transform: translateY(-3px);
        }

        /* WhatsApp */
        .btn-whatsapp {
            background:
                linear-gradient(135deg,
                    #1faa59,
                    #25d366);

            color: white;
        }

        .btn-whatsapp:hover {
            transform: translateY(-4px);

            box-shadow:
                0 12px 30px rgba(37, 211, 102, 0.3);
        }

        /* Footer */
        .footer-note {
            margin-top: 35px;

            color: var(--text-soft);

            font-size: 14px;

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

        @keyframes pulse {

            0% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.05);
            }

            100% {
                transform: scale(1);
            }

        }

        /* Responsive */
        @media(max-width:768px) {

            .success-card {
                margin: 20px;

                padding: 35px 25px;
            }

            .success-title {
                font-size: 32px;
            }

            .game-box {
                flex-direction: column;
                text-align: center;
            }

            .game-info {
                text-align: center;
            }

            .game-box img {
                width: 100%;
                height: 180px;
            }

            .button-group {
                flex-direction: column;
            }

        }
    </style>

</head>

<body>

    <div class="success-card">

        <!-- ICON -->
        <div class="success-icon">
            ✓
        </div>

        <!-- TITLE -->
        <h1 class="success-title">
            Pembayaran <span>Berhasil</span>
        </h1>

        <!-- DESC -->
        <p class="success-desc">
            Terima kasih telah melakukan pembelian.
            Game berhasil ditambahkan ke Library Anda dan siap dimainkan kapan saja.
        </p>

        <!-- GAME -->
        <div class="game-box">

            <img src="{{ asset('images/' . $game->image) }}" alt="{{ $game->title }}">

            <div class="game-info">

                <h3>
                    {{ $game->title }}
                </h3>

                <p>
                    Premium Digital Access
                </p>

            </div>

        </div>

        <!-- STATUS -->
        <div class="status-box">

            <div class="status-item">
                 Game akan dikirim admin
            </div>

            <div class="status-item">
                 Akses cepat dan mudah
            </div>

            <div class="status-item">
                 Transaksi aman dan terpercaya
            </div>

        </div>

        <!-- BUTTON -->
        <div class="button-group">

            <!-- Home -->
            <a href="{{ url('/') }}" class="btn btn-secondary">
                Kembali ke Store
            </a>

            <!-- WhatsApp -->
            <a href="https://wa.me/6281234567890?text=Halo%20Admin,%20saya%20sudah%20melakukan%20pembayaran%20untuk%20game%20{{ urlencode($game->title) }}"
                target="_blank" class="btn btn-whatsapp">

                Hubungi Admin

            </a>

        </div>

        <!-- FOOTER -->
        <div class="footer-note">
            Jika game belum muncul di library atau mengalami kendala,
            silakan hubungi admin melalui WhatsApp.
        </div>

    </div>

</body>

</html>