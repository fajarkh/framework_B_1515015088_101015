<?php

namespace App\Http\Controllers;

use App\Dosen;
class RelationshipRebornController extends Controller
{
    public function ujiHas()
	{
		$data = Dosen::has('dosen_matakuliah')->get();
		dd($data);
	}
	public function ujiDoesntHave()
	{
		$data = Dosen::doesntHave('dosen_matakuliah')->get();
		dd($data);
	}
}