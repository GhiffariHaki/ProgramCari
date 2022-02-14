@extends('layouts')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card card-info card-outline">
                <div class="card-header">
                    <h1>Database Mahasiswa</h1>
                    <a href="{{ route('database-export') }}" class="btn btn-success">Download Database</a>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">Upload Database</button>
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
    <!-- Button trigger modal -->


    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Upload Database</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('database-import') }}" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="form-group">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <input type="file" name="file" required="required">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Upload</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{ $mahasiswa->links() }}

</div>
@endsection