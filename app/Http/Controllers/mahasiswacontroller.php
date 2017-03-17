<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\mahasiswa;
class mahasiswacontroller extends Controller
{
 public function awal()
 {
	 return "hello dari Mahasiswacontroller";
 }
 public function tambah()
 {
	 return $this->simpan();
 }
 public function simpan()
 {
	 $mahasiswa = new mahasiswa();
	 $mahasiswa->nama = 'siswa_fajarkh';
	 $mahasiswa ->nim = '12345';
	 $mahasiswa ->pengguna_id = '1';
	 $mahasiswa->save();
	 return "data dengan nama {$mahasiswa->nama} telah disimpan";
 }
}
