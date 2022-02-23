<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SMA Negeri 1 Ciawi - Selamat Datang diwebsite Sekolah !</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('homepage/assets/gambar/logo.png')}}" rel="icon">
  <link href="{{ asset('homepage/assets/gambar/logo.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('homepage/assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{ asset('homepage/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{ asset('homepage/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{ asset('homepage/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{ asset('homepage/assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{ asset('homepage/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('homepage/assets/css/style.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: FlexStart - v1.9.0
  * Template URL: https://bootstrapmade.com/flexstart-bootstrap-startup-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <img src="{{ asset('homepage/assets/gambar/logo.png')}}" alt="">
        <span>SMAN 1 CIAWI</span>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">Tentang</a></li>
          <li><a class="nav-link scrollto" href="#services">Fasilitas</a></li>
          <li><a class="nav-link scrollto" href="#portfolio">Aktivitas</a></li>
          <li><a class="nav-link scrollto" href="#team">Perangkat Sekolah</a></li>
          <li><a class="nav-link scrollto" href="#recent-blog-posts">Blog</a></li>
          <li><a class="nav-link scrollto" href="#contact">Kontak</a></li>
          <li><a class="nav-link scrollto" href="{{ url('login') }}">LOGIN</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center">
          <h1 data-aos="fade-up">Selamat Datang di SMA Negeri 1 Ciawi</h1>
          <h2 data-aos="fade-up" data-aos-delay="400">Tempat Para Pejuang Ilmu Belajar Dan Mengakselerasi Mimpinya  !</h2>
          <div data-aos="fade-up" data-aos-delay="600">
            <div class="text-center text-lg-start">
              <a href="#about" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                <span>Kenalan Yuk</span>
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
          <img src="{{ asset('homepage/assets/img/hero-img.png')}}" class="img-fluid" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">
    <!-- ======= About Section ======= -->
    <section id="about" class="about">

      <div class="container" data-aos="fade-up">
        <div class="row gx-0">

          <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
            <div class="content">
              <h3>Siapakah kami ?</h3>
              <h2>SMA Terunggul dan Terbaik disebelah Timur Kabupaten Tasikmalaya serta Nomor 2 Sekolah terbuka di Jawa Barat</h2>
              <p>
                Kami berkomitmen untuk menjadi sekolah terbaik sesuai dengan VISI & MISI sekolah yang mengedepankan akhlak, intelektual dan budi pekerti bagi para siswa, guru serta civitas akademika di sekolah kami. Selain itu kami berkomitmen untuk menjadi yang terdepan dalam mengetaskan angka putus sekolah di Jawa Barat dengan melaksanakan sekolah terbuka dengan terus menjaring orang-orang yang kurang mempunyai kesempatan sekolah.  
              </p>
              <div class="text-center text-lg-start">
                <a href="#" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                  <span>Selengkapnya</span>
                  <i class="bi bi-arrow-right"></i>
                </a>
              </div>
            </div>
          </div>

          <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
            <img src="{{ asset('homepage/assets/gambar/sekolah.jpg')}}" class="img-fluid" alt="">
          </div>

        </div>
      </div>

    </section><!-- End About Section -->

    <!-- ======= Values Section ======= -->
    <section id="values" class="values">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Budaya Kami</h2>
          <p>Demi mewujudkan sekolah yang bermutu</p>
        </header>

        <div class="row">
          <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="600">
            <div class="box">
              <img src="{{ asset('homepage/assets/img/values-3.png')}}" class="img-fluid" alt="">
              <h3>Disiplin</h3>
              <p>Kami mengedepankan nilai Disiplin. Tidak hanya untuk siswa tapi untuk seluruh civitas akademika disekolah kami.</p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="400">
            <div class="box">
              <img src="{{ asset('homepage/assets/img/values-2.png')}}" class="img-fluid" alt="">
              <h3>Kreatif & Inovatif</h3>
              <p>Kami mengedepankan nilai Kreatif & Inofatif supaya siswa dan seluruh civitas akademika mampu bersaing di era globalisasi </p>
            </div>
          </div>

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="box">
              <img src="{{ asset('homepage/assets/img/values-1.png')}}" class="img-fluid" alt="">
              <h3>Wirausaha</h3>
              <p>Kami mengedepankan nilai-nilai Wirausaha supaya siswa setelah lulus dapat mencetak lapangan pekerja </p>
            </div>
          </div>
         

        </div>

      </div>

    </section><!-- End Values Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="bi bi-person-fill"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="1102" data-purecounter-duration="1" class="purecounter"></span>
                <p>Siswa</p>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="bi bi-person-video3" style="color: #ee6c20;"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="47" data-purecounter-duration="1" class="purecounter"></span>
                <p>Guru</p>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="bi bi-building" style="color: #15be56;"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="52" data-purecounter-duration="1" class="purecounter"></span>
                <p> Kelas</p>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="bi bi-people" style="color: #bb0852;"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="11029" data-purecounter-duration="1" class="purecounter"></span>
                <p>Alumni</p>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Features Section ======= -->
    <section id="features" class="features">

      <div class="container" data-aos="fade-up">
        <!-- Feature Tabs -->
        <div class="row feture-tabs" data-aos="fade-up">
          <div class="col-lg-6">
            <h3>Visi dan Misi </h3>

            <!-- Tabs -->
            <ul class="nav nav-pills mb-3">
              <li>
                <a class="nav-link active" data-bs-toggle="pill" href="#tab1">Visi</a>
              </li>
              <li>
                <a class="nav-link" data-bs-toggle="pill" href="#tab2">Misi</a>
              </li>
              <li>
                <a class="nav-link" data-bs-toggle="pill" href="#tab3">Tujuan</a>
              </li>
            </ul><!-- End Tabs -->

            <!-- Tab Content -->
            <div class="tab-content">
              <div class="tab-pane fade show active" id="tab1">
                <p>Terwujudnya sekolah yang bermutu, siswa dan lulusan bermutu berakhlak mulia, cerdas   kreatif, inovatif dan berbudaya yang mampu bersaing di era globalisasi</p>
              </div><!-- End Tab 1 Content -->
              <div class="tab-pane fade show" id="tab2">
                <div class="d-flex align-items-center mb-2">
                  <i class="bi bi-check2"></i>
                  <h4>Pemberdayaan dan peningkatan standar profesionalisme mutu tenaga pendidik dan kependidikan.</h4>
                </div>
                <div class="d-flex align-items-center mb-2">
                  <i class="bi bi-check2"></i>
                  <h4>Revitalisasi dan peningkatan standar mutu sarana prasarana pendidikan.</h4>
                </div>
                <div class="d-flex align-items-center mb-2">
                  <i class="bi bi-check2"></i>
                  <h4>Membina keimanan dan ketaqwaan siswa melalui kegiatan-kegiatan pembelajaran yang bernuansa religius.</h4>
                </div>
                <div class="d-flex align-items-center mb-2">
                  <i class="bi bi-check2"></i>
                  <h4>Meningkatkan disiplin dan memperkokoh wawasan wiyatamandala dalam upaya memupuk kesadaran berbangsa dan bernegara.</h4>
                </div>
                <div class="d-flex align-items-center mb-2">
                  <i class="bi bi-check2"></i>
                  <h4>Memperdayakan komponen sekolah dan mengoptimalkan sumber daya sekolah dalam mengembangkan potensi dan minat peserta didik secara optimal.</h4>
                </div>
                <div class="d-flex align-items-center mb-2">
                  <i class="bi bi-check2"></i>
                  <h4>Menciptakan suasana belajar yang kompetitif dan aktif bagi semua siswa dalam menguasai ilmu pengetahuan dan teknologi serta siap bersaing dalam dunia global.</h4>
                </div>
              </div><!-- End Tab 2 Content -->

              <div class="tab-pane fade show" id="tab3">
                <p>Tujuan sekolah sebagai bagian dari tujuan pendidikan nasional adalah meningkatkan   kecerdasan, pengetahuan, kepribadian, akhlak mulia, serta keterampilan untuk hidup mandiri dan mengikuti pendidikan lebih lanju. Secara lebih rinci tujuan SMA Negeri 1 CIAWI Kabupaten Tasikmalaya Provinsi Jawa Barat adalah sebagai berikut :</p>
                <div class="d-flex align-items-center mb-2">
                  <i class="bi bi-check2"></i>
                  <h4>Meningkatkan profesionalisme tenaga pendidik dan kependidikan sesuai dengan tuntutan program</h4>
                </div>
                <div class="d-flex align-items-center mb-2">
                  <i class="bi bi-check2"></i>
                  <h4>Mengupayakan sarana dan fasilitas penunjang yang memadai guna terselenggaranya program pendidikan yang baik, meningkatkan karya kreatifitas dan prestasi peserta didik.</h4>
                </div>
                <div class="d-flex align-items-center mb-2">
                  <i class="bi bi-check2"></i>
                  <h4>Memperkenalkan informasi pendidikan lanjutan dan lapangan pekerjaan sebagai referensi/ pertimbangan bagi peserta didik dalam pengambilan keputusan pilihan setelah tamat/ lulus,</h4>
                </div>
                <div class="d-flex align-items-center mb-2">
                  <i class="bi bi-check2"></i>
                  <h4>Menjalin hubungan dan kerjasama ( net- working ) dengan dunia usaha, masyarakat atau intansi terkait.</h4>
                </div>
                <div class="d-flex align-items-center mb-2">
                  <i class="bi bi-check2"></i>
                  <h4>Meningkatkan sistem penempatan dan penyaluran peserta didik (placement service) sesuai dengan potensi, prestasi, minat dan bakat yang dimiliki peserta didik,</h4>
                </div>
                <div class="d-flex align-items-center mb-2">
                  <i class="bi bi-check2"></i>
                  <h4>Mengefektifkan penyelenggaraan kegiatan ekstrakulikuler</h4>
                </div>
                <div class="d-flex align-items-center mb-2">
                  <i class="bi bi-check2"></i>
                  <h4>Mewujudkan lulusan berkualitas ( out put ) serta memiliki sumberdaya yang kompetitif dan berbudaya yang kompetitif dan berbudaya,</h4>
                </div>
                <div class="d-flex align-items-center mb-2">
                  <i class="bi bi-check2"></i>
                  <h4>Peningkatan penghayatan, pemeliharaan, dan pengalaman nilai-nilai keagamaan,</h4>
                </div>
                <div class="d-flex align-items-center mb-2">
                  <i class="bi bi-check2"></i>
                  <h4>Mengahsilkan lulusan yang menguasai ilmu pengetahuan dan teknologi.</h4>
                </div>
              </div><!-- End Tab 3 Content -->

            </div>

          </div>

          <div class="col-lg-6">
            <img src="{{ asset('homepage/assets/img/features-2.png')}}" class="img-fluid" alt="">
          </div>

        </div><!-- End Feature Tabs -->

        <header class="section-header" style="margin-top:50px !important">
          <h2>Ekstra Kulikuler</h2>
          <p>Komitmen kami dalam mencetak siswa yang memiliki </p>
        </header>

        <div class="row">

          <div class="col-lg-6">
            <img src="{{ asset('homepage/assets/gambar/ekskul_1000.png')}}" class="img-fluid" alt="">
          </div>

          <div class="col-lg-6 mt-5 mt-lg-0 d-flex">
            <div class="row align-self-center gy-4">

              <div class="col-md-6" data-aos="zoom-out" data-aos-delay="200">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-check"></i>
                  <h3>Paskibra</h3>
                </div>
              </div>

               <div class="col-md-6" data-aos="zoom-out" data-aos-delay="300">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-check"></i>
                  <h3>Pramuka</h3>
                </div>
              </div>

              <div class="col-md-6" data-aos="zoom-out" data-aos-delay="500">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-check"></i>
                  <h3>Unit Kegiatan Sekolah</h3>
                </div>
              </div>

              <div class="col-md-6" data-aos="zoom-out" data-aos-delay="600">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-check"></i>
                  <h3>Taekwondo</h3>
                </div>
              </div>

              <div class="col-md-6" data-aos="zoom-out" data-aos-delay="700">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-check"></i>
                  <h3>Silat</h3>
                </div>
              </div>

              <div class="col-md-6" data-aos="zoom-out" data-aos-delay="200">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-check"></i>
                  <h3>Sepakbola</h3>
                </div>
              </div>

              <div class="col-md-6" data-aos="zoom-out" data-aos-delay="200">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-check"></i>
                  <h3>Futsal</h3>
                </div>
              </div>

              <div class="col-md-6" data-aos="zoom-out" data-aos-delay="200">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-check"></i>
                  <h3>Pecinta Alam</h3>
                </div>
              </div>

              <div class="col-md-6" data-aos="zoom-out" data-aos-delay="200">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-check"></i>
                  <h3>Sastra & Puisi</h3>
                </div>
              </div>

              
              <div class="col-md-6" data-aos="zoom-out" data-aos-delay="400">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-check"></i>
                  <h3>Dan masih banyak yang lainnya</h3>
                </div>
              </div>

              

            </div>
          </div>

        </div> <!-- / row -->


        <!-- Feature Icons -->
        <div class="row feature-icons" data-aos="fade-up">
          <h3>Prestasi</h3>

          <div class="row">

            <div class="col-xl-4 text-center" data-aos="fade-right" data-aos-delay="100">
              <img src="{{ asset('homepage/assets/img/features-3.png')}}" class="img-fluid p-4" alt="">
            </div>

            <div class="col-xl-8 d-flex content">
              <div class="row align-self-center gy-4">

                <div class="col-md-6 icon-box" data-aos="fade-up">
                  <i class="bi-robot"></i>
                  <div>
                    <h4>Juara 1 Robotic Se Indonesia</h4>
                    <p>Robot Maunc Mengantarkan SMAN 1 Ciawi menjadi juara.</p>
                  </div>
                </div>

                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                  <i class="ri-book-mark-line"></i>
                  <div>
                    <h4>Juara 1 Cerdas Cermat Se-Indonesia</h4>
                    <p>Andini, Ikbar, dan Ursula mendapat Juara 1 Cerdas cermat yang diselenggarakan di Yogyakarta</p>
                  </div>
                </div>

                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                  <i class="ri-basketball-fill"></i>
                  <div>
                    <h4>Juara 3 Lomba Bola Basket se Jawa Barat</h4>
                    <p>Tim Bola Basket Putra SMAN 1 Ciawi mendapat peringkat ke 3 di perhelatan OSSN tingkat Jawa Barat</p>
                  </div>
                </div>

                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                  <i class="ri-magic-line"></i>
                  <div>
                    <h4>Juara Gede Wadul</h4>
                    <p>Tim Putri Menjuarai Lomba Gede Wadul dalam Rangka Bulan Puisi tingkat Jawa Barat pada Tahun 2021</p>
                  </div>
                </div>

                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
                  <i class="ri-command-line"></i>
                  <div>
                    <h4>Juara 2 Taekwondo Se-indonesia </h4>
                    <p>Pratama Arhan dari SMAN 1 Ciawi menjadi Juara 2 Taekwondo Se-indonesia</p>
                  </div>
                </div>

                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="500">
                  <i class="ri-radar-line"></i>
                  <div>
                    <h4>Juara 1 Renang Tingkat Kabupaten</h4>
                    <p>Ansan Suari mendapat Peringkat 1 renang gaya punggung pada perhelatan OSSN. </p>
                  </div>
                </div>

              </div>
            </div>

          </div>

        </div><!-- End Feature Icons -->

      </div>

    </section><!-- End Features Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Fasilitas</h2>
          <p>Untuk menunjang kegiataan belajar mengajar</p>
        </header>

        <div class="row gy-4">

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-box blue">
              <i class="ri-discuss-line icon"></i>
              <h3>Laboratorium</h3>
              <p>Tersedia berbagai macam laboratorium seperti Laboratorium Ipa, Laboratorium Bahasa dan Laboratorium Komputer</p>
              <!-- <a href="#" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a> -->
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-box orange">
              <i class="ri-discuss-line icon"></i>
              <h3>Ruang Perpustakaan</h3>
              <p>Tersedia ruang perusatakan dengan berbagai koleksi seperti buku pelajaran dan lembar kegiatan siswa</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="service-box green">
              <i class="ri-discuss-line icon"></i>
              <h3>Lapangan Olahraga</h3>
              <p>Tersedia berbagai lapangan untuk melaksanakan olaghraga seperti lapangan basket, lapangan sepakbola dan lapangan futsal.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="service-box red">
              <i class="ri-discuss-line icon"></i>
              <h3>Ruang Ibadah</h3>
              <p>Tersedia ruang ibadah untuk melaksanakan kegiatan keagaamaan</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
            <div class="service-box purple">
              <i class="ri-discuss-line icon"></i>
              <h3>Ruang Kesenian</h3>
              <p>Tersedia ruang kesenian untuk melaksanakan praktek kesenian seperti drama, pembacaan puisi dan apresiasi musik.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="700">
            <div class="service-box pink">
              <i class="ri-discuss-line icon"></i>
              <h3>Ruang Digital</h3>
              <p>Tersedia ruang digital untuk melaksanakan pembelajaran dalam rangka adaptasi kebiasaan baru</p>
            </div>
          </div>

        </div>

      </div>

    </section><!-- End Services Section -->

    <!-- ======= Pricing Section ======= -->
    <!-- <section id="pricing" class="pricing">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Pricing</h2>
          <p>Check our Pricing</p>
        </header>

        <div class="row gy-4" data-aos="fade-left">

          <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="100">
            <div class="box">
              <h3 style="color: #07d5c0;">Free Plan</h3>
              <div class="price"><sup>$</sup>0<span> / mo</span></div>
              <img src="{{ asset('homepage/assets/img/pricing-free.png')}}" class="img-fluid" alt="">
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li class="na">Pharetra massa</li>
                <li class="na">Massa ultricies mi</li>
              </ul>
              <a href="#" class="btn-buy">Buy Now</a>
            </div>
          </div>

          <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="box">
              <span class="featured">Featured</span>
              <h3 style="color: #65c600;">Starter Plan</h3>
              <div class="price"><sup>$</sup>19<span> / mo</span></div>
              <img src="{{ asset('homepage/assets/img/pricing-starter.png')}}" class="img-fluid" alt="">
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li>Pharetra massa</li>
                <li class="na">Massa ultricies mi</li>
              </ul>
              <a href="#" class="btn-buy">Buy Now</a>
            </div>
          </div>

          <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="300">
            <div class="box">
              <h3 style="color: #ff901c;">Business Plan</h3>
              <div class="price"><sup>$</sup>29<span> / mo</span></div>
              <img src="{{ asset('homepage/assets/img/pricing-business.png')}}" class="img-fluid" alt="">
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li>Pharetra massa</li>
                <li>Massa ultricies mi</li>
              </ul>
              <a href="#" class="btn-buy">Buy Now</a>
            </div>
          </div>

          <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="400">
            <div class="box">
              <h3 style="color: #ff0071;">Ultimate Plan</h3>
              <div class="price"><sup>$</sup>49<span> / mo</span></div>
              <img src="{{ asset('homepage/assets/img/pricing-ultimate.png')}}" class="img-fluid" alt="">
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li>Pharetra massa</li>
                <li>Massa ultricies mi</li>
              </ul>
              <a href="#" class="btn-buy">Buy Now</a>
            </div>
          </div>

        </div>

      </div>

    </section> -->
    <!-- End Pricing Section -->

 

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Galeri</h2>
          <p>Aktivitas terbaru kami</p>
        </header>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">Sekolah</li>
              <li data-filter=".filter-card">Ekskul</li>
              <li data-filter=".filter-web">Prestasi</li>
            </ul>
          </div>
        </div>

        <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="{{ asset('homepage/assets/gambar/1.png')}}" class="img-fluid h-100" alt="">
              <div class="portfolio-info">
                <h4>App 1</h4>
                <p>App</p>
                <div class="portfolio-links">
                  <a href="{{ asset('homepage/assets/gambar/1.png')}}" data-gallery="portfolioGallery" class="portfokio-lightbox" title="App 1"><i class="bi bi-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="{{ asset('homepage/assets/gambar/2.png')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Web 3</h4>
                <p>Web</p>
                <div class="portfolio-links">
                  <a href="{{ asset('homepage/assets/gambar/2.png')}}" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Web 3"><i class="bi bi-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="{{ asset('homepage/assets/gambar/3.png')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>App 2</h4>
                <p>App</p>
                <div class="portfolio-links">
                  <a href="{{ asset('homepage/assets/gambar/3.png')}}" data-gallery="portfolioGallery" class="portfokio-lightbox" title="App 2"><i class="bi bi-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="{{ asset('homepage/assets/gambar/4.png')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Card 2</h4>
                <p>Card</p>
                <div class="portfolio-links">
                  <a href="{{ asset('homepage/assets/gambar/4.png')}}" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Card 2"><i class="bi bi-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="{{ asset('homepage/assets/gambar/5.png')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Web 2</h4>
                <p>Web</p>
                <div class="portfolio-links">
                  <a href="{{ asset('homepage/assets/gambar/5.png')}}" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Web 2"><i class="bi bi-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="{{ asset('homepage/assets/gambar/6.png')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>App 3</h4>
                <p>App</p>
                <div class="portfolio-links">
                  <a href="{{ asset('homepage/assets/gambar/6.png')}}" data-gallery="portfolioGallery" class="portfokio-lightbox" title="App 3"><i class="bi bi-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="{{ asset('homepage/assets/gambar/7.png')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Card 1</h4>
                <p>Card</p>
                <div class="portfolio-links">
                  <a href="{{ asset('homepage/assets/gambar/7.png')}}" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Card 1"><i class="bi bi-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="{{ asset('homepage/assets/gambar/8.png')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Card 3</h4>
                <p>Card</p>
                <div class="portfolio-links">
                  <a href="{{ asset('homepage/assets/gambar/8.png')}}" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Card 3"><i class="bi bi-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="{{ asset('homepage/assets/gambar/9.png')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Web 3</h4>
                <p>Web</p>
                <div class="portfolio-links">
                  <a href="{{ asset('homepage/assets/gambar/9.png')}}" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Web 3"><i class="bi bi-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>

    </section><!-- End Portfolio Section -->

  

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Civitas Akademika</h2>
        </header>

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <div class="member-img">
                <img src="{{ asset('homepage/assets/img/team/team-1.jpg')}}" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Drs. Ahmad Subagja, S.T,M.Kom.</h4>
                <span>Kepala Sekolah</span>
                <p>"Apa yang aku ingat tentang sekolah adalah kenangan-kenangan yang aku buat bersama teman-teman."</p>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="member">
              <div class="member-img">
                <img src="{{ asset('homepage/assets/img/team/team-2.jpg')}}" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Sarah Juana, M.Pd.</h4>
                <span>Wakil Kepala Sekolah 1</span>
                <p>"Kalau mau menunggu sampai siap, kita akan menghabiskan sisa hidup kita hanya untuk menunggu."</p>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
            <div class="member">
              <div class="member-img">
                <img src="{{ asset('homepage/assets/img/team/team-3.jpg')}}" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Afif Dika Soleh, M.Pd.</h4>
                <span>Wakil Kepala Sekolah 2</span>
                <p>"Tak ada jalan pintas ke tempat yang layak dituju."</p>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
            <div class="member">
              <div class="member-img">
                <img src="{{ asset('homepage/assets/img/team/team-4.jpg')}}" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Risa Rosdiana, M.Pd.</h4>
                <span>Wakil Kepala Sekolah 3</span>
                <p>"Hiduplah seolah engkau mati besok. Belajarlah seolah engkau hidup selamanya."</p>
              </div>
            </div>
          </div>

        </div>

      </div>

    </section><!-- End Team Section -->

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Partner Kami</h2>
        </header>

        <div class="clients-slider swiper">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><img src="{{ asset('homepage/assets/img/clients/client-1.png')}}" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{ asset('homepage/assets/img/clients/client-2.png')}}" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{ asset('homepage/assets/img/clients/client-3.png')}}" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{ asset('homepage/assets/img/clients/client-4.png')}}" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{ asset('homepage/assets/img/clients/client-5.png')}}" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{ asset('homepage/assets/img/clients/client-6.png')}}" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{ asset('homepage/assets/img/clients/client-7.png')}}" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{ asset('homepage/assets/img/clients/client-8.png')}}" class="img-fluid" alt=""></div>
          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>

    </section><!-- End Clients Section -->
    
    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Testimonials</h2>
          <!-- <p>What they are saying about us</p> -->
        </header>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="200">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  Selama sekolah di SMA Taruna Bakti saya merasa sangat senang kanena fasilitas – fasilitas yang ada di sekolah ini sangat lengkap yang dapat memudahkan kegiatan dalam pembelajaran. Disekolah ini juga saya bertemu dengan guru – guru yang dapat memotivasi saya dalam menemukan jati diri saya.
                </p>
                <div class="profile mt-auto">
                  <img src="{{ asset('homepage/assets/img/testimonials/testimonials-1.jpg')}}" class="testimonial-img" alt="">
                  <h3>Dian Anggraini S</h3>
                  <h4>Alumni 2016</h4>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  Saya bersekolah di Yayasan Taruna Bakti dari SD sampai SMA. Selama saya bersekolah SMA Taruna Bakti, saya merasa senang dan banyak menerima ilmu yang baru saya ketahui. SMA Taruna Baktu membuat masa putih abu-abu saya lebih menyenangkan dan lebih berwarna. Banyak kenangan yang tidak bisa saya lupakan di SMAN 1 Ciawi.
                  <br/>Terima kasih SMANCIW
                </p>
                <div class="profile mt-auto">
                  <img src="{{ asset('homepage/assets/img/testimonials/testimonials-2.jpg')}}" class="testimonial-img" alt="">
                  <h3>Sara Wilsson</h3>
                  <h4>Designer</h4>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  Saya sudah bersekolah di Yayasan Taruna Bakti semenjak TK s.d SMA. Saya sangat merasa nyaman bersekolah disini karena mulai dari guru-gurunya, fasilitasnya, teman-temannya sangat bersahabat. Banyak pengalaman baru yang saya dapat disini.
                  <br/>
                  Terimakasih Taruna Bakti. Tetap menjadi yang terbaik !
                </p>
                <div class="profile mt-auto">
                  <img src="{{ asset('homepage/assets/img/testimonials/testimonials-3.jpg')}}" class="testimonial-img" alt="">
                  <h3>Faza Yuvitha</h3>
                  <h4>Alumni 2017</h4>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  SMA Taruna Bakti menyimpan banyak memori khususnya sebelum renovasi. Sekarang setelah renovasi Taruna Bakti semakin Oke. Keep up !

                </p>
                <div class="profile mt-auto">
                  <img src="{{ asset('homepage/assets/img/testimonials/testimonials-4.jpg')}}" class="testimonial-img" alt="">
                  <h3>Medina Putri Amonita</h3>
                  <h4>Alumni 2012</h4>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  Dengan pengalaman pembelajaran di SMK TEUKU UMAR menjadi bekal saya didunia luar ,dan saya berterimakasih kepada guru guru saya yang telah mendidik ,mengajari saya dengan sabar begitupun teman teman seangkatan saya dan pengalaman organisasi disekolah seperti OSIS,Pramuka dll pasti juga sangat berguna.
                  Saya ucapkan terimakasih untuk SMK TEUKU UMAR ,semoga tambah maju tambah sukses tambah jaya.
                </p>
                <div class="profile mt-auto">
                  <img src="{{ asset('homepage/assets/img/testimonials/testimonials-5.jpg')}}" class="testimonial-img" alt="">
                  <h3>Dodi Bulan Sucianto</h3>
                  <h4>Semarang jurusan Pemasaran</h4>
                </div>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section><!-- End Testimonials Section -->

  

    <!-- ======= Recent Blog Posts Section ======= -->
    <section id="recent-blog-posts" class="recent-blog-posts">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Blog</h2>
          <p>Artikel terbaru tentang sekolah</p>
        </header>

        <div class="row">

          <div class="col-lg-4">
            <div class="post-box">
              <div class="post-img"><img src="{{ asset('homepage/assets/gambar/blog-1.jpeg')}}" class="img-fluid" alt=""></div>
              <span class="post-date">Tue, September 15</span>
              <h3 class="post-title">Kekuatan Guru Penggerak</h3>
              <a href="blog-single.html" class="readmore stretched-link mt-auto"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="post-box">
              <div class="post-img"><img src="{{ asset('homepage/assets/gambar/blog-2.jpeg')}}" class="img-fluid" alt=""></div>
              <span class="post-date">Fri, August 28</span>
              <h3 class="post-title">The Power Of Vision Sekolah Kreativa</h3>
              <a href="blog-single.html" class="readmore stretched-link mt-auto"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="post-box">
              <div class="post-img"><img src="{{ asset('homepage/assets/gambar/17.png')}}" class="img-fluid" alt=""></div>
              <span class="post-date">Mon, July 11</span>
              <h3 class="post-title">Serunya Pekan Olahraga Siswa di SMA Ciawi</h3>
              <a href="blog-single.html" class="readmore stretched-link mt-auto"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

        </div>

      </div>

    </section><!-- End Recent Blog Posts Section -->

       <!-- ======= F.A.Q Section ======= -->
       <section id="faq" class="faq">

        <div class="container" data-aos="fade-up">
  
          <header class="section-header">
            <h2>F.A.Q</h2>
            <p>Frequently Asked Questions</p>
          </header>
  
          <div class="row">
            <div class="col-lg-6">
              <!-- F.A.Q List 1-->
              <div class="accordion accordion-flush" id="faqlist1">
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-1">
                      Apakah kegiatan ekstrakurikuler diwajibkan untuk setiap siswa?
                    </button>
                  </h2>
                  <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                    <div class="accordion-body">
                      Sekolah Prestasi Global memiliki banyak variasi kegiatan ekstrakurikuler. Setiap ekstrakurikuler menyediakan sarana untuk setiap siswa menjelajahi bidang minat mereka masing-masing. Lewat kegiatan ekstrakurikuler juga siswa berkesempatan meperluas pengalaman mereka dan mengembangkan keunggulan khas mereka. <br/>
                      Kami percaya bahwa kegiatan di luar bidang akademik juga menjadi media bagi siswa untuk mengekspresikan emosi mereka serta menambah kepercayaan diri mereka juga. Bergabung dengan setidaknya satu kegiatan ekstrakurikuler adalah wajib bagi setiap siswa di Sekolah Prestasi Global.
                    </div>
                  </div>
                </div>
  
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-2">
                      Apa saja kegiatan tahunan siswa yang dilaksanakan di Sekolah Prestasi Global?
                    </button>
                  </h2>
                  <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                    <div class="accordion-body">
                      Kegiatan tahunan siswa dilaksanakan dalam dua bentuk, yakni kegiatan akademik dan kegiatan non-akademik, yang termasuk dalam kegiatan akademik seperti UTS dan UAS dan dilaksanakan sebanyak satu kali untuk setiap semesternya.<br/>
                      Sedangkan untuk kegiatan non-akademik adalah seperti kegiatan outing class dan kegaiatan peringatan peringatan hari besar serta kegiatan yang disusun sesuai tema yang dibuat setiap tahunnya, kurang lebih dalam setahun kegiatan ini berjumlah 12 kegiatan setiap tahunnya.
                    </div>
                  </div>
                </div>
  
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-3">
                      Apakah Sekolah Prestasi Global menerima anak berkebutuhan khusus?
                    </button>
                  </h2>
                  <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                    <div class="accordion-body">
                      Pada dasarnya setiap anak adalah unik, namun kami mempertimbangkan hal lain yakni keterbatasan kami dalam sumber daya yang handal dan paham dalam penanganan anak berkebutuhan khusus, tentunya banyak hal yang harus disiapkan baik dari segi pengajar dan juga sistem belajarnya, untuk itu kami sampai saat ini belum dapat menerima siswa berkebutuhan khusus karna kendala yang disebutkan tersebut.
                    </div>
                  </div>
                </div>
  
              </div>
            </div>
  
            <div class="col-lg-6">
  
              <!-- F.A.Q List 2-->
              <div class="accordion accordion-flush" id="faqlist2">
  
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-1">
                      Apakah Sekolah Prestasi Global adalah sekolah Islam?
                    </button>
                  </h2>
                  <div id="faq2-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                    <div class="accordion-body">
                      Sekolah Prestasi global didirikan atas dasar dakwah islamiyah, artinya kami ingin menguatkan generasi Islami dengan cara penguatan tauhid yang kuat serta akademik pengetahuan yang cukup serta menjadikan adab sebagai bagian yang harus dijunjung tinggi, sebab adab lebih tinggi daripada hanya sekedar ilmu.
                    </div>
                  </div>
                </div>
  
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-2">
                      Apakah di Sekolah Prestasi Global terdapat program keagamaan Islam?
  
                    </button>
                  </h2>
                  <div id="faq2-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                    <div class="accordion-body">
                      Sekolah Prestasi Global dasarnya adalah sekolah islam dengan tagline Modern Islamic School artinya sekolah ini menyusun dan membuat kurikulum lokal yang berkaitan dengan kegiatan keagamaan, seperti praktek shalat sunah, wajib, praktek zakat, praktek puasa dan ibadah ghoiru mahdhah lainnya seperti bersedekah, dan juga membantu ke sesama lainnya yang membutuhkan.
                      <br/>
                      Adapun kegiatan rutin keagamaan di sekolah adalah: salat sunah duha setiap hari, shalat zuhur, infaq, peringatan hari besar keagamaan, dan program MAHAD (Malam Aktifitas Dakwah). Dalam program MAHAD setiap siswa ditempa diajarkan tentang kehidupan boarding-school dalam pendalaman kajian kegamaan seperti bahasa Arab, hadis, fikih dan juga ceramah agama. Kegiatan ini dilaksanakan khusus untuk setiap siswa kelas 4 dan di atasnya. Kegiatan dilaksanakan di sekolah selama satu malam serta bersifat tidak wajib.
                    </div>
                  </div>
                </div>
  
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-3">
                      Apakah di Sekolah Prestasi Global terdapat ekstrakurikuler keagamaan?
                    </button>
                  </h2>
                  <div id="faq2-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                    <div class="accordion-body">
                      Untuk kegiatan ekstrakurikuler keagamaaan, Sekolah Prestasi Global memiliki beberapa pilihan seperti Tahfidz, Qiraah, Seni Marawis Islami, dan juga PILDACIL (Pemilihan Dai Cilik).
                    </div>
                  </div>
                </div>
  
              </div>
            </div>
  
          </div>
  
        </div>
  
      </section><!-- End F.A.Q Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Kontak</h2>
        </header>

        <div class="row gy-4">

          <div class="col-lg-6">

            <div class="row gy-4">
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-geo-alt"></i>
                  <h3>Alamat</h3>
                  <p>Jalan Pasirhuni No. 10<br>Kab. Tasikmalaya, Jawa Barat</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-telephone"></i>
                  <h3>Hubungi Kami</h3>
                  <p>0265455222</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-envelope"></i>
                  <h3>Email Kami</h3>
                  <p>admin@sman1ciawitasikmalaya.sch.id</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-clock"></i>
                  <h3>Jam Kerja</h3>
                  <p>Senin - Jumat<br>9:00 WIB - 05:00 WIB</p>
                </div>
              </div>
            </div>

          </div>

          <div class="col-lg-6">
            <form action="forms/contact.php" method="post" class="php-email-form">
              <div class="row gy-4">

                <div class="col-md-6">
                  <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                </div>

                <div class="col-md-6 ">
                  <input type="email" class="form-control" name="email" placeholder="Your Email" required>
                </div>

                <div class="col-md-12">
                  <input type="text" class="form-control" name="subject" placeholder="Subject" required>
                </div>

                <div class="col-md-12">
                  <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
                </div>

                <div class="col-md-12 text-center">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>

                  <button type="submit">Send Message</button>
                </div>

              </div>
            </form>

          </div>

        </div>

      </div>

    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-12 text-center">
            <h4>Daftar Newsletter</h4>
            <p>Dapatkan informasi terbaru mengenai sekolah melalui email</p>
          </div>
          <div class="col-lg-6">
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-top">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-5 col-md-12 footer-info">
            <a href="index.html" class="logo d-flex align-items-center">
              <img src="{{ asset('homepage/assets/gambar/logo.png')}}" alt="">
              <span>SMAN 1 Ciawi</span>
            </a>
            <p>Where Tomorrow's Leaders Come Together</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>

          <div class="col-lg-2 col-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
            <h4>Contact Us</h4>
            <p>
              Jalan Pasirhuni No. 10 <br>
              Kab. Tasikmalaya, Jawa Barat<br>
              Indonesia<br><br>
              <strong>Phone:</strong> 0265455222<br>
              <strong>Email:</strong> admin@sman1ciawitasikmalaya.sch.id<br>
            </p>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>SMAN 1 CIAWI</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/flexstart-bootstrap-startup-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('homepage/assets/vendor/purecounter/purecounter.js')}}"></script>
  <script src="{{ asset('homepage/assets/vendor/aos/aos.js')}}"></script>
  <script src="{{ asset('homepage/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{ asset('homepage/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{ asset('homepage/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{ asset('homepage/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{ asset('homepage/assets/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('homepage/assets/js/main.js')}}"></script>

</body>

</html>