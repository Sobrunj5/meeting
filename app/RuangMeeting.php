<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RuangMeeting extends Model
{
    protected $guarded =[];
    
    public function  mitra(){
        return $this->belongsTo( Mitra::class, 'id_mitra','id');
    }

    public function promo()
    {
        return $this->belongsTo(Promo::class, 'id_ruang', 'id');
    }
}
