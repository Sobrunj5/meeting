<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderMakanan extends Model
{
    public function makanan()
    {
        return $this->belongsTo(Makanan::class, 'id_makanan', 'id');
    }
}
