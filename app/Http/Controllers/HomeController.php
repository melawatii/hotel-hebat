<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataKamar;
use App\Models\DataReservasi;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function resepsionis()
    {
        return view('resepsionis.dataReservasi', [
            'dataReservasi' => DataReservasi::latest()->get()
        ]);
    }

    public function admin() {
        return view('admin.dataKamar.index', [
            'dataKamar' => DataKamar::latest()->get()
        ]);
    }
}
