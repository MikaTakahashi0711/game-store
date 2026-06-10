<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Pembayaran Berhasil</title>

    <style>
        body{
            font-family: Arial, sans-serif;
            background:#1b2838;
            color:white;
            display:flex;
            justify-content:center;
            align-items:center;
            height:100vh;
        }

        .card{
            background:#16202d;
            padding:40px;
            border-radius:10px;
            text-align:center;
            width:500px;
        }

        .success{
            font-size:70px;
            color:#5cb85c;
            margin-bottom:20px;
        }

        h1{
            margin-bottom:15px;
        }

        p{
            color:#c6d4df;
            margin-bottom:20px;
        }

        .btn{
            display:inline-block;
            padding:12px 25px;
            background:#66c0f4;
            color:#171a21;
            text-decoration:none;
            border-radius:5px;
            font-weight:bold;
        }
    </style>
</head>
<body>

    <div class="card">

        <div class="success">✓</div>

        <h1>Pembayaran Berhasil</h1>

        <p>
            Game <strong>{{ $game->title }}</strong>
            berhasil dibeli.
        </p>

        <p>
            Terima kasih telah berbelanja di GameStore.
        </p>

        <a href="{{ url('/') }}" class="btn">
            Kembali ke Store
        </a>

    </div>

</body>
</html>