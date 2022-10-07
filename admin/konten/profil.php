<?php  
    if (isset($_POST['simpan'])) {
       $us = $_POST['us'];
       $nm = $_POST['nama'];

       $up = $mysqli->query("UPDATE admin SET username = '$us', nama = '$nm' WHERE id_admin = ".base64_decode(base64_decode($_SESSION['admin_bhayangkara'])));
       if ($up) {
          echo "<script> alert('Edit Profil Sukses'); window.location.href = '?hal=profil'; </script>";
       }
    }

    if (isset($_POST['simpan_pass'])) {
       $old = $_POST['old'];
       $np = $_POST['new'];
       $cnf = $_POST['conf'];

       $o = base64_encode(base64_encode(md5($old)));

       if ($o != $row['password']) {
          echo "<script> alert('Maaf Password Lama Tidak Sesuai'); window.location.href = '?hal=profil'; </script>";
       } elseif ($o == $row['password']) {
          if ($np != $cnf) {
             echo "<script> alert('Maaf Konfirmasi Password Tidak Sama Dengan Password Baru'); window.location.href = '?hal=profil'; </script>";
          } elseif ($np == $cnf) {
             $x = base64_encode(base64_encode(md5($cnf)));
             $up = $mysqli->query("UPDATE admin SET password = '$x' WHERE id_admin = ".base64_decode(base64_decode($_SESSION['admin_bhayangkara'])));
             if ($up) {
                echo "<script> alert('Password Baru Berhasil di Ganti'); window.location.href = '?hal=profil'; </script>";
             }
          }
       }
    }
?>
<div class="col-lg-6 col-md-offset-3">
  <div class="panel panel-default">
  	<div class="panel-body">
      <h3 class="page-header" align="center">
        Edit Profil
      </h3>
      <p align="center" style="margin-top:30px; margin-bottom:30px;">
        <a href="" data-toggle="modal" data-target="#profil" class="btn btn-info btn-lg">
          <i class="glyphicon glyphicon-user"></i> 
          Edit Profil
        </a>
  
        <a href="" data-toggle="modal" data-target="#pass" class="btn btn-success btn-lg">
          <i class="glyphicon glyphicon-user"></i> 
          Edit Password
        </a>
      </p>  
      
  	</div>
  </div>
</div>

<div class="modal fade" tabindex="-1" role="dialog" id="profil">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Edit Profil</h4>
      </div>
      <div class="modal-body">
        <form method="POST">
          <div class="form-group">
            <label>Username</label>
            <input type="text" class="form-control" name="us" required placeholder="Username" value="<?php echo $row['username'] ?>">
          </div>
          <div class="form-group">
            <label>Nama</label>
            <input type="text" class="form-control" name="nama" required placeholder="Nama" value="<?php echo $row['nama'] ?>">
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default " data-dismiss="modal">Tutup</button>
        <button type="submit" name="simpan" class="btn btn-info">Simpan</button>
       </form>        
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="modal fade" tabindex="-1" role="dialog" id="pass">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Edit Password</h4>
      </div>
      <div class="modal-body">
        <form method="POST">
          <div class="form-group">
            <label>Masukkan Password Lama</label>
            <input type="password" class="form-control" name="old" required placeholder="Masukkan Password Lama">
          </div>
          <div class="form-group">
            <label>Masukkan Password Baru</label>
            <input type="password" class="form-control" name="new" required placeholder="Masukkan Password Baru">
          </div>
          <div class="form-group">
            <label>Konfirmasi Password Baru</label>
            <input type="password" class="form-control" name="conf" required placeholder="Konfirmasi Password Baru">
          </div> 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default " data-dismiss="modal">Tutup</button>
        <button type="submit" name="simpan_pass" class="btn btn-info">Simpan</button>
       </form>        
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->