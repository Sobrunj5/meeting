<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BookingResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            "id"        => $this->id,
            "id_ruang"  =>$this->id_ruang,
            "id_user"   =>$this->id_user,
            "lama"      =>$this->lama,
            "tanggal"   =>$this->tanggal,
            "jam"       =>$this->jam,
            "makanan"   =>$this->makanan,
            "catatan"   =>$this->catatan,
            "total"     =>$this->total,
            "bayar"     =>$this->bayar,
            "tanggal_boking"=>$this->tanggal_boking,
            "url"       =>$this->url,
            "ipaymu"    =>$this->ipaymu,
            "status"    =>$this->status,


        ];
    }
}
