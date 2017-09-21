<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="#">Ambrizals</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="{{ url('') }}"><i class="fa fa-home" aria-hidden="true"></i> Home</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="fa fa-code" aria-hidden="true"></i> Project</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('articles.index') }}"><i class="fa fa-newspaper-o" aria-hidden="true"></i> Article</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ URL('about') }}"><i class="fa fa-user-circle" aria-hidden="true"></i> About</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="social-media" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Social Media</a>
          <div class="dropdown-menu" aria-labelledby="social-media">
            <a class="dropdown-item" href="https://web.facebook.com/ambrizalsuryadinata"><i class="fa fa-facebook" aria-hidden="true"></i> Facebook</a>
            <a class="dropdown-item" href="http://www.instagram.com/ambrizals"><i class="fa fa-twitter" aria-hidden="true"></i> Twitter</a>
            <a class="dropdown-item" href="https://www.linkedin.com/in/ambrizals"><i class="fa fa-linkedin" aria-hidden="true"></i> Linkedin</a>
            <a class="dropdown-item" href="http://tumblr.ambrizal.net"><i class="fa fa-tumblr" aria-hidden="true"></i> Tumblr</a>
          </div>
        </li>
      </ul>
    </div>
  </div>
</nav>