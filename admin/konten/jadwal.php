<?php  
    if (isset($_POST['simpan'])) {
       $nm = $_POST['nm'];
       $sp = $_POST['sp'];
       $hr = $_POST['hr'];
       $jam = $_POST['jam'];

       $sel = $mysqli->query("SELECT * FROM jadwal_dokter WHERE nama_dokter = '$nm' AND spesialis = '$sp' ");
       $num = $sel->num_rows;
       if ($num >= 1) {
          echo "<script> alert('Maaf Data Dokter Sudah Ada'); window.location.href = '?hal=jadwal'; </script>";
       } elseif ($num == 0) {
          $ins = $mysqli->query("INSERT INTO jadwal_dokter VALUES (NULL,'$nm','$sp','$hr','$jam') ");
          if ($ins) {
             echo "<script> alert('Data Jadwal Dokter Berhasil di Tambahkan'); window.location.href = '?hal=jadwal'; </script>";
          }
       }
    }

    if (isset($_GET['x'])) {
       $id = $_GET['x'];

       $s = $mysqli->query("SELECT * FROM jadwal_dokter WHERE id_jadwal = '$id' ");
       $n = $s->num_rows;
       if ($n == 0) {
          header("location:?hal=jadwal");
       } elseif ($n == 1) {
          $del = $mysqli->query("DELETE FROM jadwal_dokter WHERE id_jadwal = '$id' ");
          if ($del) {
             echo "<script> alert('Data Jadwal Dokter Berhasil di Hapus'); window.location.href = '?hal=jadwal'; </script>";
          }
       }
    }

    if (isset($_POST['simpan_edit'])) {
       $id = $_POST['id'];
       $nm = $_POST['nm'];
       $sp = $_POST['sp'];
       $hr = $_POST['hr'];
       $jam = $_POST['jam'];

       $up = $mysqli->query("UPDATE jadwal_dokter SET nama_dokter = '$nm', spesialis = '$sp', hari_praktek = '$hr', jam_praktek = '$jam' WHERE id_jadwal = '$id' ");
       if ($up) {
          echo "<script> alert('Data Jadwal Dokter Berhasil di Edit'); window.location.href = '?hal=jadwal'; </script>"; 
       }
    } 
?>
<div>
  <h3 class="page-header" align="center" style="margin-top:-2px;">Jadwal Dokter</h3>
  <a href="" data-toggle="modal" data-target="#modalku" class="btn btn-success" ><i class="fa fa-plus"></i> Tambah Jadwal</a>
  <div style="margin-top:20px;">
   <table class="table table-hover table-bordered" id="example">
  	<thead>
  	   <th>No</th>
  	   <th>Nama Dokter</th>
  	   <th>Spesialis</th>
  	   <th>Hari Praktek</th>
  	   <th>Jam Praktek</th>
  	   <th>Aksi</th>
  	</thead>
  	<tbody>
  	   <?php  
  	   	 $s = $mysqli->query("SELECT * FROM jadwal_dokter ORDER BY id_jadwal DESC");
  	   	 $no = 1;
  	   	 while ($rs = $s->fetch_array()) {
  	   ?>
  	   <tr>
  	   	 <td><?php echo $no ?></td>
  	   	 <td><?php echo $rs['nama_dokter'] ?></td>
         <td><?php echo $rs['spesialis'] ?></td>
         <td><?php echo $rs['hari_praktek'] ?></td>
  	   	 <td><?php echo $rs['jam_praktek'] ?></td>  	   	
  	   	 <td>
  	   	   <a href="" data-toggle="modal" data-target="#edit_jadwal" onclick="edit_jadwal(<?php echo $rs['id_jadwal'] ?>)" class="btn btn-info"><i class="fa fa-edit"></i></a>
  	   	   <a href="?hal=jadwal&x=<?php echo $rs['id_jadwal'] ?>" onclick="return confirm('Hapus Data Jadwal ??')" class="btn btn-danger"><i class="fa fa-trash"></i></a>
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

<div class="modal fade" tabindex="-1" role="dialog" id="modalku">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Tambah Jadwal Dokter</h4>
      </div>
      <div class="modal-body">
        <form method="POST">
          <div class="form-group">
            <label>Nama Dokter</label>
            <input type="text" name="nm" class="form-control" required placeholder="Nama Dokter">
          </div>
          <div class="form-group">
            <label>Spesialis</label>
            <input type="text" name="sp" class="form-control" required placeholder="Spesialis">
          </div>
          <div class="form-group">
            <label>Hari Praktek</label>
            <input type="text" name="hr" class="form-control" required placeholder="Hari Praktek">
          </div>
          <div class="form-group">
            <label>Jam Praktek</label>
            <input type="text" name="jam" class="form-control" required placeholder="Jam Praktek">
          </div>      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-success" name="simpan">Simpan</button>
       </form>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="modal fade" tabindex="-1" role="dialog" id="edit_jadwal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Edit Jadwal Dokter</h4>
      </div>
      <div class="modal-body">
        <form method="POST" id="form_jadwal">
               
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-success" name="simpan_edit">Simpan</button>
       </form>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->