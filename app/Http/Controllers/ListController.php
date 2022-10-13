<?php

namespace App\Http\Controllers;

use App\Models\Gejala;
use App\Models\Penyakit;
use Illuminate\Http\Request;

class ListController extends Controller
{
    public function gejala(Request $request)
    {
        $id = $request->id;
        $gejala = Gejala::orderBy('kode', 'asc')->get();

        if ($id) {
            $gejalaHapus = Gejala::where('id', $id)->withTrashed()->first();
            if ($gejalaHapus->trashed()) {
                $gejala->push($gejalaHapus);
            }
        }

        return response()->json(['status' => 'success', 'data' => $gejala]);
    }

    public function penyakit(Request $request)
    {
        $id = $request->id;
        $penyakit = Penyakit::orderBy('kode', 'asc')->get();

        if ($id) {
            $penyakitHapus = Penyakit::where('id', $id)->withTrashed()->first();
            if ($penyakitHapus->trashed()) {
                $penyakit->push($penyakitHapus);
            }
        }

        return response()->json(['status' => 'success', 'data' => $penyakit]);
    }
}
