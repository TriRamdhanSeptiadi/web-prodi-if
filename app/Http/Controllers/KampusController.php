<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kampus;

class KampusController extends Controller
{
    public function index()
    {
        $kampus = Kampus::all();
        
        return view('fasilitas', compact('kampus'));
    }

    public function show($id)
    {
        $kampus = Kampus::findOrFail($id);

        return view('detail-fasilitas', compact('kampus'));
    }
}