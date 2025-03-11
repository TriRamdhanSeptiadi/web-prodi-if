<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TentangTeknikInformatika;

class TentangTeknikInformatikaController extends Controller
{
    public function index()
    {
        $tentangInformatika = TentangTeknikInformatika::first();
        
        return view('tentang-teknik-informatika', compact('tentangInformatika'));
    }
}