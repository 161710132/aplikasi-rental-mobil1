@extends('layouts.admin')
@section('content')

<section class="card">
<div class="card-body text-secondary">col-lg-12</div>
</section>
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Tambah Data Rental Mobil 
			  <br>
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<form action="{{ route('rental.store') }}" method="post" >
			  		{{ csrf_field() }}
			  		<div class="form-group {{ $errors->has('nik_kons') ? ' has-error' : '' }}">
			  			<label class="control-label">NIK Customer</label>	
			  			<input type="text" name="nik_kons" class="form-control"  required>
			  			@if ($errors->has('nik_kons'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nik_kons') }}</strong>
                            </span>
                        @endif
			  		</div>

			  	
			  		<div class="form-group {{ $errors->has('nama_kons') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama Customer</label>	
			  			<input type="text" name="nama_kons" class="form-control"  required>
			  			@if ($errors->has('nama_kons'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nama_kons') }}</strong>
                            </span>
                        @endif
			  		</div>

			  	<div class="form-group {{ $errors->has('jk_kons') ? ' has-error' : '' }}">
                        <label class="control-label">Jenis Kelamin</label>
                          <br>
                        <label class="radio-inline">
                            <input type="radio" name="jk_kons" id="inlineRadio1" value="Laki-Laki">Laki-Laki
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="jk_kons" id="inlineRadio2" value="Perempuan">Perempuan
                        </label>
                          @if ($errors->has('jk_kons'))
                            <span class="help-block">
                                <strong>{{ $errors->first('jk_kons') }}</strong>
                            </span>
                          @endif
            </div>

			  	
			  		<div class="form-group {{ $errors->has('alamat') ? ' has-error' : '' }}">
			  			<label class="control-label">Alamat Customer</label>	
			  			<input type="text" name="alamat" class="form-control"  required>
			  			@if ($errors->has('alamat'))
                            <span class="help-block">
                                <strong>{{ $errors->first('alamat') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		
			  		<div class="form-group {{ $errors->has('no_hp') ? ' has-error' : '' }}">
			  			<label class="control-label">No Handphone Customer</label>	
			  			<input type="text" name="no_hp" class="form-control"  required>
			  			@if ($errors->has('no_hp'))
                            <span class="help-block">
                                <strong>{{ $errors->first('no_hp') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		
			  		<div class="form-group {{ $errors->has('tgl_sewa') ? ' has-error' : '' }}">
			  			<label class="control-label">Tanggal Sewa Customer</label>	
			  			<input type="date" name="tgl_sewa" class="form-control"  required>
			  			@if ($errors->has('tgl_sewa'))
                            <span class="help-block">
                                <strong>{{ $errors->first('tgl_sewa') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		
			  		<div class="form-group {{ $errors->has('tgl_kembali') ? ' has-error' : '' }}">
			  			<label class="control-label">Tanggal Kembali Customer</label>	
			  			<input type="date" name="tgl_kembali" class="form-control"  required>
			  			@if ($errors->has('tgl_kembali'))
                            <span class="help-block">
                                <strong>{{ $errors->first('tgl_kembali') }}</strong>
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