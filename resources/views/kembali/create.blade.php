@extends('layouts.admin')
@section('content')

<section class="card">
<div class="card-body text-secondary">col-lg-12</div>
</section>
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Tambah Data Pengembalian 
			  <br>
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>

			  <div class="panel-body">
              <form class="form-horizontal form-label-left" action="{{ route('kembali.store') }}" method="post" enctype="multipart/form-data">
              {{ csrf_field() }}

              	<div class="form-group {{ $errors->has('rental_id') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama Customer</label>	
			  			<select name="rental_id" class="form-control">
			  				@foreach($rental as $data)
			  				<option value="{{ $data->id }}">{{ $data->nama_kons }}</option>
			  				@endforeach
			  			</select>
			  			@if ($errors->has('rental_id'))
                            <span class="help-block">
                                <strong>{{ $errors->first('rental_id') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('rental_id') ? ' has-error' : '' }}">
			  			<label class="control-label">NIK Konsumen</label>	
			  			<select name="rental_id" class="form-control">
			  				@foreach($rental as $data)
			  				<option value="{{ $data->id }}">{{ $data->nik_kons }}</option>
			  				@endforeach
			  			</select>
			  			@if ($errors->has('rental_id'))
                            <span class="help-block">
                                <strong>{{ $errors->first('rental_id') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		

			  	<div class="form-group {{ $errors->has('jumlah_hari') ? ' has-error' : '' }}">
			  			<label class="control-label">Jumlah Hari</label>	
			  			<input type="text" name="jumlah_hari" class="form-control"  required>
			  			@if ($errors->has('jumlah_hari'))
                            <span class="help-block">
                                <strong>{{ $errors->first('jumlah_hari') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('total_sewa_awal') ? ' has-error' : '' }}">
			  			<label class="control-label">Total Sewa Awal</label>	
			  			<input type="text" name="total_sewa_awal" class="form-control"  required>
			  			@if ($errors->has('total_sewa_awal'))
                            <span class="help-block">
                                <strong>{{ $errors->first('total_sewa_awal') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('telat') ? ' has-error' : '' }}">
			  			<label class="control-label">Telat</label>	
			  			<input type="text" name="telat" class="form-control"  required>
			  			@if ($errors->has('telat'))
                            <span class="help-block">
                                <strong>{{ $errors->first('telat') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('denda') ? ' has-error' : '' }}">
			  			<label class="control-label">denda</label>	
			  			<input type="text" name="denda" class="form-control"  required>
			  			@if ($errors->has('denda'))
                            <span class="help-block">
                                <strong>{{ $errors->first('denda') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('total_harga') ? ' has-error' : '' }}">
			  			<label class="control-label">total_harga</label>	
			  			<input type="text" name="total_harga" class="form-control"  required>
			  			@if ($errors->has('total_harga'))
                            <span class="help-block">
                                <strong>{{ $errors->first('total_harga') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		

			  		
			  		
			  		<div class="form-group">
			  			<button type="submit" class="btn btn-primary">Tambah</button>
			  		</div>
			  	</form>
			  </div>
			</div>	
		</div>
	</div>
</div>
@endsection