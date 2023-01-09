@extends('template')
@section('konten')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<div class="content">
<div class="intro-y flex items-center mt-5">
        <center><h2 class="text-lg font-medium mr-auto">Form Tambah Data Mahasiswa Baru</h2></center>
    </div>
    <div class="grid grid-col-12 gap-6 mt-5">
        <div class="grid grid-col-span-12 lh:col-span-6">
            @if(count($errors) > 0)
            @foreach($errors->all() as $errors)
            <div class="alert alert-warning">{{ $errors }}}</div>
            @endforeach
            @endif

                <form style="background-color:rgb(255, 255, 255); color:black; margin-left: 200px; margin-right: 200px;" action="{{ route('dashboardstore') }}" method="POST">
                @csrf 
                <div class="intro-y box p-5 rounded">
                    <div>
                        <label for="crud-form-1" class="form-label" ">Nama</label>
                        <input id="crud-form-1" type="text" class="form-control w-full " placeholder="Input Nama Mahasiswa" name="nama">
                    </div>
                    <div class="mt-3">
                    <div>
                        <label for="crud-form-1" class="form-label">Tempat Lahir</label>
                        <input id="crud-form-1" type="text" class="form-control w-full" placeholder="Input Tempat Lahir"name="tempat-lahir">
                    </div>
                    </div>
                    <div class="mt-3">
                    <div>
                        <label for="crud-form-1" class="form-label">Tanggal Lahir</label>
                        <input id="crud-form-1" type="text" class="form-control w-full" placeholder="Input Tanggal Lahir" name="tanggal-lahir" >
                    </div>
                    </div>
                    <div class="mt-3">
                    <div>
                        <label for="crud-form-1" class="form-label">Jenis Kelamin</label><br>
                        <select id="crud-form-1" name="jenis-kelamin" >
                            <option value="laki-laki">Laki-laki</option>
                            <option value="perempuan">Perempuan</option>
                        </select>
                    </div>
                    </div>
                    <div class="mt-3">
                    <div>
                        <label for="crud-form-1" class="form-label"> Alamat</label>
                        <input id="crud-form-1" type="text" class="form-control w-full"placeholder="Input Alamat" name="alamat" >
                    </div>
                    </div>
                    <div class="mt-3">
                    <div>
                        <label for="crud-form-1" class="form-label"> Agama</label><br>
                        <select id="crud-form-1" name="agama">
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
                        <input id="crud-form-1" type="text" class="form-control w-full" placeholder="Input Kota" name="kota" >
                    </div>
                    </div>
                    <div class="mt-3">
                    <div>
                        <label for="crud-form-1" class="form-label">Kabupaten</label>
                        <input id="crud-form-1" type="text" class="form-control w-full" placeholder="Input Kabupaten"name="kabupaten" >
                    </div>
                    </div>
                    <div class="mt-3">
                    <div>
                        <label for="crud-form-1" class="form-label"> Provinsi</label>
                        <input id="crud-form-1" type="text" class="form-control w-full" placeholder="Input Provinsi"name="provinsi" >
                    </div>
                    </div>
                    <div class="mt-3">
                    <div>
                        <label for="crud-form-1" class="form-label"> Kode Pos</label>
                        <input id="crud-form-1" type="text" class="form-control w-full" placeholder="Input Kode Pos"name="kode-pos" >
                    </div>
                    </div>
                    <div class="mt-3">
                    <div>
                        <label for="crud-form-1" class="form-label"> No Telp</label>
                        <input id="crud-form-1" type="text" class="form-control w-full" placeholder="Input No Telp"name="no-telp">
                    </div>
                    </div>
                    <div class="mt-3">
                    <div>
                        <label for="crud-form-1" class="form-label"> Email</label>
                        <input id="crud-form-1" type="text" class="form-control w-full" placeholder="Input Email" name="email">
                    </div>
                    </div>
                    <div class="mt-3">
                    <div>
                        <label for="crud-form-1" class="form-label"> Status Calon Mahasiswa</label>
                        <input id="crud-form-1" type="text" class="form-control w-full" placeholder="Input Status Calon Mahasiswa"name="status-calon-mahasiswa" >
                    </div>
                    </div>
                    <div class="mt-3">
                    <div>
                        <label for="crud-form-1" class="form-label"> Asal Sekolah</label>
                        <input id="crud-form-1" type="text" class="form-control w-full" placeholder="Input Asal Sekolah"name="asal-sekolah">
                    </div>
                     <div class="mt-3">
                    <div>
                        <label for="crud-form-1" class="form-label"> Alamat Sekolah</label>
                        <input id="crud-form-1" type="text" class="form-control w-full" placeholder="Input Alamat Sekolah" name="alamat-sekolah">
                    </div>
                     </div>
                      <div class="mt-3">
                    <div>
                        <label for="crud-form-1" class="form-label"> Nilai Rata-rata rapor</label>
                        <input id="crud-form-1" type="text" class="form-control w-full" placeholder="Input Nilai Rata-rata"name="nilai-ratarata-rapor">
                    </div>
                      </div>
                       <div class="mt-3">
                    <div>
                        <label for="crud-form-1" class="form-label"> Tahun Lulus</label>
                        <input id="crud-form-1" type="text" class="form-control w-full" placeholder="Input Tahun Lulus" name="tahun-lulus">
                    </div>
                       </div>
                        <div class="mt-3">
                    <div>
                        <label for="crud-form-1" class="form-label"> Periode Masuk</label>
                        <input id="crud-form-1" type="text" class="form-control w-full" placeholder="Input Periode Masuk"name="periode-masuk">
                    </div>
                        </div>
                         <div class="mt-3">
                    <div>
                        <label for="crud-form-1" class="form-label"> Jenjang Pendidikan</label>
                        <input id="crud-form-1" type="text" class="form-control w-full" placeholder="Input Jenjang Pendidikan"name="jenjang-pendidikan">
                    </div>
                         </div>
                          <div class="mt-3">
                    <div>
                        <label for="crud-form-1" class="form-label"> Program Studi</label>
                        <input id="crud-form-1" type="text" class="form-control w-full" placeholder="Input Program Studi" name="program-studi">
                    </div>
                    </div>
                    <div class="mt-3">
                    <div class="text-right mt-5">
                        <button type="reset" class="btn btn-outline-secondary w-24 mr-1">Cancel</button>
                        <button type="submit" class="btn btn-info w-24 text-white">Save</button>
                    </div>
                    </div>
                    
                </div>
                </form>
        </div>
    </div>
</div>
    @endsection