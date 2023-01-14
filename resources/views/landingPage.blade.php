<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <meta content="" name="description">
    <meta content="" name="keywords">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">
    <link href="{{ asset('') }}assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="{{ asset('') }}assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('') }}assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ asset('') }}assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="{{ asset('') }}assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="{{ asset('') }}assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="{{ asset('') }}assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="{{ asset('') }}assets/css/style.css" rel="stylesheet">
</head>

<body>
    <header id="header" class="fixed-top ">
        <div class="container d-flex align-items-center">

            <h1 class="logo me-auto"><a href="/">Online Course</a></h1>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="#services">Services</a></li>
                    <li><a class="nav-link scrollto" href="#course">Course</a></li>
                    <li><a class="nav-link scrollto" href="#team">Team</a></li>
                    <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                    <li><a class="getstarted scrollto" href="#about">Login</a></li>
                    <li><a class="getstarted scrollto" href="#about">Register</a></li>

                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>

        </div>
    </header>
    <section id="hero" class="d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1"
                    data-aos="fade-up" data-aos-delay="200">
                    <h1>Fullstack Web & Mobile Developer</h1>
                    <h2>Belajar menjadi Fullstack Web & Mobile Developer dalam 13 Minggu dengan mentor profesional,
                        kurikulum ter-update, kesempatan kerja di 270+ perusahaan.</h2>
                    <div class="d-flex justify-content-center justify-content-lg-start">
                        <a href="" class="btn-get-started scrollto">Hubungi Kami</a>
                        <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox btn-watch-video"><i
                                class="bi bi-play-circle"></i><span>Watch Video</span></a>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
                    <img src="assets/img/hero-img.png" class="img-fluid animated" alt="">
                </div>
            </div>
        </div>

    </section>
    <main id="main">
        <section id="services" class="services section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Services</h2>
                    <p>Keunggulan Program Fullstack Web & Mobile Developer Pijar Camp</p>
                </div>

                <div class="row">
                    <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bxl-dribbble"></i></div>
                            <h4><a href="">Kurikulum terupdate</a></h4>
                            <p>Kamu akan belajar coding dengan kurikulum industri secara intensif yang diajarkan
                                langsung oleh mentor berkompeten di bidangnya.</p>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in"
                        data-aos-delay="200">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-file"></i></div>
                            <h4><a href="">Self & Growth Mindset</a></h4>
                            <p>Kamu akan didukung secara mindset dan motivasi untuk lebih mengenal diri dan mudah
                                beradaptasi di lingkungan kerja.</p>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in"
                        data-aos-delay="300">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-tachometer"></i></div>
                            <h4><a href="">Pembekalan Karir</a></h4>
                            <p>Kamu akan dilatih untuk persiapan karir dengan matang, dari membuat CV hingga simulasi
                                interview pekerjaan.</p>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in"
                        data-aos-delay="400">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-layer"></i></div>
                            <h4><a href="">Disalurkan Kerja</a></h4>
                            <p>Tidak hanya belajar, kamu juga berkesempatan untuk membangun karir dengan 270+ perusahaan
                                rekanan kami.</p>
                        </div>
                    </div>

                </div>

            </div>
        </section>
        <section id="course" class="course">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Cource</h2>
                    <p>Keunggulan Program Fullstack Web & Mobile Developer Pijar Camp</p>
                </div>

                <div class="row course-container text-center" data-aos="fade-up" data-aos-delay="200">
                    <div class="col-lg-6 mt-2 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-info">
                            <h4>Laravel (judul)</h4>
                            <p>App (description vidio)</p>
                            <img src="{{ asset('gambar/laravel.png') }}" alt="laravel source" class="img-fluid w-75">
                        </div>
                    </div>
                    <div class="col-lg-6 mt-2 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-info">
                            <h4>Laravel (judul)</h4>
                            <p>App (description vidio)</p>
                            <img src="{{ asset('gambar/laravel.png') }}" alt="laravel source" class="img-fluid w-75">
                        </div>
                    </div>
                    <div class="col-lg-6 mt-2 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-info">
                            <h4>Laravel (judul)</h4>
                            <p>App (description vidio)</p>
                            <img src="{{ asset('gambar/laravel.png') }}" alt="laravel source"
                                class="img-fluid w-75">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="team" class="team section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Team</h2>
                    <p>Kelas intensif menjadi Fullstack Website & Mobile Developer selama 3 bulan yang akan mempelajari
                        JavaScript, Express.js, React.js, & React Native serta mempelajari pengembangan karakter talent
                        agar siap bekerja. Selain itu talent akan disalurkan ke perusahaan rekanan Pijar Camp setelah
                        menyelesaikan kelasnya.
                        Menguasai JavaScript, Express.js, React.js, dan React Native memiliki 3 portfolio project dengan
                        real-world scenario, serta pengembangan karakter</p>
                </div>

                <div class="row">

                    <div class="col-lg-6">
                        <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="100">
                            <div class="pic"><img src="{{ asset('gambar/fata.jpg') }}" class="img-fluid"
                                    alt=""></div>
                            <div class="member-info">
                                <h4>Akramul Fata</h4>
                                <span>software engenering</span>
                                <p>beliau expert di web dan sedang mengembangkan online source sendiri </p>
                                <div class="social">
                                    <a href="https://api.whatsapp.com/send/?phone=%2B6289515128855&text&app_absent=0"><i
                                            class="bi bi-whatsapp"></i></a>
                                    <a href="https://github.com/akramulfata10"><i class="bi bi-github"></i></a>
                                    <a href="https://www.instagram.com/akramullfata/"><i
                                            class="bi bi-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 mt-4 mt-lg-0">
                        <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="200">
                            <div class="pic"><img src="{{ asset('gambar/aidil.jpg') }}" class="img-fluid"
                                    alt=""></div>
                            <div class="member-info">
                                <h4>Aidil Fitrah</h4>
                                <span>Desain Graphic</span>
                                <p>Beliau expert di bagian desain grafis</p>

                                <div class="social">
                                    <a href="https://api.whatsapp.com/send/?phone=%2B6282276731536&text&app_absent=0"><i
                                            class="bi bi-whatsapp"></i></a>
                                    <a href="https://github.com/Aidilbogek7888"><i class="bi bi-github"></i></a>
                                    <a href="https://www.instagram.com/aidilfitrah.22/"><i
                                            class="bi bi-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Contact</h2>
                    <p>jika ingin menghubungkan saya silahkan hubungi saya</p>
                </div>

                <div class="row">
                    <div class="col-lg-5 d-flex align-items-stretch">
                        <div class="info">
                            <div class="address">
                                <i class="bi bi-geo-alt"></i>
                                <h4>Location:</h4>
                                <p>aceh , indonesia</p>
                            </div>

                            <div class="email">
                                <i class="bi bi-envelope"></i>
                                <h4>Email:</h4>
                                <p>akramulfata10@gmail.com</p>
                            </div>

                            <div class="phone">
                                <i class="bi bi-phone"></i>
                                <h4>Call:</h4>
                                <p>+6289515128855</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="name">Your Name</label>
                                    <input type="text" name="name" class="form-control" id="name"
                                        required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="name">Your Email</label>
                                    <input type="email" class="form-control" name="email" id="email"
                                        required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name">Subject</label>
                                <input type="text" class="form-control" name="subject" id="subject" required>
                            </div>
                            <div class="form-group">
                                <label for="name">Message</label>
                                <textarea class="form-control" name="message" rows="10" required></textarea>
                            </div>
                            <div class="my-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>
                            </div>
                            <div class="text-center"><button type="submit">Send Message</button></div>
                        </form>
                    </div>

                </div>

            </div>
        </section>
    </main>
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h3>Akramul Fata</h3>
                        <p>
                            fata<br>
                            indonesia, Aceh<br>
                            <strong>Phone:</strong> +6289515128855<br>
                            <strong>Email:</strong> akramulfata10@gmail.com<br>
                        </p>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="/">Home</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="/">About us</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="/">Services</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="/">Terms of service</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="/">Privacy policy</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Our Services</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="/">Web Design</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="/">Web Development</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="/">Product Management</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="/">Marketing</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="/">Graphic Design</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Our Social Networks</h4>
                        <p>Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies</p>
                        <div class="social-links mt-3">
                            <a href="https://api.whatsapp.com/send/?phone=%2B6289515128855&text&app_absent=0"><i
                                    class="bi bi-whatsapp"></i></a>
                            <a href="https://github.com/akramulfata10"><i class="bi bi-github"></i></a>
                            <a href="https://www.instagram.com/akramullfata/"><i class="bi bi-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container footer-bottom clearfix">
            <div class="copyright">
                &copy; Copyright <strong><span>Akramul Fata </span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                Designed by <a href="https://github.com/akramulfata10">BootstrapMade</a>
            </div>
        </div>
    </footer>
    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
    <script src="{{ asset('') }}assets/vendor/aos/aos.js"></script>
    <script src="{{ asset('') }}assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('') }}assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="{{ asset('') }}assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="{{ asset('') }}assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="{{ asset('') }}assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="{{ asset('') }}assets/vendor/php-email-form/validate.js"></script>
    <script src="{{ asset('') }}assets/js/main.js"></script>
</body>

</html>
