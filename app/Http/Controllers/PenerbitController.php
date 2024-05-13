<?php

namespace App\Http\Controllers;

use App\Models\Penerbit;
use Illuminate\Http\Request;

class PenerbitController extends Controller
{
    public function index() 
    {
        $penerbit = Penerbit::all();

        // $penerbit = [];
        return view('index', compact('penerbit'));
    }

    public function tambah() 
    {
        return view('store');
    }

    public function store(Request $request) 
    {
        Penerbit::create([
            'nama_penerbit' => $request->nama_penerbit,
            'alamat' => $request->alamat,
            'no_telepon' => $request->no_telepon
        ]);

        return redirect('/')->with('status', 'Data Berhasil Disimpan');
    }

    public function ubah($id) 
    {
        $penerbit = Penerbit::find($id);
        return view('update', compact('penerbit'));
    }

    public function update(Request $request) 
    {
        Penerbit::where('id', $request->id)->update([
            'nama_penerbit' => $request->nama_penerbit,
            'alamat' => $request->alamat,
            'no_telepon' => $request->no_telepon
        ]);

        return redirect('/');
    }
    
    public function hapus($id) 
    {
        Penerbit::where('id', $id)->delete();
        return redirect('/');
    }

    public function index2(Request $request) 
    {
        $penerbit = Penerbit::all();

        if ($request->ajax()) {
            return response()->json([
                'data' => $penerbit,
                'code' => 200
            ]);
        }

        return view('index2', compact('penerbit'));
    }

    public function store2(Request $request) 
    {
        Penerbit::create([
            'nama_penerbit' => $request->nama_penerbit,
            'alamat' => $request->alamat,
            'no_telepon' => $request->no_telepon
        ]);

        return response()->json('Sukses! Data berhasil disimpan', 200);
    }

    public function update2(Request $request) 
    {
        Penerbit::where('id', $request->id_penerbit)->update([
            'nama_penerbit' => $request->nama_penerbit,
            'alamat' => $request->alamat,
            'no_telepon' => $request->no_telepon
        ]);

        return response()->json('Sukses! Data berhasil diubah', 200);
    }

}
