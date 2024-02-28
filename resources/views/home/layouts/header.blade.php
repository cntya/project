<style>
  .menu-active{
    color: white !important;
    font-weight: bold;
  }
</style>
<header>
    <!-- Fixed navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-success shadow">
      <div class="container">
        <img src={{asset('img/logo.png')}} class="img-fluid" style="width: 50px; border-radius:50%">
        <a class="navbar-brand">MTs Al Makmur</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        

        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav me-auto mb-2 mb-md-0">

            <li class="nav-item">
              <a class="nav-link {{ Request::is('/') ? 'menu-active' : '' }}" aria-current="page" href="/">HOME</a>
            </li>

            <li class="nav-item">
              <a class="nav-link {{ Request::is('about') ? 'menu-active' : '' }}" href="/about">VISI DAN MISI</a>
            </li>

            <li class="nav-item">
              <a class="nav-link {{ Request::is('services') ? 'menu-active' : '' }}" href="/services">PRESTASI</a>
            </li>
            <div class="dropdown">
  <button class="btn btn-success dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
    KEGIATAN
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="/blog">EKSTRAKULIKULER</a></li>
    <li><a class="dropdown-item" href="/galery">GALERY</a></li>
  </ul>
</div>
            <li class="nav-item">
              <a class="nav-link {{ Request::is('dataguru') ? 'menu-active' : '' }}" href="/dataguru">DTDS</a>
            </li>

            <li class="nav-item">
              <a class="nav-link {{ Request::is('tatatertib') ? 'menu-active' : '' }}" href="/tatatertib">TATA TERTIB</a>
            </li>

            <li class="nav-item">
              <a class="nav-link {{ Request::is('prasarana') ? 'menu-active' : '' }}" href="/prasarana">SARANA PRASARANA</a>
            </li>

            <li class="nav-item">
              <a class="nav-link {{ Request::is('contact') ? 'menu-active' : '' }}" href="/contact">CONTACT</a>
            </li>
          </ul>
          <form class="d-flex">
           <a href="/login" class="btn btn-light"> <i class="fas fa-sign-in-alt"></i> Login</a>
          </form>
        </div>
      </div>

    </nav>
  </header>