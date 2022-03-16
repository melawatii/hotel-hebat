<?php

namespace App\Http\Controllers;

use App\Models\DataReservasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DataReservasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('resepsionis.dataReservasi', [
            'dataReservasi' => DataReservasi::latest()->get()
        ]);
    }

    public function cari(Request $request)
    {
        // menangkap data pencarian
		$cari = $request->cari;

        // mengambil data dari table pegawai sesuai pencarian data
        $dataReservasi = DB::table('pemesanan')
        ->where('nama_tamu','like',"%".$cari."%")
        ->paginate();

        // mengirim data pegawai ke view index
        return view('resepsionis.dataReservasi',['dataReservasi' => $dataReservasi]);
    }

    public function tanggal(Request $request)
    {
        // menangkap data pencarian
		$fromdate = $request->fromdate;
		$todate = $request->todate;

        // mengambil data dari table pegawai sesuai pencarian data
        $dataReservasi = DB::table('pemesanan')
        ->where('tgl_check_in','like',"%".$fromdate."%")
        ->where('tgl_check_out','like',"%".$todate."%")
        ->paginate();

        // mengirim data pegawai ke view index
        return view('resepsionis.dataReservasi',['dataReservasi' => $dataReservasi]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
