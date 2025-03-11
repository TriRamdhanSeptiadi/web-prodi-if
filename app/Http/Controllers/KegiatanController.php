<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publikasi;

class KegiatanController extends Controller
{
    public function index()
    {
        $publikasi = Publikasi::all();
        
        return view('kegiatan', compact('publikasi'));
    }
}
