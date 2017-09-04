@extends('layouts.master')
@section('title', 'Profil Saya')
@section('content')
@If (Session::has('pesan'))
<div class="alert alert-success">
	{{ Session::get('pesan') }}
</div>
@Endif
<div class="row">
	<div class="col-md-4">
		<div class="card text-dark">
			<div class="card-body">
				<h4 class="card-title">Navigasi Akun</h4>
				<h6 class="card-subtitle mb-2 text-muted">Pilihan untuk mengelola akun</h6>
				<div class="list-group">
					<a href="{{ url('/akun') }}" class="list-group-item list-group-item-action flex-column align-items-start active">
						<h5 class="mb-1">Lihat Profil</h5>
					  <p class="mb-1">Menampilkan informasi profil yang tersimpan saat ini.</p>
					</a>
					<a href="{{ url('/akun/edit') }}" class="list-group-item list-group-item-action flex-column align-items-start">
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
		<div class="card text-dark bg-light mb-3">
		  <div class="card-header text-center">
		    Informasi Akun Saya
		  </div>
		  <div class="card-body">
				<p class="text-center">
					<img src="{{ url('/'.$fotoprofil) }}" alt="..." class="rounded-circle">
				</p>
				<p class="text-center">{!! Auth::user()->name !!}</p>
				<p class="text-center">{!! Auth::user()->email !!}</p>
				<div class="text-center">
					{!! Auth::user()->biodata !!}
				</div>
		  </div>
		</div>
	</div>
</div>
<br/>
@stop
