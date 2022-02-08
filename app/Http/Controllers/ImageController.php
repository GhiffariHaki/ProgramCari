<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function index() {
        return view('upload');
    }

    public function piagam() {
        return view('uploadpiagam');
    }

    public function transkrip() {
        return view('uploadtranskrip');
    }

    public function ijazah() {
        return view('uploadijazah');
    }

    public function store_transkrip(Request $request) {
        $imageName=$request->file->getClientOriginalName();
        $request->file->move(public_path('transkrip'), $imageName);
        return response()->json(['uploaded'=>'/transkrip/'.$imageName]);
    }

    public function store_piagam(Request $request) {
        $imageName=$request->file->getClientOriginalName();
        $request->file->move(public_path('piagam'), $imageName);
        return response()->json(['uploaded'=>'/piagam/'.$imageName]);
    }

    public function store_ijazah(Request $request) {
        $imageName=$request->file->getClientOriginalName();
        $request->file->move(public_path('ijazah'), $imageName);
        return response()->json(['uploaded'=>'/ijazah/'.$imageName]);
    }

}
