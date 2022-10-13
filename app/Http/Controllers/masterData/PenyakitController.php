<?php

namespace App\Http\Controllers\masterData;

use App\Http\Controllers\Controller;
use App\Models\Penyakit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Yajra\DataTables\Facades\DataTables;

class PenyakitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Penyakit::orderBy('created_at', 'desc')->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('foto', function ($row) {
                    if ($row->foto) {
                        $foto = '<img src="' . Storage::url('uploads/penyakit/' . $row->foto) . '" class="img-fluid my-3" width="150">';
                    } else {
                        $foto = '<img src="' .  asset('assets/dashboard')  . '/img/broken-image.png' . '" class="img-fluid my-3" width="150">';
                    }
                    return $foto;
                })
                ->addColumn('action', function ($row) {
                    $actionBtn = '<a class="btn btn-warning btn-rounded btn-sm mr-1" href="' . url('master-data/penyakit/' . $row->id . '/edit') . '" ><i class="fas fa-edit"></i></a><button id="btn-delete" class="btn btn-danger btn-rounded btn-sm mr-1" value="' . $row->id . '" > <i class="fas fa-trash-alt"></i></button>';
                    return $actionBtn;
                })
                ->rawColumns(['action', 'foto'])
                ->make(true);
        }

        return view('dashboard.pages.masterData.penyakit.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.pages.masterData.penyakit.create');
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
                'nama_penyakit' => ['required', Rule::unique('penyakit')],
                'kode' => ['required', Rule::unique('penyakit')],
                'bobot_penyakit' => 'required|numeric|min:0',
                'solusi' => 'required',
                'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
            ],
            [
                'nama_penyakit.required' => 'Nama gejala tidak boleh kosong',
                'nama_penyakit.unique' => 'Nama gejala sudah ada',
                'kode.required' => 'Kode tidak boleh kosong',
                'kode.unique' => 'Kode sudah ada',
                'bobot_penyakit.required' => 'Bobot tidak boleh kosong',
                'bobot_penyakit.numeric' => 'Bobot harus angka',
                'bobot_penyakit.min' => 'Bobot tidak boleh bernilai negatif',
                'solus.required' => 'Solusi tidak boleh kosong',
                'foto.required' => 'Foto tidak boleh kosong',
                'foto.image' => 'Foto harus berupa gambar',
                'foto.mimes' => 'Foto harus berupa gambar',
                'foto.max' => 'Foto tidak boleh lebih dari 1 MB',
            ]
        );

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()]);
        }

        $namaFoto = time() . '.' . $request->foto->extension();
        $request->foto->storeAs('uploads/penyakit', $namaFoto);

        $penyakit = new Penyakit();
        $penyakit->kode = $request->kode;
        $penyakit->nama_penyakit = $request->nama_penyakit;
        $penyakit->bobot_penyakit = $request->bobot_penyakit;
        $penyakit->solusi = $request->solusi;
        $penyakit->foto = $namaFoto;

        $penyakit->save();

        return response()->json(['status' => 'success']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Penyakit  $penyakit
     * @return \Illuminate\Http\Response
     */
    public function show(Penyakit $penyakit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Penyakit  $penyakit
     * @return \Illuminate\Http\Response
     */
    public function edit(Penyakit $penyakit)
    {
        return view('dashboard.pages.masterData.penyakit.edit', compact(['penyakit']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Penyakit  $penyakit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Penyakit $penyakit)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'nama_penyakit' => ['required', Rule::unique('penyakit')->ignore($penyakit->id)],
                'kode' => ['required', Rule::unique('penyakit')->ignore($penyakit->id)],
                'bobot_penyakit' => 'required|numeric|min:0',
                'foto' => $request->foto ? 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024' : 'nullable',
                'solusi' => 'required'
            ],
            [
                'nama_penyakit.required' => 'Nama gejala tidak boleh kosong',
                'nama_penyakit.unique' => 'Nama gejala sudah ada',
                'kode.required' => 'Kode tidak boleh kosong',
                'kode.unique' => 'Kode sudah ada',
                'bobot_penyakit.required' => 'Bobot tidak boleh kosong',
                'bobot_penyakit.numeric' => 'Bobot harus angka',
                'bobot_penyakit.min' => 'Bobot tidak boleh bernilai negatif',
                'solus.required' => 'Solusi tidak boleh kosong',
                'foto.required' => 'Foto tidak boleh kosong',
                'foto.image' => 'Foto harus berupa gambar',
                'foto.mimes' => 'Foto harus berupa gambar',
                'foto.max' => 'Foto tidak boleh lebih dari 1 MB',
            ]
        );

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()]);
        }

        if ($request->foto) {
            if (Storage::exists('uploads/penyakit/' . $penyakit->foto)) {
                Storage::delete('uploads/penyakit/' . $penyakit->foto);
            }

            $namaFoto = time() . '.' . $request->foto->extension();
            $request->foto->storeAs('uploads/penyakit', $namaFoto);
            $penyakit->foto = $namaFoto;
        }

        $penyakit->kode = $request->kode;
        $penyakit->nama_penyakit = $request->nama_penyakit;
        $penyakit->bobot_penyakit = $request->bobot_penyakit;
        $penyakit->solusi = $request->solusi;
        $penyakit->save();

        return response()->json(['status' => 'success']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Penyakit  $penyakit
     * @return \Illuminate\Http\Response
     */
    public function destroy(Penyakit $penyakit)
    {
        $penyakit->delete();

        if (Storage::exists('uploads/penyakit/' . $penyakit->foto)) {
            Storage::delete('uploads/penyakit/' . $penyakit->foto);
        }

        return response()->json(['status' => 'success']);
    }
}
