<?php  
	if (isset($_GET['x'])) {
       $id = $_GET['x'];

       $s = $mysqli->query("SELECT * FROM berita WHERE id_berita = '$id' ");
       $n = $s->num_rows;
       if ($n == 0) {
       	  header("location:?hal=berita");
       } elseif ($n == 1) {
       	  $r = $s->fetch_array();
       }
	} else {
	   header("location:?hal=berita");
	}

	if (isset($_POST['submit'])) {
		$id = $_GET['x'];
		$s = $mysqli->query("SELECT * FROM berita WHERE id_berita = '$id' ");
		$r = $s->fetch_array();

		$jd = $_POST['jd'];
		$isi = $_POST['isi'];
		$des = $_POST['des'];
		
		$data = $_FILES['file']['tmp_name'];
        $data_name = $_FILES['file']['name'];
        $temp1 = explode(".", $_FILES['file']['name']);
        $file = rand(1,99999999) . '.' .end($temp1);
        date_default_timezone_set("Asia/Jakarta");
	    $now = date("Y-m-d");	

        if ($data == "") {
        	$up = $mysqli->query(" UPDATE berita SET deskripsi = '$des', judul = '$jd', isi = '$isi', tgl_buat = '$now' WHERE id_berita = '$id' ");
        	if ($up) {
	          echo "<script> alert('Data Berita Berhasil di Edit'); window.location.href = '?hal=berita'; </script>";
	        }
        } elseif ($data != "") {
        	$allowed = array('jpg','png','gif','JPEG','PNG','GIF','JPG');
			$ext = pathinfo($data_name, PATHINFO_EXTENSION);
	        if (!in_array($ext,$allowed)) {
	            echo "<script> alert('File Foto Harus Berformat Gif, PNG, Atau JPEG'); window.location.href = '?hal=tambah_berita'; </script>";
	        } else {
	            unlink("../gambar_berita/".$r['foto']);
	            $move = move_uploaded_file($data, "../gambar_berita/".$file);
	            $up = $mysqli->query(" UPDATE berita SET deskripsi = '$des', judul = '$jd', isi = '$isi', tgl_buat = '$now', foto = '$file' WHERE id_berita = '$id' ");
	            if ($up) {
	              echo "<script> alert('Data Berita Berhasil di Edit'); window.location.href = '?hal=berita'; </script>";
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
	  	   <input type="text" name="jd" class="form-control" required placeholder="Judul Berita" value="<?php echo $r['judul'] ?>">
	  	 </div>
	  	 <div class="form-group">
	  	   <label>Deskripsi Berita</label>
	  	   <textarea name="des" class="form-control" style="height:400px;"><?php echo $r['deskripsi'] ?></textarea>
	  	 </div>
	  	 <div class="form-group">
	  	   <label>Isi Berita</label>
	  	   <textarea name="isi" class="form-control" id="berita" style="height:400px;"><?php echo $r['isi'] ?></textarea>
	  	 </div>
	  	 <div class="form-group">
	  	   <label>Foto</label>
	  	   <input type="file" name="file">
	  	 </div>
	  	 <button type="submit" class="btn btn-success" name="submit"><i class="fa fa-hand-pointer-o"></i> Submit</button>
	  </form>
	</div>
  </div>
</div>