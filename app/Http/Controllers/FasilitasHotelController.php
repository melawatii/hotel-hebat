<?php

namespace App\Http\Controllers;

use App\Models\FasilitasHotel;
use Illuminate\Http\Request;

class FasilitasHotelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.fasilitasHotel.index', [
            'fasilitasHotel' => FasilitasHotel::latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.fasilitasHotel.create');
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
            'nama_fasilitas' => ['required', 'max:255', 'string'],
            'image' => 'image|file|max:1024',
            'keterangan' => ['required', 'max:255', 'string'],
        ]);

        if($request->file('image')) {
            $validateData['image'] = $request->file('image')->store('post-images');
        }

        FasilitasHotel::create($validateData);

        return redirect('/fasilitasHotel')->with('message', 'Data berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FasilitasHotel  $fasilitasHotel
     * @return \Illuminate\Http\Response
     */
    public function show(FasilitasHotel $fasilitasHotel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FasilitasHotel  $fasilitasHotel
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $fasilitashotel = FasilitasHotel::firstWhere('id', $id);
        return view('admin.fasilitasHotel.edit', [
            'fasilitashotel' => $fasilitashotel,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FasilitasHotel  $fasilitasHotel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $fasilitashotel = FasilitasHotel::firstWhere('id', $id);
        $request->validate([
            'nama_fasilitas' => ['required', 'max:255', 'string'],
            'image' => 'image|file|max:1024',
            'keterangan' => ['required', 'max:255', 'string'],
        ]);

        $fasilitashotel->update($request->all());

        return redirect('/fasilitasHotel')->with('message', 'Data berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FasilitasHotel  $fasilitasHotel
     * @return \Illuminate\Http\Response
     */
    public function destroy(FasilitasHotel $fasilitasHotel)
    {
        $fasilitasHotel->delete();

        return redirect('/fasilitasHotel')->with('message', 'Data berhasil dihapus!');
    }
}
