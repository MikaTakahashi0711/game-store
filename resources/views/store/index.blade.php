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
            background-color: #1b2838;
            color: white;
        }

        /* Navbar */
        .navbar {
            background-color: #171a21;
            padding: 15px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 24px;
            font-weight: bold;
            color: #66c0f4;
        }

        .nav-links a {
            color: #b8b6b4;
            text-decoration: none;
            margin-left: 20px;
            font-size: 14px;
        }

        .nav-links a:hover {
            color: #fff;
        }

        /* Hero Section */
        .hero {
            background: linear-gradient(to bottom, #1b2838, #2a475e);
            padding: 50px 30px;
            text-align: center;
        }

        .hero h1 {
            font-size: 40px;
            margin-bottom: 10px;
        }

        .hero p {
            color: #8f98a0;
            font-size: 18px;
        }

        /* Game Grid */
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 30px;
        }

        .games-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 20px;
        }

        .game-card {
            background-color: #16202d;
            border-radius: 5px;
            overflow: hidden;
            transition: transform 0.3s;
        }

        .game-card:hover {
            transform: translateY(-5px);
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

        .game-info {
            padding: 15px;
        }

        .game-title {
            color: white;
            text-decoration: none;
        }

        .game-price {
            color: #a4d007;
        }

        /* Button */
        .btn-steam {
            background-color: #66c0f4;
            color: #171a21;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 3px;
            font-weight: bold;
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar">
        <div class="logo">GameSTore</div>
        <div class="nav-links">
            <a href="#">Beranda</a>
            <a href="#">Library Saya</a>
            <a href="#">Login Steam</a>
        </div>
    </nav>

    <!-- Hero -->
    <section class="hero">
        <h1>Temukan Game Favoritmu</h1>
        <p>Bagikan dan nikmati game bersama teman-temanmu</p>
    </section>

    <!-- Game List -->
    <div class="container">
        <h2 style="margin-bottom: 20px;">Game Populer</h2>

        <div class="games-grid">
            @foreach ($games as $game)
                <a href="{{ route('game.detail', $game->id) }}" class="game-link">
                    <div class="game-card">

                        <div class="game-image">
                            <img src="{{ asset('images/' . $game->image) }}" alt="{{ $game->title }}">
                        </div>

                        <div class="game-info">

                            <h3 class="game-title">
                                {{ $game->title }}
                            </h3>

                            <p class="game-price">
                                @if ($game->price_numeric == 0)
                                    Free
                                @else
                                    Rp {{ number_format($game->price_numeric, 0, ',', '.') }}
                                @endif
                            </p>

                        </div>

                    </div>

                </a>
            @endforeach
        </div>
    </div>

</body>

</html>
