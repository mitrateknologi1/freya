<?php

namespace App\Http\Controllers\masterData;

use App\Http\Controllers\Controller;
use App\Models\Gejala;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Yajra\DataTables\Facades\DataTables;

class GejalaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Gejala::orderBy('created_at', 'desc')->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $actionBtn = '<button id="btn-edit" class="btn btn-warning btn-rounded btn-sm mr-1" value="' . $row->id . '" ><i class="fas fa-edit"></i></button><button id="btn-delete" class="btn btn-danger btn-rounded btn-sm mr-1" value="' . $row->id . '" > <i class="fas fa-trash-alt"></i></button>';
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('dashboard.pages.masterData.gejala.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
                'nama_gejala' => ['required', Rule::unique('gejala')],
                'kode' => ['required', Rule::unique('gejala')],
            ],
            [
                'nama_gejala.required' => 'Nama gejala tidak boleh kosong',
                'nama_gejala.unique' => 'Nama gejala sudah ada',
                'kode.required' => 'Kode tidak boleh kosong',
                'kode.unique' => 'Kode sudah ada',
            ]
        );

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()]);
        }

        $gejala = new Gejala();
        $gejala->nama_gejala = $request->nama_gejala;
        $gejala->kode = $request->kode;
        $gejala->save();

        return response()->json(['status' => 'success']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\gejala  $gejala
     * @return \Illuminate\Http\Response
     */
    public function show(Gejala $gejala)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\gejala  $gejala
     * @return \Illuminate\Http\Response
     */
    public function edit(Gejala $gejala)
    {
        return response()->json($gejala);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\gejala  $gejala
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, gejala $gejala)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'nama_gejala' => ['required', Rule::unique('gejala')->ignore($gejala->id)],
                'kode' => ['required', Rule::unique('gejala')->ignore($gejala->id)],
            ],
            [
                'nama_gejala.required' => 'Nama gejala tidak boleh kosong',
                'nama_gejala.unique' => 'Nama gejala sudah ada',
                'kode.required' => 'Kode tidak boleh kosong',
                'kode.unique' => 'Kode sudah ada',
            ]
        );

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()]);
        }

        $gejala->nama_gejala = $request->nama_gejala;
        $gejala->kode = $request->kode;
        $gejala->save();

        return response()->json(['status' => 'success']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\gejala  $gejala
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gejala $gejala)
    {
        $gejala->delete();

        return response()->json(['status' => 'success']);
    }
}
