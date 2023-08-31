@extends('layouts.main')

@section('container')

    <section id="hero" class="d-flex flex-column justify-content-center align-items-center"></section>
      <!-- ======= My & Family Section ======= -->
      <section id="about" class="about">
        <div class="container">
          <div class="section-title">
            <!-- ======= Hero Section ======= -->
            <h2><strong>Krisna Aditya Pratama</strong></h2>
            <p>
              Nama saya Krisna Aditya Pratama, lahir pada tanggal 18 Oktober 2002 di Pulau Midai. 
              Pulau Midai terletak di Kabupaten Natuna, Provinsi Kepulauan Riau. 
              Pulau kecil yang dikelilingi lautan dengan seribu kenangan
               
            </p>
          </div>

          <div class="row content">
            <div class="col-lg-5 ">
              <img src="assets/img/about.jpg" class=" img-fluid " style="height: 350px;" alt="" />
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0">
              <ul>
                <li>
                  <i class="ri-check-double-line"></i>Nama : Krisna Aditya
                  Pratama
                </li>
                <li>
                  <i class="ri-check-double-line"></i>Lahir : 18 Oktober 2002
                </li>
                <li>
                  <i class="ri-check-double-line"></i>Sekolah Tinggi : Amikom
                  Yogyakarta
                </li>
                <li>
                  <i class="ri-check-double-line"></i>Kota : Indonesia,
                  Yogyakarta
                </li>
                <li>
                  <i class="ri-check-double-line"></i>Email :
                  krisnaadityapratama@students.amikom.ac.id
                </li>
                <li>
                  <i class="ri-check-double-line"></i>Github : bangkris18
                </li>
              </ul>
              <br />
              <a href="/lainnya" class="btn-learn-more">Lihat Lanjutan</a>
            </div>
          </div>
        </div>
      </section>
      <!-- End My & Family Section -->

      <!-- ======= Features Section ======= -->
      <section id="features" class="features">
        <div class="container">
          <div class="row">
            <div class="col-lg-4 col-md-6 icon-box">
              <div class="icon"><i class="bi bi-laptop"></i></div>
              <h4 class="title"><a href="">Pengembang Web</a></h4>
              <p class="description">
                Saya adalah Krisna, seorang yang menguasai bahasa pemrograman
                C++, HTML, CSS, PHP, dan JavaScript dengan pengalaman dalam
                menggunakan framework Laravel.
              </p>
            </div>
            <div class="col-lg-4 col-md-6 icon-box">
              <div class="icon"><i class="bi bi-bar-chart"></i></div>
              <h4 class="title"><a href="">Data Analyst</a></h4>
              <p class="description">
                Saya adalah seorang junior data scientist yang memiliki
                antusiasme dan minat dalam menganalisis data untuk mengungkap
                wawasan berharga.
              </p>
            </div>
            <div class="col-lg-4 col-md-6 icon-box">
              <div class="icon"><i class="bi bi-lightbulb"></i></div>
              <h4 class="title"><a href="">Pengembang IOT</a></h4>
              <p class="description">
                Saya adalah seorang IoT developer dengan beberapa pengalaman
                lomba, yang berdedikasi dalam mengembangkan solusi kreatif dan
                inovatif melalui teknologi Internet of Things (IoT).
              </p>
            </div>
            <div class="col-lg-4 col-md-6 icon-box">
              <div class="icon"><i class="bi bi-app-indicator"></i></div>
              <h4 class="title"><a href="">Hardware Software</a></h4>
              <p class="description">
                Saya adalah seorang junior hardware software komputer yang
                memiliki minat dan pengetahuan dalam merancang, membangun, dan
                mengintegrasikan perangkat keras dan perangkat lunak komputer.
              </p>
            </div>
          </div>
        </div>
      </section>
      <!-- End Features Section -->

      <!-- ======= Recent Photos Section ======= -->
      <section id="resume" class="resume">
        <div class="container">
          <div class="section-title">
            <h2>Pendidikan</h2>
          </div>

          <div class="row">
            <div class="col-lg-6" data-aos="fade-up">
              <h3 class="resume-title">Proses</h3>
              <div class="resume-item">
                <h4>Sekolah Tinggi Menengah</h4>
                <h5>2017 - 2020</h5>
                <p><em>SMAN 1 Midai</em></p>
                <p>
                  Saya bersekolah di SMAN 1 Midai dengan mengambil jurusan IPA, 
                  di mana saya belajar berbagai konsep ilmiah dan keterampilan yang berkaitan 
                  dengan bidang ilmu pengetahuan alam. Selama masa di sekolah tersebut, 
                  saya terlibat dalam berbagai kegiatan akademis dan ekstrakurikuler yang membantu 
                  dalam pengembangan pengetahuan dan keterampilan saya di berbagai bidang.
                </p>
              </div>

              <div class="resume-item">
                <h4>Sarjana Informatika</h4>
                <h5>2020 - Now</h5>
                <p><em>Universitas Amikom Yogyakarta</em></p>
                <p>
                  Saat ini, saya sedang menjalani kuliah di Universitas AMIKOM Yogyakarta 
                  dengan jurusan informatika. Di sana, saya mendalami berbagai aspek ilmu komputer, 
                  termasuk pemrograman, pengembangan perangkat lunak, serta analisis data. 
                  Proses kuliah ini memberi saya kesempatan untuk eksplorasi lebih dalam 
                  dalam dunia teknologi dan meningkatkan pemahaman saya tentang dunia 
                  digital yang terus berkembang.
                </p>
              </div>
            </div>

            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
              <h3 class="resume-title">Pengalaman</h3>
              <div class="resume-item">
                <h4>Pengembang Internet Of Things</h4>
                <h5>2020 - Now</h5>
                <p><em>Universitas Amikom Yogyakarta</em></p>
                <ul>
                  <li>Rumah Pintar</li>
                  <li>Sistem Motor Pintar</li>
                  <li>Penyiraman tanaman otomatis (Smart Agriculture)</li>
                  <li>Pemantauan ruang tumbuh jamur</li>
                  <li>dan beberapa lainnya</li>
                </ul>
              </div>
              <div class="resume-item">
                <h4>Pengembang Website</h4>
                <h5>2020 - Now</h5>
                <p><em>Universitas Amikom Yogyakarta</em></p>
                <ul>
                  <li>
                    Pemantauan tanaman jamur dilakukan dengan tambahan web
                    fitur untuk mempermudah pemantauan.
                  </li>
                  <li>Website Laundry</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Recent Photos Section -->
@endsection