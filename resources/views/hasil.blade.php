<!-- Fonts and Codebase framework -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,400i,600,700">
<link rel="stylesheet" id="css-main" href="https://my.its.ac.id/assets/css/codebase.css">

<!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css'>
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
<!-- END Stylesheets -->

<style>
    .text-primary {
        color: #013880 !important;
    }

    .bg-orange{background:#f1c40f;color:#013880}.bg-orange:hover{background:#f39c12}.text-orange{color:#f1c40f}.bg-blue{background:#3498db;color:#fff}
    .side-menu .active {
        background: #013880;
        border: none;
    }

    .btn-primary {
        background: #013880;
        color: #fff;
        border: none;
    }

    .btn-primary:focus, .btn-primary:active {
        background: #013880 !important;
    }

    .btn-primary.disabled, .btn-primary:disabled {
        background-color:
                #013880;
        border-color:
                #013880;
    }

    .btn-outline-primary {
        border: #013880 1px solid;
        color: #013880;
        background: transparent;
    }

    .btn-outline-primary:hover {
        border: #013880 1px solid;
        background: #013880;
        color: #fff;;
    }

    .btn-outline-primary:focus, .btn-outline-primary:active {
        border: #013880 1px solid !important;
        color: #fff !important;
        background: transparent;
    }

    .btn-primary:hover, .btn-primary:active {
        background: #002a61;
        color: #fff;
    }

    .block.data-diri {
        margin-top: -24px !important;
    }

    .custom-control-input:checked ~ .custom-control-label::before {
        background-color: #013880 !important;
        border: #013880 !important;
    }

    .custom-control-input:active ~ .custom-control-label::before {
        color: #fff;
        background-color: #013880 !important;
        border: #013880 !important;
    }

    .dropdown-item:hover{
        background-color: #343a40 !important;
        color: #fff !important;
    }

    input::placeholder {
        font-weight: lighter;
        color: #cccccc !important;
    }

    input:active, input:focus {
        border-color: #013880 !important;
    }

    .text-primary.text-white-hover:hover {
        color: #fff !important;
    }

    .impersonating {
        padding: 10px;
        background-color: #fff;
        position:fixed;
        top:0;
        width:100%;
        z-index:100;
        /*border-bottom: 1px solid #013880;*/
    }

    
    .pic-container{
        cursor: pointer;
        overflow: hidden;
    }

    .pic-container.pic-medium{
        width: 96px;
        height: 96px;
    }

    .pic-container.pic-circle{
        border-radius: 50%;
    }

    .pic-overlay{
        background-color: #ccc;
        opacity: 0.5;
        width: 100%;
        height: 100%;
        margin: 0;
        position: relative;
        text-align: center;
        display: flex;
        align-items: center;
        justify-content: center;

    }

    .pic-container:hover .pic-overlay{
        top: -100%;
    }

    .pic-overlay a{
        display: block;
        padding: 10px;
    }

    .pic-xs .pic-overlay a{
        padding: 5px;
    }

    .info-tooltip {
        position: absolute; 
        bottom: 0; 
        right: 0; 
        padding: 5px; 
        margin-right: 10px; 
        border-bottom-left-radius: 2px;
        border-bottom-right-radius: 2px
    }

    .btn-outline-danger {
        color: #ef5350;
        background-color: transparent;
        background-image: none;
        border-color: #ef5350;
    }

    button.swal2-cancel.swal2-styled {
        border: #013880 1px solid !important;
        color: #013880 !important;
        background: transparent !important;
    }

    button.swal2-cancel.swal2-styled:hover, button.swal2-cancel.swal2-styled:focus {
        border: #013880 1px solid !important;
        background: #013880 !important;
        color: #fff !important;
    }

    .mr-picture {
        margin-right: 2.0rem !important;
    }

</style>

<head>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @hasSection('title')
        <title>Program Cari- @yield('title')</title>
    @else
        <title>Program Cari</title>
    @endif
</head>


<x-app-layout>
    <div class="block-header">
        {{-- <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">Menu</div> --}}
    </div>


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-16">
            <div class="card card-info card-outline">
                {{-- <div class="card-header">
                    <h1> </h1>
                </div> --}}
                <div class="card-body">
                    <table class="table table-bordered">
                        <tr class = "bg-primary">
                            <th>Nama</th>
                            <th>NRP</th>
                            <th>Tempat Lahir</th>
                            <th>Tanggal Lahir</th>
                            <th>No Ijazah</th>
                            <th>Ijazah</th>
                            <th>Transkrip</th>
                            <th>Piagam</th>
                        </tr>
                        @foreach ($ijazah as $item)
                        <tr>
                            <td>{{ $item->NAMA }}</td>
                            <td>{{ $item->NRP }}</td>
                            <td>{{ $item->TMPLAHIR }}</td>
                            <td>{{ $item->TGLLAHIR }}</td>
                            <td>{{ $item->NOIJAZAH }}</td>
                            <td>
                                @if (file_exists(public_path('/ijazah/'.$item->nrp.'.jpg')))
                                <!-- BUTTON -->
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenterIjazah"><span class="fas fa-eye "></span>View</button>
                                {{-- <button type="button" class="btn btn-success"><span class="fas fa-print"></span>Print</button> --}}
                                {{-- <button type="button" class="btn btn-primary" onClick="newWindow = window.open('{{ asset('/ijazah/'.$item->nrp.'.jpg') }}');"><span class="fas fa-eye"></span>View</button> --}}
                                <button type="button" class="btn btn-success" onClick="newWindow = window.open('{{ asset('/ijazah/'.$item->nrp.'.jpg') }}'); newWindow.print();"><span class="fas fa-print"></span>Print</button>

                                <!-- MODAL PREVIEW IJAZAH -->>
                                <div class="modal fade" id="exampleModalCenterIjazah" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLongTitle">Preview Gambar Ijazah</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <img src ="{{ asset('/ijazah/'.$item->nrp.'.jpg') }}" width = "800px" height = "500px">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @else
                                Tidak ada
                                @endif
                            </td>
                            <td>
                                @if (file_exists(public_path('/transkrip/'.$item->nrp.'.jpg')))
                                <!-- BUTTON -->
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenterTranskrip"><span class="fas fa-eye"></span>View</button>
                                {{-- <button type="button" class="btn btn-success"><span class="fas fa-print"></span>Print</button> --}}
                                {{-- <button type="button" class="btn btn-primary" onClick="newWindow = window.open('{{ asset('/transkrip/'.$item->nrp.'.jpg') }}');"><span class="fas fa-eye"></span>View</button> --}}
                                <button type="button" class="btn btn-success" onClick="newWindow = window.open('{{ asset('/transkrip/'.$item->nrp.'.jpg') }}'); newWindow.print();"><span class="fas fa-print"></span>Print</button>

                                <!-- MODAL PREVIEW TRANSKRIP -->
                                <div class="modal fade" id="exampleModalCenterTranskrip" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLongTitle">Preview Gambar Transkrip</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <img src ="{{ asset('/transkrip/'.$item->nrp.'.jpg') }}" width = "800px" height = "500px">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @else
                                Tidak ada
                                @endif
                            </td>
                            <td>
                                @if (file_exists(public_path('/piagam/'.$item->nrp.'.jpg')))
                                <!-- BUTTON -->
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenterPiagam"><span class="fas fa-eye"></span>View</button>
                                {{-- <button type="button" class="btn btn-success"><span class="fas fa-print"></span>Print</button> --}}
                                {{-- <button type="button" class="btn btn-primary" onClick="newWindow = window.open('{{ asset('/piagam/'.$item->nrp.'.jpg') }}');"><span class="fas fa-eye"></span>View</button> --}}
                                <button type="button" class="btn btn-success" onClick="newWindow = window.open('{{ asset('/piagam/'.$item->nrp.'.jpg') }}'); newWindow.print();"><span class="fas fa-print"></span>Print</button>

                                <!-- MODAL PREVIEW PIAGAM CUM LAUDE -->>
                                <div class="modal fade" id="exampleModalCenterPiagam" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLongTitle">Preview Gambar Piagam</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <img src ="{{ asset('/piagam/'.$item->nrp.'.jpg') }}" width = "800px" height = "500px">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @else
                                Tidak ada
                                @endif
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Preview Gambar</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h2>Gambar</h2>
                </div>
            </div>
        </div>
    </div>

    {{ $ijazah->appends($_GET)->links() }}
</div>
</x-app-layout>