@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Show Data Booking 
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
        			<div class="form-group">
			  			<label class="control-label">Tanggal Pemesanan</label>	
			  			<input type="date" name="tanggal_pemesanan" class="form-control" value="{{ $booking->tanggal_pemesanan }}"  readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">Tanggal Pengembalian</label>
						<input type="date" name="tanggal_pengembalian" class="form-control" value="{{ $booking->tanggal_pengembalian }}"  readonly>
			  		</div>
			  		

			  		<div class="form-group">
			  			<label class="control-label">Mobil</label>
						<input type="text" name="mobil_id" class="form-control" value="{{ $booking->Mobil->nama }}"  readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">Supir</label>
						<input type="text" name="supir_id" class="form-control" value="{{ $booking->Supir->nama }}"  readonly>
			  		</div>

			  		
			  	</div>
			</div>	
		</div>
	</div>
</div>
@endsection