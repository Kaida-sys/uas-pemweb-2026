<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="utf-8" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <title>Sistem Informasi Layanan UMKM</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- CSS -->
  <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-5.0.0-beta1.min.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/css/LineIcons.2.0.css') }}"/>
  <link rel="stylesheet" href="{{ asset('assets/css/tiny-slider.css') }}"/>
  <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}"/>
  <link rel="stylesheet" href="{{ asset('assets/css/lindy-uikit.css') }}"/>
</head>

<body>

<!-- ========================= HERO WRAPPER ========================= -->
<section id="home" class="hero-section-wrapper-5">

<!-- ========================= HEADER ========================= -->
<header class="header header-6">
  <div class="navbar-area">
    <div class="container">
      <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="#">
          <strong>SIL-UMKM</strong>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar">
          <span class="toggler-icon"></span>
          <span class="toggler-icon"></span>
          <span class="toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse sub-menu-bar" id="navbar">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item"><a class="page-scroll active" href="#home">Home</a></li>
            <li class="nav-item"><a class="page-scroll" href="#feature">Fitur</a></li>
            <li class="nav-item"><a class="page-scroll" href="#about">Tentang</a></li>
            <li class="nav-item"><a class="page-scroll" href="#pricing">Layanan</a></li>
            <li class="nav-item"><a class="page-scroll" href="#contact">Kontak</a></li>
          </ul>
        </div>
      </nav>
    </div>
  </div>
</header>

<!-- ========================= HERO ========================= -->
<div class="hero-section hero-style-5 img-bg"
     style="background-image: url('{{ asset('assets/img/hero/hero-5/hero-bg.svg') }}')">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="hero-content-wrapper">
          <h2 class="mb-30">
            Sistem Informasi Manajemen Layanan UMKM
          </h2>
          <p class="mb-30">
            Platform berbasis web untuk mengelola data pelanggan, layanan,
            dan permintaan layanan secara terintegrasi guna meningkatkan
            efisiensi operasional UMKM.
          </p>
          <a href="#contact" class="button button-lg radius-50">
            Ajukan Layanan <i class="lni lni-chevron-right"></i>
          </a>
        </div>
      </div>

      <div class="col-lg-6 align-self-end">
        <div class="hero-image">
          <img src="{{ asset('assets/img/hero/hero-5/hero-img.svg') }}" alt="">
        </div>
      </div>
    </div>
  </div>
</div>
</section>

<!-- ========================= FEATURE ========================= -->
<section id="feature" class="feature-section feature-style-5">
  <div class="container">

    <div class="section-title text-center mb-60">
      <h3>Fitur Utama Sistem</h3>
      <p>Fitur dirancang berdasarkan kebutuhan sistem dan kajian literatur</p>
    </div>

    <div class="row">
      @php
        $features = [
          ['icon'=>'lni-user','title'=>'Manajemen Pelanggan','desc'=>'Pengelolaan data pelanggan secara terpusat'],
          ['icon'=>'lni-briefcase','title'=>'Manajemen Layanan','desc'=>'Pengaturan dan pengelompokan layanan UMKM'],
          ['icon'=>'lni-dashboard','title'=>'Dashboard Monitoring','desc'=>'Pemantauan aktivitas dan permintaan layanan'],
          ['icon'=>'lni-lock','title'=>'Keamanan Data','desc'=>'Proteksi data dengan autentikasi pengguna'],
          ['icon'=>'lni-users','title'=>'Role Akses','desc'=>'Hak akses berdasarkan peran pengguna'],
          ['icon'=>'lni-agenda','title'=>'Riwayat Permintaan','desc'=>'Penyimpanan histori layanan pelanggan'],
        ];
      @endphp

      @foreach($features as $f)
      <div class="col-lg-4 col-md-6">
        <div class="single-feature">
          <div class="icon"><i class="lni {{ $f['icon'] }}"></i></div>
          <div class="content">
            <h5>{{ $f['title'] }}</h5>
            <p>{{ $f['desc'] }}</p>
          </div>
        </div>
      </div>
      @endforeach
    </div>

  </div>
</section>

<!-- ========================= ABOUT ========================= -->
<section id="about" class="about-section about-style-4">
  <div class="container">
    <div class="row align-items-center">

      <div class="col-lg-6">
        <div class="about-content-wrapper">
          <h3>Tujuan Pengembangan Sistem</h3>
          <p>
            Sistem ini dikembangkan untuk membantu UMKM dalam mengelola
            proses layanan secara digital agar lebih efektif, akurat,
            dan terintegrasi.
          </p>
          <ul>
            <li><i class="lni lni-checkmark-circle"></i> Meningkatkan efisiensi operasional</li>
            <li><i class="lni lni-checkmark-circle"></i> Mengurangi kesalahan pencatatan</li>
            <li><i class="lni lni-checkmark-circle"></i> Meningkatkan kualitas layanan</li>
          </ul>
        </div>
      </div>

      <div class="col-lg-6">
        <img src="{{ asset('assets/img/about/about-4/about-img.svg') }}" alt="">
      </div>

    </div>
  </div>
</section>

<!-- ========================= SERVICES ========================= -->
<section id="pricing" class="pricing-section pricing-style-4 bg-light">
  <div class="container">

    <div class="section-title mb-60">
      <h3>Jenis Layanan Sistem</h3>
      <p>Layanan yang disediakan untuk mendukung operasional UMKM</p>
    </div>

    <div class="row">
      <div class="col-md-4">
        <div class="single-pricing">
          <h4>Konsultasi UMKM</h4>
          <p>Pendampingan penggunaan sistem</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="single-pricing">
          <h4>Manajemen Data</h4>
          <p>Pengelolaan data pelanggan dan layanan</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="single-pricing">
          <h4>Layanan Operasional</h4>
          <p>Pencatatan dan monitoring layanan</p>
        </div>
      </div>
    </div>

  </div>
</section>

<!-- ========================= CONTACT ========================= -->
<section id="contact" class="contact-section contact-style-3">
  <div class="container">
    <div class="section-title text-center mb-50">
      <h3>Ajukan Permintaan Layanan</h3>
      <p>Silakan isi formulir untuk mengajukan layanan</p>
    </div>

    <form>
      <input type="text" class="form-input" placeholder="Nama">
      <input type="email" class="form-input" placeholder="Email">
      <textarea class="form-input" placeholder="Pesan"></textarea>
      <button class="button">Kirim</button>
    </form>
  </div>
</section>

<!-- ========================= FOOTER ========================= -->
<footer class="footer footer-style-4">
  <div class="container text-center">
    <p>
      Sistem Informasi Layanan UMKM © {{ date('Y') }}  
      <br>Dikembangkan untuk kebutuhan akademik
    </p>
  </div>
</footer>

<!-- JS -->
<script src="{{ asset('assets/js/bootstrap-5.0.0-beta1.min.js') }}"></script>
<script src="{{ asset('assets/js/tiny-slider.js') }}"></script>
<script src="{{ asset('assets/js/wow.min.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>

</body>
</html>
