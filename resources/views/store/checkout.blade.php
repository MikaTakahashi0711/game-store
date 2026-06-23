<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>

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
        }

        /* =========================
           NAVBAR
        ========================= */

        .navbar {
            width: 100%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 18px 50px;
            background: rgba(10, 15, 30, 0.75);
            backdrop-filter: blur(14px);
            border-bottom: 1px solid var(--border);
            position: sticky;
            top: 0;
            z-index: 999;
        }

        .logo {
            text-decoration: none;
            color: white;
            font-size: 30px;
            font-weight: 700;
        }

        .logo::after {
            content: 'STore';
            color: var(--accent2);
        }

        .nav-links {
            display: flex;
            gap: 25px;
        }

        .nav-links a {
            text-decoration: none;
            color: var(--text-soft);
            transition: .3s;
            position: relative;
        }

        .nav-links a:hover {
            color: var(--accent2);
        }

        .nav-links a::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: -6px;
            width: 0%;
            height: 2px;
            background: linear-gradient(to right,
                    var(--accent),
                    var(--accent2));
            transition: .3s;
        }

        .nav-links a:hover::after {
            width: 100%;
        }

        /* =========================
           CONTAINER
        ========================= */

        .container {
            max-width: 1250px;

            margin: 60px auto;

            padding: 0 25px;
        }

        /* =========================
           BACK BUTTON
        ========================= */

        .back-link {
            display: inline-flex;
            align-items: center;
            gap: 8px;

            margin-bottom: 25px;

            text-decoration: none;

            color: var(--text-soft);

            transition: .3s;
        }

        .back-link:hover {
            color: var(--accent2);

            transform: translateX(-5px);
        }

        /* =========================
           CHECKOUT CARD
        ========================= */

        .checkout-card {
            background: rgba(255, 255, 255, 0.04);
            border: 1px solid rgba(255, 255, 255, 0.08);
            border-radius: 28px;
            padding: 35px;
            backdrop-filter: blur(14px);
            position: relative;
            overflow: hidden;
        }

        /* Glow Effect */
        .checkout-card::before {
            content: '';
            position: absolute;
            width: 350px;
            height: 350px;
            background: radial-gradient(circle,
                    rgba(0, 212, 255, 0.18),
                    transparent 70%);
            top: -120px;
            right: -120px;
            pointer-events: none;
        }

        /* Title */
        .checkout-title {
            font-size: 42px;
            font-weight: 700;
            margin-bottom: 35px;
        }

        /* =========================
           MAIN GRID
        ========================= */

        .checkout-grid {
            display: grid;
            grid-template-columns: 1.2fr .8fr;
            gap: 35px;
        }

        /* =========================
           LEFT SIDE
        ========================= */

        .product-card {
            background: rgba(255, 255, 255, 0.03);
            border: 1px solid rgba(255, 255, 255, 0.06);
            border-radius: 24px;
            overflow: hidden;
        }

        .product-image {
            width: 100%;
            height: 320px;
            overflow: hidden;
        }

        .product-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: .5s ease;
        }

        .product-image:hover img {
            transform: scale(1.06);
        }

        .product-content {
            padding: 28px;
        }

        .game-badge {
            display: inline-block;
            padding: 8px 18px;
            border-radius: 30px;
            margin-bottom: 18px;
            font-size: 13px;
            font-weight: 600;
            background: rgba(0, 212, 255, 0.12);
            color: var(--accent2);
            border: 1px solid rgba(0, 212, 255, 0.2);
        }

        .product-title {
            font-size: 34px;
            font-weight: 700;
            margin-bottom: 20px;
        }

        .product-description {
            color: var(--text-soft);
            line-height: 2;
            margin-bottom: 28px;
        }

        .product-price {
            display: inline-block;
            font-size: 30px;
            font-weight: 700;
            color: var(--green);
            background: rgba(143, 255, 60, 0.1);
            border: 1px solid rgba(143, 255, 60, 0.25);
            padding: 12px 24px;
            border-radius: 16px;
        }

        /* =========================
           PAYMENT SECTION
        ========================= */

        .payment-panel {
            background: rgba(255, 255, 255, 0.03);
            border: 1px solid rgba(255, 255, 255, 0.06);
            border-radius: 24px;
            padding: 28px;
            height: fit-content;
        }

        .panel-title {
            font-size: 24px;
            font-weight: 700;
            margin-bottom: 25px;
        }

        /* Vertical Payment */
        .payment-methods {
            display: flex;
            flex-direction: column;
            gap: 16px;
            margin-bottom: 30px;
        }

        .method-option {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 18px 20px;
            border-radius: 18px;
            background: rgba(255, 255, 255, 0.04);
            border: 1px solid rgba(255, 255, 255, 0.08);
            transition: .3s ease;
            cursor: pointer;
        }

        .method-option:hover {
            transform: translateY(-3px);
            border-color: var(--accent2);
            background: rgba(0, 212, 255, 0.08);
            box-shadow:
                0 10px 25px rgba(0, 212, 255, 0.12);
        }

        .method-left {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .method-icon {
            width: 48px;
            height: 48px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 14px;
            background: rgba(255, 255, 255, 0.05);
            font-size: 22px;
        }

        .method-name {
            font-size: 16px;
            font-weight: 600;
        }

        .method-sub {
            font-size: 13px;
            color: var(--text-soft);
        }

        .method-option input {
            width: 18px;
            height: 18px;
            accent-color: #00d4ff;
        }

        /* =========================
           TOTAL
        ========================= */

        .total-section {
            margin-top: 10px;
            padding: 25px;
            border-radius: 20px;
            background: rgba(255, 255, 255, 0.03);
            border: 1px solid rgba(255, 255, 255, 0.06);
        }

        .total-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 15px;
            color: var(--text-soft);
        }

        .total-price {
            color: var(--green);
            font-size: 26px;
            font-weight: 700;
        }

        /* =========================
           BENEFITS
        ========================= */

        .benefits {
            margin-top: 28px;
        }

        .benefits h3 {
            margin-bottom: 18px;
        }

        .benefits ul {
            list-style: none;
        }

        .benefits li {
            margin-bottom: 15px;

            color: var(--text-soft);

            padding-left: 30px;

            position: relative;
        }

        .benefits li::before {
            content: '✓';
            position: absolute;
            left: 0;
            top: 0;
            width: 20px;
            height: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 50%;
            background: rgba(0, 212, 255, 0.12);
            color: var(--accent2);
            font-size: 12px;
            font-weight: bold;
        }

        /* =========================
           BUTTON
        ========================= */

        .btn-pay {
            width: 100%;
            padding: 18px;
            border: none;
            border-radius: 18px;
            background: linear-gradient(135deg,
                    var(--accent),
                    var(--accent2));
            color: white;
            font-size: 17px;
            font-weight: 600;
            cursor: pointer;
            transition: .35s ease;
            margin-top: 28px;
        }

        .btn-pay:hover {
            transform: translateY(-4px);
            box-shadow:
                0 15px 35px rgba(0, 212, 255, 0.25);
        }

        /* =========================
           NOTICE
        ========================= */

        .notice {
            margin-top: 25px;
            padding: 18px;
            border-radius: 18px;
            background: rgba(255, 255, 255, 0.04);
            border: 1px solid rgba(255, 255, 255, 0.08);
            color: var(--text-soft);
            line-height: 1.8;
        }

        /* =========================
           RESPONSIVE
        ========================= */

        @media(max-width:992px) {

            .checkout-grid {
                grid-template-columns: 1fr;
            }

        }

        @media(max-width:768px) {

            .navbar {
                flex-direction: column;

                gap: 15px;

                padding: 18px 25px;
            }

            .nav-links {
                flex-wrap: wrap;

                justify-content: center;
            }

            .checkout-title {
                font-size: 34px;
            }

            .product-title {
                font-size: 28px;
            }

            .product-image {
                height: 240px;
            }

        }

        @media(max-width:500px) {

            .checkout-card {
                padding: 20px;
            }

            .method-option {
                padding: 16px;
            }

            .method-name {
                font-size: 14px;
            }

            .product-title {
                font-size: 24px;
            }

        }
    </style>

