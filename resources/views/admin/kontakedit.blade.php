@extends('layout.layout')
@section('content')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Kontak</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="bg-gray-800 text-gray-200 flex justify-center items-center min-h-screen">
    <div class="w-full max-w-md bg-white text-gray-800 p-6 rounded-lg shadow-lg">
        <h2 class="text-lg font-bold bg-purple-600 text-white p-3 rounded-t-lg">Kontak Edit</h2>
        <form class="space-y-4 mt-4">
            <div>
                <label for="whatsapp" class="sr-only">WhatsApp</label>
                <input type="text" id="whatsapp" name="whatsapp" placeholder="WhatsApp" class="w-full p-2 border border-gray-300 rounded">
            </div>
            <div>
                <label for="email" class="sr-only">Email</label>
                <input type="email" id="email" name="email" placeholder="Email" class="w-full p-2 border border-gray-300 rounded">
            </div>
            <div>
                <label for="instagram" class="sr-only">Instagram</label>
                <input type="text" id="instagram" name="instagram" placeholder="Instagram" class="w-full p-2 border border-gray-300 rounded">
            </div>
            <div>
                <label for="tiktok" class="sr-only">Tiktok</label>
                <input type="text" id="tiktok" name="tiktok" placeholder="Tiktok" class="w-full p-2 border border-gray-300 rounded">
            </div>
            
            <div class="flex justify-center mt-6">
                <a href="/halamandataproduk" class="bg-purple-600 text-white py-2 px-6 rounded">Selesai</a>
            </div>
        </form>
    </div>
@endsection