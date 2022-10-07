<?php  
	if (isset($_POST['submit'])) {
		$jd = $_POST['jd'];
		$des = $_POST['des'];
		$isi = $_POST['isi'];
		
		$data = $_FILES['file']['tmp_name'];
        $data_name = $_FILES['file']['name'];
        $temp1 = explode(".", $_FILES['file']['name']);
        $file = rand(1,99999999) . '.' .end($temp1);

        $allowed = array('jpg','png','gif','JPEG','PNG','GIF','JPG');
		$ext = pathinfo($data_name, PATHINFO_EXTENSION);
        if (!in_array($ext,$allowed)) {
            echo "<script> alert('File Foto Harus Berformat Gif, PNG, Atau JPEG'); window.location.href = '?hal=tambah_berita'; </script>";
        } else {
            $sel = $mysqli->query("SELECT * FROM berita WHERE judul = '$jd' ");
            $num = $sel->num_rows;
            if ($num >= 1) {
               echo "<script> alert('Maaf Judul Berita Sudah Ada, Silahkan Ganti Judul'); window.location.href = '?hal=tambah_berita'; </script>";
            } elseif ($num == 0) {
               date_default_timezone_set("Asia/Jakarta");
               $now = date("Y-m-d");	 
               $move = move_uploaded_file($data, "../gambar_berita/".$file);
               $ins = $mysqli->query("INSERT INTO berita VALUES (NULL,'$jd','$isi','$des','$now','$file') ");
               if ($ins) {
                  echo "<script> alert('Data Berita Berhasil di Tambahkan'); window.location.href = '?hal=berita'; </script>";
               }
            }
        }
	}
?>
<div class="col-lg-8 col-md-offset-2">
  <div class="panel panel-default">
	<div class="panel-body">
	  <h3 align="center" class="page-header"><a href="?hal=berita" class="btn btn-default pull-left"><i class="fa fa-reply"></i></a> Tambah Data Berita</h3>
	  <form method="POST" enctype="multipart/form-data">
	  	 <div class="form-group">
	  	   <label>Judul Berita</label>
	  	   <input type="text" name="jd" class="form-control" required placeholder="Judul Berita">
	  	 </div>
	  	 <div class="form-group">
	  	   <label>Deskripsi Berita</label>
	  	   <textarea name="des" class="form-control" style="height:400px;"></textarea>
	  	 </div>
	  	 <div class="form-group">
	  	   <label>Isi Berita</label>
	  	   <textarea name="isi" class="form-control" id="berita" style="height:400px;"></textarea>
	  	 </div>
	  	 <div class="form-group">
	  	   <label>Foto</label>
	  	   <input type="file" name="file" required>
	  	 </div>
	  	 <button type="submit" class="btn btn-success" name="submit"><i class="fa fa-hand-pointer-o"></i> Submit</button>
	  </form>
	</div>
  </div>
</div>