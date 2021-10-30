<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class DashboardController extends Controller
{
    public function index()
    {
        $surahs = json_encode(Http::get('https://api.quran.sutanlab.id/surah')->json('data'));
        return view('dashboard', ['surahs' => json_decode($surahs, true)]);
    }

    public function surat($id)
    {
        $surahs = json_encode(Http::get('https://api.quran.sutanlab.id/surah/' . $id)->json('data'));
        // dd($surahs);
        return view('dashboard_surat', ['surahs' => json_decode($surahs, true)]);
    }
}
