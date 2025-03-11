<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PimpinanStaff;

class DosenStaffController extends Controller
{
    public function index()
    {
        $pimpinanStaff = PimpinanStaff::all();
        
        return view('dosen', compact('pimpinanStaff'));
    }
}
