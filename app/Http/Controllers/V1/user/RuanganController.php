<?php

namespace App\Http\Controllers\V1\user;

use App\Booking;
use App\Http\Controllers\Controller;
use App\Http\Resources\RuangMeetingResource;
use App\RuangMeeting;
use Carbon\Carbon;
use Illuminate\Http\Request;

class RuanganController extends Controller
{

    public  function getRuangMeeting(){

        $datas = RuangMeeting::with(['mitra' => function($mitra){
            $mitra->with(['makanans' => function($query){
                $query->where('jenis', 'gratis')->get();
            }]);
        }])->get();
        //$datas = RuangMeeting::all();
        return response() ->json([
            'message' => ' berhasil mengambil semua data ruamg meeting',
            'status' =>  true,
            'data' => $datas
        ]);
    }

    public function search(Request $request)
    {
        $tanggal_dam_waktu = $request->tanggal_dan_waktu;
        $explode = explode(' ', $tanggal_dam_waktu);

        $tanggal = $explode[0];
        $jam_mulai = $explode[1];
        $jam_selesai  = Carbon::parse($jam_mulai)->addHours($request->lama)->format('H:i');

        $bookings = Booking::where('tanggal', $tanggal)
            ->where('jam_mulai','>=',$jam_mulai)
            ->where('jam_selesai', '<=', $jam_selesai)->get();

        $ruangs = $datas = RuangMeeting::with(['mitra' => function($mitra){
            $mitra->with(['makanans' => function($query){
                $query->where('jenis', 'gratis')->get();
            }]);
        }])->where('status', true)->get();

        $results = [];
        foreach ($ruangs as $key => $ruang){
            if (isset($bookings[$key]->id_ruang) != $ruang->id){
                array_push($results, $ruang);
            }
        }

        return response()->json([
            'message' => 'successfully search by date and time',
            'status' => true,
            'data' => $results
        ]);
    }
}
