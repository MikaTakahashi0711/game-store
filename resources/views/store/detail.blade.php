<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ $title }}</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --bg-main: #0b1020;
            --bg-secondary: #131a2e;
            --card-bg: rgba(255, 255, 255, 0.04);
            --accent: #7c5cff;
            --accent2: #00d4ff;
            --text: #f5f6fa;
            --text-soft: #aab2c5;
            --border: rgba(255, 255, 255, 0.08);
        }

        /* =========================
    BODY
    ========================= */
        body {
            font-family: 'Poppins', sans-serif;
            background:
                radial-gradient(circle at top left, #182848 0%, transparent 30%),
                radial-gradient(circle at bottom right, #2d1b69 0%, transparent 35%),
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
            position: sticky;
            top: 0;
            z-index: 1000;
            background: rgba(10, 15, 30, 0.75);
            backdrop-filter: blur(14px);
            border-bottom: 1px solid var(--border);
        }

        /* Logo */
        .logo {
            text-decoration: none;
            font-size: 30px;
            font-weight: 700;
            color: white;
            transition: 0.3s;
        }

        .logo::after {
            content: 'STore';
            color: var(--accent2);
        }

        .logo:hover {
            transform: scale(1.03);
        }

        /* Nav Links */
        .nav-links {
            display: flex;
            gap: 25px;
        }

        .nav-links a {
            text-decoration: none;
            color: var(--text-soft);
            font-size: 15px;
            font-weight: 500;
            position: relative;
            transition: 0.3s;
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
            background: linear-gradient(to right, var(--accent), var(--accent2));
            transition: 0.3s;
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
    BACK LINK
    ========================= */
        .back-link {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            text-decoration: none;
            color: var(--text-soft);
            margin-bottom: 30px;
            transition: 0.3s;
        }

        .back-link:hover {
            color: var(--accent2);
            transform: translateX(-5px);
        }

        /* =========================
    DETAIL CARD - layout diubah jadi flex column untuk mobile, row untuk desktop
    ========================= */
        .detail-card {
            display: flex;
            flex-direction: column;
            /* default vertical */
            gap: 20px;
            background: var(--card-bg);
            border: 1px solid var(--border);
            border-radius: 28px;
            padding: 35px;
            backdrop-filter: blur(12px);
            overflow: hidden;
        }

        /* Untuk tampilan desktop, layout diubah jadi horizontal */
        @media(min-width: 992px) {
            .detail-card {
                flex-direction: row;
            }
        }

        /* =========================
    LEFT COLUMN (gambar dan requirements)
    ========================= */
        .left-column {
            flex: 1;
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        /* =========================
    Gambar game
    ========================= */
        .game-image {
            width: 100%;
            height: 420px;
            overflow: hidden;
            border-radius: 22px;
            position: relative;
        }

        /* Overlay gambar saat hover */
        .game-image::after {
            content: '';
            position: absolute;
            inset: 0;
            background: linear-gradient(to top, rgba(0, 0, 0, 0.6), transparent);
            opacity: 0;
            transition: 0.4s;
        }

        .game-image:hover::after {
            opacity: 1;
        }

        .game-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: 0.5s ease;
        }

        .game-image:hover img {
            transform: scale(1.06);
        }

        /* =========================
    Requirements di bawah gambar
    ========================= */
        .requirements {
            background: rgba(255, 255, 255, 0.04);
            border: 1px solid rgba(255, 255, 255, 0.08);
            border-radius: 18px;
            padding: 18px;
            transition: 0.3s ease;
            backdrop-filter: blur(8px);
        }

        .requirements h3 {
            font-size: 26px;
            margin-bottom: 20px;
            position: relative;
        }

        .requirements h3::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: -8px;
            width: 70px;
            height: 4px;
            border-radius: 20px;
            background: linear-gradient(to right, var(--accent), var(--accent2));
        }

        .requirements .requirements-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 18px;
            margin-top: 20px;
        }

        /* Requirement box */
        .requirement-box {
            background: rgba(255, 255, 255, 0.04);
            border: 1px solid rgba(255, 255, 255, 0.08);
            border-radius: 18px;
            padding: 18px;
            transition: 0.3s ease;
            backdrop-filter: blur(8px);
        }

        .requirement-box span {
            display: block;
            color: var(--accent2);
            font-size: 14px;
            margin-bottom: 8px;
            font-weight: 600;
            letter-spacing: 0.5px;
        }

        .requirement-box p {
            color: white;
            font-size: 16px;
            line-height: 1.6;
        }

        /* =========================
    RIGHT COLUMN (game info)
    ========================= */
        .right-column {
            flex: 1;
            display: flex;
            flex-direction: column;
        }

        .game-title {
            font-size: 48px;
            font-weight: 700;
            margin-bottom: 18px;
            line-height: 1.2;
        }

        .game-price {
            display: inline-block;
            font-size: 34px;
            font-weight: 700;
            margin-bottom: 25px;
            padding: 10px 22px;
            border-radius: 14px;
            background: rgba(143, 255, 60, 0.1);
            color: #9dff00;
            border: 1px solid rgba(143, 255, 60, 0.25);
        }

        /* Free */
        .game-price.free {
            background: rgba(0, 212, 255, 0.12);
            color: var(--accent2);
            border: 1px solid rgba(0, 212, 255, 0.25);
        }

        .description {
            color: var(--text-soft);
            line-height: 2;
            font-size: 17px;
            margin-bottom: 35px;
        }

        /* Button Beli */
        .btn-buy {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 16px 35px;
            border-radius: 16px;
            text-decoration: none;
            font-weight: 600;
            font-size: 16px;
            color: white;
            background: linear-gradient(135deg, var(--accent), var(--accent2));
            transition: 0.35s ease;
            box-shadow: 0 10px 25px rgba(0, 212, 255, 0.15);
        }

        .btn-buy:hover {
            transform: translateY(-4px) scale(1.02);
            box-shadow: 0 15px 35px rgba(0, 212, 255, 0.28);
        }

        /* Free button */
        .btn-buy.free {
            background: linear-gradient(135deg, #00c6ff, #0072ff);
            color: white;
        }

        /* =========================
    Fitur
    ========================= */
        .features {
            margin-top: 40px;
            padding-top: 30px;
            border-top: 1px solid rgba(255, 255, 255, 0.08);
        }

        .features h3 {
            font-size: 26px;
            margin-bottom: 20px;
            position: relative;
        }

        .features h3::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: -8px;
            width: 60px;
            height: 4px;
            border-radius: 20px;
            background: linear-gradient(to right, var(--accent), var(--accent2));
        }

        /* list fitur */
        .features ul {
            list-style: none;
            margin-left: 0;
            padding-left: 0;
            color: var(--text-soft);
        }

        /* list item */
        .features li {
            margin-bottom: 18px;
            padding-left: 32px;
            position: relative;
            font-size: 16px;
        }

        .features li::before {
            content: '✓';
            position: absolute;
            left: 0;
            top: 0;
            width: 22px;
            height: 22px;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 50%;
            background: rgba(0, 212, 255, 0.12);
            color: var(--accent2);
            font-size: 13px;
            font-weight: bold;
        }

        /* =========================
    RESPONSIVE
    ========================= */
        @media(max-width:992px) {
            .detail-card {
                flex-direction: column;
            }

            .game-title {
                font-size: 38px;
            }

            .game-image {
                height: 350px;
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

            .game-title {
                font-size: 32px;
            }

            .game-price {
                font-size: 28px;
            }

            .description {
                font-size: 15px;
                line-height: 1.9;
            }
        }

        @media(max-width:500px) {
            .container {
                margin-top: 40px;
            }

            .detail-card {
                padding: 20px;
            }

            .game-image {
                height: 240px;
            }

            .game-title {
                font-size: 28px;
            }

            .btn-buy {
                width: 100%;
            }
        }

        .cart-section {
            margin-top: 50px;
            padding: 20px;
            background: var(--card-bg);
            border: 1px solid var(--border);
            border-radius: 20px;
        }

        .cart-section h3 {
            margin-bottom: 20px;
            color: var(--accent);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        table th,
        table td {
            padding: 12px;
            border: 1px solid var(--border);
            text-align: center;
        }

        .total {
            font-size: 20px;
            font-weight: 600;
            text-align: right;
        }
    </style>
</head>

<body>

    <nav class="navbar">
        <a href="{{ url('/') }}" class="logo">Game</a>
        <div class="nav-links">
            <a href="{{ url('/') }}">Beranda</a>
        </div>
    </nav>

    <div class="container">

        <a href="{{ url('/') }}" class="back-link">
            ← Kembali ke Store
        </a>

        <!-- Ubah struktur detail card -->
        <div class="detail-card">
            <!-- Kolom kiri: gambar dan requirements -->
            <div class="left-column">
                <div class="game-image">
                    <img src="{{ asset('images/' . $game->image) }}" alt="{{ $game->title }}">
                </div>
                <!-- Requirements di bawah gambar -->
                <div class="requirements">
                    <h3>Minimum Requirements</h3>
                    <div class="requirements-grid">
                        <div class="requirement-box">
                            <span>OS</span>
                            <p>{{ $game->os }}</p>
                        </div>
                        <div class="requirement-box">
                            <span>Processor</span>
                            <p>{{ $game->processor }}</p>
                        </div>
                        <div class="requirement-box">
                            <span>Memory</span>
                            <p>{{ $game->memory }}</p>
                        </div>
                        <div class="requirement-box">
                            <span>Graphics</span>
                            <p>{{ $game->graphics }}</p>
                        </div>
                        <div class="requirement-box">
                            <span>Storage</span>
                            <p>{{ $game->storage }}</p>
                        </div>
                        <div class="requirement-box">
                            <span>DirectX</span>
                            <p>{{ $game->directx }}</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Kolom kanan: info game -->
            <div class="right-column">
                <h1 class="game-title">{{ $game->title }}</h1>
                <div class="game-price {{ $game->price_numeric == 0 ? 'free' : '' }}">
                    {{ $game->price_numeric == 0 ? 'Free' : 'Rp ' . number_format($game->price_numeric, 0, ',', '.') }}
                </div>
                <p class="description">{{ $game->description }}</p>
                <a href="{{ route('game.checkout', $game->id) }}"
                    class="btn-buy {{ $game->price_numeric == 0 ? 'free' : '' }}">
                    {{ $game->price_numeric == 0 ? 'Ambil Gratis' : 'Beli Sekarang' }}
                </a>

                <!-- Fitur -->
                <div class="features">
                    <h3>Fitur</h3>
                    <ul>
                        <li>Akses penuh seumur hidup</li>
                        <li>Transfer ke akun Steam</li>
                        <li>Garansi 24 jam</li>
                        <li>Support 24/7</li>
                    </ul>
                </div>
            </div>
        </div> <!-- end detail-card -->

    </div> <!-- end container -->

</body>

</html>
