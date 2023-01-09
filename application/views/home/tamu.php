<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Disipusda</title>
    <meta content="" name="description">

    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="<?php echo base_url('assets/home') ?>/img/favicon.png" rel="icon">
    <link href="<?php echo base_url('assets/home') ?>/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?php echo base_url('assets/home') ?>/vendor/aos/aos.css" rel="stylesheet">
    <link href="<?php echo base_url('assets/home') ?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url('assets/home') ?>/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?php echo base_url('assets/home') ?>/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="<?php echo base_url('assets/home') ?>/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="<?php echo base_url('assets/home') ?>/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?php echo base_url('assets/home') ?>/css/style.css" rel="stylesheet">
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

            <a href="<?php echo base_url('home') ?>" class="logo d-flex align-items-center">
                <img src="<?php echo base_url('assets/home') ?>/img/logo.png" alt="">
                <span>Disipusda</span>
            </a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="<?php echo base_url('home') ?>">Home</a></li>
                    <li><a class="getstarted scrollto" href="<?php echo base_url('landing') ?>">Login</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero d-flex align-items-center">

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <center>
                        <h1 data-aos="fade-up">Dinas Perpustakaan Daerah Kabupaten Purwakarta</h1>
                        <h2 data-aos="fade-up" data-aos-delay="400">Bersama Anda Layanan Kami Istimewa</h2>
                    </center>
                    <br>
                    <div class="card shadow" data-aos="fade-up">
                        <div class="card-body">
                            <form method="post" action="<?php echo base_url('home/tamu'); ?>" enctype="multipart/form-data">
                                <div class="form-group mb-3">
                                    <label for="nama">Nama Lengkap</label>
                                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Enter Nama" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="jenis_identitas">Jenis Identitas</label>
                                    <select class="form-select form-select mb-3" id="jenis_identitas" name="jenis_identitas" required>
                                        <option disabled selected>Pilih Jenis Identitas</option>
                                        <option value="E-KTP">E-KTP</option>
                                        <option value="SIM">SIM</option>
                                        <option value="KARTU PELAJAR">KARTU PELAJAR</option>
                                    </select>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="nomor_identitas">Nomor Identitas <font color="red">*(E-KTP/SIM/NISN/NIM)</font></label>
                                    <input type="number" class="form-control" id="nomor_identitas" name="nomor_identitas" placeholder="Enter Nomor Identitas" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label for=keperluan">Keperluan</label>
                                    <select class="form-select form-select mb-3" id="keperluan" name="keperluan" required>
                                        <option disabled selected>Pilih Jenis Identitas</option>
                                        <option value="Magang">Magang</option>
                                        <option value="Meminjam buku">Meminjam buku</option>
                                        <option value="Mengembalikan buku">Mengembalikan buku</option>
                                        <option value="Membaca">Membaca</option>
                                        <option value="Kerja kelompok">Kerja kelompok</option>
                                        <option value="Mengerjakan pr">Mengerjakan pr</option>
                                        <option value="Berkunjung">Berkunjung</option>
                                    </select>
                                </div>
                                <br>
                                <div class="d-grid gap-2">
                                    <button class="btn btn-primary btn-lg" type="submit">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">

        <div class="footer-top">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-5 col-md-12 footer-info">
                        <a href="index.html" class="logo d-flex align-items-center">
                            <img src="<?php echo base_url('assets/home') ?>/img/logo.png" alt="">
                            <span>Disipusda</span>
                        </a>
                        <p>Bersama Anda Layanan Kami Istimewa.</p>
                        <div class="social-links mt-3">
                            <a href="" class="facebook"><i class="bi bi-facebook"></i></a>
                            <a href="" class="instagram"><i class="bi bi-instagram"></i></a>
                            <a href="" class="youtube"><i class="bi bi-youtube"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-2 col-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Home</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                        <h4>Contact Us</h4>
                        <p>
                            Jalan Mr. Dr. Kusumahatmaja No. 8<br>
                            <strong>Phone:</strong> (0264) 200640<br>
                            <strong>Email:</strong> -<br>
                        </p>

                    </div>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>Doni Kurniawan</span></strong>. All Rights Reserved
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="<?php echo base_url('assets/home') ?>/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="<?php echo base_url('assets/home') ?>/vendor/aos/aos.js"></script>
    <script src="<?php echo base_url('assets/home') ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url('assets/home') ?>/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="<?php echo base_url('assets/home') ?>/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="<?php echo base_url('assets/home') ?>/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="<?php echo base_url('assets/home') ?>/vendor/php-email-form/validate.js"></script>

    <script src="<?php echo base_url('assets') ?>/alert.js"></script>
    <?php echo "<script>" . $this->session->flashdata('message') . "</script>" ?>

    <!-- Template Main JS File -->
    <script src="<?php echo base_url('assets/home') ?>/js/main.js"></script>

</body>

</html>