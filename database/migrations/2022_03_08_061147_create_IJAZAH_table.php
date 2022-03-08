<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIJAZAHTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('IJAZAH', function (Blueprint $table) {
            $table->char('NRP', 10)->primary();
            $table->string('NAMA', 100)->nullable();
            $table->string('TMPLAHIR', 100)->nullable();
            $table->dateTime('TGLLAHIR')->nullable();
            $table->string('ALAMAT', 100)->nullable();
            $table->string('KOTA', 50)->nullable();
            $table->string('TELP', 20)->nullable();
            $table->string('NAMAORTU', 50)->nullable();
            $table->decimal('PROSESI_WISUDA', 18, 0)->nullable();
            $table->decimal('PERIODEWISUDA', 3, 0);
            $table->dateTime('TGLKELULUSAN');
            $table->string('NOIJAZAH', 50)->nullable();
            $table->decimal('LULUSANKE', 6, 0)->nullable();
            $table->string('JUDULTA', 2000)->nullable();
            $table->decimal('IPK', 5)->nullable();
            $table->decimal('LAMASTUDI', 3, 0)->nullable();
            $table->string('PREDIKAT', 2)->nullable();
            $table->decimal('STATUSCEK', 1, 0)->nullable();
            $table->dateTime('TGLCEK')->nullable();
            $table->string('BIDANG', 100)->nullable();
            $table->string('email', 200)->nullable();
            $table->text('JK')->nullable();
            $table->string('BIDANGEN', 200)->nullable();
            $table->string('pembimbing1', 100)->nullable();
            $table->string('pembimbing2', 100)->nullable();
            $table->string('pembimbing3', 100)->nullable();
            $table->string('flag', 1)->nullable();
            $table->string('noseri', 20)->nullable();
            $table->dateTime('TGLWISUDA')->nullable();
            $table->string('kewarganegaraan', 50)->nullable();
            $table->char('nrp_urut', 10)->nullable();
            $table->string('nomor_ijazah', 100)->nullable();
            $table->string('nrp_baru', 14)->nullable();
            $table->string('keterangan', 50)->nullable();
            $table->tinyInteger('bidikmisi')->nullable();
            $table->string('nik', 25)->nullable();
            $table->tinyInteger('is_manual')->nullable();
            $table->string('pin', 15)->nullable();
            $table->string('pembimbing4', 100)->nullable();
            $table->char('periode_semester', 5)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('IJAZAH');
    }
}
