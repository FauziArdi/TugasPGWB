<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class categoriesController extends Controller
{
    public function index()
    {

        // return view('produk');
        $getcategories = \App\models\categories::all();
        return view('categories',['categories'=> $getcategories]);

    }

    public function create()
    {

        return view('createcategories');
    }

    public function delete($id)
    {
        $categories=\App\models\categories::find($id);
        $categories->delete($categories);
        return redirect('/categories')->with('sukses','Data Berhasil diHapus');
    }

}
