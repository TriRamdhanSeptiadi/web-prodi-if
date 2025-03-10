<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TentangTeknikInformatika;
use App\Models\VisiMisiTujuan;
use App\Models\StaffDosen;
use App\Models\PimpinanStaff;
use App\Models\Publikasi;

class BerandaController extends Controller
{
    // Menampilkan data
    public function index()
    {
        $tentangInformatika = TentangTeknikInformatika::first();
        $visiMisiTujuan = VisiMisiTujuan::first();
        $pimpinanStaff = PimpinanStaff::first();
        $publikasi = Publikasi::all();
        
        return view('beranda', compact('tentangInformatika', 'visiMisiTujuan', 'pimpinanStaff', 'publikasi'));
    }
}