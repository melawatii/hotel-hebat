<?php

namespace App\Http\Controllers;

use App\Models\DataReservasi;
use App\Models\DataKamar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PemesananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('tamu.pesanReservasi', [
            'dataReservasi' => DataReservasi::latest()->get(),
            'dataKamar' => DataKamar::latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tamu.pesanReservasi');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, DataReservasi $dataReservasi)
    {
        $validateData = $request->validate([
            'nama_tamu' => ['required', 'max:255', 'string'],
            'email' => ['required', 'max:255', 'string'],
            'no_hp' => ['required', 'max:255', 'string'],
            'tipe_kamar' => ['required', 'max:255', 'string'],
            'jumlah_kamar' => ['required', 'max:255', 'string'],
            'tgl_check_in' => ['required', 'max:255', 'string'],
            'tgl_check_out' => ['required', 'max:255', 'string'],
        ]);

        DataReservasi::create($validateData);

        return redirect('/cetak')->with('message', 'Pemesanan berhasil!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DataReservasi  $dataReservasi
     * @return \Illuminate\Http\Response
     */
    public function show(DataReservasi $dataReservasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DataReservasi  $dataReservasi
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DataReservasi  $dataReservasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DataReservasi  $dataReservasi
     * @return \Illuminate\Http\Response
     */
    public function destroy(DataReservasi $dataReservasi)
    {
        //
    }

    public function cetakBukti()
    { 
        $posts = DataReservasi::whereRaw('id = (select max(`id`) from pemesanan)')->get();
        
        return view('tamu.bukti', ['posts' => $posts]);
    }
}
