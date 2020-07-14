<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class MitraResource extends JsonResource
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
            "id"             => $this->id,
            "nama_mitra"     =>$this->nama_mitra,
            "email"          =>$this->email,
            "no_hp"          =>$this->no_hp,
            "password"       =>$this->password,
            "nama_pemilik"   =>$this->nama_pemilik,
            "nama_bank"      =>$this->nama_bank,
            "nomor_rekening" =>$this->nomor_rekening,
            "nama_akun_bank" =>$this->nama_akun_bank,
            "alamat"         =>$this->alamat,
            "lat"           =>$this->latitude,
            "lng"           =>$this->longitude,
            "status"         =>$this->status,
            "makanan"        => MakananResource::collection($this->makanans)

        ];
    }
}
