<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">
      <h1 class="logo"><a href="/">G S C | {{ $title }}</a></h1>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link {{ ($title == "Home") ? 'active' : '' }} " href="/">Home</a></li>
          <li><a class="nav-link {{ ($title == "Jasa") ? 'active' : '' }} " href="/jasa">Jasa</a></li>
          <li><a class="nav-link {{ ($title == "Kursus") ? 'active' : '' }} " href="/kursus" >Kursus</a></li>
          <li><a class="nav-link {{ ($title == "Konsultasi") ? 'active' : '' }} " href="/konsultasi" >Konsultasi</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
    </div>
  </header>