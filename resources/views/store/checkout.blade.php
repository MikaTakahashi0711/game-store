<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
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
                text-decoration: none;
            }

            .nav-links a {
                color: #b8b6b4;
                text-decoration: none;
                margin-left: 20px;
            }

            .container {
                max-width: 900px;
                margin: 40px auto;
                padding: 0 20px;
            }

            .back-link {
                color: #8f98a0;
                text-decoration: none;
                display: inline-block;
                margin-bottom: 20px;
            }

            .checkout-card {
                background: #16202d;
                border-radius: 10px;
                padding: 30px;
            }

            .product-summary {
                display: flex;
                gap: 20px;
                margin-bottom: 25px;
                padding-bottom: 25px;
                border-bottom: 1px solid #2a475e;
            }

            .product-image {
                width: 220px;
                height: 120px;
                overflow: hidden;
                border-radius: 8px;
            }

            .product-image img {
                width: 100%;
                height: 100%;
                object-fit: cover;
            }

            .product-details h2 {
                margin-bottom: 10px;
            }

            .product-price {
                color: #a4d007;
                font-size: 24px;
                font-weight: bold;
            }

            .payment-methods {
                margin: 30px 0;
            }

            .payment-methods h3 {
                margin-bottom: 15px;
            }

            .method-option {
                padding: 15px;
                background: #0e141d;
                border-radius: 8px;
                margin-bottom: 10px;
                border: 1px solid #2a475e;
            }

            .total-section {
                background: #1f2d3d;
                padding: 20px;
                border-radius: 8px;
                margin: 25px 0;
            }

            .total-row {
                display: flex;
                justify-content: space-between;
                font-size: 18px;
            }

            .total-price {
                color: #a4d007;
                font-weight: bold;
            }

            .btn-pay {
                width: 100%;
                border: none;
                padding: 15px;
                border-radius: 6px;
                background: #5c7e10;
                color: white;
                font-size: 18px;
                font-weight: bold;
                cursor: pointer;
            }

            .btn-pay:hover {
                background: #7cb615;
            }

            .notice {
                margin-top: 20px;
                background: #2a475e;
                padding: 15px;
                border-radius: 8px;
                color: #c6d4df;
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

        <a href="{{ route('game.detail', $game->id) }}" class="back-link">
            ← Kembali ke Detail
        </a>

        <div class="checkout-card">

            <h1 style="margin-bottom:20px;">Checkout</h1>

            <div class="product-summary">

                <div class="product-image">
                    <img src="{{ asset('images/' . $game->image) }}" alt="{{ $game->title }}">
                </div>

                <div class="product-details">
                    <h2>{{ $game->title }}</h2>

                    <p class="product-price">
                        @if ($game->price_numeric == 0)
                            Free
                        @else
                            Rp {{ number_format($game->price_numeric, 0, ',', '.') }}
                        @endif
                    </p>
                </div>

            </div>

            <div class="payment-methods">
                <h3>Metode Pembayaran</h3>

                <div class="method-option">💳 Dana</div>
                <div class="method-option">🏦 Transfer Bank</div>
                <div class="method-option">📱 GoPay</div>
                <div class="method-option">💰 OVO</div>
            </div>

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

                <hr style="margin:15px 0; border-color:#2a475e;">

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

            <form action="{{ route('checkout.process', $game->id) }}" method="POST">
                @csrf

                <button type="submit" class="btn-pay">
                    Bayar Sekarang
                </button>
            </form>

            <div class="notice">
                Setelah pembayaran berhasil, game akan ditambahkan ke Library Anda.
            </div>

        </div>

    </div>

</body>

</html>
