<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PimpinanStaff;

class DetailKataSambutanController extends Controller
{
    public function show($id)
    {
        $pimpinanStaff = PimpinanStaff::findOrFail($id);
        return view('detail-kata-sambutan', compact('pimpinanStaff'));
    }
}