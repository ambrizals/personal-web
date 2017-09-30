@extends('layouts.master_blog')
@section('title', $halaman)
@section('content')
{!! $article->konten_article !!}
<div class="card text-dark">
	<div class="card-header">
		Komentar
	</div>
	<div class="card-body">
	@foreach($comment as $item)
		<div class="row">
			<div class="col-2">
				@if($item->akun_id == 0)
					<img src="{{ url('/img/profil').'/default_fotoprofil.jpg' }}"/>
				@else
					<img src="{{ url('/img/profil').'/profil-'.$item->akun_id.'.jpg' }}"/>
				@endif
			</div>
			<div class="col-8">
				<span class="lead">{!! $item->nama_comment !!}</span>
				<p>{!! $item->content_comment !!}</p>
			</div>
		</div>		
		<hr/>
	@endforeach
		{!! Form::open(['route' => ['articles.comment', $article->id_article],'method' => 'POST', 'class' => 'form-control']) !!}
		@If (Session::has('comment'))
		<div class="alert alert-success">
			{{ Session::get('comment') }}
		</div>
		@Endif
		<div class="form-group">
			{!! Form::label('nama_comment','Nama :') !!}
			@if (Auth::check())
			<p>Anda telah login menggunakan user ({{ Auth::user()->name }})</p>
			{!! Form::hidden('nama_comment',Auth::user()->name) !!}
			@else
			{!! Form::text('nama_comment',null,['class' => 'form-control', 'placeholder' => 'Masukkan nama anda!']) !!}
			@endif
		</div>
		<div class="form-group">
			{!! Form::label('content_comment', 'Komentar anda : ') !!}
			{!! Form::textarea('content_comment', null, ['class' => 'form-control', 'placeholder' => 'Masukkan komentar anda']) !!}
		</div>
		{!! Form::submit('Kirim Komentar', ['class' => 'btn btn-primary btn-block']) !!}
		{!! Form::close() !!}
	</div>
</div>
	
@stop