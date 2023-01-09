<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Mahasiswa extends Model
{

    protected $table = 'table_mahasiswa';


    protected $fillable = ['nama', 'tempat_lahir' ,	'tanggal_lahir','jenis_kelamin',	'alamat',	'agama',	'kota', 'kabupaten',	'provinsi',	'kode_pos',	'no_telp',	'email',	'status_calon_mahasiswa',	'asal_sekolah',	'alamat_sekolah',	'nilai_ratarata_rapor',	'tahun_lulus','periode_masuk','jenjang_pendidikan','program_studi'	];
    
}