<?php

namespace App\Http\Controllers\V1\user;

use App\Http\Controllers\Controller;
use App\Http\Resources\MitraResource;
use App\Mitra;
use Illuminate\Http\Request;

class MitraController extends Controller
{
    public function getPartners()
    {
        $partner = Mitra::all();

        return response()->json([
            'message' => 'successfully get partners',
            'status' => true,
            'data' => MitraResource::collection($partner)
        ]);
    }

    public function getPartnersPromo()
    {
        $partner = Mitra::all();

        return response()->json([
            'message' => 'successfully get partners',
            'status' => true,
            'data' => MitraResource::collection($partner)
        ]);
    }
}
