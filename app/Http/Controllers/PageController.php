<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class PageController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function login()
    {
        return view('login');
    }

    public function dashboard(Request $request)
    {
        $username = $request->query('username');
        return view('dashboard', compact('username'));
    }

    public function profile(Request $request)
    {
        $username = $request->query('username');
        return view('profile', compact('username'));
    }

    public function pengelolaan()
    {
        $transaksi = [
            [
                'id' => 1,
                'username' => 'player123',
                'game' => 'Mobile Legends',
                'item' => '100 Diamond',
                'harga' => 15000,
                'tanggal' => '2025-05-05 23:00:00',
                'status' => 'Berhasil',
            ],
            [
                'id' => 2,
                'username' => 'freefire_pro',
                'game' => 'Free Fire',
                'item' => '50 Diamond',
                'harga' => 8000,
                'tanggal' => '2025-05-05 22:30:00',
                'status' => 'Berhasil',
            ],
            [
                'id' => 3,
                'username' => 'roblox_lover',
                'game' => 'Roblox',
                'item' => '400 Robux',
                'harga' => 45000,
                'tanggal' => '2025-05-05 22:00:00',
                'status' => 'Pending',
            ],
            [
                'id' => 4,
                'username' => 'moba_addict',
                'game' => 'Mobile Legends',
                'item' => '28 Diamond',
                'harga' => 4500,
                'tanggal' => '2025-05-05 21:45:00',
                'status' => 'Berhasil',
            ],
            [
                'id' => 5,
                'username' => 'ff_player',
                'game' => 'Free Fire',
                'item' => '100 Diamond',
                'harga' => 15000,
                'tanggal' => '2025-05-05 21:30:00',
                'status' => 'Gagal',
            ],
        ];

        return view('pengelolaan', compact('transaksi'));
    }

    public function UserLogin(Request $request)
    {
        $validated = $request->validate([
            'username' => 'required|string',
            'password' => 'required|min:8',
        ]);

        session(['diautentifikasi' => true]);
        session(['usernameLogin' => $request->username]);

        return Redirect::route('dashboard', ['username' => $request->username]);
    }

    public function logout()
    {
        session()->forget(['diautentifikasi', 'usernameLogin']);
        return redirect()->route('login');
    }
}
