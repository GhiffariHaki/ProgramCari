<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

/**
 * @property string $NRP
 * @property string $NAMA
 * @property string $TMPLAHIR
 * @property string $TGLLAHIR
 * @property string $ALAMAT
 * @property string $KOTA
 * @property string $TELP
 * @property string $NAMAORTU
 * @property float $PROSESI_WISUDA
 * @property float $PERIODEWISUDA
 * @property string $TGLKELULUSAN
 * @property string $NOIJAZAH
 * @property float $LULUSANKE
 * @property string $JUDULTA
 * @property float $IPK
 * @property float $LAMASTUDI
 * @property string $PREDIKAT
 * @property float $STATUSCEK
 * @property string $TGLCEK
 * @property string $BIDANG
 * @property string $email
 * @property string $JK
 * @property string $BIDANGEN
 * @property string $pembimbing1
 * @property string $pembimbing2
 * @property string $pembimbing3
 * @property string $flag
 * @property string $noseri
 * @property string $TGLWISUDA
 * @property string $kewarganegaraan
 * @property string $nrp_urut
 * @property string $nomor_ijazah
 * @property string $nrp_baru
 * @property string $keterangan
 * @property boolean $bidikmisi
 * @property string $nik
 * @property boolean $is_manual
 * @property string $pin
 * @property string $pembimbing4
 * @property string $periode_semester
 */
class Ijazah extends Model
{
    use Sortable;

    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'IJAZAH';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'NRP';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'string';

    /**
     * Indicates if the IDs are auto-incrementing.
     * 
     * @var bool
     */
    public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = ['NRP', 'NAMA', 'TMPLAHIR', 'TGLLAHIR', 'ALAMAT', 'KOTA', 'TELP', 'NAMAORTU', 'PROSESI_WISUDA', 'PERIODEWISUDA', 'TGLKELULUSAN', 'NOIJAZAH', 'LULUSANKE', 'JUDULTA', 'IPK', 'LAMASTUDI', 'PREDIKAT', 'STATUSCEK', 'TGLCEK', 'BIDANG', 'email', 'JK', 'BIDANGEN', 'pembimbing1', 'pembimbing2', 'pembimbing3', 'flag', 'noseri', 'TGLWISUDA', 'kewarganegaraan', 'nrp_urut', 'nomor_ijazah', 'nrp_baru', 'keterangan', 'bidikmisi', 'nik', 'is_manual', 'pin', 'pembimbing4', 'periode_semester'];

    public $sortable = ['NRP', 'NAMA'];
}
