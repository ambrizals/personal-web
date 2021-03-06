@extends('layouts.master_blog')
@section('title', $halaman)
@section('content')
<div class="row">
	<div class="col-md-8 blog-page">
		{!! $article->konten_article !!}
    	<div class="comment-box">
			<div id="disqus_thread"></div>
			<script>

			/**
			*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
			*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
			/*
			var disqus_config = function () {
			this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
			this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
			};
			*/
			(function() { // DON'T EDIT BELOW THIS LINE
			var d = document, s = d.createElement('script');
			s.src = 'https://ambrizalofficialsblog.disqus.com/embed.js';
			s.setAttribute('data-timestamp', +new Date());
			(d.head || d.body).appendChild(s);
			})();
			</script>
			<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>		
		</div>
	</div>
	<div class="sidebar-collapse">
		<a href="#" data-toggle="collapse" data-target="#sidebar" aria-expanded="false" aria-controls="sidebar" id="sidebarCollapse-btn"><i class="fa fa-angle-double-up" aria-hidden="true" id="sidebarCollapse-ico"></i></a>
	</div>
	<div class="col-md-4" id="sidebar">
		<a class="twitter-timeline" data-height="500" data-theme="dark" href="https://twitter.com/ambrizals">Tweets by ambrizals</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
		<div class="card text-white bg-dark mb-3 border-light">
			<div class="card-header border-light">
				Contact
			</div>
			<div class="card-body">
				<h4 class="card-title">Menghubungi Saya ?</h4>
				<p class="card-text">Ada beberapa cara yang bisa anda lakukan untuk menghubungi saya, baik melalui akun sosial media, email, telepon, maupun melalui website ini.</p>
				<a href="mailto:sabuncolek@ambrizal.net" class="btn btn-primary"><i class="fa fa-envelope btn-ico"></i> Send a email</a> or <a href="tel:628115349997" class="btn btn-success"><i class="fa fa-phone btn-ico"></i> Call Me</a>
			</div>
		</div>
	</div>
</div>
@stop