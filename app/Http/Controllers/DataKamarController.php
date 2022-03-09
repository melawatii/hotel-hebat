<?php

namespace App\Http\Controllers;

use App\Models\DataKamar;
use Illuminate\Http\Request;

class DataKamarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.dataKamar.index', [
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
        return view('admin.dataKamar.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'tipe_kamar' => ['required', 'max:255', 'string'],
            'jumlah_kamar' => ['required', 'max:255', 'string'],
        ]);

        DataKamar::create($validateData);

        return redirect('/dataKamar')->with('message', 'Data berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DataKamar  $dataKamar
     * @return \Illuminate\Http\Response
     */
    public function show(DataKamar $dataKamar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DataKamar  $dataKamar
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $datakamar = DataKamar::firstWhere('id', $id);
        return view('admin.dataKamar.edit', [
            'datakamar' => $datakamar,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DataKamar  $dataKamar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datakamar = DataKamar::firstWhere('id', $id);
        $request->validate([
            'tipe_kamar' => ['required', 'max:255', 'string'],
            'jumlah_kamar' => ['required', 'max:255', 'string'],
        ]);

        $datakamar->update($request->all());

        return redirect('/dataKamar')->with('message', 'Data berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DataKamar  $dataKamar
     * @return \Illuminate\Http\Response
     */
    public function destroy(DataKamar $dataKamar)
    {
        $dataKamar->delete();

        return redirect('/dataKamar')->with('message', 'Data berhasil dihapus!');
    }
}
