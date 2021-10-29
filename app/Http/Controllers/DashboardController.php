<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class DashboardController extends Controller
{
    public function index()
    {
        $surahs = Http::get('https://api.quran.sutanlab.id/surah')->json('data');
        // dd($surahs[0]['number']);
        return view('dashboard', compact('surahs'));
    }
}
