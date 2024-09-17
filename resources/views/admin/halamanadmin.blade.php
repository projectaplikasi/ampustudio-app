@extends('layout.layout')
@section('content')

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
    <link href="css/style.css" rel="stylesheet">
</head>

<body class="bg-gray-50 text-white">

    <button data-drawer-target="sidebar-multi-level-sidebar" data-drawer-toggle="sidebar-multi-level-sidebar"
        aria-controls="sidebar-multi-level-sidebar" type="button"
        class="inline-flex items-center p-2 mt-2 ms-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
        <span class="sr-only">Open sidebar</span>
        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
            xmlns="http://www.w3.org/2000/svg">
            <path clip-rule="evenodd" fill-rule="evenodd"
                d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
            </path>
        </svg>
    </button>

    <aside id="sidebar-multi-level-sidebar"
        class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0"
        aria-label="Sidebar">
        <div class="h-full px-3 py-4 overflow-y-auto bg-blue-500 dark:bg-gray-800">
            <h1 class="text-lg text-center text-white font-semibold">Admin AmpuStudio</h1>
            <hr class="mb-5">
            <ul class="space-y-2 font-medium">
                <li>
                    <a href="/halamanadmin"
                        class="flex items-center p-2 text-white rounded-lg dark:text-white hover:bg-blue-950 dark:hover:bg-gray-700 group">

                        <span class="ms-3">Data Penjualan</span>
                    </a>
                </li>
                <li>
                    <a href="/halamandataproduk"
                        class="flex items-center p-2 text-white rounded-lg dark:text-white hover:bg-blue-950 dark:hover:bg-gray-700 group">

                        <span class="flex-1 ms-3 whitespace-nowrap">Data Produk</span>
                    </a>
                </li>
                <li>
                    <a href="/kontakedit"
                        class="flex items-center p-2 text-white rounded-lg dark:text-white hover:bg-blue-950 dark:hover:bg-gray-700 group">
                        <span class="flex-1 ms-3 whitespace-nowrap">Kontak Edit</span>

                    </a>
                </li>
            </ul>
        </div>
    </aside>

    <div class="p-4 sm:ml-64">
        <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700">
            <!-- Canvas for the Chart -->
            <canvas id="myChart" width="400" height="200"></canvas>

            <!-- Table for the Sales Data -->
            <table class="min-w-full mt-4 border-collapse">
                <thead>
                    <tr>
                        <th class="border text-black border-gray-300 p-2">Nama Penyewa</th>
                        <th class="border text-black border-gray-300 p-2">Nama Produk</th>
                        <th class="border text-black border-gray-300 p-2">Tanggal Transaksi</th>
                        <th class="border text-black border-gray-300 p-2">Total Biaya</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="border text-black border-gray-300 p-2">Product A</td>
                        <td class="border text-black border-gray-300 p-2">150</td>
                        <td class="border text-black border-gray-300 p-2">150</td>
                        <td class="border text-black border-gray-300 p-2">150</td>
                    </tr>
                    <tr>
                        <td class="border text-black border-gray-300 p-2">Product B</td>
                        <td class="border text-black border-gray-300 p-2">200</td>
                        <td class="border text-black border-gray-300 p-2">150</td>
                        <td class="border text-black border-gray-300 p-2">150</td>
                    </tr>
                    <tr>
                        <td class="border text-black border-gray-300 p-2">Product C</td>
                        <td class="border text-black border-gray-300 p-2">100</td>
                        <td class="border text-black border-gray-300 p-2">150</td>
                        <td class="border text-black border-gray-300 p-2">150</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="/node_modules/flowbite/dist/flowbite.js"></script>
    <script>
        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar', // jenis chart: 'bar', 'line', 'pie', dll.
            data: {
                labels: ['Product A', 'Product B', 'Product C'], // Label untuk sumbu x
                datasets: [{
                    label: 'Sales Data',
                    data: [150, 200, 100], // Data penjualan
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(75, 192, 192, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(75, 192, 192, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
@endsection