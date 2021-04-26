<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kota;

class KotaController extends Controller
{
    public function index()
    {
        //ambil data kota
        $kota = Kota::all();
        //data ke view kota
        return view('kota', ['kota'=>$kota]);
    }
}
