<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ijazah extends Model
{
    protected $table = "IJAZAH";
    protected $primaryKey = "NRP";
    protected $fillable = [ 
        // 'nama', 'nrp', 'jurusan', 'fakultas', 'angkatan', 
            'NRP',
            'NAMA',
            'TMPLAHIR',
            'TGLLAHIR',
            'ALAMAT',
            'KOTA',
            'TELP',
            'NAMAORTU',
            'PROSESI_WISUDA',
            'PERIODEWISUDA',
            'TGLKELULUSAN',
            'NOIJAZAH',
            'LULUSANKE',
            'JUDULTA',
            'IPK',
            'LAMASTUDI',
            'PREDIKAT',
            'STATUSCEK',
            'TGLCEK',
            'BIDANG',
            'email',
            'JK',
            'BIDANGEN',
            'pembimbing1',
            'pembimbing2',
            'pembimbing3',
            'flag',
            'noseri',
            'TGLWISUDA',
            'kewarganegaraan',
            'nrp_urut',
            'nomor_ijazah',
            'nrp_baru',
            'keterangan',
            'bidikmisi',
            'nik',
            'is_manual',
            'pin',
            'pembimbing4',
            'periode_semester',
    ];
}
