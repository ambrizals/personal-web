@extends('layouts.master')
@section('title', 'Edit Akun')
@section('content')
<div class="row">
	<div class="col-md-4">
		<div class="card text-dark">
			<div class="card-body">
				<h4 class="card-title">Navigasi Akun</h4>
				<h6 class="card-subtitle mb-2 text-muted">Pilihan untuk mengelola akun</h6>
				<div class="list-group">
					<a href="{{ url('/akun') }}" class="list-group-item list-group-item-action flex-column align-items-start">
						<h5 class="mb-1">Lihat Profil</h5>
					    <p class="mb-1">Menampilkan informasi profil yang tersimpan saat ini.</p>
					</a>
					<a href="{{ url('/akun/edit') }}" class="list-group-item list-group-item-action flex-column align-items-start active">
						<h5 class="mb-1">Pengaturan Akun</h5>
					  <p class="mb-1">Mengubah informasi akun.</p>
					</a>
					<a href="{{ url('/akun/ubahpassword') }}" class="list-group-item list-group-item-action flex-column align-items-start">
						<h5 class="mb-1">Ganti Password</h5>
					  <p class="mb-1">Mengubah password akun saat ini.</p>
					</a>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-8">
		<div class="card text-dark">
		  <div class="card-header text-center">
		    Form pengubahan informasi akun
		  </div>
		  <div class="card-body">
				{!! Form::model($akun,['route' => ['Update Profil'], 'method' => 'PUT', 'files'=> true]) !!}
				<div class="row">
					<div class="col-4">
						<img src="{{ url('/'.$fotoprofil) }}" alt="..." class="rounded-circle">
					</div>
					<div class="col-8">
						{!! Form::label('fotoprofil', 'Foto Profil') !!}
						<p>Catatan : Gunakan foto profil dengan ukuran gambar 150 x 150 pixel.</p>
						{!! Form::file('fotoprofil', ['class' => 'form-control']) !!}
					</div>
				</div>
				<div class="form-group">
					{!! Form::label('name', 'Nama') !!}
					{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'masukan nama']) !!}
				</div>
				<div class="form-group">
					{!! Form::label('email', 'Email') !!}
					{!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'masukan email']) !!}
				</div>
				<div class="form-group">
					{!! Form::label('biodata', 'Biodata') !!}
					{!! Form::textarea('biodata', null, ['class' => 'form-control', 'placeholder' => 'masukan email']) !!}
				</div>
				{!! Form::submit('Simpan Perubahan', ['class' => 'btn btn-primary btn-block']) !!}
				{!! Form::close() !!}
		  </div>
		  <div class="card-footer text-muted text-center">
		    Konfirmasi tidak diberikan saat melakukan perubahan ini, pastikan data yang di input telah benar.
		  </div>
		</div>
	</div>
</div>
<script>
		CKEDITOR.replace( 'biodata' );
</script>
@stop
