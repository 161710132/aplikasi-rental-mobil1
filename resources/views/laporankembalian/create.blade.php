@extends('layouts.admin')
@section('content')

<section class="card">
<div class="card-body text-secondary">col-lg-12</div>
</section>
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Tambah Data Laporan Pengembalian
			  <br> 
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<form action="{{ route('laporankembalian.store') }}" method="post" >
			  		{{ csrf_field() }}


			<div class="form-group {{ $errors->has('nik_konsumen') ? ' has-error' : '' }}">
					<label class="control-label">NIK Konsumen</label>	
			  			<input type="text" name="nik_konsumen" class="form-control"  required>
			  			@if ($errors->has('nik_konsumen'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nik_konsumen') }}</strong>
                            </span>
                        @endif
			  		</div>

			<div class="form-group {{ $errors->has('nama_konsumen') ? ' has-error' : '' }}">
			  			<label class="control-label">nama_konsumen</label>	
			  			<input type="text" name="nama_konsumen" class="form-control"  required>
			  			@if ($errors->has('nama_konsumen'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nama_konsumen') }}</strong>
                            </span>
                        @endif
			  		</div>

			<div class="form-group {{ $errors->has('jk_konsumen') ? ' has-error' : '' }}">
			  			<label class="control-label">jk_konsumen</label>	
			  			<input type="text" name="jk_konsumen" class="form-control"  required>
			  			@if ($errors->has('jk_konsumen'))
                            <span class="help-block">
                                <strong>{{ $errors->first('jk_konsumen') }}</strong>
                            </span>
                        @endif
			  		</div>

			<div class="form-group {{ $errors->has('alamat_konsumen') ? ' has-error' : '' }}">
			  			<label class="control-label">alamat_konsumen</label>	
			  			<input type="text" name="alamat_konsumen" class="form-control"  required>
			  			@if ($errors->has('alamat_konsumen'))
                            <span class="help-block">
                                <strong>{{ $errors->first('alamat_konsumen') }}</strong>
                            </span>
                        @endif
			  		</div>

			<div class="form-group {{ $errors->has('no_hp_konsumen') ? ' has-error' : '' }}">
			  			<label class="control-label">no_hp_konsumen</label>	
			  			<input type="text" name="no_hp_konsumen" class="form-control"  required>
			  			@if ($errors->has('no_hp_konsumen'))
                            <span class="help-block">
                                <strong>{{ $errors->first('no_hp_konsumen') }}</strong>
                            </span>
                        @endif
			  		</div>

			<div class="form-group {{ $errors->has('merk_mobil') ? ' has-error' : '' }}">
			  			<label class="control-label">merk_mobil</label>	
			  			<input type="text" name="merk_mobil" class="form-control"  required>
			  			@if ($errors->has('merk_mobil'))
                            <span class="help-block">
                                <strong>{{ $errors->first('merk_mobil') }}</strong>
                            </span>
                        @endif
			  		</div>

			<div class="form-group {{ $errors->has('plat_no') ? ' has-error' : '' }}">
			  			<label class="control-label">plat_no</label>	
			  			<input type="text" name="plat_no" class="form-control"  required>
			  			@if ($errors->has('plat_no'))
                            <span class="help-block">
                                <strong>{{ $errors->first('plat_no') }}</strong>
                            </span>
                        @endif
			  		</div>


			<div class="form-group {{ $errors->has('harga_mobil') ? ' has-error' : '' }}">
			  			<label class="control-label">harga_mobil</label>	
			  			<input type="text" name="harga_mobil" class="form-control"  required>
			  			@if ($errors->has('harga_mobil'))
                            <span class="help-block">
                                <strong>{{ $errors->first('harga_mobil') }}</strong>
                            </span>
                        @endif
			  		</div>

			<div class="form-group {{ $errors->has('nama_supir') ? ' has-error' : '' }}">
			  			<label class="control-label">nama_supir</label>	
			  			<input type="text" name="nama_supir" class="form-control"  required>
			  			@if ($errors->has('nama_supir'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nama_supir') }}</strong>
                            </span>
                        @endif
			  		</div>


			<div class="form-group {{ $errors->has('harga_supir') ? ' has-error' : '' }}">
			  			<label class="control-label">harga_supir</label>	
			  			<input type="text" name="harga_supir" class="form-control"  required>
			  			@if ($errors->has('harga_supir'))
                            <span class="help-block">
                                <strong>{{ $errors->first('harga_supir') }}</strong>
                            </span>
                        @endif
			  		</div>

			<div class="form-group {{ $errors->has('tgl_sewa') ? ' has-error' : '' }}">
			  			<label class="control-label">tgl_sewa</label>	
			  			<input type="date" name="tgl_sewa" class="form-control"  required>
			  			@if ($errors->has('tgl_sewa'))
                            <span class="help-block">
                                <strong>{{ $errors->first('tgl_sewa') }}</strong>
                            </span>
                        @endif
			  		</div>

			<div class="form-group {{ $errors->has('tgl_kembali_awal') ? ' has-error' : '' }}">
			  			<label class="control-label">tgl_kembali_awal</label>	
			  			<input type="date" name="tgl_kembali_awal" class="form-control"  required>
			  			@if ($errors->has('tgl_kembali_awal'))
                            <span class="help-block">
                                <strong>{{ $errors->first('tgl_kembali_awal') }}</strong>
                            </span>
                        @endif
			  		</div>

			<div class="form-group {{ $errors->has('tgl_kembali_akhir') ? ' has-error' : '' }}">
			  			<label class="control-label">tgl_kembali_akhir</label>	
			  			<input type="date" name="tgl_kembali_akhir" class="form-control"  required>
			  			@if ($errors->has('tgl_kembali_akhir'))
                            <span class="help-block">
                                <strong>{{ $errors->first('tgl_kembali_akhir') }}</strong>
                            </span>
                        @endif
			  		</div>

			<div class="form-group {{ $errors->has('jumlah_hari') ? ' has-error' : '' }}">
			  			<label class="control-label">jumlah_hari</label>	
			  			<input type="number" name="jumlah_hari" class="form-control"  required>
			  			@if ($errors->has('jumlah_hari'))
                            <span class="help-block">
                                <strong>{{ $errors->first('jumlah_hari') }}</strong>
                            </span>
                        @endif
			  		</div>

			  	<div class="form-group {{ $errors->has('total_sewa_awal') ? ' has-error' : '' }}">
			  			<label class="control-label">total_sewa_awal</label>	
			  			<input type="text" name="total_sewa_awal" class="form-control"  required>
			  			@if ($errors->has('total_sewa_awal'))
                            <span class="help-block">
                                <strong>{{ $errors->first('total_sewa_awal') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('telat') ? ' has-error' : '' }}">
			  			<label class="control-label">telat</label>	
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