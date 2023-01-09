<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // return view('Dashboard.index', [
        // ]);

        // Ini adalah scrip untuk melakukan request data dari Rekweb API yang telah kita buat
         $username = 'user';
         $password = 'user';
         $credentials = base64_encode("$username:$password");

         $headers = [];
         $headers[] = "Authorization: Basic {$credentials}";
         $headers[] = 'Content-Type: application/x-www-form-urlencoded';
         $headers[] = 'Cache-Control: no-cache';

         // Initializing curl
         $curl = curl_init();
         curl_setopt($curl, CURLOPT_URL, "127.0.0.2:8001/mahasiswa");
         curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'GET');
         curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
         curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

         // Executing curl
         $response = curl_exec($curl);

         // Checking if any error occurs during request or not
         if($e = curl_error($curl)) {
            echo $e;
         } else {

            // Decoding JSON data 
            $decodedData =
                json_decode($response, true);

            // Outputting JSON data in    
            // Decoded form
            //var_dump($decodedData);
            $data = $decodedData;
         }

         // Closing curl
         curl_close($curl);
         return view('index', ['data'=>$data]);
    }

    public function create()
    {
        return view('Dashboard.create', [
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'tempat-lahir'=>'required',
            'tanggal-lahir' => 'required',
            'jenis-kelamin' => 'required',
            'alamat'=>'required',
            'agama' => 'required',
            'kota' => 'required',
            'kabupaten'=>'required',
            'provinsi' => 'required',
            'kode-pos' => 'required',
            'no-telp'=>'required',
            'email' => 'required',
            'status-calon-mahasiswa' => 'required',
            'asal-sekolah'=>'required',
            'alamat-sekolah' => 'required',
            'nilai-ratarata-rapor' => 'required',
            'tahun-lulus'=>'required',
            'periode-masuk' => 'required',
            'jenjang-pendidikan' => 'required',
            'program-studi'=>'required',
        ]);

        //dd($request);

        $postData = array(
        "nama" => $request->input('nama'),
        "tempat_lahir"    =>  $request->input('tempat-lahir'),
        "tanggal_lahir" => $request->input('tanggal-lahir'),
		"jenis_kelamin" => $request->input('jenis-kelamin'),
		"alamat" => $request->input('alamat'),
		"agama" => $request->input('agama'),
		"kota" => $request->input('kota'),
        "kabupaten"=>$request->input('kabupaten'),
		"provinsi" => $request->input('provinsi'),
		"kode_pos" => $request->input('kode-pos'),
		"no_telp" => $request->input('no-telp'),
		"email" => $request->input('email'),
		"status_calon_mahasiswa" => $request->input('status-calon-mahasiswa'),
		"asal_sekolah" => $request->input('asal-sekolah'),
		"alamat_sekolah" => $request->input('alamat-sekolah'),
		"nilai_ratarata_rapor" => $request->input('nilai-ratarata-rapor'),
		"tahun_lulus" => $request->input('tahun-lulus'),
		"periode_masuk" => $request->input('periode-masuk'),
		"jenjang_pendidikan" => $request->input('jenjang-pendidikan'),
		"program_studi" => $request->input('program-studi')
        );

        $data_string = json_encode($postData);

        // Ini adalah scrip untuk melakukan post data dari Rekweb API yang telah kita buat
        $username = 'user';
        $password = 'user';
        $credentials = base64_encode("$username:$password");

        $headers = [];
        $headers[] = "Authorization: Basic {$credentials}";
        $headers[] = 'Content-Type: application/json';
        $headers[] = 'Cache-Control: no-cache';
        $headers[] = 'Content-Length: ' . strlen($data_string);
        
        
            // Initializing curl
            $curl = curl_init();
            curl_setopt($curl, CURLOPT_URL,"127.0.0.2:8001/mahasiswa");
            curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'POST');
            curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($curl, CURLOPT_POSTFIELDS, $data_string);
   
            // Executing curl
            $response = curl_exec($curl);
            //var_dump($response);die;
            
            // Checking if any error occurs during request or not
            if($e = curl_error($curl)) {
                echo $e;
            } 
            // Closing curl
            curl_close($curl);
            return redirect()->to('/');

    }
    public function edit($id)
    {

        // Ini adalah scrip untuk melakukan request data dari Rekweb API yang telah kita buat
        $username = 'user';
        $password = 'user';
        $credentials = base64_encode("$username:$password");

        $headers = [];
        $headers[] = "Authorization: Basic {$credentials}";
        $headers[] = 'Content-Type: application/x-www-form-urlencoded';
        $headers[] = 'Cache-Control: no-cache';
        
            // Initializing curl
            $curl = curl_init();
            curl_setopt($curl, CURLOPT_URL,"127.0.0.2:8001/detail/$id");
            curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'GET');
            curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            
            // Executing curl
            $response = curl_exec($curl);
            
            // Checking if any error occurs during request or not
            if($e = curl_error($curl)) {
                echo $e;
            } else {
                // Decoding JSON data
                $decodedData =
                    json_decode($response, true);
                // Outputting JSON data in
                // Decoded form
                //var_dump($decodedData);
                $data = $decodedData;
            }
            
            // Closing curl
            curl_close($curl);
            return view('Dashboard.edit', ["data"=>$data]);
       
    }

    public function update(Request $request,$id)
    {
        $this->validate($request, [
            'nama' => 'required',
            'tempat-lahir'=>'required',
            'tanggal-lahir' => 'required',
            'jenis-kelamin' => 'required',
            'alamat'=>'required',
            'agama' => 'required',
            'kota' => 'required',
            'kabupaten'=>'required',
            'provinsi' => 'required',
            'kode-pos' => 'required',
            'no-telp'=>'required',
            'email' => 'required',
            'status-calon-mahasiswa' => 'required',
            'asal-sekolah'=>'required',
            'alamat-sekolah' => 'required',
            'nilai-ratarata-rapor' => 'required',
            'tahun-lulus'=>'required',
            'periode-masuk' => 'required',
            'jenjang-pendidikan' => 'required',
            'program-studi'=>'required',
           
        ]);

        //dd($request->all());
        $postData = array(
            "nama" => $request->input('nama'),
            "tempat_lahir"    =>  $request->input('tempat-lahir'),
            "tanggal_lahir" => $request->input('tanggal-lahir'),
		    "jenis_kelamin" => $request->input('jenis-kelamin'),
		"alamat" => $request->input('alamat'),
		"agama" => $request->input('agama'),
		"kota" => $request->input('kota'),
        "kabupaten"=>$request->input('kabupaten'),
		"provinsi" => $request->input('provinsi'),
		"kode_pos" => $request->input('kode-pos'),
		"no_telp" => $request->input('no-telp'),
		"email" => $request->input('email'),
		"status_calon_mahasiswa" => $request->input('status-calon-mahasiswa'),
		"asal_sekolah" => $request->input('asal-sekolah'),
		"alamat_sekolah" => $request->input('alamat-sekolah'),
		"nilai_ratarata_rapor" => $request->input('nilai-ratarata-rapor'),
		"tahun_lulus" => $request->input('tahun-lulus'),
		"periode_masuk" => $request->input('periode-masuk'),
		"jenjang_pendidikan" => $request->input('jenjang-pendidikan'),
		"program_studi" => $request->input('program-studi')

       
        );

        $data_string = json_encode($postData);

        // Ini adalah scrip untuk melakukan post data dari Rekweb API yang telah kita buat
        $username = 'user';
        $password = 'user';
        $credentials = base64_encode("$username:$password");

        $headers = [];
        $headers[] = "Authorization: Basic {$credentials}";
        $headers[] = 'Content-Type: application/json';
        $headers[] = 'Cache-Control: no-cache';
        $headers[] = 'Content-Length: ' . strlen($data_string);
        
        
            // Initializing curl
            $curl = curl_init();
            curl_setopt($curl, CURLOPT_URL,"127.0.0.2:8001/update/$id");
            curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'PUT');
            curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($curl, CURLOPT_POSTFIELDS, $data_string);
   
            // Executing curl
            $response = curl_exec($curl);
            
            
            // Checking if any error occurs during request or not
            if($e = curl_error($curl)) {
                echo $e;
            } 
            // Closing curl
            curl_close($curl);
            return redirect()->to('/')->with('success','Data Berhasil Diupdate');
    }

    public function destroy($id)
    {

        // Ini adalah scrip untuk melakukan post data dari Rekweb API yang telah kita buat
        $username = 'user';
        $password = 'user';
        $credentials = base64_encode("$username:$password");

        $headers = [];
        $headers[] = "Authorization: Basic {$credentials}";
        $headers[] = 'Content-Type: application/json';
        $headers[] = 'Cache-Control: no-cache';
        $headers[] = 'Content-Length: ';
        
        
            // Initializing curl
            $curl = curl_init();
            curl_setopt($curl, CURLOPT_URL,"127.0.0.2:8001/delete/$id");
            curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'DELETE');
            curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
           
   
            // Executing curl
            $response = curl_exec($curl);
            
            // Checking if any error occurs during request or not
            if($e = curl_error($curl)) {
                echo $e;
            } 
            // Closing curl
            curl_close($curl);
            return redirect()->to('/')->with('success','Data Berhasil Dihapus');
    }
}
