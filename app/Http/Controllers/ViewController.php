<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Product;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    // 
     public function index() 
     { $title= 'Ampu Studio';
        $produk =   Product::all();
        $contact =   Contact::first();
        return view("index", compact('title','produk', 'contact'));
    }


    public function detail(Product $product)
     {$title= 'Detail Produk';
        $data=$product;
        $produk =   Product::all();
        return view("detail", compact('title','data','produk'));
    }

    public function product() {$title= 'Produk';
        return view("product", compact('title'));
    }

    public function riwayattransaksi() {$title= 'Riwayat Transaksi';
        return view("riwayattransaksi", compact('title'));
    }

    public function transaksi(Product $product) {$title= 'transaksi';
        return view("transaksi", compact('title', 'product'));
    }

    public function halamanadmin() {$title= 'Halaman Admin';
        return view("halamanadmin", compact('title'));
    }

    public function tambahproduk() {$title= 'Tambah Produk';
        return view("admin.tambahproduk", compact('title'));
    }

    public function halamandataproduk() 
    {$title= 'Data Produk';
        $produk =   Product::all();

        return view("admin.halamandataproduk", compact('title','produk'));
    }

    public function produkedit(Product $product) 
    {$title= 'Produk Edit';

        return view('admin.produkedit', compact('title','product'));
    }


    public function kontak() 
    {$title= 'Data Kontak';
        $kontak= Contact::all();
        return view('admin.datakontak', compact('title','kontak'));
    }


    public function tambahkontak() 
    {$title= 'Tambah Kontak';
        return view('admin.tambahkontak', compact('title'));
    }

    public function editkontak(Contact $contact) 
    {$title= 'Edit Kontak';
        return view('admin.editkontak', compact('title','contact'));
    }



    
}
