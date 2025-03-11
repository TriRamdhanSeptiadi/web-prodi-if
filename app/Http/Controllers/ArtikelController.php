<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publikasi;

class ArtikelController extends Controller
{
    public function index()
    {
        $publikasi = Publikasi::all();
        
        return view('artikel', compact('publikasi'));
    }
}