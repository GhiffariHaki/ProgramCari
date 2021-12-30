@extends('layouts')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card card-info card-outline">
                <div class="card-header">
                    <h1>Cari Dokumen</h1>
                </div>
                <div class="card-body">
                    <form method="get" action="{{ url('/') }}">
                    <div class="input-group mb-3">
                        <input type="search" class="form-control" placeholder="Cari Dokumen...." name="query">
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="submit">Cari</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection