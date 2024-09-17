@extends('layout.layout')
@section('content')

    <!-- Header -->
    <header class="bg-gray-800 text-white p-4">
        <div class="flex justify-between items-center">
        <h1 class="text-xl font-semibold">AmpuStudio</h1>
        <a href="/" class="text-red-500">Kembali</a>
    </header>

    <!-- Produk Section -->
    <section class="p-4 md:p-8">
        <div class="bg-white shadow-md rounded-lg p-4">
            <h2 class="text-2xl font-bold mb-4">Produk</h2>

            <!-- Product Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                <!-- Product Card -->
                <div class="border p-4 rounded-lg shadow-md">
                    <img src="https://via.placeholder.com/150" alt="Monitor Philips 20 inch" class="w-full h-40 object-cover rounded-md mb-4">
                    <h3 class="text-lg font-semibold">Monitor Philips 20 inch</h3>
                    <p class="text-gray-700 mt-2">Rp. 500.000</p>
                </div>
                <!-- Repeat Product Cards for each product -->
                <div class="border p-4 rounded-lg shadow-md">
                    <img src="https://via.placeholder.com/150" alt="Monitor Asus 20 inch" class="w-full h-40 object-cover rounded-md mb-4">
                    <h3 class="text-lg font-semibold">Monitor Asus 20 inch</h3>
                    <p class="text-gray-700 mt-2">Rp. 350.000</p>
                </div>

                <div class="border p-4 rounded-lg shadow-md">
                    <img src="https://via.placeholder.com/150" alt="Monitor AOC 23 inch" class="w-full h-40 object-cover rounded-md mb-4">
                    <h3 class="text-lg font-semibold">Monitor AOC 23 inch</h3>
                    <p class="text-gray-700 mt-2">Rp. 600.000</p>
                </div>

                <div class="border p-4 rounded-lg shadow-md">
                    <img src="https://via.placeholder.com/150" alt="Monitor AOC 23 inch" class="w-full h-40 object-cover rounded-md mb-4">
                    <h3 class="text-lg font-semibold">Monitor AOC 23 inch</h3>
                    <p class="text-gray-700 mt-2">Rp. 600.000</p>
                </div>

                <div class="border p-4 rounded-lg shadow-md">
                    <img src="https://via.placeholder.com/150" alt="Monitor AOC 23 inch" class="w-full h-40 object-cover rounded-md mb-4">
                    <h3 class="text-lg font-semibold">Monitor AOC 23 inch</h3>
                    <p class="text-gray-700 mt-2">Rp. 600.000</p>
                </div>

                <div class="border p-4 rounded-lg shadow-md">
                    <img src="https://via.placeholder.com/150" alt="Monitor AOC 23 inch" class="w-full h-40 object-cover rounded-md mb-4">
                    <h3 class="text-lg font-semibold">Monitor AOC 23 inch</h3>
                    <p class="text-gray-700 mt-2">Rp. 600.000</p>
                </div>

                <div class="border p-4 rounded-lg shadow-md">
                    <img src="https://via.placeholder.com/150" alt="Monitor AOC 23 inch" class="w-full h-40 object-cover rounded-md mb-4">
                    <h3 class="text-lg font-semibold">Monitor AOC 23 inch</h3>
                    <p class="text-gray-700 mt-2">Rp. 600.000</p>
                </div>

                <div class="border p-4 rounded-lg shadow-md">
                    <img src="https://via.placeholder.com/150" alt="Monitor AOC 23 inch" class="w-full h-40 object-cover rounded-md mb-4">
                    <h3 class="text-lg font-semibold">Monitor AOC 23 inch</h3>
                    <p class="text-gray-700 mt-2">Rp. 600.000</p>
                </div>

                <div class="border p-4 rounded-lg shadow-md">
                    <img src="https://via.placeholder.com/150" alt="Monitor AOC 23 inch" class="w-full h-40 object-cover rounded-md mb-4">
                    <h3 class="text-lg font-semibold">Monitor AOC 23 inch</h3>
                    <p class="text-gray-700 mt-2">Rp. 600.000</p>
                </div>

                <div class="border p-4 rounded-lg shadow-md">
                    <img src="https://via.placeholder.com/150" alt="Monitor AOC 23 inch" class="w-full h-40 object-cover rounded-md mb-4">
                    <h3 class="text-lg font-semibold">Monitor AOC 23 inch</h3>
                    <p class="text-gray-700 mt-2">Rp. 600.000</p>
                </div>

                <div class="border p-4 rounded-lg shadow-md">
                    <img src="https://via.placeholder.com/150" alt="Monitor AOC 23 inch" class="w-full h-40 object-cover rounded-md mb-4">
                    <h3 class="text-lg font-semibold">Monitor AOC 23 inch</h3>
                    <p class="text-gray-700 mt-2">Rp. 600.000</p>
                </div>

                <div class="border p-4 rounded-lg shadow-md">
                    <img src="https://via.placeholder.com/150" alt="Monitor AOC 23 inch" class="w-full h-40 object-cover rounded-md mb-4">
                    <h3 class="text-lg font-semibold">Monitor AOC 23 inch</h3>
                    <p class="text-gray-700 mt-2">Rp. 600.000</p>
                </div>

                <!-- Add more products as needed -->
            </div>
        </div>
    </section>

    @endsection