<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetailTransaksi extends Model
{
    protected $table = 'detail_transaksi';

    protected $fillable = ['kd_user','status','total_harga_keseluruhan','bayar','kembalian','tanggal_beli'];
}
