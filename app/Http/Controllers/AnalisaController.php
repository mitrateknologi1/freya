<?php

namespace App\Http\Controllers;

use App\Models\Aturan;
use App\Models\Gejala;
use App\Models\Penyakit;
use Illuminate\Http\Request;

class AnalisaController extends Controller
{
    public function index()
    {
        $daftarGejala = Gejala::orderBy('id', 'asc')->get();
        return view('landingPage.pages.analisa.index', compact(['daftarGejala']));
    }

    public function hasilAnalisa(Request $request)
    {
        $hasilAnalisa = $this->hitungAnalisa($request);
        // dd($hasilAnalisa);
        return view('landingPage.pages.analisa.hasil', compact(['hasilAnalisa']));
    }

    private function hitungAnalisa($request)
    {
        $total_nilai = array();
        $id_penyakit = array();
        $nama_penyakit = array();

        $perkalian = array();
        $total_perkalian = 0;

        $i = 0;
        $daftarPenyakit = Penyakit::orderBy('id', 'asc')->get();
        foreach ($daftarPenyakit as $penyakit) {
            $nama_penyakit[] = $penyakit->nama_penyakit . ' (' . $penyakit->kode . ')';
            $id_penyakit[] = $penyakit->id;
            $total_nilai[] = 0;
            $perkalian[] = 1;
            $jml_gejala_dipilih = 0;
            $j = 0;
            $daftarGejala = Gejala::orderBy('id', 'asc')->get();

            foreach ($daftarGejala as $gejala) {
                if (isset($_POST['gejala' . $gejala->id]) && $_POST['gejala' . $gejala->id] == 'true') {
                    $jml_gejala_dipilih++;
                    $aturan = Aturan::where('id_penyakit', $penyakit->id)->where('id_gejala', $gejala->id)->first();
                    // $perkalian[$i] = $perkalian[$i] * $aturan->bobot_aturan;
                    if ($aturan) {
                        $perkalian[$i] = $perkalian[$i] * $aturan->bobot_aturan;
                    } else {
                        $perkalian[$i] = $perkalian[$i] * 0.1;
                    }
                }
                $j++;
            }
            $perkalian[$i] = $perkalian[$i] * $penyakit->bobot_penyakit;
            $total_perkalian = $total_perkalian + $perkalian[$i];

            $i++;
        }

        $i = 0;
        $daftarPenyakit = Penyakit::orderBy('id', 'asc')->get();
        $tabel = [];
        foreach ($daftarPenyakit as $penyakit) {
            if ($total_perkalian == 0) {
                $total_nilai[$i] = 0;
            } else {
                $total_nilai[$i] = $perkalian[$i] / $total_perkalian;
            }
            // $total_nilai[$i] = $perkalian[$i] / $total_perkalian;
            $j = 0;
            $daftarGejala = Gejala::orderBy('id', 'asc')->get();

            foreach ($daftarGejala as $gejala) {
                if (isset($_POST['gejala' . $gejala->id]) && $_POST['gejala' . $gejala->id] == 'true') {
                    // $arrayTabel = [];
                    $namaPenyakit = '';
                    $bobotPenyakit = '';
                    if ($j == 0) {
                        $namaPenyakit = $penyakit->nama_penyakit . ' (' . $penyakit->kode . ')';
                        $bobotPenyakit = $penyakit->bobot_penyakit;
                    }
                    $aturan = Aturan::where('id_penyakit', $penyakit->id)->where('id_gejala', $gejala->id)->first();

                    $namaGejala = $gejala->nama_gejala . ' (' . $gejala->kode . ')';
                    $bobotAturan = $aturan->bobot_aturan ?? 0;

                    $simpanPerkalian = 0;
                    $simpanTotalNilai = 0;
                    if ($j == 0) {
                        $simpanPerkalian = round($perkalian[$i], 4);
                        $simpanTotalNilai = round($total_nilai[$i], 4);
                    }

                    $tabel[] = [
                        'namaPenyakit' => $namaPenyakit,
                        'bobotPenyakit' => $bobotPenyakit,
                        'namaGejala' => $namaGejala,
                        'bobotAturan' => $bobotAturan,
                        'simpanPerkalian' => $simpanPerkalian,
                        'simpanTotalNilai' => $simpanTotalNilai
                    ];

                    $j++;
                }
            }
            $i++;
        }

        $id_penyakit_rangking = array();
        $nama_penyakit_rangking = array();
        $total_nilai_rangking = array();

        for ($i = 0; $i < count($nama_penyakit); $i++) {
            $id_penyakit_rangking[$i] = $id_penyakit[$i];
            $nama_penyakit_rangking[$i] = $nama_penyakit[$i];
            $total_nilai_rangking[$i] = round($total_nilai[$i], 4);
        }

        for ($i = 0; $i < count($nama_penyakit); $i++) {
            for ($j = $i; $j < count($nama_penyakit); $j++) {
                if ($total_nilai_rangking[$j] > $total_nilai_rangking[$i]) {
                    $tmp_total_nilai = $total_nilai_rangking[$i];
                    $tmp_nama_penyakit = $nama_penyakit_rangking[$i];
                    $tmp_id_penyakit = $id_penyakit_rangking[$i];
                    $total_nilai_rangking[$i] = $total_nilai_rangking[$j];
                    $nama_penyakit_rangking[$i] = $nama_penyakit_rangking[$j];
                    $id_penyakit_rangking[$i] = $id_penyakit_rangking[$j];
                    $total_nilai_rangking[$j] = $tmp_total_nilai;
                    $nama_penyakit_rangking[$j] = $tmp_nama_penyakit;
                    $id_penyakit_rangking[$j] = $tmp_id_penyakit;
                }
            }
        }

        $hasil = [
            'id' => $id_penyakit_rangking,
            'namaPenyakit' => $nama_penyakit_rangking,
            'totalNilaiRangking' => $total_nilai_rangking
        ];

        return [
            'jumlahGejalaDipilih' => $jml_gejala_dipilih,
            'tabel' => $tabel,
            'hasil' => $hasil
        ];
    }

    public function detailPenyakit(Request $request)
    {
        $penyakit = Penyakit::find($request->id);
        return response()->json(
            [
                'status' => 'success',
                'data' => $penyakit
            ]
        );
    }
}
