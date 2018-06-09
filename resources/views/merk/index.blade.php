@extends('layouts.admin1')
<center>
@section('content')


<!-- <section class="card-header">
<div class="card-title ">col-lg-12</div>
</section> -->

			<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Data Merk Mobil
			  <br>
			  	<div class="panel-title pull-right"><a class="btn btn-success" href="{{ route('merk.create') }}">Tambah</a>

			  </div>
			  </div>
			  <br><br>
			  <div class="table-responsive table--no-card m-b-30">
                <table class="table table-borderless table-striped table-earning">
				  	<thead>
			  		<tr>
			  		  <th>No</th>
					  <th>Nama</th>
					  <th>Mobil</th>
					  <th colspan="3">Action</th>
			  		</tr>
				  	</thead>
				  	<tbody>
				  		<?php $nomor = 1; ?>
				  		@php $no = 1; @endphp
				  		@foreach($merk as $data)
				  	  <tr>
				    	<td>{{ $no++ }}</td>
				    	<td>{{ $data->nama_merk }}</td>
				    	<td>@foreach($data->Mobil as $mobil)<li>{{ $mobil->nama }}@endforeach</li></td>
<td>
	<a class="btn btn-warning" href="{{ route('merk.edit',$data->id) }}">Edit</a>
</td>
<!-- <td>
	<a href="{{ route('merk.show',$data->id) }}" class="btn btn-success">Show</a>
</td> -->
<td>
	<form method="post" action="{{ route('merk.destroy',$data->id) }}">
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
</center>