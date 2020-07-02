<?php

namespace App\Http\Controllers\V1\user;

use App\Booking;
use App\Http\Controllers\Controller;
use App\OrderMakanan;
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
            $tanggal_dam_waktu = $request->tanggal_dan_waktu;
            $explode = explode(' ', $tanggal_dam_waktu);

            $tanggal = $explode[0];
            $jam_mulai = $explode[1];
            $jam_selesai  = Carbon::parse($jam_mulai)->addHours($request->durasi)->format('H:i');

            $booking = new Booking();
            $booking->id_user = Auth::guard('api')->user()->id;
            $booking->tanggal = $tanggal;
            $booking->jam_mulai = $jam_mulai;
            $booking->jam_selesai = $jam_selesai;
            $booking->id_ruang = $request->id_room;
            $booking->harga = $request->harga * $request->durasi;
            $booking->save();

            foreach ($request->makanans as $makanan){
                $bookingMakanan = new OrderMakanan();
                $bookingMakanan->id_makanan = $makanan['id'];
                $bookingMakanan->id_booking = $booking->id;
                $bookingMakanan->harga = $makanan['harga'];
                $bookingMakanan->jumlah = $makanan['qty'];
                $bookingMakanan->total_harga = $makanan['harga'] * $makanan['qty'];
                $bookingMakanan->save();
            }

            $hargaMakanan = OrderMakanan::where('id_booking', $booking->id)->get()->sum('total_harga');
            $booking->total_bayar = $booking->harga + $hargaMakanan;
            $booking->update();


            return response()->json([
                'message' => 'success',
                'status' => true,
                //'data' => $request->all()
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
