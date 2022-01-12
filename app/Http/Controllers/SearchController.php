<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Mahasiswa;
use App\Http\Controllers\Controller;

class SearchController extends Controller
{

    public function index(){
        #dd(request('query'));

        if(request("query")){
            
            $searchText = request("query");
            #$mahasiswa = Mahasiswa::all();
            dd($searchText);

            #return view('hasil', compact('mahasiswa'));
        }
        else{
            return view('search');
        }
    }
}
