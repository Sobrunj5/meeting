<?php

namespace App\Http\Controllers\V1\user;

use App\Booking;
use App\Http\Controllers\Controller;
use App\OrderMakanan;
use Carbon\Carbon;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
    }

    public  function booking(Request $request){

        try{
            $tanggal_dam_waktu = $request->dateAndTime;
            $explode = explode(' ', $tanggal_dam_waktu);

            $tanggal = $explode[0];
            $jam_mulai = $explode[1];
            $jam_selesai  = Carbon::parse($jam_mulai)->addHours($request->duration)->format('H:i');

            $booking = new Booking();
            $booking->tanggal = $tanggal;
            $booking->jam_mulai = $jam_mulai;
            $booking->jam_selesai = $jam_selesai;
            $booking->id_room = $request->id_room;
            $booking->save();

            foreach ($request->foods as $food){
                $bookingMakanan = new OrderMakanan();
                $bookingMakanan->id_makanan = $food['id_makanan'];
                $bookingMakanan->id_booking = $booking->id;
                $bookingMakanan->harga = $food['harga'];
                $bookingMakanan->jumlah = $food['qty'];
                $bookingMakanan->total_harga = $food['harga'] * $food['qty'];
                $bookingMakanan->save();
            }


            return response()->json([
                'message' => 'success',
                'status' => true
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
