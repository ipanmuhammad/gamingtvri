<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{

    public function index()
    {
        return view('dashboard.barang.index');
    }


    public function create()
    {
        return view('dashboard.barang.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'kode_barang' => 'required|max:255',
            'nama_barang' => 'required',
            'limit'       => 'required',
            'deskripsi'   => 'required|max:255',
            'upload'       => 'required|image|mimes:png,jpg,jpeg',
        ]);

        $upload = $request->file('upload');
        $upload->move('public/upload', $upload->hashName());

        $barang = barang::create([
            'kode_barang'    => $request->kode_barang,
            'nama_barang'    => $request->nama_barang,
            'jenis_barang'   => $request->jenis_barang,
            'limit'          => $request->limit,
            'deskripsi'      => $request->deskripsi,
            'upload'          => $upload->hashName()
        ]);

        if($barang){
            //redirect dengan pesan sukses
            return redirect('/dashboard/barang')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            //redirect dengan pesan error
            return redirect('/dashboard/barang')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }


    // public function show(Barang $barang)
    // {
    //     //
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  *
    //  * @param  \App\Models\Barang  $barang
    //  * @return \Illuminate\Http\Response
    //  */
    // public function edit(Barang $barang)
    // {
    //     //
    // }

    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  \App\Models\Barang  $barang
    //  * @return \Illuminate\Http\Response
    //  */
    // public function update(Request $request, Barang $barang)
    // {
    //     //
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  *
    //  * @param  \App\Models\Barang  $barang
    //  * @return \Illuminate\Http\Response
    //  */
    // public function destroy(Barang $barang)
    // {
    //     //
    // }
}