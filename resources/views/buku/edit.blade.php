@extends('layouts.master')

@section('content')
<h2>Edit Data Buku</h2>
@if(session('sukses'))
    <div class="alert alert-success" role="alert">
        {{ session('sukses') }}
    </div>
@endif

<div class="row">
    <form action="/buku/{{ $buku->id }}/update" method="POST">
        {{ csrf_field() }}
        <div class="mb-3">
            <label for="judulBuku" class="form-label">Judul</label>
            <input name="judul" type="text" class="form-control" id="judul" aria-describedby="emailHelp"
                placeholder="Judul Buku" value="{{ $buku->judul }}">

        </div>
        <div class="mb-3">
            <label for="NamaPengarang" class="form-label">Pengarang</label>
            <input name="pengarang" type="text" class="form-control" id="pengarang" aria-describedby="emailHelp"
                placeholder="Nama Pengarang" value="{{ $buku->pengarang }}">
        </div>
        <button type="submit" class="btn btn-warning ">Update Data</button>
    </form>
    @endsection
