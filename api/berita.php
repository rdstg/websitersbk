<?php
    require_once 'config.php';

    $sql = "SELECT * FROM berita ORDER BY id_berita DESC";
    $query = mysqli_query($con, $sql);

    $create_json = array();
    if (mysqli_num_rows($query) > 0) {
         $create_json['berita'] = array();
         while ($data = mysqli_fetch_array($query)) {
             $tabel = array();
             $tabel['id_berita']    = $data[0];
             $tabel['judul']        = $data[1];
             $tabel['isi']          = $data[2];
             $tabel['deskripsi']    = $data[3];
             $tabel['tgl_buat']     = $data[4];
             $tabel['foto']         = $img_berita.$data[5];
             array_push($create_json['berita'], $tabel);
         }

         $create_json['json_sukses'] = 1;
         echo json_encode($create_json);

    } else {
        $create_json['json_sukses'] = 0;
        echo json_encode($create_json);
    }
?>
