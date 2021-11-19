<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class produkController extends Controller
{
    public function index()
    {

        // return view('produk');
        $getproduk = \App\models\produk::all();
        return view('produk',['produk'=> $getproduk]);

    }

    public function create()
    {

        return view('createproduk');
    }

    public function delete($id)
    {
        $produk=\App\models\produk::find($id);
        $produk->delete($produk);
        return redirect('/produk')->with('sukses','Data Berhasil diHapus');
    }



}


