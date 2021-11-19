@extends('layouts.master')

@section("content")

@if(session('sukses'))
<div class="alert alert-succsess">{{session('sukses')}}</div>
@endif



<table id="intro_table"class="table table-striped table-bordered table-hover">

    <thead>
        <tr>
            <th  scope="col">Id</th>
            <th  scope="col">Email</th>
            <th  scope="col">Nama</th>
            <th  scope="col">Alamat</th>
            <th  scope="col">No Telfon</th>
            <th>AKSI</th>

        </tr>
    </thead>
        @foreach($customers as $customers)
    <tbody>
        <tr>
            <td> {{$customers->id}}</td>
            <td> {{$customers->email}}</td>
            <td> {{$customers->nama}}</td>
            <td> {{$customers->alamat}}</td>
            <td> {{$customers->no_telfon}}</td>
            <td>
                <a href="/customers/{{$customers->id}}/edit" class = "btn btn-warning btn-sm">Edit</a>
                <a href="/customers/{{$customers->id}}/delete" class= "btn btn-danger btn-sm" onclick="return confirm('konfirm untuk hapus data')">Hapus</a>
                <button type="button" class="btn" data-toggle="modal" data-target="#exampleModal"><i class="lnr lnr-plus-circle"></i></button>
            </td>
        </tr>
    </tbody>
@endforeach

@endsection
