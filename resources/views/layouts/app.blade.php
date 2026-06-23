<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ $title ?? 'Game Store' }}</title>
    <style>
        /* Tempel semua CSS kamu di sini */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --bg-main: #0b1020;
            --bg-secondary: #131a2e;
            --card-bg: rgba(255, 255, 255, 0.05);
            --accent: #6c5ce7;
            --accent2: #00d4ff;
            --text: #f5f6fa;
            --text-soft: #9ca3af;
            --border: rgba(255, 255, 255, 0.08);
        }

        body {
            font-family: 'Poppins', sans-serif;
            background:
                radial-gradient(circle at top left, #182848 0%, transparent 30%),
                radial-gradient(circle at bottom right, #3b1d60 0%, transparent 30%),
                var(--bg-main);
            color: var(--text);
            min-height: 100vh;
        }

        /* Navbar styles */
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
            backdrop-filter: blur(12px);
            border-bottom: 1px solid var(--border);
        }

        .logo {
            font-size: 28px;
            font-weight: 700;
            letter-spacing: 1px;
            color: var(--text);
        }

        .logo::after {
            content: "STore";
            color: var(--accent2);
        }

        .nav-links {
            display: flex;
            align-items: center;
            gap: 25px;
        }

        .nav-links a {
            color: var(--text-soft);
            text-decoration: none;
            font-size: 15px;
            font-weight: 500;
            transition: 0.3s ease;
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
            background: linear-gradient(to right, var(--accent), var(--accent2));
            transition: 0.3s;
        }

        .nav-links a:hover::after {
            width: 100%;
        }

        /* Hero styles */
        .hero {
            height: 65vh;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            text-align: center;
            padding: 40px;
            position: relative;
            overflow: hidden;
        }

        .hero::before {
            content: '';
            position: absolute;
            width: 500px;
            height: 500px;
            background: radial-gradient(circle, var(--accent2), transparent 70%);
            top: -200px;
            right: -150px;
            opacity: 0.15;
        }

        .hero::after {
            content: '';
            position: absolute;
            width: 400px;
            height: 400px;
            background: radial-gradient(circle, var(--accent), transparent 70%);
            bottom: -200px;
            left: -150px;
            opacity: 0.15;
        }

        .hero h1 {
            font-size: 58px;
            font-weight: 700;
            margin-bottom: 15px;
            position: relative;
            z-index: 2;
            line-height: 1.2;
        }

        .hero p {
            color: var(--text-soft);
            font-size: 20px;
            max-width: 700px;
            position: relative;
            z-index: 2;
        }

        /* Container styles */
        .container {
            max-width: 1300px;
            margin: auto;
            padding: 50px 30px;
        }

        /* Section title */
        .container h2 {
            font-size: 34px;
            margin-bottom: 40px;
            position: relative;
            display: inline-block;
        }

        .container h2::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: -10px;
            width: 70px;
            height: 4px;
            border-radius: 20px;
            background: linear-gradient(to right, var(--accent), var(--accent2));
        }

        /* Games grid */
        .games-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(260px, 1fr));
            gap: 28px;
        }

        /* Game link without underline */
        .game-link {
            text-decoration: none;
        }

        /* Game card styles */
        .game-card {
            background: var(--card-bg);
            border: 1px solid var(--border);
            border-radius: 22px;
            overflow: hidden;
            transition: 0.4s ease;
            backdrop-filter: blur(10px);
            position: relative;
        }

        .game-card:hover {
            transform: translateY(-10px);
            box-shadow:
                0 10px 30px rgba(0, 212, 255, 0.18),
                0 0 20px rgba(108, 92, 231, 0.12);
        }

        /* Game image styles */
        .game-image {
            width: 100%;
            height: 200px;
            overflow: hidden;
            position: relative;
        }

        .game-image::after {
            content: '';
            position: absolute;
            inset: 0;
            background: linear-gradient(to top,
                    rgba(0, 0, 0, 0.6),
                    transparent);
            opacity: 0;
            transition: 0.4s;
        }

        .game-card:hover .game-image::after {
            opacity: 1;
        }

        .game-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: 0.5s ease;
        }

        .game-card:hover img {
            transform: scale(1.08);
        }

        /* Game info styles */
        .game-info {
            padding: 20px;
        }

        .game-title {
            color: var(--text);
            font-size: 20px;
            font-weight: 600;
            margin-bottom: 12px;
            transition: 0.3s;
        }

        .game-card:hover .game-title {
            color: var(--accent2);
        }

        .game-price {
            color: #8fff3c;
            font-size: 18px;
            font-weight: 600;
        }

        /* Button styles */
        .btn-steam {
            display: inline-block;
            padding: 12px 22px;
            border-radius: 14px;
            background: linear-gradient(135deg, var(--accent), var(--accent2));
            color: white;
            text-decoration: none;
            font-weight: 600;
            transition: 0.3s ease;
        }

        .btn-steam:hover {
            transform: scale(1.05);
            box-shadow: 0 10px 25px rgba(0, 212, 255, 0.25);
        }

        /* Scrollbar styles */
        ::-webkit-scrollbar {
            width: 10px;
        }

        ::-webkit-scrollbar-track {
            background: #111827;
        }

        ::-webkit-scrollbar-thumb {
            background: linear-gradient(to bottom, var(--accent), var(--accent2));
            border-radius: 20px;
        }

        /* Responsive styles */
        @media(max-width:992px) {
            .hero h1 {
                font-size: 44px;
            }

            .hero p {
                font-size: 18px;
            }

            .navbar {
                padding: 18px 25px;
            }
        }

        @media(max-width:768px) {
            .navbar {
                flex-direction: column;
                gap: 15px;
            }

            .nav-links {
                gap: 15px;
                flex-wrap: wrap;
                justify-content: center;
            }

            .hero {
                height: 55vh;
            }

            .hero h1 {
                font-size: 36px;
            }

            .hero p {
                font-size: 16px;
            }

            .container h2 {
                font-size: 28px;
            }
        }

        @media(max-width:500px) {
            .hero h1 {
                font-size: 30px;
            }

            .games-grid {
                grid-template-columns: 1fr;
            }
        }

        /* Swiper styles (if used) */
        .heroSwiper {
            max-width: 1920px;
            margin: 0 auto;
        }

        .heroSwiper .swiper-slide img {
            width: 100%;
            height: auto;
            max-height: 400px;
            object-fit: cover;
        }

        .heroSwiper .caption {
            position: absolute;
            bottom: 20px;
            right: 20px;
            background-color: rgba(11, 16, 32, 0.7);
            padding: 8px 16px;
            border-radius: 8px;
            color: var(--text);
            font-size: 14px;
            max-width: 250px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <!-- Navbar -->
    <nav class="navbar">
        <div class="logo">Game</div>
        <div class="nav-links">
            <a href="{{ url('/') }}">Beranda</a>
            <!-- Tambahkan link lain sesuai kebutuhan -->
        </div>
    </nav>

    <!-- Footer -->


    <!-- Konten dari halaman tertentu -->
    @yield('content')

    <div
        style="display:flex; align-items:flex-start; background-color:#0d1117; padding:20px; font-family:Arial, sans-serif; color:#fff;">
        <!-- Bagian Logo dan Teks -->
        <div style="flex:0 0 auto; margin-right:20px;">
            <div style="display:flex; flex-direction:column; align-items:flex-start;">
                <!-- Logo -->
                <img src="/images/Logo.jpeg" alt="GameStore Logo" style="width:40px; height:40px; margin-bottom:10px;">

                <!-- Ikon WhatsApp di bawah logo dan nama -->
                <div style="margin-top:10px;">
                    <a href="https://wa.me/6285717585673?text=Halo%20Admin%20saya%20ingin%20bertanya?%20" style="margin:0 10px; display:inline-block;">
                        <img src="https://img.icons8.com/ios-filled/24/ffffff/whatsapp.png" alt="WhatsApp"
                            style="vertical-align:middle;">
                    </a>
                </div>
            </div>
        </div>
    </div>
    </footer>
</body>

</html>
