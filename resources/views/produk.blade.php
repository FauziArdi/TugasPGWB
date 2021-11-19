@extends('layouts.master')

@section("content")

@if(session('sukses'))
<div class="alert alert-succsess">{{session('sukses')}}</div>
@endif



<table id="intro_table"class="table table-striped table-bordered table-hover">

    <thead>
        <tr>
            <th  scope="col">Id</th>
            <th  scope="col">Produk</th>
            <th  scope="col">Harga</th>
            <th  scope="col">Jumlah</th>
            <th>AKSI</th>

        </tr>
    </thead>
        @foreach($produk as $produk)
    <tbody>
        <tr>
            <td> {{$produk->id}}</td>
            <td> {{$produk->nama}}</td>
            <td> {{$produk->harga}}</td>
            <td> {{$produk->stok}}</td>
            <td>
                <a href="/produk/{{$produk->id}}/edit" class = "btn btn-warning btn-sm">Edit</a>
                <a href="/produk/{{$produk->id}}/delete" class= "btn btn-danger btn-sm" onclick="return confirm('konfirm untuk hapus data')">Hapus</a>
                <button type="button" class="btn" data-toggle="modal" data-target="#exampleModal"><i class="lnr lnr-plus-circle"></i></button>
            </td>
        </tr>
    </tbody>
@endforeach



</table>


<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h2 class="modal-title" id="exampleModalLabel">Tambah Tentang</h2>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        <form action="/tentang/create" method="POST">
          {{csrf_field()}}
          <div class="form-group">
              <label for="judul">Judul</label>
              <input name="judul" type="text" class="form-control" id="judul" aria-describedby="emailHelp">
          </div>
          <div class="form-group">
              <label for="penjelasan">penjelasan</label>
              <input name="penjelasan" type="text" class="form-control" id="penjelasan">
          </div>
          <div class="form-group">
              <label for="ajakan1">Ajakan 1</label>
              <input name="ajakan1" type="text" class="form-control" id="ajakan1" aria-describedby="emailHelp">
          </div>
          <div class="form-group">
              <label for="ajakan2">Ajakan 2</label>
              <input name="ajakan2" type="text" class="form-control" id="ajakan2" aria-describedby="emailHelp">
          </div>
          <div class="form-group">
            <label for="membergrup">Jumlah Member Grup</label>
            <input name="membergrup" type="text" class="form-control" id="membergrup" aria-describedby="emailHelp">
          </div>
          <div class="form-group">
            <label for="memberaktif">Jumlah Member Aktif</label>
            <input name="memberaktif" type="text" class="form-control" id="memberaktif" aria-describedby="emailHelp">
          </div>
          <div class="form-group">
            <label for="jmlhacara">Jumlah Acara Yang dihadiri</label>
            <input name="jmlhacara" type="text" class="form-control" id="jmlhacara" aria-describedby="emailHelp">
          </div>


          <button type="submit" class="btn btn-primary">Kirim data</button>
          </form>
        </div>
        <!-- <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
          <button type="button" class="btn btn-primary">Simpan</button>
        </div> -->
      </div>
    </div>
  </div>


@endsection
