<?php

namespace App\Imports;

use App\Models\Mahasiswa;
use Maatwebsite\Excel\Concerns\ToModel;

class MahasiswaImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Mahasiswa([
            'nama' => $row[1],
            'nrp' => $row[2],
            'jurusan' => $row[3],
            'fakultas' => $row[4],
            'angkatan' => $row[5],
        ]);
    }
}
