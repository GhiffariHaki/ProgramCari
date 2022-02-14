<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Exports\MahasiswaExport;
use App\Imports\MahasiswaImport;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mahasiswa = Mahasiswa::paginate(10);
        return view('database', compact('mahasiswa'));
    }


    public function export()
    {
        return Excel::download(new MahasiswaExport, 'DatabaseMahasiswa.xlsx');
    }

    public function import(Request $request)
    {
        $file = $request->file('file');
        $namaFile = $file->getClientOriginalName();
        $file->move('DataMahasiswa', $namaFile);

        Excel::import(new MahasiswaImport, public_path('/DataMahasiswa/'.$namaFile));
        return redirect("/database");
    }
}
