<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class barang extends Model
{
    protected $table = 'barang';
    protected $fillable =['nama_barang', 'kd_merek', 'kd_distributor', 'tanggal_masuk','harga_beli','harga_jual', 'stok_barang', 'keterangan'];

    public function merek()
{
    return $this->belongsTo(Merek::class, 'kd_merek');
}
public function distributor()
{
    return $this->belongsTo(Distributor::class, 'kd_distirbutor');
}

public function transaksi()
        {
            return $this->hasMany(transaksi::class);
        }
}

