@extends('layouts.master')

@section("content")

@if(session('sukses'))
<div class="alert alert-succsess">{{session('sukses')}}</div>
@endif



<table id="intro_table"class="table table-striped table-bordered table-hover">

    <thead>
        <tr>
            <th  scope="col">Id</th>
            <th  scope="col">Nama</th>
            <th  scope="col">Deskripsi</th>

            <th>AKSI</th>

        </tr>
    </thead>
        @foreach($categories as $categories)
    <tbody>
        <tr>
            <td> {{$categories->id}}</td>
            <td> {{$categories->nama}}</td>
            <td> {{$categories->deskripsi}}</td>

            <td>
                <a href="/categories/{{$categories->id}}/edit" class = "btn btn-warning btn-sm">Edit</a>
                <a href="/categories/{{$categories->id}}/delete" class= "btn btn-danger btn-sm" onclick="return confirm('konfirm untuk hapus data')">Hapus</a>
                <button type="button" class="btn" data-toggle="modal" data-target="#exampleModal"><i class="lnr lnr-plus-circle"></i></button>
            </td>
        </tr>
    </tbody>
@endforeach

@endsection
