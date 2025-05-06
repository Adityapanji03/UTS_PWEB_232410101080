<nav class="bg-white shadow-lg">
    <div class="max-w-6xl mx-auto px-4">
        <div class="flex justify-between">
             {{-- Logo dan menu utama --}}
            <div class="flex space-x-7">
                <div>
                    <!-- Logo -->
                    <a href="{{ route('index') }}" class="flex items-center py-2 px-2">
                        <img src="{{ asset('img/logo.png') }}" alt="logo panjisop" class="h-8 w-7 mr-2">
                        <span class="font-semibold text-gray-500 text-lg">PanjiShop</span>
                    </a>
                </div>
                {{-- Menu Navigasi Utama --}}
                <div class="hidden md:flex items-center space-x-1">
                    <a href="{{ route('index') }}" class="py-4 px-2 text-blue-500 border-b-4 border-blue-500 font-semibold ">Beranda</a>
                    <a href="#" class="py-4 px-2 text-gray-500 font-semibold hover:text-blue-500 transition duration-300">Produk</a>
                    <a href="#" class="py-4 px-2 text-gray-500 font-semibold hover:text-blue-500 transition duration-300">Jasa Joki</a>
                    <a href="#" class="py-4 px-2 text-gray-500 font-semibold hover:text-blue-500 transition duration-300">Jasa Gift</a>
                    <a href="#" class="py-4 px-2 text-gray-500 font-semibold hover:text-blue-500 transition duration-300">Tentang Kami</a>
                </div>
            </div>

            {{-- login --}}
            <div class="hidden md:flex items-center space-x-3">
                <a href="{{ route('login') }}" class="py-2 px-4 flex items-center rounded-md bg-blue-500 hover:bg-blue-600 text-white font-semibold transition duration-200">
                    <img src="{{ asset('img/icons8-login-50 (1).png') }}" alt="Login" class="h-6 w-6 mr-2">
                    <span>Login</span>
                </a>
            </div>

             {{-- menu button --}}
            <div class="md:hidden flex items-center">
                <button class="outline-none hp-menu-button">
                    <img src="{{ asset('img/icons8-menu-50.png') }}" alt="Menu" class="h-8 w-8">
                </button>
            </div>
        </div>
    </div>

     {{-- menu --}}
    <div class="hidden hp-menu">
        <ul class="">
            <li><a href="{{ route('login') }}" class="block text-sm px-2 py-4 hover:bg-blue-500 transition duration-300">Login</a></li>
            <li class="active"><a href="{{ route('index') }}" class="block text-sm px-2 py-4 text-white bg-blue-500 font-semibold">Beranda</a></li>
            <li><a href="#" class="block text-sm px-2 py-4 hover:bg-blue-500 transition duration-300">Produk</a></li>
            <li><a href="#" class="block text-sm px-2 py-4 hover:bg-blue-500 transition duration-300">Jasa Joki</a></li>
            <li><a href="#" class="block text-sm px-2 py-4 hover:bg-blue-500 transition duration-300">Jasa Gift</a></li>
            <li><a href="#" class="block text-sm px-2 py-4 hover:bg-blue-500 transition duration-300">Tentang Kami</a></li>
        </ul>
    </div>
</nav>
