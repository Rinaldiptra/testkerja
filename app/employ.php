<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class employ extends Model
{
    protected $table = 'employ';
    protected $fillable =['first_name','last_name', 'company', 'email', 'phone'];
}
