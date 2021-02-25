<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>SIPRESMA UNDIKSHA</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- DataTables -->
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/dist/css/adminlte.min.css">
    <!-- Favicons -->
    <link href="<?= base_url(); ?>/assets2/img/undiksha.png" rel="icon">
    <link href="<?= base_url(); ?>/assets2/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i,900" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?= base_url(); ?>/assets2/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>/assets2/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>/assets2/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>/assets2/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>/assets2/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="<?= base_url(); ?>/assets2/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>/assets2/vendor/aos/aos.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?= base_url(); ?>/assets2/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Mamba - v3.0.3
  * Template URL: https://bootstrapmade.com/mamba-one-page-bootstrap-template-free/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Top Bar ======= -->
    <section id="topbar" class="d-none d-lg-block">
        <div class="container d-flex">
            <div class="contact-info me-auto">
                <i class="icofont-envelope"></i><a href="mailto:contact@example.com">humas@undiksha.ac.id</a>
                <i class="icofont-phone"></i> +0362 22570
            </div>
            <div class="social-links float-right">
                <a href="https://twitter.com/undiksha" class="twitter"><i class="icofont-twitter"></i></a>
                <a href="https://www.facebook.com/undiksha.bali/" class="facebook"><i class="icofont-facebook"></i></a>
                <a href="https://www.instagram.com/undiksha.bali/" class="instagram"><i class="icofont-instagram"></i></a>
                <a href="https://www.youtube.com/universitaspendidikanganesha" class="youtube"><i class="icofont-youtube"></i></a>
            </div>
        </div>
    </section>

    <!-- ======= Header ======= -->
    <header id="header">
        <div class="container d-flex">
            <div class="logo me-auto">
                <h1 class="text-light"><img src="<?= base_url(); ?>assets2/img/undiksha.png" alt="JSOFT">
                    <a><span>SIPRESMA</span></a>
                </h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
            </div>

            <nav class="nav-menu float-right d-none d-lg-block">
                <ul>
                    <h1>
                        <li class=""><a href="<?= site_url('Auth') ?>">LOGIN</a></li>
                    </h1>
                </ul>
            </nav><!-- .nav-menu -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div class="hero-container">
            <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">
                <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>
                <div class="carousel-inner" role="listbox">
                    <!-- Slide 1 -->
                    <div class="carousel-item active" style="background-image: url('<?= base_url(); ?>/assets2/img/FTK.jpg');">
                        <div class="carousel-container">
                            <div class="carousel-content container">
                                <h2 class="animate__animated animate__fadeInDown">Selamat Datang</h2>
                                <h2 class="animate__animated animate__fadeInDown">SIPRESMA <span> Universitas Pendidikan Ganesha</span></h2>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 2 -->
                    <div class="carousel-item" style="background-image: url('<?= base_url(); ?>/assets2/img/gedung undiksha.jpg');">
                        <div class="carousel-container">
                        </div>
                    </div>

                    <!-- Slide 3 -->
                    <div class="carousel-item" style="background-image: url('<?= base_url(); ?>/assets2/img/slide/slide-3.jpg');">
                        <div class="carousel-container">
                            <div class="carousel-content container">
                                <h2 class="animate__animated animate__fadeInDown">Sequi ea ut et est quaerat</h2>
                                <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
                                <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
                            </div>
                        </div>
                    </div>

                </div>

                <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon icofont-rounded-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon icofont-rounded-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>

            </div>
        </div>
    </section><!-- End Hero -->

    <main id="main">
        <!-- ======= About Us Section ======= -->
        <section id="about" class="about">
            <div class="col-lg-12">
                <div class="section-title  text-center">
                    <h2>Data Prestasi Mahasiswa Undiksha</h2>
                </div>
            </div>
            <div class="container">
                <div class="row no-gutters">
                    <table id="example2" class="table table-bordered table-striped">
                        <thead>
                            <tr class="text-center">
                                <th>No</th>
                                <th>Nama Mahasiswa</th>
                                <th>Fakultas</th>
                                <th>Jenis Prestasi</th>
                                <th>Tingkat Prestasi</th>
                                <th>Jenis Juara</th>
                                <th>Nama Kegiatan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($prestasi as $val) { ?>
                                <tr>
                                    <td class="text-center"><?php echo $no++ ?></td>
                                    <td><?= $val['name']; ?></td>
                                    <td><?= $val['nama_fakultas']; ?></td>
                                    <td><?= $val['nama_jenis']; ?></td>
                                    <td><?= $val['nama_tingkat']; ?></td>
                                    <td><?= $val['nama_jenis_juara']; ?></td>
                                    <td><?= $val['nama_kegiatan']; ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>

            </div>
        </section><!-- End About Us Section -->
    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6 footer-info">
                        <h3>SIPRESMA</h3>
                        <p>
                            Jalan Udayana No.11 <br>
                            Singaraja - Bali <br><br>
                            <strong>Phone:</strong> (0362) 22570, Fax (0362) 25735 <br>
                            <strong>Email:</strong> humas@undiksha.ac.id<br>
                        </p>
                        <div class="social-links mt-3">
                            <a href="https://twitter.com/undiksha" class="twitter"><i class="bx bxl-twitter"></i></a>
                            <a href="https://www.facebook.com/undiksha.bali/" class="facebook"><i class="bx bxl-facebook"></i></a>
                            <a href="https://www.instagram.com/undiksha.bali/" class="instagram"><i class="bx bxl-instagram"></i></a>
                            <a href="https://www.youtube.com/universitaspendidikanganesha" class="youtube"><i class="icofont-youtube"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>Prestasi Mahasiswa</span></strong> <?= date('Y'); ?> .
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/mamba-one-page-bootstrap-template-free/ -->
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

    <!-- Vendor JS Files -->
    <script src="<?= base_url(); ?>/assets2/vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url(); ?>/assets2/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url(); ?>/assets2/vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="<?= base_url(); ?>/assets2/vendor/php-email-form/validate.js"></script>
    <script src="<?= base_url(); ?>/assets2/vendor/jquery-sticky/jquery.sticky.js"></script>
    <script src="<?= base_url(); ?>/assets2/vendor/venobox/venobox.min.js"></script>
    <script src="<?= base_url(); ?>/assets2/vendor/waypoints/jquery.waypoints.min.js"></script>
    <script src="<?= base_url(); ?>/assets2/vendor/counterup/counterup.min.js"></script>
    <script src="<?= base_url(); ?>/assets2/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="<?= base_url(); ?>/assets2/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="<?= base_url(); ?>/assets2/vendor/aos/aos.js"></script>

    <!-- Template Main JS File -->
    <script src="<?= base_url(); ?>/assets2/js/main.js"></script>

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.css">

    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.js"></script>

    <script>
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": true,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": true,
            "responsive": true,
        });
    </script>
</body>

</html>