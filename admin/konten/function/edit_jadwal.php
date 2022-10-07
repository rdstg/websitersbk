<?php  
    include "../../../koneksi.php";
    $id = $_GET['id'];

    $sel = $mysqli->query("SELECT * FROM jadwal_dokter WHERE id_jadwal = '$id' ");
    $r = $sel->fetch_array();
?>
<input type="hidden" name="id" value="<?php echo $id ?>" required>
<div class="form-group">
  <label>Nama Dokter</label>
  <input type="text" name="nm" class="form-control" required placeholder="Nama Dokter" value="<?php echo $r['nama_dokter'] ?>">
</div>
<div class="form-group">
  <label>Spesialis</label>
  <input type="text" name="sp" class="form-control" required placeholder="Spesialis" value="<?php echo $r['spesialis'] ?>">
</div>
<div class="form-group">
  <label>Hari Praktek</label>
  <input type="text" name="hr" class="form-control" required placeholder="Hari Praktek" value="<?php echo $r['hari_praktek'] ?>">
</div>
<div class="form-group">
  <label>Jam Praktek</label>
  <input type="text" name="jam" class="form-control" required placeholder="Jam Praktek" value="<?php echo $r['jam_praktek'] ?>">
</div> 