<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class distributor extends Model
{
    protected $table = 'distributor';
    protected $fillable = ['nama_distributor', 'alamat', 'no_hp'];
    
    public function barang()
    {
        return $this->hasMany(Barang::class);
    }

}
