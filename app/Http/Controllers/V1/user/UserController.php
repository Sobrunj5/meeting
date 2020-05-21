<?php

namespace App\Http\Controllers\v1\user;

use App\Booking;
use App\Http\Controllers\Controller;
use App\Http\Resources\BookingResource;
use App\Http\Resources\RuangMeetingResource;
use App\RuangMeeting;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public  function getRuangMeeting(){
        $datas = RuangMeeting::all();
        return response() ->json([
           'message' => ' berhasil mengambil semua data ruamg meeting',
           'status' =>  true,
           'data' => RuangMeetingResource::collection($datas)
        ]);
    }

    public  function booking(Request $request){

        try{
            $data = new Booking();
            $data->id_ruang = $request->id_ruang;
            $data->id_user  =$request ->id_user;
            $data->lama     =$request->lama;
            $data->tanggal  =$request->tanggal;
            $data->jam      =$request->jam;
            $data->makanan  =$request->makanan;
            $data->catatan  =$request->catatan;
            $data->total    =$request->total;
            $data->bayar    =$request->bayar;
            $data->tanggal_boking = $request->tanggal_boking;
            $data->status   = true;
            $data->save();


            return response()->json([
                'message' => 'successfully order ',
                'status' =>  true,
                'data' => new BookingResource($data)
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
