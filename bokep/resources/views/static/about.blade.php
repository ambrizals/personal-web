@extends('layouts.master')
@section('title', 'About')
@section('content')
<nav class="breadcrumb">
  <a class="breadcrumb-item" href="{{ url('') }}">Home</a>
  <a class="breadcrumb-item active" href="{{ url('about') }}">About</a>
</nav>
<div class="row">
	<div class="col-md-8">
		<p>Perkenalkan nama saya Ambrizal Suryadinata lahir pada tanggal <b>19 Agustus 199x di Denpasar, Bali.</b> Jika ditanya "asal kamu dari mana ?" maka saya akan bingung menjawabnya karena bapak dari orang tua saya adalah orang kelahiran Bali dan ibu dari orang tua saya adalah orang kelahiran jawa.</p>
		<p>Saya memiliki hobi yang mungkin menurut beberapa orang sangat tidak baik dan terlihat aneh yaitu ngoding (membuat program dengan bahasa pemrograman) dan gaming. Pada kesehariannya saya selalu menjalani salah satu dari hobi tersebut, kalau tidak ngoding ya ngegame. bagi saya kedua hobi tersebut memiiki karakteristik yang unik dimana keduanya membutuhkan pikiran untuk memikirkan bagaimana algoritma yang tepat untuk membuat sebuah program dan bagaimana cara memenangkan pertandingan dalam mengatur strategi. </p>
		<br>
		<h3>Kenapa saya memilih hobi tersebut ?</h3>
		<br>
		<p>Kadang kala ada orang yang bertanya "kenapa kamu senang ini ?" dan "untuk apaan sih ini ?" dari orang yang tidak mengerti mengenai hobi yang saya lakukan setiap hari. Hobi yang saya lakukan memiliki tujuan dan fungsinya masing - masing dimana <b>ngoding</b> memiliki tujuan untuk membuat sebuah aplikasi menggunakan bahasa pemrograman, sedangkan <b>gaming</b> memiliki tujuan untuk memuaskan kepuasan batin. Jadi jika saya ditanya <b>"kenapa kamu milih hobi itu ?"</b> jawabannya pasti <b>"agar saya bisa membuat sebuah aplikasi yang ada di komputer dan tenang dalam mengatasi masalah"</b>.</p>
		<h2>History Date</h2>
		<p>Berikut adalah daftar dimana saya pernah direkrut untuk mengelola startup :</p>
		<ul>
			<li>MyBB Indonesia - Komunitas MyBB Indonesia (12 Februari 2012 - Awal 2015) : Global Moderator</li>
			<li>Kolombaru Forum (November 2010 - Maret 2012) : Moderator</li>
			<li>Forum Komunitas Cihuy (31 Januari 2013 - 2014) : Designer dan Developer</li>
			<li>Kampoeng Network (Maret 2013 - Sekarang) : Co-admin</li>
			<li>Kolombaru Portal (2015 - 2016) : Founder</li>
			<li>WinPoin - Windows Portal Indonesia (Februari 2014 - Sekarang) : Moderator dan Contributor</li>
		</ul>
		<h2>Tentang Situs</h2>
		<p>Beberapa komponen ataupun layanan yang terdapat atau digunakan pada situs ini diberdayai oleh :	</p>
		<ul>
			<li>Font Awesome (Icon Framework) - http://fontawesome.io/</li>
			<li>Bulma (CSS Framework) - http://bulma.io/</li>
			<li>Bootstrap (CSS & JS Framework) - http://www.getbootstrap.com</li>
			<li>Snap Widget (Instagram Feed Widget) - http://www.snapwidget.com</li>
			<li>Github - http://www.github.com</li>
			<li>Tumblr - http://www.tumblr.com</li>
			<li>TubanHost - http://www.tubanhost.com</li>
		</ul>
	</div>
	<div class="col-md-4">
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
