<?php  
      if (isset($_POST['simpan'])) {
          $nm = $_POST['nm'];
          $kls = $_POST['kls'];
          $km = $_POST['km'];
          $kt = $_POST['kt'];
          $total = $_POST['total_kamar'];

          $sel = $mysqli->query("SELECT * FROM kamar_inap WHERE nama_kamar = '$nm' AND kelas = '$kls' ");
          $num = $sel->num_rows;
          if ($num >= 1) {
             echo "<script> alert('Maaf Data Kamar Sudah Ada Silahkan Edit Jika Terjadi Kesalahan'); window.location.href = '?hal=kamar'; </script>";
          } elseif ($num == 0) {
             $ins = $mysqli->query("INSERT INTO kamar_inap VALUES (NULL,'$nm','$kls','$km','$kt','$total') ");
             if ($ins) {
               echo "<script> alert('Data Kamar Berhasil di Tambahkan'); window.location.href = '?hal=kamar'; </script>";
             }
          }
      }

      if (isset($_GET['x'])) {
        $id = $_GET['x'];

        $s = $mysqli->query("SELECT * FROM kamar_inap WHERE id_kamar = '$id' ");
        $n = $s->num_rows;
        if ($n == 0) {
          header("location:?hal=kamar");
        } elseif ($n == 1) {
          $del = $mysqli->query("DELETE FROM kamar_inap WHERE id_kamar = '$id' ");
          if ($del) {
             echo "<script> alert('Data Kamar Berhasil di Hapus'); window.location.href = '?hal=kamar'; </script>";
          }
        }
      }

      if (isset($_POST['simpan_edit'])) {
          $id = $_POST['id'];
          $nm = $_POST['nm'];
          $kls = $_POST['kls'];
          $km = $_POST['km'];
          $kt = $_POST['kt'];
          $total = $_POST['total_kamar'];

          $up = $mysqli->query("UPDATE kamar_inap SET nama_kamar = '$nm', kelas = '$kls', kamar_kosong = '$km', kamar_terisi = '$kt', total_kamar = '$total' WHERE id_kamar = '$id' ");
          if ($up) {
             echo "<script> alert('Data Kamar Berhasil di Edit'); window.location.href = '?hal=kamar'; </script>";
          }
      }
?>
<div>
  <h3 class="page-header" align="center" style="margin-top:-2px;">Data Kamar</h3>
  <a href="" data-toggle="modal" data-target="#modalku" class="btn btn-success" ><i class="fa fa-plus"></i> Tambah Data Kamar</a>
  <div style="margin-top:20px;">
   <table class="table table-hover table-bordered" id="example">
  	<thead>
  	   <th>No</th>
  	   <th>Nama Kamar</th>
  	   <th>Kelas</th>
  	   <th>Jumlah Kamar Kosong</th>
  	   <th>Jumlah Kamar Terisi</th>
  	   <th>Total Jumlah Kamar </th>
  	   <th>Aksi</th>
  	</thead>
  	<tbody>
  	   <?php  
  	   	 $s = $mysqli->query("SELECT * FROM kamar_inap ORDER BY id_kamar DESC");
  	   	 $no = 1;
  	   	 while ($rs = $s->fetch_array()) {
  	   ?>
  	   <tr>
  	   	 <td><?php echo $no ?></td>
  	   	 <td><?php echo $rs['nama_kamar'] ?></td>
         <td><?php echo $rs['kelas'] ?></td>
         <td><?php echo $rs['kamar_kosong'] ?></td>  	   	
         <td><?php echo $rs['kamar_terisi'] ?></td>  	   	
         <td><?php echo $rs['total_kamar'] ?></td>  	   	
  	   	 <td>
  	   	   <a href="" data-toggle="modal" data-target="#edit_kamar" onclick="edit_kamar(<?php echo $rs['id_kamar'] ?>)" class="btn btn-info"><i class="fa fa-edit"></i></a>
  	   	   <a href="?hal=kamar&x=<?php echo $rs['id_kamar'] ?>" onclick="return confirm('Hapus Data Kamar Kosong ??')" class="btn btn-danger"><i class="fa fa-trash"></i></a>
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
        <h4 class="modal-title">Tambah Data Kamar</h4>
      </div>
      <div class="modal-body">
        <form method="POST">
          <div class="form-group">
            <label>Nama Kamar</label>
            <input type="text" name="nm" class="form-control" required placeholder="Nama Kamar">
          </div>
          <div class="form-group">
            <label>Kelas</label>
            <input type="text" name="kls" class="form-control" required placeholder="Kelas">
          </div>
          <div class="form-group">
            <label>Jumlah Kamar Kosong</label>
            <input type="number" name="km" class="form-control" required>
          </div>
           <div class="form-group">
            <label>Jumlah Kamar Terisi</label>
            <input type="number" name="kt" class="form-control" required>
          </div>
          <div class="form-group">
            <label>Total Jumlah Kamar </label>
            <input type="number" name="total_kamar" class="form-control" required>
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

<div class="modal fade" tabindex="-1" role="dialog" id="edit_kamar">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Tambah Data Kamar</h4>
      </div>
      <div class="modal-body">
        <form method="POST" id="form_edit_kamar">
  
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-success" name="simpan_edit">Simpan</button>
       </form>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->