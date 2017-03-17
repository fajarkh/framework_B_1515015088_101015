<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\dosen;

class dosencontroller extends Controller
{
 public function awal()
 {
	 return "hello dari Dosencontroller";
 }
 public function tambah()
 {
	 return $this->simpan();
 }
 public function simpan()
 {
	 $dosen = new dosen();
	 $dosen->nama = 'dosen_fajarkh';
	 $dosen ->nip = '12345';
	 $dosen ->pengguna_id = '1';
	 $dosen->save();
	 return "data dosen dengan nama {$dosen->nama} telah disimpan";
 }
}
