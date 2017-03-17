<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\pengguna;

class penggunacontroller extends Controller
{
 public function awal()
 {
	 return "hello dari Penggunacontroller";
 }
 public function tambah()
 {
	 return $this->simpan();
 }
 public function simpan()
 {
	 $pengguna = new pengguna();
	 $pengguna->username = 'fajarkh';
	 $pengguna ->password = '12345';
	 $pengguna->save();
	 return "data dengan username {$pengguna->username} telah disimpan";
 }
}
