<?php
    require_once 'config.php';

    $sql = "SELECT * FROM jadwal_dokter";
    $query = mysqli_query($con, $sql);

    $create_json = array();
    if (mysqli_num_rows($query) > 0) {
         $create_json['jadwal_dokter'] = array();
         while ($data = mysqli_fetch_array($query)) {
             $tabel = array();
             $tabel['id_jadwal']      = $data[0];
             $tabel['nama_dokter']    = $data[1];
             $tabel['spesialis']      = $data[2];
             $tabel['hari_praktek']   = $data[3];
             $tabel['jam_praktek']    = $data[4];
             array_push($create_json['jadwal_dokter'], $tabel);
         }

         $create_json['json_sukses'] = 1;
         echo json_encode($create_json);

    } else {
        $create_json['json_sukses'] = 0;
        echo json_encode($create_json);
    }
?>
