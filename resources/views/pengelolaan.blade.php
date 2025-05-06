@extends('layouts.appAdmin')

@section('content')
<div class="flex h-screen overflow-hidden">

    <aside id="sidebar" class="bg-sky-500 text-white w-64 space-y-6 py-7 px-2 inset-y-0 left-0 transform -translate-x-full md:translate-x-0 transition duration-200 ease-in-out fixed md:relative z-50 h-full">
        <div class="flex items-center space-x-2 px-4 mb-10">
            <img src="{{ asset('img/logo.png') }}" alt="Logo" class="w-8 h-8">
            <span class="text-2xl font-extrabold">PanjiShop</span>
        </div>

        {{-- navbar --}}
        <nav>
            <a href="{{ route('dashboard', ['username' => request()->query('username')]) }}" class="flex items-center space-x-2 py-3 px-4 rounded hover:bg-blue-500 transition duration-200">
                <img src="{{ asset('img/icons8-dashboard-50.png') }}" alt="Dashboard" class="w-5 h-5">
                <span>Dashboard</span>
            </a>
            <a href="{{ route('profile', ['username' => request()->query('username')]) }}" class="flex items-center space-x-2 py-3 px-4 rounded hover:bg-blue-500 transition duration-200">
                <img src="{{ asset('img/icons8-login-50 (1).png') }}" alt="Users" class="w-5 h-5">
                <span>Profile</span>
            </a>
            <a href="{{ route('pengelolaan', ['username' => request()->query('username')]) }}" class="flex items-center space-x-2 py-3 px-4 rounded hover:bg-blue-500 transition duration-200">
                <img src="{{ asset('img/icons8-web-analytics-50.png') }}" alt="Products" class="w-5 h-5">
                <span>Pengelolaan</span>
            </a>
            <a href="{{ route('logout') }}" class="flex items-center space-x-2 py-3 px-4 rounded hover:bg-blue-500 transition duration-200">
                <img src="{{ asset('img/icons8-logout-50.png') }}" alt="Settings" class="w-5 h-5">
                <span>Logout</span>
            </a>
        </nav>
    </aside>

    <div class="flex-1 flex flex-col overflow-hidden">
        <header class="bg-white shadow-sm z-40">
            <div class="flex items-center justify-between px-4 py-3">
                <button id="sidebarToggle" class="md:hidden text-gray-500 focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>

                <div class="hidden md:block flex-1 mx-4">
                    <div class="relative">
                        <input type="text" placeholder="Search..." class="w-full pl-10 pr-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent">
                        <div class="absolute left-3 top-2.5">
                            <img src="{{ asset('img/icons8-search-50.png') }}" alt="Search" class="w-5 h-5 text-gray-400">
                        </div>
                    </div>
                </div>

                {{-- Profile --}}
                <div class="flex items-center space-x-4">
                    <button class="text-gray-500 focus:outline-none">
                        <img src="{{ asset('img/icons8-alert-32.png') }}" alt="Notifications" class="w-6 h-6">
                    </button>
                    <div class="relative">
                        <button id="profileMenuButton" class="flex items-center space-x-2 focus:outline-none">
                            <img src="https://rapidapi-prod-apis.s3.amazonaws.com/b42aa17d-8ae0-4a28-b29f-587af5454390.png" alt="Profile" class="w-8 h-8 rounded-full object-cover">
                            <span class="hidden md:inline-block font-medium">Admin</span>
                        </button>

                        <div id="profileMenu" class="hidden absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg py-1 z-50">
                            <a href="#" class="block px-4 py-2 text-sm text-blue-300 hover:bg-gray-100">Your Profile</a>
                            <a href="#" class="block px-4 py-2 text-sm text-blue-300 hover:bg-gray-100">Settings</a>
                            <a href="{{ route('logout') }}" class="block px-4 py-2 text-sm text-blue-300 hover:bg-gray-100">Sign out</a>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        {{-- Main content untuk Pengelolaan --}}
        <main class="flex-1 overflow-y-auto p-4">
            <div class="bg-white p-6 rounded-lg shadow">
                <h2 class="text-xl font-semibold text-gray-700 mb-4">Data Transaksi Top Up</h2>

                @if (empty($transaksi))
                    <p class="text-gray-500">Belum ada transaksi top up.</p>
                @else
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        @foreach ($transaksi as $item)
                            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                                <div class="p-6">
                                    <h3 class="text-lg font-semibold text-gray-800 mb-2">{{ $item['game'] }}</h3>
                                    <p class="text-gray-600 mb-1">Username: <span class="font-medium">{{ $item['username'] }}</span></p>
                                    <p class="text-gray-600 mb-1">Item: <span class="font-medium">{{ $item['item'] }}</span></p>
                                    <p class="text-gray-600 mb-1">Harga: <span class="font-medium">Rp {{ number_format($item['harga'], 0, ',', '.') }}</span></p>
                                    <p class="text-gray-600 mb-1">Tanggal: <span class="font-medium">{{ $item['tanggal'] }}</span></p>
                                    <p class="text-gray-600">Status: <span class="{{ $item['status'] === 'Berhasil' ? 'text-green-500' : ($item['status'] === 'Pending' ? 'text-yellow-500' : 'text-red-500') }} font-medium">{{ $item['status'] }}</span></p>
                                    <div class="mt-4">
                                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Detail</button>
                                        <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline ml-2">Hapus</button>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endif
            </div>
        </main>
    </div>

    <script>
        // Toggle sidebar di hp
        document.getElementById('sidebarToggle').addEventListener('click', function() {
            document.getElementById('sidebar').classList.toggle('-translate-x-full');
        });

        // Toggle profile dropdown
        document.getElementById('profileMenuButton').addEventListener('click', function() {
            document.getElementById('profileMenu').classList.toggle('hidden');
        });

        // Close dropdown kalo klik diluar
        document.addEventListener('DOMContentLoaded', function() {
            document.addEventListener('click', function(event) {
                const profileMenu = document.getElementById('profileMenu');
                const profileButton = document.getElementById('profileMenuButton');

                if (profileButton && profileMenu) {
                    if (!profileButton.contains(event.target) && !profileMenu.contains(event.target)) {
                        profileMenu.classList.add('hidden');
                    }
                }
            });
        });
    </script>
</div>
@endsection
