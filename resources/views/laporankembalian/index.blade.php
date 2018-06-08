@extends('layouts.admin')
@section('content')

<section class="card">
<div class="card-body text-secondary">col-lg-12</div>
</section>
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Data Pengembalian
			  <br>
			  	<div class="panel-title pull-right"><a class="btn btn-success" href="{{ route('laporankembalian.create') }}">Tambah</a>

			  </div>
			  </div>
			  <br><br>
			  <div class="table-responsive table--no-card m-b-30">
                <table class="table table-borderless table-striped table-earning">
				  	<thead>
			  		<tr>
			  		  <th>No</th>
					  <th>NIK Konsumen</th>
					  <th>Nama Konsumen</th>
					  <th>Jenis Kelamin</th>
					  <th>Alamat Konsumen</th>
					  <th>No Handphone Konsumen</th>
					  <th>Merk Mobil</th>
					  <th>Plat No</th>
					  <th>Harga Mobil</th>
					  <th>Nama Supir</th>
					  <th>Harga Supir</th>
					  <th>Tanggal Sewa</th>
					  <th>Tanggal Kembali Awal</th>
					  <th>Tanggal Kembali Akhir</th>
					  <th>Jumlah Hari</th>
					  <th>Total Sewa Awal</th>
					  <th>Telat</th>
					  <th>Denda</th>
					  <th>Total Harga</th>
					  <th colspan="3">Action</th>
			  		</tr>
				  	</thead>
				  	<tbody>
				  		<?php $nomor = 1; ?>
				  		@php $no = 1; @endphp
				  		@foreach($laporanpengembalian as $data)
				  	  <tr>
				    	<td>{{ $no++ }}</td>
				    	<td>{{ $data->nik_konsumen }}</td>
				    	<td>{{ $data->nama_konsumen }}</td>
				    	<td>{{ $data->jk_konsumen }}</td>
				    	<td>{{ $data->alamat_konsumen }}</td>
				    	<td>{{ $data->no_hp_konsumen }}</td>
				    	<td>{{ $data->merk_mobil }}</td>
				    	<td>{{ $data->plat_no }}</td>
				    	<td>{{ $data->harga_mobil }}</td>
				    	<td>{{ $data->nama_supir }}</td>
				    	<td>{{ $data->harga_supir }}</td>
				    	<td>{{ $data->tgl_sewa }}</td>
				    	<td>{{ $data->tgl_kembali_awal }}</td>
				    	<td>{{ $data->tgl_kembali_akhir }}</td>
				    	<td>{{ $data->jumlah_hari }}</td>
				    	<td>{{ $data->total_sewa_awal }}</td>
				    	<td>{{ $data->telat }}</td>
				    	<td>{{ $data->denda }}</td>
				    	<td>{{ $data->total_harga }}</td>
<td>
	<a class="btn btn-warning" href="{{ route('laporankembalian.edit',$data->id) }}">Edit</a>
</td>
<!-- <td>
	<a href="{{ route('laporankembalian.show',$data->id) }}" class="btn btn-success">Show</a>
</td> -->
<td>
	<form method="post" action="{{ route('laporankembalian.destroy',$data->id) }}">
		<input name="_token" type="hidden" value="{{ csrf_token() }}">
		<input type="hidden" name="_method" value="DELETE">

		<button type="submit" class="btn btn-danger">Delete</button>
	</form>
</td>
				      </tr>
				      @endforeach	
				  	</tbody>
				  </table>
				</div>
			  </div>
			</div>	
		</div>
	</div>
</div>
@endsection