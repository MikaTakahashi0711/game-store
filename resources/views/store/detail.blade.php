<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #1b2838;
            color: white;
        }

        .navbar {
            background: #171a21;
            padding: 15px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            color: #66c0f4;
            text-decoration: none;
            font-size: 24px;
            font-weight: bold;
        }

        .nav-links a {
            color: #b8b6b4;
            text-decoration: none;
            margin-left: 20px;
        }

        .nav-links a:hover {
            color: white;
        }

        .container {
            max-width: 1100px;
            margin: 40px auto;
            padding: 0 20px;
        }

        .back-link {
            color: #8f98a0;
            text-decoration: none;
            display: inline-block;
            margin-bottom: 20px;
        }

        .detail-card {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 30px;
            background: #16202d;
            padding: 30px;
            border-radius: 10px;
        }

        .game-image {
            height: 180px;
            overflow: hidden;
        }

        .game-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .game-title {
            font-size: 32px;
            margin-bottom: 15px;
        }

        .game-price {
            font-size: 28px;
            color: #a4d007;
            margin-bottom: 20px;
            font-weight: bold;
        }

        .game-price.free {
            color: #66c0f4;
        }

        .description {
            color: #c7d5e0;
            line-height: 1.8;
            margin-bottom: 25px;
        }

        .btn-buy {
            display: inline-block;
            padding: 15px 30px;
            border-radius: 5px;
            text-decoration: none;
            font-weight: bold;
            color: white;
            background: #5c7e10;
        }

        .btn-buy:hover {
            background: #7cb615;
        }

        .btn-buy.free {
            background: #66c0f4;
            color: #171a21;
        }

        .features {
            margin-top: 30px;
            border-top: 1px solid #2a475e;
            padding-top: 20px;
        }

        .features h3 {
            margin-bottom: 10px;
        }

        .features ul {
            padding-left: 20px;
            color: #c7d5e0;
        }

        .features li {
            margin-bottom: 8px;
        }
    </style>
</head>

<body>

    <nav class="navbar">
        <a href="{{ url('/') }}" class="logo">GameSTore</a>

        <div class="nav-links">
            <a href="{{ url('/') }}">Beranda</a>
            <a href="#">Library Saya</a>
            <a href="#">Login</a>
        </div>
    </nav>

    <div class="container">

        <a href="{{ url('/') }}" class="back-link">
            ← Kembali ke Store
        </a>

        <div class="detail-card">

            <div class="game-image">
                <img src="{{ asset('images/' . $game->image) }}" alt="{{ $game->title }}">
            </div>

            <div>

                <h1 class="game-title">
                    {{ $game->title }}
                </h1>

                <div class="game-price {{ $game->price_numeric == 0 ? 'free' : '' }}">
                    {{ $game->price_numeric == 0 ? 'Free' : 'Rp ' . number_format($game->price_numeric, 0, ',', '.') }}
                </div>

                <p class="description">
                    {{ $game->description }}
                </p>

                <a href="{{ route('game.checkout', $game->id) }}"
                    class="btn-buy {{ $game->price_numeric == 0 ? 'free' : '' }}">

                    {{ $game->price_numeric == 0 ? 'Ambil Gratis' : 'Beli Sekarang' }}

                </a>

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

        </div>

    </div>

</body>

</html>
