<?php  
    include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="WEBSITE RESMI RUMAH SAKIT BHAYANGKARA TINGKAT III KENDARI">
    <meta name="author" content="">
    <meta name="keywords" content="rumah, sakit, rumah sakit, kendari, bhayangkara, rumah sakit bhayangkara, rumkitbhayangkarakendari, rumkit, bhayangkara kendari,rumkit bhayangkara kendari, info rumah sakit, info, dokter, jadwal dokter rumah sakit bhayangkara kendari, tentang rumah sakit,tentang rumah sakit bhayangkara,rumah sakit bhayangkara,sejarah rumah sakit bhayangkara kendari,visi misi rumah sakit bhayangkara kendari, rumah sakit bhayangkara kendari">
    <title>RS.BHAYANGKARA KENDARI</title>
    <link href="img/pic/logor.png" rel="shortcut icon">
    <!-- <link rel="icon" type="image/png" href="http://localhost//rum.com/img/pic/logor.png"> -->

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Theme CSS -->
    <link href="css/agency.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-table.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top"> <H4>RS.BHAYANGKARA KENDARI</H4> <!--<img src="img/pic/logo.png" width="200" height="50" ></a>-->
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#services">Beranda</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#portfolio">Tentang</a>
                    </li>
					 <li>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></i> Pelayanan <span class="caret"></span></a>
                    <ul class="dropdown-menu" style="a:hover {background-color: #fed136;}">
					<li><a class="page-scroll" href="#igd"><font color="black"><b>IGD</b></a></li></font>
                    <li><a class="page-scroll" href="#ralan"><font color="black"><b>Rawat Jalan</b></a></li></font>
					<li><a class="page-scroll" href="#ranap"><font color="black"><b>Rawat Inap</b></a></li></font>
					<li><a class="page-scroll" href="#penunjang"><font color="black"><b>Fasilitas Penunjang</b></a></li></font>
					
                    </ul>
                    <li>
                        <a class="page-scroll" href="#about">Jadwal Dokter</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#informasikamar">Informasi Kamar Inap</a>
                    </li>
					  <li>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></i> Informasi Pasien <span class="caret"></span></a>
                    <ul class="dropdown-menu" style="a:hover {background-color: #fed136;}">
					<li><a class="page-scroll" href="#hpk"><font color="black"><b>Hak dan Kewajiban Pasien</b></a></li></font>
                    <li><a class="page-scroll" href="#alurpendaftaran"><font color="black"><b>Alur Pendaftaran</b></a></li></font>
					<li><a class="page-scroll" href="#komplain"><font color="black"><b>Prosedur Komplain</b></a></li></font>
                    </ul> 
					<li>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></i> Galeri <span class="caret"></span></a>
                    <ul class="dropdown-menu" style="a:hover {background-color: #fed136;}">
					<li><a class="page-scroll" href="#foto"><font color="black"><b>Galeri Foto</b></a></li></font>
					<li><a class="page-scroll" href="#video"><font color="black"><b>Galeri Video</b></a></li></font>
                    </ul> 
                  
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header style="background-image:url(img/bhy.JPG);">
        <div class="container">
            <div class="intro-text">
                <div class="intro-lead-in">"Humanis dan Prima dalam Pelayanan"</div>
                <a href="#contact" class="page-scroll btn btn-xl" >Hubungi Kami</a>
                <a href="berita/" class="btn btn-info btn-xl" style="background-color:#5bc0de; border-color:#5bc0de;">Berita</a>
            </div>
        </div>
    </header>

    <!-- Services Section -->
    <?php include "konten/beranda.php"; ?>

	 <?php include "konten/igd.php"; ?>
     <?php include "konten/ralan.php"; ?>
     <?php include "konten/ranap.php"; ?>
	 <?php include "konten/penunjang.php"; ?>
	
    <!-- Portfolio Grid Section -->
    <?php include "konten/tentang.php"; ?>

    <!-- About Section -->
    <?php include "konten/jadwal_dokter.php"; ?>

    <!-- Team Section -->
    <?php include "konten/info_kamar.php"; ?>
	
	 <?php include "konten/hpk.php"; ?>
     <?php include "konten/komplain.php"; ?>
     <?php include "konten/alurpendaftaran.php"; ?>

	 <?php include "konten/foto.php"; ?>
     <?php include "konten/video.php"; ?>

    <!-- Contact Section -->
    <?php include "konten/kontak.php"; ?>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <span class="copyright">Copyright &copy; RUMKIT BHAYANGKARA KENDARI 2016</span>
                </div>
               <!-- <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        <li><a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div> 
                <div class="col-md-4">
                    <ul class="list-inline quicklinks">
                        <li><a href="#">Privacy Policy</a>
                        </li>
                        <li><a href="#">Terms of Use</a>
                        </li>
                    </ul>
                </div> -->
            </div>
        </div>
    </footer>

    <!-- Portfolio Modals -->
    <!-- Use the modals below to showcase details about your portfolio projects! -->

    <?php include "konten/modal.php"; ?>


    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/agency.min.js"></script>
    <script type="text/javascript" src="js/bootstrap-table.js"></script>

</body>

</html>
