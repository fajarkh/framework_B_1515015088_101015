@extends('master')
@section('container')
<div class="panel panel-warning">
<div class="panel-heading">
<strong> <a href="{{ url('mahasiswa') }}"><i style="color: #8a6d3b" class="fa text-default fa-chevron-left"></i></a>Detail Data Mahasiswa</strong>
</div>
	<table class="table">
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td>{{ $mahasiswa->nama }}</td>
		</tr>
		<tr>
			<td>NIM</td>
			<td>:</td>
			<td>{{ $mahasiswa->nim }}</td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td>{{ $mahasiswa->alamat }}</td>
		</tr>
		<tr>
			<td>Username</td>
			<td>:</td>
			<td>{{ $mahasiswa->pengguna->username }}</td>
		</tr>
		<tr>
			<td>Password</td>
			<td>:</td>
			<td>{{ $mahasiswa->pengguna->password }}</td>
		</tr>
		<tr>
			<td class="col-xs-4">Dibuat Tanggal</td>
			<td class="col-xs-1">:</td>
			<td>{{$mahasiswa->created_at}}</td>
		</tr>
		<tr>
			<td class="col-xs-4">Diperbarui</td>
			<td class="col-xs-1">:</td>
			<td>{{$mahasiswa->updated_at}}</td>
		</tr>
	</table>
</div>
@stop