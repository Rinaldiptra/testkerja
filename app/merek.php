<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class merek extends Model

    {
        protected $table = 'merek';
        protected $fillable = ['merek'];

        public function barang()
        {
            return $this->hasMany(Barang::class);
        }
    }

