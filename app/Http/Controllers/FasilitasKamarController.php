<?php

namespace App\Http\Controllers;

use App\Models\FasilitasKamar;
use Illuminate\Http\Request;

class FasilitasKamarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.fasilitasKamar.index', [
            'fasilitasKamar' => FasilitasKamar::latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.fasilitasKamar.create');
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
            'fasilitas' => ['required', 'max:255', 'string'],
        ]);

        FasilitasKamar::create($validateData);

        return redirect('/fasilitasKamar')->with('message', 'Data berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FasilitasKamar  $fasilitasKamar
     * @return \Illuminate\Http\Response
     */
    public function show(FasilitasKamar $fasilitasKamar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FasilitasKamar  $fasilitasKamar
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $fasilitaskamar = FasilitasKamar::firstWhere('id', $id);
        return view('admin.fasilitasKamar.edit', [
            'fasilitaskamar' => $fasilitaskamar,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FasilitasKamar  $fasilitasKamar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $fasilitaskamar = FasilitasKamar::firstWhere('id', $id);
        $request->validate([
            'tipe_kamar' => ['required', 'max:255', 'string'],
            'fasilitas' => ['required', 'max:255', 'string'],
        ]);

        $fasilitaskamar->update($request->all());

        return redirect('/fasilitaskamar')->with('message', 'Data berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FasilitasKamar  $fasilitasKamar
     * @return \Illuminate\Http\Response
     */
    public function destroy(FasilitasKamar $fasilitasKamar)
    {
        $fasilitasKamar->delete();

        return redirect('/fasilitasKamar')->with('message', 'Data berhasil dihapus!');
    }
}
