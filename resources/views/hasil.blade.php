@extends('layouts')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card card-info card-outline">
                <div class="card-header">
                    <h1>Hasil Cari Dokumen</h1>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <tr>
                            <th>Nama</th>
                            <th>NRP</th>
                            <th>Jurusan</th>
                            <th>Fakultas</th>
                            <th>Angkatan</th>
                        </tr>
                        @foreach ($mahasiswa as $item)
                        <tr>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->nrp }}</td>
                            <td>{{ $item->jurusan }}</td>
                            <td>{{ $item->fakultas }}</td>
                            <td>{{ $item->angkatan }}</td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection