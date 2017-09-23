@if (Auth::guest())
  @php
    $group = 3
  @endphp
@else
  @php
    $group = Auth::user()->group
  @endphp
@endif
@if (Auth::check())
<div class="panel-profil bg-light">
  <div class="container">
    <nav class="nav">
      <div class="foto-circle">
        <img src="{{ url('/img/profil/'.Auth::user()->fotoprofil ) }}" width="30" height="30" alt="Foto Profil">
      </div>
      <a class="nav-link disabled" href="">Hello {{ Auth::user()->name }}</a>
      @if ($group == 2)
      <div class="dropdown show">
        <a class="nav-link dropdown-toggle" href="#" role="button" id="panel" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Panel</a>
        <div class="dropdown-menu" aria-labelledby="panel">
          <a class="dropdown-item" href="{{ route('article.index') }}">Artikel</a>
          <a class="dropdown-item" href="{{ route('page.index') }}">Page Builder</a>
          <a class="dropdown-item" href="#">Project</a>
          <a class="dropdown-item" href="#">Pengaturan Situs</a>
        </div>
      </div>
      @endif
      <a class="nav-link" href="{{ url('/akun') }}">Panel Akun</a>
      <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
        Logout
      </a>

      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          {{ csrf_field() }}
      </form>
    </nav>
  </div>
</div>
@endif