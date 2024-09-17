@extends('layout.layout')
@section('content')

    <!-- Header -->
    <nav class="bg-white text-black p-4 px-6 flex justify-between items-center shadow-lg">
        <h1 class="text-lg font-bold">Transaksi</h1>
        <a href="/detail" class="text-sm text-black">kembali</a>
    </nav>

    <!-- Main Content -->
        <!-- Product Detail Section -->
        <div class="flex flex-col h-auto md:flex-row w-full gap-4 p-6 rounded-lg">
            <!-- Product Image -->
            <div class="w-full md:w-1/2 flex justify-center items-center bg-gray-300 h-[70vh] shadow-md">
                <img src="{{ asset('img/'. $product->image) }}" class="w-full h-full object-contain" alt="">
            </div>
            <!-- Product Info -->
            <div
                class="w-full md:w-1/2 bg-gray-50 p-4 rounded-md shadow-md border border-gray-200 flex flex-col justify-between">
                <ul class="space-y-2 text-sm md:text-lg">
                    <li><strong>Nama:</strong> {{ $product->name }}</li>
                    <li><strong>Spesifikasi:</strong> {{ $product->spesifikasi }}</li>
                    <li><strong>Merk:</strong> {{ $product->merk }}</li>
                    <li><strong>Kode Produk:</strong> {{ $product->kode_produk }}</li>
                    <li><strong>Tersedia:</strong> {{ $product->stok }}Barang</li>
                    <li><strong>Harga:</strong> <span class="text-red-500">{{ number_format($product->harga, 0, ',', '.') }}/days</span></li>
                    <li><strong>Deskripsi:</strong>{{ $product->deskripsi }}</li>
                </ul>
            </div>
        </div>

        <!-- Related Products Section -->
        <section class="mt-8 p-5">
            <form action="/pesanproduct={{ $product->id }}" method="post">
                @csrf
                <h1 class="font-semibold text-lg mb-5">Informasi Penyewa</h1>
                <div class="grid gap-6 mb-6 md:grid-cols-2">
                    <div>
                        <label for="nama_lengkap"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Lengkap</label>
                        <input type="text" id="nama_lengkap" name="name_customer"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="John" required />
                    </div>
                    <div>
                        <label for="no_telepon" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">No
                            Telepon</label>
                        <input type="text" id="no_telepon" name="phone_customer"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="+62 894 6673 2822" required />
                    </div>
                    <div>
                        <label for="alamat"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alamat</label>
                        <input type="text" id="alamat" name="address_customer"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="kirim alamat anda" required />
                    </div>
                    <div>
                        <label for="email"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                        <input type="email" id="email" name="email_customer"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="@johndoen" required />
                    </div>
                    <div>
                        <label for="type_penyewa" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Type
                            Penyewa</label>
                        <select id="type_penyewa" name="type_customer"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected>Pilih type</option>
                            <option value="mahasiswa_umum">Mahasiswa Umum</option>
                            <option value="mahasiswa_praktek">Mahasiswa Praktek</option>
                            <option value="umum">Umum</option>
                            <option value="divisi">Divisi</option>
                        </select>
                    </div>
                </div>
                <h1 class="font-semibold text-lg mb-5">Informasi Penyewa</h1>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                    <div>
                        <label for="tanggal_sewa"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal Sewa</label>
                        <input type="date" id="tanggal_sewa" name="tanggal_sewa"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="" required />
                    </div>
                    <div>
                        <label for="harga_sewa"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Harga sewa</label>
                        <input type="number" id="harga_sewa" name="harga_sewa" value="5000"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            disabled />
                    </div>
                    <div>
                        <label for="tanggal_pengembalian"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal
                            Pengembalian</label>
                        <input type="date" id="tanggal-pengembalian" name="tanggal_kembali"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            required />
                    </div>
                    <div>
                        <label for="jumlah"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jumlah</label>
                        <input type="number" id="jumlah" name="jumlah"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                    </div>
                </div>
                <div class="flex mt-5 justify-end items-center">
                    <button type="submit"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Pesan</button>
                </div>
            </form>


        </section>
        @endsection