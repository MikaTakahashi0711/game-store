@extends('layouts.app')

@section('title', 'Game Store - Beranda')

@section('content')
    <!-- Hero Section -->
    <div class="swiper heroSwiper">
        <div class="swiper-wrapper">
            <!-- Slide 1 -->
            <div class="swiper-slide" style="position: relative;">
                <img src="/images/requiem.jpg" alt="Promo 1" />
                <div class="caption">Diskon besar untuk game favoritmu!</div>
            </div>
            <!-- Tambah slide lain jika perlu -->
        </div>
    </div>

    <!-- Game Populer -->
    <div class="container">
        <h2>Game Populer</h2>

        <div class="games-grid">
            @foreach ($games as $game)
                <a href="{{ route('game.detail', $game->id) }}" class="game-link">
                    <div class="game-card">
                        <div class="game-image">
                            <img src="{{ asset('images/' . $game->image) }}" alt="{{ $game->title }}">
                        </div>
                        <div class="game-info">
                            <h3 class="game-title">{{ $game->title }}</h3>
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
@endsection
