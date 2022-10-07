<?php
    require_once 'config.php';

    $sql = "SELECT * FROM kamar_inap";
    $query = mysqli_query($con, $sql);

    $create_json = array();
    if (mysqli_num_rows($query) > 0) {
         $create_json['kamar_inap'] = array();
         while ($data = mysqli_fetch_array($query)) {
             $tabel = array();
             $tabel['id_kamar']      = $data[0];
             $tabel['nama_kamar']    = $data[1];
             $tabel['kelas']         = $data[2];
             $tabel['kamar_kosong']  = $data[3];
             $tabel['kamar_terisi']  = $data[4];
             $tabel['total_kamar']   = $data[5];
             array_push($create_json['kamar_inap'], $tabel);
         }

         $create_json['json_sukses'] = 1;
         echo json_encode($create_json);

    } else {
        $create_json['json_sukses'] = 0;
        echo json_encode($create_json);
    }
?>
