@extends ('layout.layout')
@section('content')
<div class="flex justify-center items-center">
<div class="bg-white w-full">

   
    <div class="flex justify-between items-center bg-purple-600 text-white p-3 rounded-t-lg">
        <h2 class="text-lg font-bold">Tambah Produk</h2>
        <a href="/halamandataproduk" class="text-sm">kembali</a>
    </div>
@if (session()->has('success'))
<div class="bg-blue-500 p-2">{{ session ('success')}}</div>
@endif
<form action="/tambahproduk" method="POST" enctype="multipart/form-data" class="p-8 w-4/5">
@csrf
 <div class="nb-4">
<label class="block text-gray-600 mb-2">Nama Produk</label>
<input type="text" name="nama_produk" value="{{ old('nama_produk')}}"
class="w-full p-3 rounded bg-gray-200 border border-gray-300 focus:outline-none focus: border-blue-500">
@error('nama_produk')
<p class="text-se text-red-500">{{$message}}</p>
@enderror
 </div>
<div class="mb-4">
<label class="block text-gray-600 mb-2">Spesifikasi</label>
<input type="text" name="spesifikasi" value="{{ old('spesifikasi')}}"
class="w-full p-3 rounded bg-gray-200 border border-gray-300 focus:outline-none focus:border-blue-500">
@error('spesifikasi') 
<p class="text-se text-red-500">{{$message}}</p>
@enderror
 </div>

<div class="mb-4">
    <label class="block text-gray-600 mb-2">Stok</label>
    <input type="number" name="stok" value="{{old('stok')}}"
    class="w-full p-3 rounded bg-gray-200 border border-gray-380 focus:outline-none focus:border-blue-500">
    @error("stok")
    <p class="text-se text-red-500">{{$message}}</p>
    @enderror
</div>

 <div class="mb-4">
    <label class="block text-gray-600 mb-2">Harga</label>
    <input type="text" name="harga" value="{{old('harga')}}"
    class="w-full p-3 rounded bg-gray-200 border border-gray-380 focus:outline-none focus:border-blue-500">
    @error("harga")
    <p class="text-se text-red-500">{{$message}}</p>
    @enderror
     </div>

     <div class="mb-4">
        <label class="block text-gray-600 mb-2">Merk</label>
        <input type="text" name="merk" value="{{old('merk')}}"
        class="w-full p-3 rounded bg-gray-200 border border-gray-380 focus:outline-none focus:border-blue-500">
        @error("merk")
        <p class="text-se text-red-500">{{$message}}</p>
        @enderror
         </div>

         <div class="mb-4">
            <label class="block text-gray-600 mb-2">Deskripsi</label>
            <textarea name="deskripsi" rows="3" value="{{ old('Deskripsi') }}"
            class="w-full p-3 rounded bg-gray-200 border border-gray-380 focus:outline-none focus:border-blue-500"></textarea>
            @error("Deskripsi")
            <p class="text-sm text-red-500">{{$message}}</p>
            @enderror
             </div>
    <div class="mb-4">
    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Upload file</label>
    <input name="image" value="{{ old('image') }}"  
    class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-100 Focus: outline-none dark:bg-gray-700 dark:border-gray-600 dark"
    aria-describedby="file_input_help" id="file_input" type="file">
    @error('image')
    <p class= "text-sm text-red-500">{{ $message }}</p>
    @enderror
     </div>

     <div class="flex justify-end">
      <button type="submit"
    class="bg-blue-500 text-black py-2 px-6 rounded hover:bg-blue-600 focus:outline-none">Tambah</button>
    </div>
</form> 
</div>
</div>
    @endsection
