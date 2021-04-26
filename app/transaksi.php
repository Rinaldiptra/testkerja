<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
    protected $table ='transaksi';
    protected $fillable = ['kd_barang','harga_barang', 'jumlah_beli', 'total_harga'];

    public function barang()
    {
        return $this->belongsTo(Barang::class, 'kd_barang');
    }
}
