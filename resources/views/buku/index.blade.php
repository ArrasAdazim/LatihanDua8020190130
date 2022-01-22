@extends('layouts.master')

@section('content')
@if(session('sukses'))
    <div class="alert alert-success" role="alert">
        {{ session('sukses') }}
    </div>
@endif

<div class="row">
    <div class="col-6">
        <h2>Data Buku</h2>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#exampleModal">
            Tambah Data
        </button>
    </div>
    <div class="col-6">


    </div>
</div>

<table class="table table-hover">
    <tbody>
        <tr>
            <th>Judul</th>
            <th>Pengarang</th>
            <th>Tanggal Dibuat</th>
            <th>Action</th>
        </tr>
        @foreach( $data_buku as $buku )
            <tr>
                <td>{{ $buku->judul }}</td>
                <td>{{ $buku->pengarang }}</td>
                <td>{{ $buku->created_at }}</td>
                <td>
                    <a href="/buku/{{ $buku->id }}/edit" class="btn btn-warning btn-sm">Edit</a>
                    <a href="/buku/{{ $buku->id }}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Apakah yakin ingin menghapus data ?')">Hapus</a>
                </td>
            </tr>
        @endforeach

    </tbody>
</table>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">TAMBAH DATA</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/buku/create" method="POST">
                    {{ csrf_field() }}
                    <div class="mb-3">
                        <label for="judulBuku" class="form-label">Judul</label>
                        <input name="judul" type="text" class="form-control" id="judul" aria-describedby="emailHelp"
                            placeholder="Judul Buku">

                    </div>
                    <div class="mb-3">
                        <label for="NamaPengarang" class="form-label">Pengarang</label>
                        <input name="pengarang" type="text" class="form-control" id="pengarang"
                            aria-describedby="emailHelp" placeholder="Nama Pengarang">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
    @endsection
