@extends('layouts.master')

@section("content")
<div class="panel">
    <div class="panel-heading">
        <h3 class="panel-title">Inputs</h3>
    </div>
    <div class="panel-body">
        <form action="/tentang/update" method="POST">
            {{-- {{csrf_field()}} --}}
            <div class="form-group">
                <label for="Nama">Nama</label>
                <input name="Nama" type="text" class="form-control" id="Nama" aria-describedby="Nama" value="">

            </div>
            <div class="form-group">
                <label for="Deskripsi">Deskripsi</label>
                <input name="Deskripsi" type="text" class="form-control" id="Deskripsi" aria-descibedby="Deskripsi" value="">
            </div>
            <div class="form-group">
                <label for="stok">Stok</label>
                <input name="stok" type="text" class="form-control" id="stok" aria-describedby="stok" value="">
            </div>
            <div class="form-group">
                <label for="Harga">Harga</label>
                <input name="Harga" type="text" class="form-control" id="Harga" aria-describedby="Harga" value="">
            </div>
            <div class="form-group">
                <label for="category_id">Category_id</label>
                <input name="category_id" type="text" class="form-control" id="category_id" aria-describedby="category_id" value="">
            </div>


            <button type="submit" class="btn btn-warning">tambah</button>
        </form>
    </div>
</div>
@endsection
