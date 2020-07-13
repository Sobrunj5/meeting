<?php

namespace App\Http\Controllers\V1\user;

use App\Http\Controllers\Controller;
use App\Makanan;
use Illuminate\Http\Request;

class MakananController extends Controller
{
    public function __construct()
    {
        $this->middleware('api');
    }

    public function makanan($id_mitra)
    {
        $makanans = Makanan::where('id_mitra', $id_mitra)
            ->where('jenis', 'bayar')->get();

        return response()->json([
            'message' => 'successfuly get makanan by mitra',
            'status' => true,
            'data' => $makanans
        ]);
    }
}
