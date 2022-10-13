<?php

namespace App\Http\Controllers;

use App\Models\Aturan;
use App\Models\Gejala;
use App\Models\Penyakit;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $gejala = Gejala::count();
        $penyakit = Penyakit::count();
        $aturan = Aturan::count();
        return view('dashboard.pages.dashboard', compact(['gejala', 'penyakit', 'aturan']));
    }
}
