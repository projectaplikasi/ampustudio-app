<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;
    protected $fillable =[
        'product_id',
        'name_customer',
        'phone_customer',
        'email_customer',
        'address_customer',
        'type_customer',
        'tanggal_sewa',
        'tanggal_kembali',
        'jumlah',
        'total_biaya',

    ];
}
