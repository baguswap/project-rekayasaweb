<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableMahasiswa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_mahasiswa', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('jenis_kelamin');
            $table->string('alamat');
            $table->string('agama');
            $table->string('kota');
            $table->string('kabupaten');
            $table->string('provinsi');
            $table->integer('kode_pos');
            $table->integer('no_telp');
            $table->string('email');
            $table->string('status_calon_mahasiswa');
            $table->string('asal_sekolah');
            $table->string('alamat_sekolah');
            $table->string('nilai_ratarata_rapor');
            $table->string('tahun_lulus');
            $table->string('periode_masuk');
            $table->string('jenjang_pendidikan');
            $table->string('program_studi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_mahasiswa');
    }
}
