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
                            <th>Ijazah</th>
                            <th>Transkrip</th>
                            <th>Piagam</th>
                        </tr>
                        @foreach ($mahasiswa as $item)
                        <tr>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->nrp }}</td>
                            <td>{{ $item->jurusan }}</td>
                            <td>{{ $item->fakultas }}</td>
                            <td>{{ $item->angkatan }}</td>
                            <td>
                                @if (file_exists(public_path('/ijazah/'.$item->nrp.'.jpg')))
                                <img src="{{ asset('/ijazah/'.$item->nrp.'.jpg') }}" width = "50px" height = "50px">
                                @else
                                <img src="{{ asset('/ijazah/'.'LogoError.png') }}" width = "50px" height = "50px">
                                @endif
                            </td>
                            <td>
                                @if (file_exists(public_path('/transkrip/'.$item->nrp.'.jpg')))
                                <img src="{{ asset('/transkrip/'.$item->nrp.'.jpg') }}" width = "50px" height = "50px">
                                @else
                                <img src="{{ asset('/transkrip/'.'LogoError.png') }}" width = "50px" height = "50px">
                                @endif
                            </td>
                            <td>
                                @if (file_exists(public_path('/piagam/'.$item->nrp.'.jpg')))
                                <img src="{{ asset('/piagam/'.$item->nrp.'.jpg') }}" width = "50px" height = "50px">
                                @else
                                <img src="{{ asset('/piagam/'.'LogoError.png') }}" width = "50px" height = "50px">
                                @endif
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
    {{ $mahasiswa->appends($_GET)->links() }}
</div>
@endsection