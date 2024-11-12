<!DOCTYPE php>
<php lang="en">

    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <title>Website UTM</title>
        <meta name="description" content="">
        <meta name="keywords" content="">

        <!-- Favicons -->
        <link href="assets/img/favicon.png" rel="icon">
        <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com" rel="preconnect">
        <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
        <link
            href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
            rel="stylesheet">

        <!-- Vendor CSS Files -->
        <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
        <link href="assets/vendor/aos/aos.css" rel="stylesheet">
        <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
        <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

        <!-- Main CSS File -->
        <link href="assets/css/main.css" rel="stylesheet">

        <!-- =======================================================
  * Template Name: Append
  * Template URL: https://bootstrapmade.com/append-bootstrap-website-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
    </head>

    <body class="index-page">

        <header id="header" class="header d-flex align-items-center fixed-top">
            <div class="container-fluid position-relative d-flex align-items-center justify-content-between">

                <a href="index.php" class="logo d-flex align-items-center me-auto me-xl-0">
                    <!-- Uncomment the line below if you also wish to use an image logo -->
                    <img src="assets/img/logoUTM.jpg" alt="">
                    <h1 class="sitename">Web UTM</h1><span>.</span>
                </a>

                <nav id="navmenu" class="navmenu">
                    <ul>
                        <li><a href="index.php#hero" class="active">Home</a></li>
                        <li><a href="index.php#about">About</a></li>
                        <li><a href="index.php#services">Fasilitas</a></li>
                        <li class="dropdown"><a href="fakultas.php"><span>Fakultas</span> <i
                                    class="bi bi-chevron-down toggle-dropdown"></i></a>
                            <ul>
                                <li class="dropdown"><a href=""><span>Fakultas Teknologi <br>informasi dan
                                            komunikasi</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                                    <ul>
                                        <li><a href="#">S1 Teknik informatika</a></li>
                                        <li><a href="#">S1 Teknologi Informasi</a></li>
                                        <li><a href="#">S1 Manajemen</a></li>
                                        <li><a href="#">S1 Teknik Komputer</a></li>
                                        <li><a href="#">S1 Sistem Informasi</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#"><span>Fakultas Bisnis &
                                            Hukum</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                                    <ul>
                                        <li><a href="#">S1 Hukum</a></li>
                                        <li><a href="#">S1 Manajemen</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#"><span>Fakultas Vokasi</span> <i
                                            class="bi bi-chevron-down toggle-dropdown"></i></a>
                                    <ul>
                                        <li><a href="#">D3 Teknik Komputer</a></li>
                                        <li><a href="#">D3 Manajemen Informatika</a></li>
                                        <li><a href="#">D3 Komputerisasi Akuntasi</a></li>
                                        <li><a href="#">D3 Manajemen Administrasi</a></li>
                                        <li><a href="#">D3 Sekretari</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="#"><span>Kegiatan Dosen</span> <i
                                    class="bi bi-chevron-down toggle-dropdown"></i></a>
                            <ul>
                                <li class="dropdown"><a href="#"><span>Pendidikan
                                        </span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                                </li>
                                <li class="dropdown"><a href="#"><span>Penelitian
                                        </span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                                </li>
                                <li class="dropdown"><a href="#"><span>Pengabdian kepada masyarakat</span> <i
                                            class="bi bi-chevron-down toggle-dropdown"></i></a>
                                </li>
                            </ul>
                        </li>
                        <li><a href="index.php#contact">Contact</a></li>
                    </ul>
                    <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
                </nav>

                <a class="btn-getstarted" href="index.php#about">Get Started</a>

            </div>
        </header>

        <main class="main">

            <!-- Hero Section -->
            <section id="hero" class="hero section dark-background">

                <img src="assets/img/gedung-utm.jpg" alt="" data-aos="fade-in">

                <div class="container">
                    <div class="row">
                        <div class="col-lg-10">
                            <h2 data-aos="fade-up" data-aos-delay="100">Selamat Datang Di UTM</h2>
                            <p data-aos="fade-up" data-aos-delay="200"> Kampus Terbaik Teknologi di NTB Dengan penunjang
                                fasilitas yang lengkap.
                            </p>
                        </div>
                        <div class="col-lg-5" data-aos="fade-up" data-aos-delay="300">
                            <form action="forms/newsletter.php" method="post" class="php-email-form">
                                <div class="sign-up-form"><input type="email" name="email"><input type="submit"
                                        value="Subscribe"></div>
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your subscription request has been sent. Thank you!</div>
                            </form>
                        </div>
                    </div>
                </div>

            </section><!-- /Hero Section -->

            <!-- Clients Section -->
            <section id="clients" class="clients section">

                <div class="container" data-aos="fade-up">

                    <div class="row gy-4">

                        <div class="col-xl-2 col-md-3 col-6 client-logo">
                            <img src="assets/img/clients/client-7.jpeg" class="img-fluid" alt="">
                        </div><!-- End Client Item -->

                        <div class="col-xl-2 col-md-3 col-6 client-logo">
                            <img src="assets/img/clients/client-8.jpeg" class="img-fluid" alt="">
                        </div><!-- End Client Item -->

                        <div class="col-xl-2 col-md-3 col-6 client-logo">
                            <img src="assets/img/clients/client-9.jpeg" class="img-fluid" alt="">
                        </div><!-- End Client Item -->

                        <div class="col-xl-2 col-md-3 col-6 client-logo">
                            <img src="assets/img/clients/client-10.jpeg" class="img-fluid" alt="">
                        </div><!-- End Client Item -->

                        <div class="col-xl-2 col-md-3 col-6 client-logo">
                            <img src="assets/img/clients/client-11.jpeg" class="img-fluid" alt="">
                        </div><!-- End Client Item -->
                        <div class="col-xl-2 col-md-3 col-6 client-logo">
                            <img src="assets/img/clients/client-12.jpeg" class="img-fluid" alt="">
                        </div><!-- End Client Item -->



                    </div>

                </div>

            </section><!-- /Clients Section -->

            <!-- About Section -->
            <section id="about" class="about section light-background">

                <div class="container" data-aos="fade-up" data-aos-delay="100">
                    <div class="row align-items-xl-center gy-5">

                        <div class="col-xl-5 content">
                            <h2>Sejarah UTM</h2>
                            <p>
                                Universitas Teknologi Mataram (UTM Mataram) merupakan penggabungan dari Sekolah Tinggi
                                Manajemen Informatika Komputer Mataram dan Akademi Sekretari dan Manajemen Mataram
                                dengan Keputusan Menristekdikti RI Nomor : 660/KPT/I/2019 tanggal 29 Juli 2019. Adanya
                                kesamaan visi adalah salah satu faktor yang mendorong penggabungan ini sehingga jumlah
                                program studi yang dikelola oleh Universitas Teknologi Mataram adalah 12 program studi
                                yang dikelompokkan ke dalam 3 (tiga) fakultas, yaitu Fakultas Teknologi Informasi dan
                                Komunikasi yang menaungi 5 (lima) prodi : Teknik Informatika, Rekayasa Sistem Komputer,
                                Teknologi Informasi, Sistem Informasi dan Rekayasa Perangkat Lunak; Fakultas Ilmu Sosial
                                yang menaungi 2 (dua) prodi yaitu Hukum dan Manajemen; serta Fakultas Vokasi yang
                                menaungi 5 (lima) prodi yaitu Teknik Komputer, Manajemen Informatika, Komputerisasi
                                Akuntansi, Manajemen Administrasi dan Sekretari.</p>
                            <a href="#" class="read-more"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
                        </div>


                        <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
                            <div class="icon-box">
                                <h3>Universitas Teknologi Mataram</h3>
                                <img src="assets/img/gedung-utm.jpg" alt="" class="img-fluid">
                            </div>
                        </div> <!-- End Icon Box -->
                    </div>
                </div>

                </div>
                </div>

            </section><!-- /About Section -->

            <!-- Stats Section -->
            <section id="stats" class="stats section dark-background">

                <img src="assets/img/stats-bg.jpg" alt="" data-aos="fade-in">

                <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">

                    <div class="row gy-4">

                        <div class="col-lg-3 col-md-6">
                            <div class="stats-item text-center w-100 h-100">
                                <span data-purecounter-start="0" data-purecounter-end="1010"
                                    data-purecounter-duration="1" class="purecounter"></span>
                                <p>Mahasiswa</p>
                            </div>
                        </div><!-- End Stats Item -->

                        <div class="col-lg-3 col-md-6">
                            <div class="stats-item text-center w-100 h-100">
                                <span data-purecounter-start="0" data-purecounter-end="8172"
                                    data-purecounter-duration="1" class="purecounter"></span>
                                <p>Alumni</p>
                            </div>
                        </div><!-- End Stats Item -->

                        <div class="col-lg-3 col-md-6">
                            <div class="stats-item text-center w-100 h-100">
                                <span data-purecounter-start="0" data-purecounter-end="61" data-purecounter-duration="1"
                                    class="purecounter"></span>
                                <p>Mitra</p>
                            </div>
                        </div><!-- End Stats Item -->

                        <div class="col-lg-3 col-md-6">
                            <div class="stats-item text-center w-100 h-100">
                                <span data-purecounter-start="0" data-purecounter-end="32" data-purecounter-duration="1"
                                    class="purecounter"></span>
                                <p>Workers</p>
                            </div>
                        </div><!-- End Stats Item -->

                    </div>

                </div>

            </section><!-- /Stats Section -->

            <!-- Services Section -->
            <section id="services" class="services section">

                <!-- Section Title -->
                <div class="container section-title" data-aos="fade-up">
                    <h2>Fasilitas</h2>

                </div><!-- End Section Title -->

                <div class="container">

                    <div class="row gy-4">
                        <div class="col-lg-6 " data-aos="fade-up" data-aos-delay="200">
                            <div class="service-item d-flex">
                                <div class="icon flex-shrink-0"><i class="bi bi-card-checklist"></i></div>
                                <div>
                                    <h4 class="title"><a href="services-details.php" class="stretched-link">SIAKAD
                                        </a></h4>
                                </div>
                            </div>
                        </div><!-- End Service Item -->

                        <div class="col-lg-6 " data-aos="fade-up" data-aos-delay="300">
                            <div class="service-item d-flex">
                                <div class="icon flex-shrink-0"><i class="bi bi-bar-chart"></i></div>
                                <div>
                                    <h4 class="title"><a href="services-details.php" class="stretched-link"> WIFI
                                        </a></h4>
                                </div>
                            </div>
                        </div><!-- End Service Item -->

                        <div class="col-lg-6 " data-aos="fade-up" data-aos-delay="400">
                            <div class="service-item d-flex">
                                <div class="icon flex-shrink-0"><i class="bi bi-binoculars"></i></div>
                                <div>
                                    <h4 class="title"><a href="services-details.php" class="stretched-link">E-Learnng
                                        </a></h4>
                                </div>
                            </div>
                        </div><!-- End Service Item -->

                        <div class="col-lg-6 " data-aos="fade-up" data-aos-delay="500">
                            <div class="service-item d-flex">
                                <div class="icon flex-shrink-0"><i class="bi bi-brightness-high"></i></div>
                                <div>
                                    <h4 class="title"><a href="services-details.php" class="stretched-link">Nemo
                                            Enim</a>
                                    </h4>
                                </div>
                            </div>
                        </div><!-- End Service Item -->

                        <div class="col-lg-6 " data-aos="fade-up" data-aos-delay="600">
                            <div class="service-item d-flex">
                                <div class="icon flex-shrink-0"><i class="bi bi-calendar4-week"></i></div>
                                <div>
                                    <h4 class="title"><a href="services-details.php" class="stretched-link">Eiusmod
                                            Tempor</a></h4>
                                </div>
                            </div>
                        </div><!-- End Service Item -->

                    </div>

                </div>

            </section><!-- /Services Section -->

            <!-- Features Section -->
            <section id="features" class="features section">

                <div class="container">

                    <div class="row gy-4 align-items-stretch justify-content-between features-item ">
                        <div class="col-lg-6 d-flex align-items-center features-img-bg" data-aos="zoom-out">
                            <img src="assets/img/pamplete.jpeg" class="img-fluid" alt="">
                        </div>
                        <div class="col-lg-5 d-flex justify-content-center flex-column" data-aos="fade-up">
                            <h3>Apa saja sih keunggulan UTM?</h3>
                            <p></p>
                            <ul>
                                <li>
                                    <i class="bi bi-check"></i><span> <b>Kampus Terakreditasi BAN-PT</b><br> Kampus
                                        Universitas Teknolgi Mataram telah mendapat akreditasi BAIK sedangkan program
                                        studinya sudah mendapatkan akreditasi B, BAIK dan BAIK SEKALI dari BAN-PT</span>
                                </li>
                                <li>
                                    <i class="bi bi-check"></i><span> <b>
                                            Alumni</b><br> ALUMNI telah banyak bekerja sesuai dengan bidangnya</span>
                                </li>
                                <li>
                                    <i class="bi bi-check"></i><span> <b>
                                            Perpustakaan</b><br> Universitas Teknolgi Mataram telah menyediakan
                                        perpustakaan online maupun offline yang dapat digunakan sebagai penunjang
                                        pembelajaran oleh Dosen dan Mahasiswa</span>
                                </li>
                                <li>
                                    <i class="bi bi-check"></i><span> <b>Tenaga Pengajar Profesional</b><br> Didukung
                                        oleh
                                        dosen-dosen
                                        berpengalaman, baik di
                                        dunia akademik maupun industri.</span>
                                </li>
                                <li><i class="bi bi-check"></i> <span> <b>Beasiswa dan Dukungan Keuangan</b><br> Kampus
                                        menyediakan berbagai jenis beasiswa untuk
                                        membantu mahasiswa yang berprestasi atau yang membutuhkan dukungan finansial.
                                    </span>.</li>
                            </ul>
                            <a href="#" class="btn btn-get-started align-self-start">Get Started</a>
                        </div>
                    </div><!-- Features Item -->

                </div>

            </section><!-- /Features Section -->


            <!-- Call To Action Section -->
            <section id="call-to-action" class="call-to-action section dark-background">

                <img src="assets/img/cta-bg.jpg" alt="">

                <div class="container">
                    <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
                        <div class="col-xl-10">
                            <div class="text-center">
                                <h3>Call To Action</h3>
                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                    fugiat
                                    nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                                    officia deserunt mollit anim id est laborum.</p>
                                <a class="cta-btn" href="#">Call To Action</a>
                            </div>
                        </div>
                    </div>
                </div>

            </section><!-- /Call To Action Section -->

            <!-- Testimonials Section -->
            <section id="testimonials" class="testimonials section light-background">

                <div class="container">

                    <div class="row align-items-center">

                        <div class="col-lg-5 info" data-aos="fade-up" data-aos-delay="100">
                            <h3>Testimonials</h3>
                            <p>
                                Bergabunglah bersama kami di Universitas Teknologi Mataram dan wujudkan masa depan
                                cemerlang Anda!
                            </p>
                        </div>

                        <div class="col-lg-7" data-aos="fade-up" data-aos-delay="200">

                            <div class="swiper init-swiper">
                                <script type="application/json" class="swiper-config">
                                {
                                    "loop": true,
                                    "speed": 600,
                                    "autoplay": {
                                        "delay": 5000
                                    },
                                    "slidesPerView": "auto",
                                    "pagination": {
                                        "el": ".swiper-pagination",
                                        "type": "bullets",
                                        "clickable": true
                                    }
                                }
                                </script>
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="testimonial-item">
                                            <div class="d-flex">
                                                <img src="assets/img/testimonials/testimonials-2.jpg"
                                                    class="testimonial-img flex-shrink-0" alt="">
                                                <div>
                                                    <h3>Sara Wilsson</h3>
                                                    <h4>Designer</h4>
                                                    <div class="stars">
                                                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                            class="bi bi-star-fill"></i><i
                                                            class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <p>
                                                <i class="bi bi-quote quote-icon-left"></i>
                                                <span>Selama kuliah di Universitas Teknologi Mataram, saya belajar
                                                    banyak hal yang membantu saya mengasah kemampuan teknis dan soft
                                                    skills. Dukungan dari dosen dan teman-teman membuat saya lebih
                                                    percaya diri menghadapi tantangan-tantangan baru di bidang
                                                    teknologi.</span>
                                                <i class="bi bi-quote quote-icon-right"></i>
                                            </p>
                                        </div>
                                    </div><!-- End testimonial item -->

                                    <div class="swiper-slide">
                                        <div class="testimonial-item">
                                            <div class="d-flex">
                                                <img src="assets/img/testimonials/testimonials-3.jpg"
                                                    class="testimonial-img flex-shrink-0" alt="">
                                                <div>
                                                    <h3>Lina Permatasari</h3>
                                                    <h4>Store Owner</h4>
                                                    <div class="stars">
                                                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                            class="bi bi-star-fill"></i><i
                                                            class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <p>
                                                <i class="bi bi-quote quote-icon-left"></i>
                                                <span>Di UTM, saya bisa mengembangkan kreativitas saya sepenuhnya.
                                                    Kurikulumnya sangat relevan dengan industri kreatif saat ini. Saya
                                                    juga mendapat banyak teman baru yang memiliki minat yang sama.
                                                    Pokoknya, kuliah di sini seru banget!</span>
                                                <i class="bi bi-quote quote-icon-right"></i>
                                            </p>
                                        </div>
                                    </div><!-- End testimonial item -->

                                    <div class="swiper-slide">
                                        <div class="testimonial-item">
                                            <div class="d-flex">
                                                <img src="assets/img/testimonials/testimonials-4.jpg"
                                                    class="testimonial-img flex-shrink-0" alt="">
                                                <div>
                                                    <h3>Budi Setiawan</h3>
                                                    <h4>Freelancer</h4>
                                                    <div class="stars">
                                                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                            class="bi bi-star-fill"></i><i
                                                            class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <p>
                                                <i class="bi bi-quote quote-icon-left"></i>
                                                <span>Universitas Teknologi Mataram memberikan saya banyak kesempatan
                                                    untuk berkembang, baik secara akademik maupun keterampilan. Program
                                                    magang dan seminar yang diselenggarakan membantu saya memahami dunia
                                                    kerja sesungguhnya. Saya merasa lebih siap untuk menghadapi
                                                    tantangan di dunia profesional setelah lulus nanti.</span>
                                                <i class="bi bi-quote quote-icon-right"></i>
                                            </p>
                                        </div>
                                    </div><!-- End testimonial item -->

                                    <div class="swiper-slide">
                                        <div class="testimonial-item">
                                            <div class="d-flex">
                                                <img src="assets/img/testimonials/testimonials-5.jpg"
                                                    class="testimonial-img flex-shrink-0" alt="">
                                                <div>
                                                    <h3>Joni Saputra</h3>
                                                    <h4>Entrepreneur</h4>
                                                    <div class="stars">
                                                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                            class="bi bi-star-fill"></i><i
                                                            class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <p>
                                                <i class="bi bi-quote quote-icon-left"></i>
                                                <span>Belajar di Universitas Teknologi Mataram adalah pengalaman yang
                                                    luar biasa! Dosen-dosennya sangat kompeten dan ramah, selalu siap
                                                    membantu kami memahami materi dengan lebih baik. Selain itu,
                                                    fasilitas yang ada juga sangat mendukung, mulai dari laboratorium
                                                    hingga perpustakaannya yang lengkap. Saya bangga menjadi bagian dari
                                                    UTM!</span>
                                                <i class="bi bi-quote quote-icon-right"></i>
                                            </p>
                                        </div>
                                    </div><!-- End testimonial item -->

                                </div>
                                <div class="swiper-pagination"></div>
                            </div>

                        </div>

                    </div>

                </div>

            </section><!-- /Testimonials Section -->

            <!-- Recent Posts Section -->
            <section id="recent-posts" class="recent-posts section">

                <!-- Section Title -->
                <div class="container section-title" data-aos="fade-up">
                    <h2>Kegiatan Dosen</h2>
                </div><!-- End Section Title -->

                <div class="container">

                    <div class="row gy-4">

                        <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                            <article>

                                <div class="post-img">
                                    <img src="assets/img/blog/blog-1.jpg" alt="" class="img-fluid">
                                </div>

                                <p class="post-category">Politics</p>

                                <h2 class="title">
                                    <a href="blog-details.php">Dolorum optio tempore voluptas dignissimos</a>
                                </h2>

                                <div class="d-flex align-items-center">
                                    <img src="assets/img/blog/blog-author.jpg" alt=""
                                        class="img-fluid post-author-img flex-shrink-0">
                                    <div class="post-meta">
                                        <p class="post-author">Maria Doe</p>
                                        <p class="post-date">
                                            <time datetime="2022-01-01">Jan 1, 2022</time>
                                        </p>
                                    </div>
                                </div>

                            </article>
                        </div><!-- End post list item -->

                        <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                            <article>

                                <div class="post-img">
                                    <img src="assets/img/blog/blog-2.jpg" alt="" class="img-fluid">
                                </div>

                                <p class="post-category">Sports</p>

                                <h2 class="title">
                                    <a href="blog-details.php">Nisi magni odit consequatur autem nulla dolorem</a>
                                </h2>

                                <div class="d-flex align-items-center">
                                    <img src="assets/img/blog/blog-author-2.jpg" alt=""
                                        class="img-fluid post-author-img flex-shrink-0">
                                    <div class="post-meta">
                                        <p class="post-author">Allisa Mayer</p>
                                        <p class="post-date">
                                            <time datetime="2022-01-01">Jun 5, 2022</time>
                                        </p>
                                    </div>
                                </div>

                            </article>
                        </div><!-- End post list item -->

                        <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                            <article>

                                <div class="post-img">
                                    <img src="assets/img/blog/blog-3.jpg" alt="" class="img-fluid">
                                </div>

                                <p class="post-category">Entertainment</p>

                                <h2 class="title">
                                    <a href="blog-details.php">Possimus soluta ut id suscipit ea ut in quo quia et
                                        soluta</a>
                                </h2>

                                <div class="d-flex align-items-center">
                                    <img src="assets/img/blog/blog-author-3.jpg" alt=""
                                        class="img-fluid post-author-img flex-shrink-0">
                                    <div class="post-meta">
                                        <p class="post-author">Mark Dower</p>
                                        <p class="post-date">
                                            <time datetime="2022-01-01">Jun 22, 2022</time>
                                        </p>
                                    </div>
                                </div>

                            </article>
                        </div><!-- End post list item -->

                    </div><!-- End recent posts list -->

                </div>

            </section><!-- /Recent Posts Section -->

            <!-- Contact Section -->
            <section id="contact" class="contact section">

                <!-- Section Title -->
                <div class="container section-title" data-aos="fade-up">
                    <h2>Contact</h2>
                    <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
                </div><!-- End Section Title -->

                <div class="container" data-aos="fade-up" data-aos-delay="100">

                    <div class="row gy-4">

                        <div class="col-lg-6">

                            <div class="row gy-4">
                                <div class="col-md-6">
                                    <div class="info-item" data-aos="fade" data-aos-delay="200">
                                        <i class="bi bi-geo-alt"></i>
                                        <h3>Address</h3>
                                        <p>A108 Adam Street</p>
                                        <p>New York, NY 535022</p>
                                    </div>
                                </div><!-- End Info Item -->

                                <div class="col-md-6">
                                    <div class="info-item" data-aos="fade" data-aos-delay="300">
                                        <i class="bi bi-telephone"></i>
                                        <h3>Call Us</h3>
                                        <p>+1 5589 55488 55</p>
                                        <p>+1 6678 254445 41</p>
                                    </div>
                                </div><!-- End Info Item -->

                                <div class="col-md-6">
                                    <div class="info-item" data-aos="fade" data-aos-delay="400">
                                        <i class="bi bi-envelope"></i>
                                        <h3>Email Us</h3>
                                        <p>info@example.com</p>
                                        <p>contact@example.com</p>
                                    </div>
                                </div><!-- End Info Item -->

                                <div class="col-md-6">
                                    <div class="info-item" data-aos="fade" data-aos-delay="500">
                                        <i class="bi bi-clock"></i>
                                        <h3>Open Hours</h3>
                                        <p>Monday - Friday</p>
                                        <p>9:00AM - 05:00PM</p>
                                    </div>
                                </div><!-- End Info Item -->

                            </div>

                        </div>

                        <div class="col-lg-6">
                            <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up"
                                data-aos-delay="200">
                                <div class="row gy-4">

                                    <div class="col-md-6">
                                        <input type="text" name="name" class="form-control" placeholder="Your Name"
                                            required="">
                                    </div>

                                    <div class="col-md-6 ">
                                        <input type="email" class="form-control" name="email" placeholder="Your Email"
                                            required="">
                                    </div>

                                    <div class="col-12">
                                        <input type="text" class="form-control" name="subject" placeholder="Subject"
                                            required="">
                                    </div>

                                    <div class="col-12">
                                        <textarea class="form-control" name="message" rows="6" placeholder="Message"
                                            required=""></textarea>
                                    </div>

                                    <div class="col-12 text-center">
                                        <div class="loading">Loading</div>
                                        <div class="error-message"></div>
                                        <div class="sent-message">Your message has been sent. Thank you!</div>

                                        <button type="submit">Send Message</button>
                                    </div>

                                </div>
                            </form>
                        </div><!-- End Contact Form -->

                    </div>

                </div>

            </section><!-- /Contact Section -->

        </main>

        <footer id="footer" class="footer position-relative light-background">

            <div class="container footer-top">
                <div class="row gy-4">
                    <div class="col-lg-5 col-md-12 footer-about">
                        <a href="index.php" class="logo d-flex align-items-center">
                            <span class="sitename">WebsiteUTM</span>
                        </a>
                        <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita
                            valies darta donna mare fermentum iaculis eu non diam phasellus.</p>
                        <div class="social-links d-flex mt-4">
                            <a href=""><i class="bi bi-twitter-x"></i></a>
                            <a href=""><i class="bi bi-facebook"></i></a>
                            <a href=""><i class="bi bi-instagram"></i></a>
                            <a href=""><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-2 col-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">About us</a></li>
                            <li><a href="#">Services</a></li>
                            <li><a href="#">Terms of service</a></li>
                            <li><a href="#">Privacy policy</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-2 col-6 footer-links">
                        <h4>Our Services</h4>
                        <ul>
                            <li><a href="#">Web Design</a></li>
                            <li><a href="#">Web Development</a></li>
                            <li><a href="#">Product Management</a></li>
                            <li><a href="#">Marketing</a></li>
                            <li><a href="#">Graphic Design</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                        <h4>Contact Us</h4>
                        <p>A108 Adam Street</p>
                        <p>New York, NY 535022</p>
                        <p>United States</p>
                        <p class="mt-4"><strong>Phone:</strong> <span>+1 5589 55488 55</span></p>
                        <p><strong>Email:</strong> <span>info@example.com</span></p>
                    </div>

                </div>
            </div>

            <div class="container copyright text-center mt-4">
                <p>© <span>Copyright</span> <strong class="sitename">WebsiteUTM</strong> <span>All Rights
                        Reserved</span>
                </p>
                <div class="credits">
                    <!-- All the links in the footer should remain intact. -->
                    <!-- You can delete the links only if you've purchased the pro version. -->
                    <!-- Licensing information: https://bootstrapmade.com/license/ -->
                    <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
                    Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                </div>
            </div>

        </footer>

        <!-- Scroll Top -->
        <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
                class="bi bi-arrow-up-short"></i></a>

        <!-- Preloader -->
        <div id="preloader"></div>

        <!-- Vendor JS Files -->
        <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/vendor/php-email-form/validate.js"></script>
        <script src="assets/vendor/aos/aos.js"></script>
        <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
        <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
        <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
        <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
        <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

        <!-- Main JS File -->
        <script src="assets/js/main.js"></script>

    </body>

</php>