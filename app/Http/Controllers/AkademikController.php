<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kurikulum;
use App\Models\StandarKompetensiLulusan;
use App\Models\SasaranKualitas;

class AkademikController extends Controller
{
    public function index()
    {
        $kurikulum = Kurikulum::first();
        $standarKompetensiLulusan = StandarKompetensiLulusan::all();
        $sasaranKualitas = SasaranKualitas::all();
        
        return view('kurikulum', compact('kurikulum', 'standarKompetensiLulusan', 'sasaranKualitas'));
    }
}
