<?php  
  include "../../koneksi.php";

  $s = $mysqli->query("SELECT * FROM berita order by id_berita DESC");
  while ($rs = $s->fetch_array()) {
?>
<div class="col-lg-4">

  <h2 class="page-header" align="center"><?php echo $rs['judul'] ?></h2>
  <img src="../gambar_berita/<?php echo $rs['foto'] ?>" class="img-thumbnail img-responsive " style="height:200px; width:100%;">
  <p class="text-danger"><?php echo $rs['deskripsi'] ?></p>
  <p><a class="btn btn-primary" href="?x=<?php echo md5($rs['id_berita']); ?>" >Lihat</a></p>
</div>
<?php  
  }
?>