@extends('template')
@section('konten')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<div class="content">
<div class="intro-y flex items-center mt-8">
        <center><h2 class="text-lg font-medium mr-auto">Form Edit Data</h2></center>
    </div>
    <div class="grid grid-col-12 gap-6 mt-3">
        <div class="grid grid-col-span-12 lh:col-span-6">
            @if(count($errors) > 0)
            @foreach($errors->all() as $error)
            <div class="alert alert-warning">{{ $error }}}</div>
            @endforeach
            @endif

                <form style="background-color:rgb(255, 255, 255); color:black; margin-left: 200px; margin-right: 200px;" action="{{ route('dashboardupdate',$data['id']) }}" method='POST'>
                @csrf
                @method("put")
                <div class="intro-y box p-5">
                    <div>
                        <label for="crud-form-1" class="form-label">Nama</label>
                        <input id="crud-from-1" type="text" class="form-control w-full" name="nama" value="{{ $data['nama'] }}"> 
                    </div>
                    <div class="mt-3">
                    <div>
                        <label for="crud-form-1" class="form-label">Tempat Lahir</label>
                        <input id="crud-form-1" type="text" class="form-control w-full" name="tempat-lahir" value="{{ $data['tempat_lahir'] }}">
                    </div>
                    </div>
                    <div class="mt-3">
                    <div>
                        <label for="crud-form-1" class="form-label">Tanggal Lahir</label>
                        <input id="crud-form-1" type="text" class="form-control w-full" name="tanggal-lahir" value="{{ $data['tanggal_lahir'] }}">
                    </div>
                    </div>
                    <div class="mt-3">
                    <div>
                        <label for="crud-form-1" class="form-label">Jenis Kelamin</label><br>
                        <select id="crud-form-1" name="jenis-kelamin" value="{{ $data['jenis_kelamin'] }}">
                            <option value="laki-laki">Laki-laki</option>
                            <option value="perempuan">Perempuan</option>
                        </select>
                    </div>
                    </div>
                    <div class="mt-3">
                    <div>
                        <label for="crud-form-1" class="form-label"> Alamat</label>
                        <input id="crud-form-1" type="text" class="form-control w-full" name="alamat" value="{{ $data['alamat'] }}">
                    </div>
                    </div>
                    <div class="mt-3">
                    <div>
                        <label for="crud-form-1" class="form-label"> Agama</label><br>
                        <select id="crud-form-1" name="agama" value="{{ $data['agama'] }}">
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Katholik">Katholik</option>
                            <option value="Budha">Budha</option>
                            <option value="Hindu">Hindu</option>
                        </select>
                    </div>
                    </div>
                    <div class="mt-3">
                    <div>
                        <label for="crud-form-1" class="form-label"> Kota</label>
                        <input id="crud-form-1" type="text" class="form-control w-full" name="kota" value="{{ $data['kota'] }}">
                    </div>
                    </div>
                    <div class="mt-3">
                    <div>
                        <label for="crud-form-1" class="form-label">Kabupaten</label>
                        <input id="crud-form-1" type="text" class="form-control w-full" name="kabupaten" value="{{ $data['kabupaten'] }}">
                    </div>
                    </div>
                    <div class="mt-3">
                    <div>
                        <label for="crud-form-1" class="form-label"> Provinsi</label>
                        <input id="crud-form-1" type="text" class="form-control w-full" name="provinsi" value="{{ $data['provinsi'] }}">
                    </div>
                    </div>
                    <div class="mt-3">
                    <div>
                        <label for="crud-form-1" class="form-label"> Kode Pos</label>
                        <input id="crud-form-1" type="text" class="form-control w-full" name="kode-pos" value="{{ $data['kode_pos'] }}">
                    </div>
                    </div>
                    <div class="mt-3">
                    <div>
                        <label for="crud-form-1" class="form-label"> No Telp</label>
                        <input id="crud-form-1" type="text" class="form-control w-full" name="no-telp" value="{{ $data['no_telp'] }}">
                    </div>
                    </div>
                    <div class="mt-3">
                    <div>
                        <label for="crud-form-1" class="form-label"> Email</label>
                        <input id="crud-form-1" type="text" class="form-control w-full" name="email" value="{{ $data['email'] }}">
                    </div>
                    </div>
                    <div class="mt-3">
                    <div>
                        <label for="crud-form-1" class="form-label"> Status Calon Mahasiswa</label>
                        <input id="crud-form-1" type="text" class="form-control w-full" name="status-calon-mahasiswa" value="{{ $data['status_calon_mahasiswa'] }}">
                    </div>
                    </div>
                    <div class="mt-3">
                    <div>
                        <label for="crud-form-1" class="form-label"> Asal Sekolah</label>
                        <input id="crud-form-1" type="text" class="form-control w-full" name="asal-sekolah" value="{{ $data['asal_sekolah'] }}">
                    </div>
                    <div>
                        <label for="crud-form-1" class="form-label"> Alamat Sekolah</label>
                        <input id="crud-form-1" type="text" class="form-control w-full" name="alamat-sekolah" value="{{ $data['alamat_sekolah'] }}">
                    </div>
                    <div>
                        <label for="crud-form-1" class="form-label"> Nilai Rata-rata rapor</label>
                        <input id="crud-form-1" type="text" class="form-control w-full" name="nilai-ratarata-rapor" value="{{ $data['nilai_ratarata_rapor'] }}">
                    </div>
                    <div>
                        <label for="crud-form-1" class="form-label"> Tahun Lulus</label>
                        <input id="crud-form-1" type="text" class="form-control w-full" name="tahun-lulus" value="{{ $data['tahun_lulus'] }}">
                    </div>
                    <div>
                        <label for="crud-form-1" class="form-label"> Periode Masuk</label>
                        <input id="crud-form-1" type="text" class="form-control w-full" name="periode-masuk" value="{{ $data['periode_masuk'] }}">
                    </div>
                    <div>
                        <label for="crud-form-1" class="form-label"> Jenjang Pendidikan</label>
                        <input id="crud-form-1" type="text" class="form-control w-full" name="jenjang-pendidikan" value="{{ $data['jenjang_pendidikan'] }}">
                    </div>
                    <div>
                        <label for="crud-form-1" class="form-label"> Program Studi</label>
                        <input id="crud-form-1" type="text" class="form-control w-full" name="program-studi" value="{{ $data['program_studi'] }}">
                    </div>
                    </div>
                    <div class="mt-3">
                    <div class="text-right mt-5">
                        <button type="reset" class="btn btn-outline-secondary w-24 mr-1">Cancel</button>
                        <button type="submit" class="btn btn-primary w-24">Save</button>
                    </div>
                    </div>
                    
                </div>
                </form>
        </div>
    </div>
</div>
    @endsection