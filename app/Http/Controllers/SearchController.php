<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Ijazah;
#MODEL FILE TRANSKIRP

use App\Http\Controllers\Controller;

class searchController extends Controller
{   
    public function index(){
        if(request("query")){
            
            $searchText = request("query");
            #dd($searchText);

            #QUERYNYA DISINI
            $ijazah = Ijazah::sortable()->where('NAMA', 'LIKE', '%'.$searchText.'%')
                        ->orWhere('NRP', 'LIKE', '%'.$searchText.'%')
                        ->paginate(7);
                        
            #QUERY JOIN FILE DIMANA NRP = NAMAFILE.TRANSKIRP
            #QUERY JOIN FILE DIMANA NRP = NAMAFILE.IJAZAH

            return view('hasil', compact('ijazah'));
        }
        else{
            return view('search');
        }
    }
}


