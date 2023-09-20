<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">
      <h1 class="logo"><a href="/">Blog Saya | {{ $title }}</a></h1>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link {{ ($title == "Home") ? 'active' : '' }} " href="/">Home</a></li>
          <li><a class="nav-link {{ ($title == "Jasa") ? 'active' : '' }} " href="/jasa">Jasa</a></li>
          <li><a class="nav-link {{ ($title == "Kursus") ? 'active' : '' }} " href="/kursus" >Kursus</a></li>
          <li><a class="nav-link {{ ($title == "Konsultasi") ? 'active' : '' }} " href="/konsultasi" >Konsultasi</a></li>
            {{-- <div class="dropdown">
              <button href="#" class="btn dropdown-toggle btn-outline-dark m-3 "  type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"  >
              Asisten
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item p-3 " href="#" onclick="showPasswordPrompt0()">Komunikasi Data</a>
                <a class="dropdown-item p-3 " href="#" onclick="showPasswordPrompt1()">Hardware Software</a>
                <a class="dropdown-item p-3 " href="#" onclick="showPasswordPrompt2()">Pemrograman Web</a>
                <a class="dropdown-item p-3 " href="#" onclick="showPasswordPrompt3()">Bigdata Alaysis</a>
                <a class="dropdown-item p-3 " href="#" onclick="showPasswordPrompt4()">Sistem Operasi</a>
              </div>
            </div> --}}
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
    </div>
  </header>