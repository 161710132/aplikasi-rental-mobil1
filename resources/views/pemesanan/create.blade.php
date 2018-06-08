@extends('layouts.admin')
@section('content')
<section class="card">
<div class="card-body text-secondary">col-lg-12</div>
</section>
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Tambah Data Pemesanan 
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<form action="{{ route('pemesanan.store') }}" method="post" >
			  		{{ csrf_field() }}
			  		<div class="form-group {{ $errors->has('tanggal_pemesanan') ? ' has-error' : '' }}">
			  			<label class="control-label">Tanggal Pemesanan </label>	
			  			<input type="date" name="tanggal_pemesanan" class="form-control"  required>
			  			@if ($errors->has('tanggal_pemesanan'))
                            <span class="help-block">
                                <strong>{{ $errors->first('tanggal_pemesanan') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('tanggal_pengembalian') ? ' has-error' : '' }}">
			  			<label class="control-label">Tanggal Pengembalian</label>	
			  			<input type="date" name="tanggal_pengembalian" class="form-control"  required>
			  			@if ($errors->has('tanggal_pengembalian'))
                            <span class="help-block">
                                <strong>{{ $errors->first('tanggal_pengembalian') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group {{ $errors->has('customer_id') ? ' has-error' : '' }}">
			  			<label class="control-label">Customer</label>	
			  			<select name="customer_id" class="form-control">
			  				@foreach($customer as $data)
			  				<option value="{{ $data->id }}">{{ $data->nama }}</option>
			  				@endforeach
			  			</select>
			  			@if ($errors->has('customer_id'))
                            <span class="help-block">
                                <strong>{{ $errors->first('customer_id') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('mobil_id') ? ' has-error' : '' }}">
			  			<label class="control-label">Mobil</label>	
			  			<select name="mobil_id" class="form-control">
			  				@foreach($mobil as $data)
			  				<option value="{{ $data->id }}">{{ $data->nama }}</option>
			  				@endforeach
			  			</select>
			  			@if ($errors->has('mobil_id'))
                            <span class="help-block">
                                <strong>{{ $errors->first('mobil_id') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('foto_mobil') ? ' has-error' : '' }}">
                          <label class="control-label col-md-3 col-sm-3 col-xs-3">Foto Mobil</label>
                          <div class="col-md-9 pr-1">
                          <input type="file" name="foto_mobil" class="form-control" required="" style="background-color: #0000">
                            @if ($errors->has('foto_mobil'))
                              <span class="help-block">
                                <strong>{{ $errors->first('foto_mobil') }}</strong>
                              </span>
                          @endif
                          </div>
                        </div>

			  		<div class="form-group {{ $errors->has('supir_id') ? ' has-error' : '' }}">
			  			<label class="control-label">Supir</label>	
			  			<select name="supir_id" class="form-control">
			  				@foreach($supir as $data)
			  				<option value="{{ $data->id }}">{{ $data->nama }}</option>
			  				@endforeach
			  			</select>
			  			@if ($errors->has('supir_id'))
                            <span class="help-block">
                                <strong>{{ $errors->first('supir_id') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('foto_supir') ? ' has-error' : '' }}">
                          <label class="control-label col-md-3 col-sm-3 col-xs-3">Foto Supir</label>
                          <div class="col-md-9 pr-1">
                          <input type="file" name="foto_supir" class="form-control" required="" style="background-color: #0000">
                            @if ($errors->has('foto_supir'))
                              <span class="help-block">
                                <strong>{{ $errors->first('foto_supir') }}</strong>
                              </span>
                          @endif
                          </div>
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