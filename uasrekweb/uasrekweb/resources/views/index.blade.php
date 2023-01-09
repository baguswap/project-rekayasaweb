@extends('template')

@section('konten')
  <div class="content">
<h2 class="font-medium mt-2">List Data Mahasiswa baru</h2>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center mt-2">
            <a href="{{ route('dashboardcreate') }}"><button class="btn btn-info shadow-md mr-2">
                Tambah data</button></a>
            <div class="hidden md:block mx-auto text-slate-500">Showing list data entries</div>
            <div class="w-full sm:w-auto mt-3 sm:mt-0 sm:ml-auto md:ml-0">
            </div>
        </div>
                <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">
                @if(session('success'))
                {{session('success')}}
                @endif
                <table class="table table-report -mt-2">
                <thead>
                <tr>
                        <th class="whitespace-nowrap">Nama</th>
                        <th class="text-center whitespace-nowrap">Tempat Lahir</th>
                        <th class="text-center whitespace-nowrap">Tanggal Lahir</th>
                        <th class="text-center whitespace-nowrap">Jenis Kelamin</th>
                        <th class="text-center whitespace-nowrap">Alamat</th>
                        <th class="text-center whitespace-nowrap">Agama</th>
                        <th class="text-center whitespace-nowrap">Kota</th>
                        <th class="text-center whitespace-nowrap">Kabupaten</th>
                        <th class="text-center whitespace-nowrap">Provinsi</th>
                        <th class="text-center whitespace-nowrap">Kode Pos</th>
                        <th class="text-center whitespace-nowrap">No-telp</th>
                        <th class="text-center whitespace-nowrap">Email</th>
                        <th class="text-center whitespace-nowrap">Status Calon Mahasiswa</th>
                        <th class="text-center whitespace-nowrap">Asal Sekolah</th>
                        <th class="text-center whitespace-nowrap">Alamat Sekolah</th>
                        <th class="text-center whitespace-nowrap">Nilai Ratarata Rapor</th>
                        <th class="text-center whitespace-nowrap">Tahun Lulus</th>
                        <th class="text-center whitespace-nowrap">Periode Masuk</th>
                        <th class="text-center whitespace-nowrap">Jenjang Pendidikan</th>
                        <th class="text-center whitespace-nowrap">Program Studi</th>
                        <th class="text-center whitespace-nowrap">Action</th>

                    </tr>
                </thead>
                </thead>
                <tbody>
                    <?php $i = 0; ?>
                @foreach($data as $value)
                <?php $i++; ?>
                        <tr class="intro-x">
                            <td class="w-40">
                                <div class="flex">
                                    <div class="w-10 h-10 image-fit zoom-in">
                                    <?php echo $i; ?>
                                    </div>
                                </div>
                            </td>
                        
                            <tr class="intro-x">
                            <td>
                                <div class="text-slate-500">{{ $value['nama'] }}</div>
                            </td>
                            <td>
                                <div class="text-slate-500">{{ $value['tempat_lahir'] }}</div>
                            </td>
                            <td>
                                <div class="text-slate-500">{{ $value['tanggal_lahir'] }}</div>
                            </td>
                            <td>
                                <div class="text-slate-500">{{ $value['jenis_kelamin'] }}</div>
                            </td>
                            <td>
                                <div class="text-slate-500">{{ $value['alamat'] }}</div>
                            </td>
                            <td>
                                <div class="text-slate-500">{{ $value['agama'] }}</div>
                            </td>
                            <td>
                                <div class="text-slate-500">{{ $value['kota'] }}</div>
                            </td>
                            <td>
                                <div class="text-slate-500">{{ $value['kabupaten'] }}</div>
                            </td>
                            <td>
                                <div class="text-slate-500">{{ $value['provinsi'] }}</div>
                            </td>
                            <td>
                                <div class="text-slate-500">{{ $value['kode_pos'] }}</div>
                            </td>
                            <td>
                                <div class="text-slate-500">{{ $value['no_telp'] }}</div>
                            </td>
                            <td>
                                <div class="text-slate-500">{{ $value['email'] }}</div>
                            </td>
                            <td>
                                <div class="text-slate-500">{{ $value['status_calon_mahasiswa'] }}</div>
                            </td>
                            <td>
                                <div class="text-slate-500">{{ $value['asal_sekolah'] }}</div>
                            </td>
                            <td>
                                <div class="text-slate-500">{{ $value['alamat_sekolah'] }}</div>
                            </td>
                            <td>
                                <div class="text-slate-500">{{ $value['nilai_ratarata_rapor'] }}</div>
                            </td>
                            <td>
                                <div class="text-slate-500">{{ $value['tahun_lulus'] }}</div>
                            </td>
                            <td>
                                <div class="text-slate-500">{{ $value['periode_masuk'] }}</div>
                            </td>
                            <td>
                                <div class="text-slate-500">{{ $value['jenjang_pendidikan'] }}</div>
                            </td>
                            <td>
                                <div class="text-slate-500">{{ $value['program_studi'] }}</div>
                            </td>
                            
                            <td class="table-report__action w-56">
                                
                                    <form action="{{ route('dashboardestroy' , $value['id']) }}" method='POST'>
                                    @csrf
                                    @method("delete")
                                    <div class="flex justify-center items-center ">
                                    <a class="flex items-center mr-3 btn btn-info" href="{{ route('dashboardedit',$value['id']) }}">
                                        <i data-feather="check-square" class="w-4 h-4 mr-1"></i> Edit
                                    </a>
                                    <button class="flex items-center btn btn-danger" type="submit"
                                    data-tw-toggle="modal" data-tw-target="#delete-confirmation-modal">
                                        <i data-feather="trash-2" class="w-4 h-4 mr-1"></i> Delete
                                        </button>
                                   
                                </div>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
      </div>
@endsection