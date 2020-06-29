<?php

namespace App\Http\Controllers\V1\user;

use App\Booking;
use App\Http\Controllers\Controller;
use App\Http\Resources\BookingResource;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
    }

    public  function booking(Request $request){

        try{
//            $data = new Booking();
//            $data->id_ruang         = $request->id_ruang;
//            $data->id_user          = Auth::guard('api')->user()->id;
//            $data->id_makanan       = $request->id_makanan;
//            $data->tanggal          = $request->tanggal;
//            $data->jam_mulai        = $request->jam_mulai;
//            $data->jam_selesai      = Carbon::parse($request->jam_mulai)->addHours($request->jam_selesai);
//            $data->harga            = $request->harga;
//            $data->total_bayar      = $request->total_bayar;
//            $data->save();


            return response()->json([
                'message' => 'successfully order ',
                'status' =>  true,
                'data' => $request
            ]);

        }catch (\Exception $exception){
            return response()->json([
                'message' => $exception->getMessage(),
                'status' =>  false,
                'data' => (object)[]
            ]);
        }
    }
}
