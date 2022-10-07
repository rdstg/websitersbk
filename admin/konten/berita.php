<?php  
    if (isset($_GET['x'])) {
       $id = $_GET['x'];

       $s = $mysqli->query("SELECT * FROM berita WHERE id_berita = '$id' ");
       $n = $s->num_rows;
       if ($n == 0) {
          header("location:?hal=berita");
       } elseif ($n == 1) {
          $del = $mysqli->query("DELETE FROM berita WHERE id_berita = '$id' ");
          if ($del) {
             echo "<script> alert('Data Berita Berhasil di Hapus'); window.location.href = '?hal=berita'; </script>";
          }
       }
  } 
?>
<div>
  <h3 class="page-header" align="center" style="margin-top:-2px;">Data Berita</h3>
  <a href="?hal=tambah_berita" class="btn btn-success" ><i class="fa fa-plus"></i> Tambah Berita</a>
  <div style="margin-top:20px;">
   <table class="table table-hover table-bordered" id="example">
  	<thead>
  	   <th>No</th>
  	   <th>Judul</th>
  	   <th>Isi Berita</th>
  	   <th>Terakir Diperbarui</th>
  	   <th>Foto</th>
  	   <th>Aksi</th>
  	</thead>
  	<tbody>
  	   <?php  
  	   	 $s = $mysqli->query("SELECT * FROM berita ORDER BY id_berita DESC");
  	   	 $no = 1;
  	   	 while ($rs = $s->fetch_array()) {
  	   ?>
  	   <tr>
  	   	 <td><?php echo $no ?></td>
  	   	 <td><?php echo $rs['judul'] ?></td>
  	   	 <td><?php echo $rs['isi'] ?></td>
  	   	 <td>
          <?php
             setlocale(LC_ALL, 'IND'); 
             echo strftime('%d %B %Y',strtotime($rs['tgl_buat']));
          ?>
         </td>
         <td>
           <img src="../gambar_berita/<?php echo $rs['foto'] ?>" class="img-responsive img-thumbnail" style="width:100px; height:100px;">
         </td>
  	   	 <td>
  	   	   <a href="?hal=edit_berita&x=<?php echo $rs['id_berita'] ?>" class="btn btn-info"><i class="fa fa-edit"></i></a>
  	   	   <a href="?hal=berita&x=<?php echo $rs['id_berita'] ?>" onclick="return confirm('Hapus Data Berita ??')" class="btn btn-danger"><i class="fa fa-trash"></i></a>
  	   	 </td>
  	   </tr>
  	   <?php
  	       $no++;  
  	   	 }
  	   ?>	
  	</tbody>
   </table>
  </div>
</div>