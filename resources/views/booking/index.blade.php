@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Data Post
			  	<div class="panel-title pull-right"><a href="{{ route('booking.create') }}">Tambah</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<div class="table-responsive">
				  <table class="table">
				  	<thead>
			  		<tr>
			  		  <th>No</th>
					  <th>Tanggal Pemesanan</th>
					  <th>Tanggal Pengembalian</th>
					  <th>Nama Mobil</th>
					  <th>Nama Supir</th>
					  <th colspan="3">Action</th>
			  		</tr>
				  	</thead>
				  	<tbody>
				  		<?php $nomor = 1; ?>
				  		@php $no = 1; @endphp
				  		@foreach($booking as $data)
				  	  <tr>
				    	<td>{{ $no++ }}</td>
				    	<td>{{ $data->tanggal_pemesanan }}</td>
				    	<td><p>{{ $data->tanggal_pengembalian }}</p></td>
				    	<td><p>{{ $data->Mobil->nama }}</p></td>
				    	<td><p>{{ $data->Supir->nama }}</p></td>
						<td>
							<a class="btn btn-warning" href="{{ route('booking.edit',$data->id) }}">Edit</a>
						</td>
						<td>
							<a href="{{ route('booking.show',$data->id) }}" class="btn btn-success">Show</a>
						</td>
						<td>
							<form method="post" action="{{ route('booking.destroy',$data->id) }}">
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