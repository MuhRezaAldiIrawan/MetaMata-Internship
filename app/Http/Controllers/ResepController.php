<?php

namespace App\Http\Controllers;

use App\Models\Resep;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ResepController extends Controller
{
    public function index()
    {
        return view('addresep');
    }

    public function tambahresep(Request $request)
    {
        // dd($request);
     
        $validatedData = $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'bahan' => 'required',
            'langkah_pembuatan' => 'required',
            'foto' => 'image|file',

        ]);

        if (($request->input('bahan'))) {
            $validatedData['bahan'] = implode(',', $validatedData['bahan']);
        }

        if (($request->input('langkah_pembuatan'))) {
            $validatedData['langkah_pembuatan'] = implode(',', $validatedData['langkah_pembuatan']);
        }

        if ($request->file('foto')) {
            $validatedData['foto'] = $request->file('foto')->store('resep-foto');
        }

        Resep::create($validatedData);

        return redirect('/');
    }

    public function detailresep($id)
    {
        $detail = DB::table('reseps')->where('id', $id)->get();

        return view('/detailresep', ['detail' => $detail]);
    }
}
