@extends('layouts.app')

@section('content')
<div class="max-w-md w-full bg-white p-8 rounded-xl shadow-md space-y-6 items-center mx-auto py-8 my-12">
    <div class="text-center">
        <h2 class="text-3xl font-bold text-gray-900">Masuk ke Akun Anda</h2>
        <p class="mt-2 text-sm text-gray-600">
            Atau <a href="#" class="font-medium text-blue-600 hover:text-blue-500">buat akun baru</a>
        </p>
    </div>

    <form class="space-y-6" action="{{ route('UserLogin') }}" method="POST">
        @csrf
        <div>
            <label for="username" class="block text-sm font-medium text-gray-700">Username</label>
            <input id="username" name="username" type="text" required
                   class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
        </div>

        <div>
            <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
            <input id="password" name="password" type="password" required
                   class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
        </div>

        <div class="flex items-center justify-between">
            <div class="flex items-center">
                <input id="remember-me" name="remember-me" type="checkbox"
                       class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                <label for="remember-me" class="ml-2 block text-sm text-gray-900">Ingat saya</label>
            </div>
            <div class="text-sm">
                <a href="#" class="font-medium text-blue-600 hover:text-blue-500">Lupa password?</a>
            </div>
        </div>

        <div>
            <button type="submit"
                    class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                Masuk
            </button>
        </div>
    </form>

    <div class="relative">
        <div class="absolute inset-0 flex items-center">
            <div class="w-full border-t border-gray-300"></div>
        </div>
        <div class="relative flex justify-center text-sm">
            <span class="px-2 bg-white text-gray-500">Atau masuk dengan</span>
        </div>
    </div>

    <div class="grid grid-cols-3 gap-3">
        <a href="#" class="w-full inline-flex justify-center py-2 px-4 border border-gray-300 rounded-md shadow-sm bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
            <img src="https://yt3.googleusercontent.com/FJI5Lzbf2dMd32xOqhoKpJArJooZhoX6v2qOcFO-wjSZUvs3H9xqq2gK4DQ47X0KnYgf7X2rpdU=s900-c-k-c0x00ffffff-no-rj" alt="Google" class="h-5 w-5">
        </a>
        <a href="#" class="w-full inline-flex justify-center py-2 px-4 border border-gray-300 rounded-md shadow-sm bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
            <img src="https://png.pngtree.com/png-clipart/20180515/ourmid/pngtree-facebook-logo-facebook-icon-png-image_3566127.png" alt="Facebook" class="h-5 w-5">
        </a>
        <a href="#" class="w-full inline-flex justify-center py-2 px-4 border border-gray-300 rounded-md shadow-sm bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
            <img src="https://assets.promediateknologi.id/crop/0x0:0x0/0x0/webp/photo/p2/01/2023/07/30/logo-Twitter-2012-2023-857799425.jpg" alt="Twitter" class="h-5 w-5">
        </a>
    </div>
</div>
@endsection
