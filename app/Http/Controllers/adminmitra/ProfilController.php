<?php

namespace App\Http\Controllers\adminmitra;

use App\Http\Controllers\Controller;
use App\Mitra;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfilController extends Controller
{
    public  function  index ()
    {
        $datas = Mitra::all();
        return view('pages.adminmitra.profil.profil', compact('datas'));
    }

    public function updateProfil(Request $request)
    {



            //ini store atau menambahkan data ke database dengan tabel yang bernama mitras

//        $datas                       = new Mitra();
        $data                      = Auth::guard('adminmitra')->user();
        $data->alamat              = $request->alamat;
        $data->nama_pemilik        = $request->nama_pemilik;
        $data->nama_bank           = $request->nama_bank;
        $data->nomor_rekening      = $request->nomor_rekening;
        $data->nama_akun_bank      = $request->nama_akun_bank;
        $data->latitude            = $request->latitude;
        $data->longitude           = $request->longitude;

//        $data->status       = '1';
        //dd($request->all());
        $data->save();


        //jika sudah menambahkan akan di arahkan ke route ini
        return redirect()->route('profil.index');
    }
}
