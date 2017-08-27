@extends('layouts.master')
@section('title', 'Ubah Password')
@section('content')
@If (Session::has('pw_error'))
<div class="alert alert-danger">
	{{ Session::get('pw_error') }}
</div>
@Endif
@if ($errors->any())
	<div class="alert alert-danger">
			<ul>
					@foreach ($errors->all() as $error)
							<li>{{ $error }}</li>
					@endforeach
			</ul>
	</div>
@endif
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
					<a href="{{ url('/akun/edit') }}" class="list-group-item list-group-item-action flex-column align-items-start">
						<h5 class="mb-1">Pengaturan Akun</h5>
					  <p class="mb-1">Mengubah informasi akun.</p>
					</a>
					<a href="{{ url('/akun/ubahpassword') }}" class="list-group-item list-group-item-action flex-column align-items-start active">
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
				{!! Form::open(['route' => ['Update Password'], 'method' => 'PUT']) !!}
				<div class"form-group">
					{!! Form::label('old_password', 'Password Lama') !!}
					{!! Form::password('old_password', ['class' => 'form-control', 'placeholder' => 'Masukkan password lama']) !!}
				</div>
				<div class="form-group">
					{!! Form::label('password_baru', 'Password Baru') !!}
					{!! Form::password('password_baru', ['class' => 'form-control', 'placeholder' => 'Masukkan password baru']) !!}
				</div>
				<div class="form-group">
					{!! Form::label('password_konfirmasi', 'Konfirmasi Password Baru') !!}
					{!! Form::password('password_konfirmasi', ['class' => 'form-control', 'placeholder' => 'Ulangi password baru']) !!}
				</div>
				{!! Form::submit('Simpan Perubahan', ['class' => 'btn btn-primary btn-block']) !!}
				{!! Form::close() !!}
		  </div>
		  <div class="card-footer text-muted text-center">
		    Pastikan password yang telah di masukkan telah benar agar dapat digunakan.
		  </div>
		</div>
	</div>
</div>
@stop