</head>

<body>

    <!-- NAVBAR -->
    <nav class="navbar">

        <a href="{{ url('/') }}" class="logo">
            Game
        </a>

        <div class="nav-links">
            <a href="{{ url('/') }}">Beranda</a>
        </div>

    </nav>

    <!-- CONTAINER -->
    <div class="container">

        <a href="{{ route('game.detail', $game->id) }}" class="back-link">
            ← Kembali ke Detail
        </a>

        <div class="checkout-card">

            <h1 class="checkout-title">
                Checkout Game
            </h1>

            <div class="checkout-grid">

                <!-- LEFT -->
                <div class="product-card">

                    <div class="product-image">
                        <img src="{{ asset('images/' . $game->image) }}" alt="{{ $game->title }}">
                    </div>

                    <div class="product-content">

                        <span class="game-badge">
                            Premium Digital Access
                        </span>

                        <h2 class="product-title">
                            {{ $game->title }}
                        </h2>

                        <p class="product-description">
                            {{ $game->description }}
                        </p>

                        <div class="product-price">

                            @if ($game->price_numeric == 0)
                                Free
                            @else
                                Rp {{ number_format($game->price_numeric, 0, ',', '.') }}
                            @endif

                        </div>

                    </div>

                </div>

                <!-- RIGHT -->
                <div class="payment-panel">

                    <h2 class="panel-title">
                        Metode Pembayaran
                    </h2>

                    <div class="payment-methods">

                        <!-- QRIS (All Payment) -->
                        <label class="method-option">
                            <div class="method-left">
                                <div class="method-icon">📱</div>
                                <div>
                                    <div class="method-name">QRIS</div>
                                    <div class="method-sub">Pembayaran dengan QR Code</div>
                                </div>
                            </div>
                            <input type="radio" name="payment_method" value="QRIS">
                        </label>

                        <!-- TOTAL -->
                        <div class="total-section">

                            <div class="total-row">
                                <span>Harga Game</span>

                                <span>
                                    @if ($game->price_numeric == 0)
                                        Free
                                    @else
                                        Rp {{ number_format($game->price_numeric, 0, ',', '.') }}
                                    @endif
                                </span>
                            </div>

                            <hr style="margin:18px 0; border-color:#26344d;">
                            <div class="total-row">
                                <strong>Total</strong>
                                <span class="total-price">
                                    @if ($game->price_numeric == 0)
                                        Free
                                    @else
                                        Rp {{ number_format($game->price_numeric, 0, ',', '.') }}
                                    @endif
                                </span>
                            </div>
                        </div>

                        <!-- BENEFITS -->
                        <div class="benefits">
                            <h3>Benefit Pembelian</h3>
                            <ul>
                                <li>Akses game seumur hidup</li>
                                <li>Game langsung masuk library</li>
                                <li>Support aktif 24/7</li>
                                <li>Transfer akun Steam tersedia</li>
                            </ul>
                        </div>

                        <!-- FORM -->
                        <form action="{{ route('payment.qris', $game->id) }}" method="GET">

                            <button type="submit" class="btn-pay">
                                Lanjut ke Pembayaran
                            </button>

                        </form>

                        <!-- NOTICE -->
                        <div class="notice">
                            Setelah pembayaran berhasil, game akan otomatis masuk ke Library Anda dan siap dimainkan
                            kapan saja.
                        </div>
                    </div>
                </div>
            </div>
        </div>

</body>

</html>
