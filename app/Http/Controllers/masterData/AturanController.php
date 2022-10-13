<?php

namespace App\Http\Controllers\masterData;

use App\Http\Controllers\Controller;
use App\Models\Aturan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use PDO;
use Yajra\DataTables\Facades\DataTables;

class AturanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Aturan::with(['gejala', 'penyakit'])->orderBy('id', 'desc')->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('nama_penyakit', function ($row) {
                    return $row->penyakit->nama_penyakit . ' (' . $row->penyakit->kode . ')';
                })
                ->addColumn('nama_gejala', function ($row) {
                    return $row->gejala->nama_gejala . ' (' . $row->gejala->kode . ')';
                })
                ->addColumn('action', function ($row) {
                    $actionBtn = '<a class="btn btn-warning btn-rounded btn-sm mr-1" href="' . url('master-data/aturan/' . $row->id . '/edit') . '"><i class="fas fa-edit"></i></a><button id="btn-delete" class="btn btn-danger btn-rounded btn-sm mr-1" value="' . $row->id . '" > <i class="fas fa-trash-alt"></i></button>';
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('dashboard.pages.masterData.aturan.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.pages.masterData.aturan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'id_penyakit' => ['required', Rule::unique('aturan')->where(function ($query) use ($request) {
                    return $query->where('id_penyakit', $request->id_penyakit)->where('id_gejala', $request->id_gejala);
                })],
                'id_gejala' => ['required', Rule::unique('aturan')->where(function ($query) use ($request) {
                    return $query->where('id_penyakit', $request->id_penyakit)->where('id_gejala', $request->id_gejala);
                })],
                'bobot_aturan' => 'required|numeric|min:0',
            ],
            [
                'id_penyakit.required' => 'Penyakit tidak boleh kosong',
                'id_penyakit.unique' => 'Penyakit sudah ada',
                'id_gejala.required' => 'Gejala tidak boleh kosong',
                'id_gejala.unique' => 'Gejala sudah ada',
                'bobot_aturan.required' => 'Bobot tidak boleh kosong',
                'bobot_aturan.numeric' => 'Bobot harus angka',
                'bobot_aturan.min' => 'Bobot tidak boleh bernilai negatif',
            ]
        );

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()]);
        }

        $aturan = new Aturan();
        $aturan->id_penyakit = $request->id_penyakit;
        $aturan->id_gejala = $request->id_gejala;
        $aturan->bobot_aturan = $request->bobot_aturan;
        $aturan->save();

        return response()->json(['status' => 'success']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Aturan  $aturan
     * @return \Illuminate\Http\Response
     */
    public function show(Aturan $aturan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Aturan  $aturan
     * @return \Illuminate\Http\Response
     */
    public function edit(Aturan $aturan)
    {
        return view('dashboard.pages.masterData.aturan.edit', compact(['aturan']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Aturan  $aturan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Aturan $aturan)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'id_penyakit' => ['required', Rule::unique('aturan')->ignore($aturan->id)->where(function ($query) use ($request) {
                    return $query->where('id_penyakit', $request->id_penyakit)->where('id_gejala', $request->id_gejala);
                })],
                'id_gejala' => ['required', Rule::unique('aturan')->ignore($aturan->id)->where(function ($query) use ($request) {
                    return $query->where('id_penyakit', $request->id_penyakit)->where('id_gejala', $request->id_gejala);
                })],
                'bobot_aturan' => 'required|numeric|min:0',
            ],
            [
                'id_penyakit.required' => 'Penyakit tidak boleh kosong',
                'id_penyakit.unique' => 'Penyakit sudah ada',
                'id_gejala.required' => 'Gejala tidak boleh kosong',
                'id_gejala.unique' => 'Gejala sudah ada',
                'bobot_aturan.required' => 'Bobot tidak boleh kosong',
                'bobot_aturan.numeric' => 'Bobot harus angka',
                'bobot_aturan.min' => 'Bobot tidak boleh bernilai negatif',
            ]
        );

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()]);
        }

        $aturan->id_penyakit = $request->id_penyakit;
        $aturan->id_gejala = $request->id_gejala;
        $aturan->bobot_aturan = $request->bobot_aturan;
        $aturan->save();

        return response()->json(['status' => 'success']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Aturan  $aturan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Aturan $aturan)
    {
        $aturan->delete();

        return response()->json(['status' => 'success']);
    }
}
