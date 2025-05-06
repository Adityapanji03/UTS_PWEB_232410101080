@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section class="bg-[image:url('https://static-src.vocagame.com/gopay/GG-MLBB%20FREE%20DM%20MARCH%20WEB%20BANNER-6133-original.webp')] bg-cover bg-center text-white py-16 rounded-lg mb-10">
    <div class="container mx-auto px-4 text-center">
        <h1 class="text-4xl md:text-5xl font-bold mb-4">Top Up Game Favoritmu</h1>
        <p class="text-xl mb-8">Proses cepat, aman, dan harga terjangkau</p>
        <a href="#products" class="bg-white text-blue-600 px-6 py-3 rounded-full font-semibold hover:bg-gray-100 transition duration-300">Lihat Produk</a>
    </div>
</section>

<!-- Game Categories -->
<section id="products" class="mb-12">
    <h2 class="text-3xl font-bold mb-8 text-center">Pilih Game</h2>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <!-- Mobile Legends -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition duration-300">
            <div class="bg-sky-600 p-4 text-white">
                <div class="flex items-center">
                    <img src="https://play-lh.googleusercontent.com/QXCVbZd0d71ho4MIYHHxnY6BJFGXI-fzRS5MXJXU1n4n2T-VdQgB1vrdJpydokA34UA" alt="Mobile Legends" class="h-12 w-12 mr-3">
                    <h3 class="text-xl font-bold">Mobile Legends</h3>
                </div>
            </div>
            <div class="p-6">
                <div class="mb-4">
                    <label class="block text-gray-700 mb-2">Jumlah Diamond</label>
                    <select class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <option>5 Diamond - Rp 1.000</option>
                        <option>12 Diamond - Rp 2.000</option>
                        <option>28 Diamond - Rp 4.500</option>
                        <option>50 Diamond - Rp 8.000</option>
                        <option>100 Diamond - Rp 15.000</option>
                    </select>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 mb-2">ID Game</label>
                    <input type="text" placeholder="Masukkan ID Game" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 mb-2">Server</label>
                    <select class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <option>Indonesia</option>
                        <option>Malaysia</option>
                        <option>Singapura</option>
                    </select>
                </div>
                <button class="w-full bg-sky-600 text-white py-2 rounded-lg hover:bg-sky-600 transition duration-300">Beli Sekarang</button>
            </div>
        </div>

        <!-- Free Fire -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition duration-300">
            <div class="bg-sky-700 p-4 text-white">
                <div class="flex items-center">
                    <img src="https://play-lh.googleusercontent.com/6llpraFcTI0rEUuRpWEG9NWWblvm106y5JXcDzu60ACuaUYDD3i70a-p9_QM65NsGDE" alt="Free Fire" class="h-12 w-12 mr-3">
                    <h3 class="text-xl font-bold">Free Fire</h3>
                </div>
            </div>
            <div class="p-6">
                <div class="mb-4">
                    <label class="block text-gray-700 mb-2">Jumlah Diamond</label>
                    <select class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <option>5 Diamond - Rp 1.000</option>
                        <option>12 Diamond - Rp 2.000</option>
                        <option>28 Diamond - Rp 4.500</option>
                        <option>50 Diamond - Rp 8.000</option>
                        <option>100 Diamond - Rp 15.000</option>
                    </select>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 mb-2">ID Game</label>
                    <input type="text" placeholder="Masukkan ID Game" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 mb-2">Server</label>
                    <select class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <option>Indonesia</option>
                        <option>Thailand</option>
                        <option>Vietnam</option>
                    </select>
                </div>
                <button class="w-full bg-sky-700 text-white py-2 rounded-lg hover:bg-sky-600 transition duration-300">Beli Sekarang</button>
            </div>
        </div>

        <!-- Roblox -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition duration-300">
            <div class="bg-sky-800 p-4 text-white">
                <div class="flex items-center">
                    <img src="https://yt3.googleusercontent.com/nDw4X8fpUvFxoI1MWb45oMaiaAN4GS_qv1N3861gK7LPISIeefLXra3YrcCbT_hE6Wsd815s=s900-c-k-c0x00ffffff-no-rj" alt="Roblox" class="h-12 w-12 mr-3">
                    <h3 class="text-xl font-bold">Roblox</h3>
                </div>
            </div>
            <div class="p-6">
                <div class="mb-4">
                    <label class="block text-gray-700 mb-2">Jumlah Robux</label>
                    <select class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <option>80 Robux - Rp 10.000</option>
                        <option>170 Robux - Rp 20.000</option>
                        <option>400 Robux - Rp 45.000</option>
                        <option>800 Robux - Rp 85.000</option>
                        <option>2000 Robux - Rp 200.000</option>
                    </select>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 mb-2">Username</label>
                    <input type="text" placeholder="Masukkan Username" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 mb-2">Metode Pembayaran</label>
                    <select class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <option>Transfer Bank</option>
                        <option>E-Wallet</option>
                        <option>Pulsa</option>
                    </select>
                </div>
                <button class="w-full bg-sky-800 text-white py-2 rounded-lg hover:bg-sky-600 transition duration-300">Beli Sekarang</button>
            </div>
        </div>
    </div>
</section>

<!-- Testimoni -->
<section class="mb-12">
    <h2 class="text-3xl font-bold mb-8 text-center">Testimoni Pelanggan</h2>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 flex">
        <div class="bg-white p-6 rounded-lg shadow-md">
            <div class="flex items-center mb-4">
                <img src="https://rapidapi.com/hub/_next/image?url=https%3A%2F%2Frapidapi-prod-apis.s3.amazonaws.com%2F76f357af-5961-43d2-8dd8-15683986f748.jpg&w=3840&q=75" alt="User" class="h-12 w-12 rounded-full mr-4">
                <div>
                    <h4 class="font-bold">Mbak Inem</h4>
                </div>
            </div>
            <p>"Topup MLBB sangat cepat, hanya 5 menit diamond sudah masuk. Recommended banget!"</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-md">
            <div class="flex items-center mb-4">
                <img src="https://rapidapi-prod-apis.s3.amazonaws.com/b42aa17d-8ae0-4a28-b29f-587af5454390.png" alt="User" class="h-12 w-12 rounded-full mr-4">
                <div>
                    <h4 class="font-bold">Ani Wijaya</h4>
                </div>
            </div>
            <p>"Pertama kali topup Robux disini, prosesnya mudah dan harganya murah."</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-md">
            <div class="flex items-center mb-4">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRHh9Y7tcmwEr_od64uK2G5DokOr_yxia1xVw&s" alt="User" class="h-12 w-12 rounded-full mr-4">
                <div>
                    <h4 class="font-bold">Sudarti listi</h4>
                </div>
            </div>
            <p>"CS nya ramah dan membantu, Free Fire diamond langsung masuk setelah pembayaran."</p>
        </div>
    </div>
</section>
@endsection
