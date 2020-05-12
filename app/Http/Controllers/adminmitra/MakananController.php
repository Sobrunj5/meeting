<?php

namespace App\Http\Controllers\adminmitra;

use App\Http\Controllers\Controller;
use App\Makanan;
use Illuminate\Http\Request;
use Auth;

class MakananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth:adminmitra');
    }

    public function index()
    {
        $makanans = Makanan::where('id_mitra', Auth::user()->id)->get();
        return view('pages.adminmitra.makanan.index', compact('makanans'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.adminmitra.makanan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //ini validasi di form
        $this->validate($request,[
            'nama'      =>'required',
            'harga'     => 'required',
            'deskripsi' => 'required',
            'foto'      => 'required',

        ]);

        //ini upload foto ke form
        $image      = $request->file('foto');
        $filename   = rand().'.'.$image->getClientOriginalExtension();
        $path       = public_path('uploads/makanan');
        $image->move($path,$filename);

        //ini store atau menambahkan data ke database dengan tabel yang bernama ruang meeting

        $data               = new Makanan();
        $data->id_mitra     = Auth::user()->id;
        $data->nama         = $request->nama;
        $data->harga        = $request->harga;
        $data->deskripsi    = $request->deskripsi;
        $data->foto         = $filename;
        $data->status       = '1';
        //dd($request->all());
        $data->save();


        //jika sudah menambahkan akan di arahkan ke route ini
        return redirect()->route('makanan.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Makanan::findOrFail($id);
        return view('pages.adminmitra.makanan.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //ini validasi di form
        $this->validate($request,[
            'nama'      =>'required',
            'harga'     => 'required',
            'deskripsi' => 'required',
            'foto'      => 'file|image|mimes:jpg,png,jpeg|max:2048',

        ]);

        //ini store atau menambahkan data ke database dengan tabel yang bernama ruang meeting

        $data = Makanan::findOrFail($id);
        $data->id_mitra     = Auth::user()->id;
        $data->nama         = $request->nama;
        $data->harga        = $request->harga;
        $data->deskripsi    = $request->deskripsi;

        if ($request->file('foto') == ''){
            $data->foto = $request->old_foto;
        }else{
            //ini upload foto ke form
            $image      = $request->file('foto');
            $filename   = rand().'.'.$image->getClientOriginalExtension();
            $path       = public_path('uploads/makanan');
            $image->move($path,$filename);
            $data->foto = $filename;
        }

        $data->update();
        return redirect()->route('makanan.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Makanan::findOrFail($id);
        $data->delete();
        return redirect()->route('makanan.index')->with('delete', 'Berhasil Menghapus Data');

    }
}
