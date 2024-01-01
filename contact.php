<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sekolah Islam Bunaya</title>
    <link rel="icon" href="assets/Picture6-1.ico" type="image/x-icon">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.0/mdb.min.css" rel="stylesheet" />

    <!-- Google Font -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="css/contact.css">

</head>
<style>
    body {
        font-family: 'Montserrat', sans-serif;
        background-color: #43755A;
    }
    
    .navbar-brand {
        position: absolute;
        left: 50%;
        transform: translateX(-50%);
        margin: 0;
    }
    
    @media (max-width: 576px) {
        .navbar-brand {
            position: static;
            transform: none;
        }
    }
</style>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary p-5 bg-white">
        <div class="container">
            <!-- Navbar brand with logo -->
            <a class="navbar-brand" href="#">
                <img src="assets/logo.png" alt="Logo" height="40" class="d-inline-block align-top">
            </a>

            <!-- Collapse button -->
            <button class="navbar-toggler " type="button" data-toggle="collapse" data-mdb-toggle="collapse" data-mdb-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa-solid fa-bars" style="color: #000000;"></i>       
      </button>

            <!-- Collapsible content -->
            <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
                <!-- Left side -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link text-black fw-bold me-4" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-black me-4" href="about.html">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-black" href="#">Programs</a>
                    </li>
                </ul>

                <!-- Right side -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link text-black mb-2" href="#footer">Contact</a>
                    </li>

                </ul>
            </div>
            <!-- Collapsible content -->
        </div>
    </nav>
    <div id="intro-example" class="p-5 text-center bg-white">
        <div class="container">
            <div class="row dcce d-flex align-items-center  h-100">
                <div class="header-text col text-start">
                    <h1 class="header-title text-nowrap ">Solusi Untuk <br> Mencetak Generasi <br> Soleh Cendikia</h1>
                    <a href="" class="btn btn-warning btn-rounded more-btn">Selengkapnya</a>
                </div>
                <div class="header-image col text-end text-nowrap"> <img class="image-islam" src="assets/islamkid.png" height="600" alt=""> </div>
            </div>

        </div>
    </div>
    <div class="section-content pt-5">
        <div class="container pt-5">
            <div class="row">
                <div class="col-md-6">
                    <div class="message-rect p-5">
                        <div class="col-md-8">
                            <h1 class="message-title">Kirim kami sebuah pesan.</h1>
                        </div>

                        <input class="mb-3" type="text" placeholder="Nama"><br>
                        <input class="mb-3" type="text" name="" id="" placeholder="Nomor Telfon"><br>
                        <input class="mb-3" type="text" name="email" placeholder="E-Mail"><br>
                        <input class="mb-3" type="text" name="help" placeholder="Apa yang dapat kami bantu">

                        <button type="submit" name="submit" class="btn btn-warning kirim rounded-pill">Kirim Pesan</button>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="d-flex justify-content-center">
                        <div class="seputar-item">
                            <h1 class="seputar-title mb-7">Seputar Informasi</h1>
                            <div class="d-flex align-items-center mb-4"> <i class="fab fa-whatsapp fa-2x text-white icon-wa"></i> <span class="text-white seputar-no"> 0812-8225-1336</span>
                            </div>
                            <div class="d-flex align-items-start"> <i class="fas fa-location-dot fa-2x text-white icon-wa"></i> <span class="text-white seputar-no"> Jl. Letjen Ibrahim Adjie No.167A, RT.01/RW.04, Loji, Kec. Bogor Bar., Kota Bogor, Jawa Barat 16117</span>
                            </div>
                        </div>
                  

                    </div>
                          <div class="d-flex sosmed-icon">
                        <i class="fab fa-instagram fa-2x text-white me-2"></i>
                        <i class="fab fa-instagram fa-2x text-white me-2"></i>
                        <i class="fab fa-youtube fa-2x text-white me-2"></i>
                        <i class="fab fa-youtube fa-2x text-white"></i>
                        </div>


                </div>
            </div>

        </div>
    </div>
    <!-- About -->

    <footer class="bg-light text-center text-lg-start pt-5" id="footer">
        <!-- Grid container -->
        <div class="container p-4">
            <!--Grid row-->
            <div class="row">
                <!--Grid column-->
                <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                    <img class="mb-5" src="assets/logo.png" alt="">

                    <p class="footer-text">
                        Sekolah impian (SI) adalah intitusi yang tumbuh dari cita-cita luhur para pendiri yang ingin meraih Ridlo Allah Taala dengan cara berdakwah melalui jalur pendidikan. Metode yang digunakan adalah mendidik para santri/siswa/i menjadi seorang penghafal Al-Quran
                        dan sekaligus mendidik mereka menjadi seorang ahli dalam bidang teknologi informasi (IT).
                    </p>
                    <p class="copyright">© Copyright Yayasan Dharma Bakti Bunaya | Designed by LKYZ.Studio & Powered by Raffi Nauval</p>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-6 col-md-12 mb-4 mb-md-0 contact">
                    <h5 class="contact-title mb-4">Kontak kami</h5>
                    <div class="d-flex justify-content-start">
                        <div class="row">
                            <div class="col-sm-4 me-2 text-start"><i class="fab fa-whatsapp"></i><span class="social">  0812-8225-1336</span></div>
                            <div class="col-sm-4 me-2 text-start"><i class="fab fa-instagram"></i> <span class="social">SDIT BUNAYA</span></div>
                            <div class="col-sm-4 me-2 text-start"><i class="fab fa-instagram"></i> <span class="social">TKIT BUNAYA</span></div>
                            <div class="col-sm-4 me-2 text-start"><i class="fab fa-youtube"></i> <span class="social">SIT BUNAYA</span></div>
                        </div>
                    </div>



                </div>
                <!--Grid column-->
            </div>
            <!--Grid row-->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->

        <!-- Copyright -->
    </footer>


</body>
<!-- MDB -->


</html>