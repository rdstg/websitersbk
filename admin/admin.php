<?php  
	include "../koneksi.php";
	session_start();

	if (isset($_SESSION['admin_bhayangkara'])) {
		$id = base64_decode(base64_decode($_SESSION['admin_bhayangkara']));
		$a = $mysqli->query("SELECT * FROM admin WHERE id_admin = '$id' ");
		$row = $a->fetch_array();
	} else {
		die();
	}

	if (isset($_POST['logout'])) {
	   session_destroy();
	   header("location:../admin/");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Halaman Admin</title>
	<link href="img/pic/logor.png" rel="shortcut icon">

	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/font-awesome/css/font-awesome.css">
	<style type="text/css">
	  .navbar > .container > .collapse > .nav > li > a {
	  	color:#fff;
	  	font-family: Times New Roman;
	  }

	  div > .nav-pills > li > a:hover {
	  	 background-color:#42a4ff;
	  }

	  div > .nav-pills > li > a {
	  	 color:#000;
	  }

	  .btn{
	  	border-radius: 0px;
	  }

	  #nn:hover {
        background-color: #42a4ff;
	  }
	</style>
</head>
<body>
	<nav class="navbar navbar-default" style="border-radius:0px; background-color:#42a4ff;">
	  <div class="container">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar" style="background-color:#fff;"></span>
	        <span class="icon-bar" style="background-color:#fff;"></span>
	        <span class="icon-bar" style="background-color:#fff;"></span>
	      </button>
	      <a class="navbar-brand" href="#" style="color:#fff; font-weight:bold;">ADMIN RS. BHAYANGKARA</a>
	    </div>

	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      
	      <ul class="nav navbar-nav navbar-right">
	        <li><a href="admin.php"><i class="fa fa-home"></i> Home</a></li>
	        <li><a href="?hal=berita"><i class="fa fa-newspaper-o"></i> Berita</a></li>
	        <li><a href="?hal=jadwal"><i class="fa fa-calendar"></i> Jadwal Dokter</a></li>
	        <li><a href="?hal=kamar"><i class="fa fa-bookmark"></i> Data Kamar</a></li>
	        <li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user"></i> <?php echo $row['nama'] ?> <span class="caret"></span></a>
	          <ul class="dropdown-menu">
	            <li><a href="?hal=profil">Profil</a></li>
	            <li><a href="#" data-toggle="modal" data-target="#logout">Logout</a></li>
	          </ul>
	        </li>
	      </ul>
	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>

	<div class="container">
	  <?php include "konten.php"; ?>	
	</div>

	<div class="modal fade" tabindex="-1" role="dialog" id="logout" style=" margin-top:70px;">
	  <div class="modal-dialog">
	    <div class="modal-content" style="border-radius:0px;">
	     <div class="modal-body" style="padding:30px;">

	       <form method="POST">
	        <h3 align="center" style="font-family:Sans Serif; color:#000;">YAKIN AKAN KELUAR ??</h3>
	        <hr style="border-color:#000;">
	        <p align="center">
	          <button type="button" class="btn btn-default" data-dismiss="modal"><i class="glyphicon glyphicon-remove"></i></button>
	          <button type="submit" class="btn btn-info" name="logout"><i class="glyphicon glyphicon-ok"></i></button>
	        </p>
	       </form>
	     </div>
	    </div><!-- /.modal-content -->
	  </div><!-- /.modal-dialog -->
	</div>

	<script type="text/javascript" src="bootstrap/js/jquery.js"></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
	<script type="text/javascript" src="bootstrap/tinymce/tinymce.min.js"></script>

	<script type="text/javascript">
	    tinymce.init({
	      selector: "#berita",  // change this value according to your HTML
	      plugins: "advlist anchor autolink autoresize bbcode charmap code codesample colorpicker contextmenu directionality emoticons example example_dependency fullscreen hr imagetools layer legacyoutput link lists media noneditable pagebreak paste preview tabfocus table textcolor textpattern visualblocks visualchars wordcount"
	    });

	    function edit_jadwal(val) {
	   	 	$.ajax({
                type: "POST",
                url : "konten/function/edit_jadwal.php?id="+val,
                data: val,
                success: function(response){
                       $("#form_jadwal").html(response); 
                    }
            });
        }

        function edit_kamar(val) {
	   	 	$.ajax({
                type: "POST",
                url : "konten/function/edit_kamar.php?id="+val,
                data: val,
                success: function(response){
                       $("#form_edit_kamar").html(response); 
                    }
            });
        }
	</script>
</body>
</html>