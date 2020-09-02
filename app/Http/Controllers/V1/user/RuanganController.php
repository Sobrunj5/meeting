<?php

namespace App\Http\Controllers\V1\user;

use App\Booking;
use App\Http\Controllers\Controller;
use App\Http\Resources\RuangMeetingResource;
use App\Response;
use App\RuangMeeting;
use Carbon\Carbon;
use Illuminate\Http\Request;

class RuanganController extends Controller
{

    public  function getRuangMeeting()
    {

        $datas = RuangMeeting::with(['mitra' => function ($mitra) {
            $mitra->with(['makanans' => function ($query) {
                $query->where('jenis', 'gratis');
            }]);
        }])->get();

        $message = ' berhasil mengambil semua data ruamg meeting';
        return Response::transform($message, true, $datas, 200);
    }

    public function search(Request $request)
    {
        $tanggal = $request->tanggal;
        $jam_mulai = $request->jam_mulai;
        $jam_selesai = $request->jam_selesai;
        //$explode = explode(' ', $tanggal_dam_waktu);

        $jamSekarangPlus6Jam = Carbon::now()->addHours(6)->format('H:i');
        $tanggalSekarang = Carbon::now()->format('Y-m-d');
        $hanyaTanggalRequest = Carbon::parse($tanggal)->format('d');
        $hanyaTanggalSekarang = Carbon::parse($tanggalSekarang)->format('d');

        if ($hanyaTanggalRequest == $hanyaTanggalSekarang) {
            if ($jam_mulai < $jamSekarangPlus6Jam) {
                $message = 'maaf minimal 6 jam pemesanan dari waktu sekarang';
                return Response::transform($message, false, (object)[], 400);
            }

            $results = $this->searchDateNow($tanggal, $jam_mulai, $jam_selesai);
            $message = 'successfully search by date and time';
            return Response::transform($message, true, $results, 200);

        } else if ($hanyaTanggalRequest >= $hanyaTanggalSekarang) {

            $results = $this->searchTommorow($tanggal, $jam_mulai, $jam_selesai);
            $message = 'successfully search by date and time';
            return Response::transform($message,true,
                RuangMeetingResource::collection(collect($results)),200);
        } else {
            $message = 'tidak ada ruangan untuk tanggal kemaren';
            return Response::transform($message, false, (object)[], 400);
        }
    }

    private function searchDateNow($tanggal, $jam_mulai, $jam_selesai)
    {
        $bookings = Booking::where('tanggal', $tanggal)
            ->where('jam_mulai', '>=', $jam_mulai)
            ->where('jam_selesai', '<=', $jam_selesai)->get();

        $ruangs = RuangMeeting::with(['mitra' => function ($mitra) {
            $mitra->with(['makanans' => function ($query) {
                $query->where('jenis', 'gratis')->get();
            }]);
        }])->whereHas('mitra', function ($mitra) use ($jam_mulai, $jam_selesai) {
            $mitra->whereHas('profile', function ($profile) use ($jam_mulai, $jam_selesai) {
                $profile->whereTime('jam_buka', '<=', $jam_mulai)
                    ->whereTime('jam_tutup', '>=', $jam_selesai);
            });
        })->where('status', true)->get();

        $results = [];
        foreach ($ruangs as $key => $ruang) {
            if (isset($bookings[$key]->id_ruang) != $ruang->id) {
                array_push($results, $ruang);
            }
        }

        return $results;
    }

    private function searchTommorow($tanggal, $jam_mulai, $jam_selesai)
    {
        $bookings = Booking::where('tanggal', $tanggal)
            ->where('jam_mulai', '>=', $jam_mulai)
            ->where('jam_selesai', '<=', $jam_selesai)->get();

        $ruangs = RuangMeeting::with(['mitra' => function ($mitra) {
            $mitra->with(['makanans' => function ($query) {
                $query->where('jenis', 'gratis')->get();
            }]);
        }])->whereHas('mitra', function ($mitra) use ($jam_mulai, $jam_selesai) {
            $mitra->whereHas('profile', function ($profile) use ($jam_mulai, $jam_selesai) {
                $profile->whereTime('jam_buka', '<=', $jam_mulai)
                    ->whereTime('jam_tutup', '>=', $jam_selesai);
            });
        })->where('status', true)->get();

        $results = [];
        foreach ($ruangs as $key => $ruang) {
            if (isset($bookings[$key]->id_ruang) != $ruang->id) {
                array_push($results, $ruang);
            }
        }

        return $results;
    }
}
