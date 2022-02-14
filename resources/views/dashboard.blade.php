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
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> --}}

    {{-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div>
            </div>
        </div>
    </div> --}}


    <div class="block block-transparent">
        <div class="block-header">
            {{-- <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">Menu</div> --}}
        </div>
        
        <div class="max-w-7xl mx-auto">
            <div class="row gutters-tiny push">
                    {{-- <div class="col-2 col-md-3 mt-2 mx-auto">
                        <a class="h-100 block block-rounded block-bordered block-link-shadow text-center" href="{{ url('/cari') }}">
                            <div class="my-5 block-content">
                                <p>
                                    <i class="fas fa-search fa-3x text-primary"></i>
                                </p>
                                <p class="text-primary">Pencarian</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-2 col-md-3 mt-2 mx-auto">
                        <a class="h-100 block block-rounded block-bordered block-link-shadow text-center" href="{{ url('/database') }}">
                            <div class="my-5 block-content">
                                <p>
                                    <i class="fas fa-database fa-3x text-primary"></i>
                                </p>
                                <p class="text-primary">Database</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-2 col-md-3 mt-2 mx-auto">
                        <a class="h-100 block block-rounded block-bordered block-link-shadow text-center" href="{{ url('/uploadfiles') }}">
                            <div class="my-5 block-content">
                                <p>
                                    <i class="fas fa-upload fa-3x text-primary"></i>
                                </p>
                                <p class="text-primary">Upload Files</p>
                            </div>
                        </a>
                    </div>                        --}}

                    
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card card-info card-outline">
                <div class="card-header bg-primary">
                    <h1 style="color:white;">Cari Dokumen <span class = "fas fa-search"></h1>
                </div>
                <div class="card-body">
                    <form action = "/cari">
                        <div class="input-group mb-3">
                            <input type="search" class="form-control" placeholder="Masukkan Nama atau NRP..." name="query">
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary" type="submit">Cari</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</x-app-layout>


