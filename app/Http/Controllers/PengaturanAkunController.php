<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class PengaturanAkunController extends Controller
{
    public function index()
    {
        return view('dashboard.pages.pengaturanAkun.index');
    }

    public function update(Request $request)
    {
        $user = User::where('id', Auth::user()->id)->first();
        $validator = Validator::make(
            $request->all(),
            [
                'username' => 'required',
                'nama' => 'required',
            ],
            [
                'username.required' => 'Username tidak boleh kosong',
                'username.unique' => 'Username sudah ada',
                'nama.required' => 'Nama tidak boleh kosong',
            ]
        );

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()]);
        }

        $user->username = $request->username;
        if ($request->password) {
            $user->password = Hash::make($request->password);
        }
        $user->nama = $request->nama;
        $user->save();

        return response()->json(['status' => 'success']);
    }
}
