<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class customersController extends Controller
{
    public function index()
    {

        // return view('produk');
        $getcustomers = \App\models\customers::all();
        return view('customers',['customers'=> $getcustomers]);

    }

    public function create()
    {

        return view('createcustomers');
    }

    public function delete($id)
    {
        $customers=\App\models\customers::find($id);
        $customers->delete($customers);
        return redirect('/customers')->with('sukses','Data Berhasil diHapus');
    }

}
