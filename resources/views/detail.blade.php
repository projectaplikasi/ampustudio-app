@extends('layout.layout')
@section('content')

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Produk</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body class="bg-gray-100">

    <!-- Header -->
    <nav class="bg-white text-black p-4 px-6 flex justify-between items-center shadow-lg">
        <h1 class="text-lg font-bold">Detail Produk</h1>
        <a href="/index" class="text-sm text-black">kembali</a>
    </nav>

    <!-- Main Content -->
    <main class="mx-auto">
        <!-- Product Detail Section -->
        <div class="flex flex-col h-auto md:flex-row w-full gap-4 p-6 rounded-lg">
            <!-- Product Image -->
            <div class="w-full md:w-1/2 flex justify-center items-center bg-gray-300 h-[70vh] shadow-md">
                <img src=" {{ asset('img/' . $data->image) }}" class="w-full h-full object-contain" alt="{{ $data->nama}}">
            </div>
            <!-- Product Info -->
            <div
                class="w-full md:w-1/2 bg-gray-50 p-4 rounded-md shadow-md border border-gray-200 flex flex-col justify-between">
                <ul class="space-y-2 text-sm md:text-lg">
                    <li><strong>Nama:</strong>{{ $data->nama }}</li>
                    <li><strong>Spesifikasi:</strong>{{ $data->spesifikasi }}</li>
                    <li><strong>Stok:</strong>{{ $data->stok }}</li>
                    <li><strong>Harga</strong> <span class="text-red-500">Rp. {{ number_format($data->harga, 0, ',', '.') }}/days</span></li>
                    <li><strong>Kode produk</strong>{{ $data->kode_produk }}</li>
                    <li><strong>Merk:</strong>{{ $data->merk }}</li>
                    <li><strong>Deskripsi:</strong> Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit vitae
                        accusamus iure eos veritatis, quos consequatur ducimus earum omnis incidunt, ratione, enim quo?
                        Recusandae velit, vero quam deleniti expedita similique.</li>
                </ul>
                <div class="flex justify-end mt-4">
                    <a href="/transaksi={{ $data->kode_produk }}" class="bg-red-500 text-white py-2 px-6 rounded-md">Sewa</a>
                </div>
            </div>
        </div>

        <!-- Related Products Section -->
        <section class="mt-8 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 p-5">
            <!-- Product 1 -->
            @foreach ($produk as $item)
            <a href="/detail/show={{ $item->kode_produk }}" class="bg-white rounded shadow-md ">
                <div class="w-full bg-gray-300 h-48 flex justify-center items-center">
                    <img src="{{ asset('img/' . $item->image) }}" alt="Product Image" class="w-full h-full object-cover">
                </div>
                <div class="p-4 w-full">
                    <h3 class="text-lg font-bold">{{ $item->nama }}</h3>
                    <p class="text-red-500">Rp. {{ $item->harga }}/hari</p>
                </div>
            </a>
            @endforeach
        </section>