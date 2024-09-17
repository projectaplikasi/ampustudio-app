@extends('layout.layout')
@section('content')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Kontak</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="bg-white-400 text-black">
    <div class="min-h-screen flex">
        <!-- Sidebar -->
        <div class="flex">
            <div class="w-1/4 bg-blue-600 text-white h-screen p-4">
            <h2 class="text-xl font-bold mb-4">Admin AmpuStudio</h2>
            <ul>
                <li class="mb-2"><a href="/datakontak" class="block p-2 bg-blue-700 rounded">Data Kontak</a></li>
                <li class="mb-2"><a href="/tambahkontak" class="block p-2 bg-blue-700 rounded">Tambah Kontak</a></li>
                <li class="mb-2"><a href="/editkontak" class="block p-2 bg-blue-700 rounded">Edit Kontak</a></li>
            </ul>
        </div>

        <!-- Main Content -->
        <div class="flex-1 p-8">
            <div class="flex justify-between items-center mb-4">
                <h1 class="text-2xl font-bold">Data Kontak</h1>
                @if ($kontak->count() < 1)
                <a href="/admin/tambahkontak" class="bg-purple-600 text-white py-2 px-4 rounded">Tambah</a>    
                @endif
            </div>

            <!-- Search Bar -->
            <div class="mb-4">
                <input type="text" placeholder="Search" class="w-full p-2 border border-gray-500 rounded">
            </div>

            <!-- Product Table -->
            <div class="overflow-x-auto">
                <table class="min-w-full border-b-slate-300 text-left">
                    <thead>
                        <tr>
                            <th class="py-2 px-4 border-b  border-b-slate-300">WhatsApp</th>
                            <th class="py-2 px-4 border-b  border-b-slate-300">Email</th>
                            <th class="py-2 px-4 border-b  border-b-slate-300">Instagram</th>
                            <th class="py-2 px-4 border-b  border-b-slate-300">Tiktok</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($kontak as $item)
                       
                        <!-- Example Row -->
                        <tr>
                            <td scope="row"
                            class="py-2 px-4 border-b border-gray-600">{{ $item->whatsapp }}</td>
                            <td scope="row"
                            class="py-2 px-4 border-b border-gray-600">{{ $item->email }}</td>
                            <td scope="row"
                            class="py-2 px-4 border-b border-gray-600">{{ $item->instagram }}</td>
                            <td scope="row"
                            class="py-2 px-4 border-b border-gray-600">{{ Str::limit($item->iframe_maps, 50, '...') }}</td>
                            <td class="py-2 px-4 border-b border-gray-600">
                                <div class="flex space-x-4 items-center justify-center">
                                    
                                    <a href="/admin/editkontak={{ $item->id }}"
                                     class="bg-green-500 text-white py-2 px-4 rounded">Edit</a>
                                
                                        <form id="delete-form-{{ $item->id }}"
                                            action="/deletekontak/{{ $item->id }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="button" onclick="confirmDelete({{ $item->id }})"
                                                class="bg-red-500 p-1 px-2 rounded-md text-white">Hapus</button>
                                        </form>
                                </div>
                                  
                            </td>
                        </tr>
                        @endforeach
                        <!-- Add more rows as needed -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @push('script')
            <script src="{{ asset('js/sweetalert.js') }}"></script>
            <script>
                function confirmDelete(id) {
                    Swal.fire({
                        title: 'Hapus Kontak!',
                        text: 'Apakah Anda Yakin?',
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Ya, Hapus Ini!',
                        cancelButtonText: 'Tidak, Batalkan'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            document.getElementById('delete-form-' + id).submit();
                        }
                    });
                }
            </script>
        @endpush
@endsection