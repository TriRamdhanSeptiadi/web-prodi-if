<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PimpinanStaff;
use App\Services\GoogleScholarService;

class DosenStaffController extends Controller
{
    public function index()
    {
        $pimpinanStaff = PimpinanStaff::all();
        
        return view('dosen', compact('pimpinanStaff'));
    }

    public function showDetail($id)
    {
        $pimpinanStaff = PimpinanStaff::findOrFail($id);
        return view('detail-kata-sambutan', compact('pimpinanStaff'));
    }

    public function show($id)
    {
        $pimpinanStaff = PimpinanStaff::findOrFail($id);
        $nama = $pimpinanStaff->nama;

        $service = new GoogleScholarService();

        // Cek atau cari profil scholar
        if (!$pimpinanStaff->scholar_profile) {
            $profileLink = $service->searchAuthorProfile($nama);

            if ($profileLink) {
                $pimpinanStaff->scholar_profile = $profileLink;
                $pimpinanStaff->save();
            }
        }

        // Ambil author_id dari scholar_profile
        $authorId = null;

        if ($pimpinanStaff->scholar_profile) {
            $parsed = parse_url($pimpinanStaff->scholar_profile);
            parse_str($parsed['query'] ?? '', $queryParams);
            $authorId = $queryParams['user'] ?? null;
        }

        $results = [];

        if ($authorId) {
            $results = $service->getArticlesByAuthorId($authorId);
        }

        return view('detail-dosen', compact('pimpinanStaff', 'results', 'nama'));
    }

    public function showArtikelDosen($nama)
    {
        // Pastikan variabel nama diteruskan dengan benar
        $service = new GoogleScholarService();
        $results = $service->searchArticles($nama);

        return view('detail-jurnal', compact('results', 'nama'));
    }
}