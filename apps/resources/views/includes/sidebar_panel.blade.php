<div class="panel-sidebar">
	<div class="row">
		<div class="col-6">
			<p class="lead">Menu Panel</p>
		</div>
		<div class="col-6">
			<button class="btn btn-info float-right" type="button" data-toggle="collapse" data-target="#sidebar" aria-expanded="false" aria-controls="sidebar"><i class="fa fa-bars"></i></button>
		</div>
	</div>
</div>

<div class="sidebar" id="sidebar">
	<ul class="sidebar-list">
		<li class="text-dark"><i class="fa fa-newspaper-o"></i> Artikel
			<ul>
				<li><a href="{{ route('posts.index') }}" class="text-secondary"><i class="fa fa-bars"></i> Daftar Artikel</a></li>
				<li><a href="{{ route('category.index') }}" class="text-secondary"><i class="fa fa-bars"></i> Daftar Kategori</a></li>
				<li><a href="{{ route('Archive Pages') }}" class="text-secondary"><i class="fa fa-bars"></i> Daftar Arsip</a></li>
			</ul>
		</li>
		<li class="text-dark"><i class="fa fa-newspaper-o"></i> Page
			<ul>
				<li><a href="#" class="text-secondary"><i class="fa fa-bars"></i> Daftar Halaman</a></li>
				<li><a href="#" class="text-secondary"><i class="fa fa-bars"></i> Daftar Arsip</a></li>
			</ul>
		</li>
		<li class="text-dark"><i class="fa fa-code-fork"></i> Project
			<ul>
				<li><a href="#" class="text-secondary"><i class="fa fa-bars"></i> Daftar Project</a></li>
				<li><a href="#" class="text-secondary"><i class="fa fa-bars"></i> Daftar Arsip</a></li>
			</ul>
		</li>
		<li class="text-dark"><i class="fa fa-cogs"></i> Pengaturan Situs
			<ul>
				<li><a href="#" class="text-secondary"><i class="fa fa-bars"></i> Pengaturan Umum</a></li>
			</ul>
		</li>
	</ul>
</div>