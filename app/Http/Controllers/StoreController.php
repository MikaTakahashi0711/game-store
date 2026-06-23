<?php

namespace App\Http\Controllers;

use App\Models\Game;

class StoreController extends Controller
{
    /**
     * Menampilkan halaman utama store.
     */
    public function index()
    {
        $games = Game::all();

        return view('store.index', [
            'title' => 'Game Store',
            'games' => $games,
        ]);
    }

    /**
     * Menampilkan detail produk.
     */
    public function detail($id)
    {
        $game = Game::findOrFail($id);

        return view('store.detail', [
            'title' => $game->title,
            'game' => $game,
            'game_id' => $id,
        ]);
    }

    /**
     * Halaman checkout/pembayaran.
     */
    public function checkout($id)
    {
        $game = Game::findOrFail($id);

        return view('store.checkout', [
            'title' => 'Checkout',
            'game' => $game,
            'game_id' => $id,
        ]);
    }

     public function qris($id)
    {
        $game = Game::findOrFail($id);

        return view('store.qris', [
            'title' => 'QRIS Payment',
            'game' => $game
        ]);
    }

    public function success($id)
{
    $game = Game::findOrFail($id);

    return view('store.success', [
        'title' => 'Pembayaran Berhasil',
        'game' => $game
    ]);
}
}
