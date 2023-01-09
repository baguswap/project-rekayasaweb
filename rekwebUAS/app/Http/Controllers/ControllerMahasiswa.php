<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class ControllerMahasiswa extends Controller
{
    public function create(Request $request)
    {
        $data = $request->all();
        $mahasiswa = Mahasiswa::create($data);

        return response()->json($mahasiswa);
    }

    public function index()
    {
        $mahasiswa = Mahasiswa::all();
        return response()->json($mahasiswa);
    }

    public function detail($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        return response()->json($mahasiswa);
    }

    public function update(Request $request, $id)
    {
        $mahasiswa = Mahasiswa::whereId($id)->update([
            'nama'  => $request->input('nama'),
            'tempat_lahir'     => $request->input('tempat_lahir'),
            'tanggal_lahir' => $request->input('tanggal_lahir'),
            'jenis_kelamin' => $request->input('jenis_kelamin'),
            'alamat' => $request->input('alamat'),
            'agama' => $request->input('agama'),
            'kota' => $request->input('kota'),
            'kabupaten' => $request->input('kabupaten'),
            'provinsi' => $request->input('provinsi'),
            'kode_pos' => $request->input('kode_pos'),
            'no_telp' => $request->input('no_telp'),
            'email' => $request->input('email'),
            'status_calon_mahasiswa' => $request->input('status_calon_mahasiswa'),
            'asal_sekolah' => $request->input('asal_sekolah'),
            'alamat_sekolah' => $request->input('alamat_sekolah'),
            'nilai_ratarata_rapor' => $request->input('nilai_ratarata_rapor'),
            'tahun_lulus' => $request->input('tahun_lulus'),
            'periode_masuk' => $request->input('periode_masuk'),
            'jenjang_pendidikan' => $request->input('jenjang_pendidikan'),
            'program_studi' => $request->input('program_studi'),
        ]);

        if($mahasiswa){
            return response()->json([
                'success'   => true,
                'message'   => 'Data berhasil diupadate',
                'data'      => $mahasiswa
            ],201);
        } else{
            return response()->json([
                'success'   => false,
                'message'   => 'Data Gagal diupadate',
            ],400);
        }
    }

    public function delete($id)
    {
        $mahasiswa = Mahasiswa::whereId($id)->first();
        $mahasiswa->delete();

        if($mahasiswa)
        {
            return response()->json([
                'success' => true,
                'message' => 'Data berhasil dihapus'
            ],200);
        }
    }
}
