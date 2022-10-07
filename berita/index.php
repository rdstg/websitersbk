<?php include "../koneksi.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Halaman Berita</title>
	<link rel="stylesheet" type="text/css" href="../admin/bootstrap/css/bootstrap.css">
  <link href="../img/pic/logor.png" rel="shortcut icon">
</head>
<body>

    <div class="container">
    <?php  
       if (isset($_GET['x'])) {
           $id = $_GET['x'];

           $s = $mysqli->query(" SELECT * FROM (berita) WHERE md5(id_berita) = '$id' ");
           $r = $s->fetch_array();
    ?>
    <h3 class="page-header" align="center"><?php echo $r['judul'] ?></h3>
    <div class="jumbotron " style="background-image:url(../gambar_berita/<?php echo $r['foto'] ?>); no-repeat scroll; background-size:100% 100%; min-height:400px; margin-top:20px;">

    </div>
    <p align="justify"><?php echo $r['isi'] ?></p>
    <?php
       } else {
    ?>

      <h2 class="page-header" align="center">Berita Terkini</h2>
      <!-- The justified navigation menu is meant for single line per list item.
           Multiple lines will require custom code not provided by Bootstrap. -->
      <?php  
          if (isset($_POST['submit'])) {

            $cr = $_POST['cari'];

            $offset = 0;
            $page_result = 2; 
              
            if(isset($_GET['pageno'])) {
               $page_value = $_GET['pageno'];
               if($page_value > 1) {  
                  $offset = ($page_value - 1) * $page_result;
               }
            }

            $sel = $mysqli->query("SELECT * FROM berita WHERE judul LIKE '%".$cr."%' LIMIT $offset, $page_result ");
            while ($rs = $sel->fetch_array()) {
      ?>
      <div class="col-lg-6">
        <h3 align="center" class="page-header"><?php echo $rs['judul'] ?></h3>
        <img src="../gambar_berita/<?php echo $rs['foto'] ?>" class="img-thumbnail img-responsive" style="width:100%; height:200px;">
        <p align="justify"><?php echo $rs['isi'] ?></p>
      </div>
      <div style="clear:both;">
        
      </div>
      <?php
            }

            $pagecount = $sel->num_rows; // Total number of rows
            $num = $pagecount / $page_result ;

            if(isset($_GET['pageno']) > 1)  {
               echo "<a href = 'index.php?pageno = ".($_GET['pageno'] - 1)." '> Prev </a>";
            }
            for($i = 1 ; $i <= $num ; $i++)  {
               echo "<a href = 'index.php?pageno = ". $i ." >". $i ."</a>";
            }
            if($num != 1)  {
               echo "<a href = 'index.php?pageno = ".(isset($_GET['pageno']) + 1)." '> Next </a>";
            }
          } else {
      ?>
      <div class="masthead" style="margin-top:7px;">
        <nav>
          <form method="POST" class="form-inline pull-right" style="margin-bottom:10px;">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Cari" required name="cari">
            </div>
            <button type="submit" name="submit" class="btn btn-default" style="margin-left:-7px; border-radius:0px;"><i class="glyphicon glyphicon-search"></i></button>
          </form> 
        </nav>
      </div>
      <div style="clear:both;">
        
      </div>

      <!-- Jumbotron -->
      <?php  
         $sel = $mysqli->query("SELECT * FROM berita ORDER BY id_berita ASC LIMIT 5");
         $ar = $sel->fetch_array();
         $ex = explode(" ", $ar['isi']);
      ?>
      <div class="jumbotron" style="background-image:url(../gambar_berita/<?php echo $ar['foto'] ?>); img-responsive scroll; background-size:100% 100%; min-height:400px; margin-top:20px;">
        <!--<h1>BERITA DAN INFO RUMAH SAKIT</h1> -->
       <!--  <p class="lead"><?php echo $ar['deskripsi'] ?></p>
        <p><a class="btn btn-lg btn-success" href="?x=<?php echo md5($ar['id_berita']); ?>">Detail</a></p> -->
      </div>

      <!-- Example row of columns -->
      <div class="row" id="beritanya">
        
      </div>
      <?php      
          }
        }
      ?>

      <!-- Site footer -->
      <hr>
      <footer class="footer">
        <p>&copy;  RS. BHAYANGKARA KENDARI 2016</p>
      </footer>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../admin/bootstrap/js/jquery.js"></script>
    <script src="../admin/bootstrap/js/bootstrap.js"></script>

    <script type="text/javascript">
      function Notif(){
        $.ajax({
          type: "POST",
          url: "function/random_berita.php",
          success: function(response){
               $("#beritanya").html(response);
               timer = setTimeout("Notif()",300000);
            }
            
        });   
      }

      $(document).ready(function(){
        Notif();
      })
    </script>
  

</body>
</html>