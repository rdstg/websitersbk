<?php  
    include "../../../koneksi.php";
    $id = $_GET['id'];

    $sel = $mysqli->query("SELECT * FROM kamar_inap WHERE id_kamar = '$id' ");
    $r = $sel->fetch_array();

?>
<input type="hidden" name="id" value="<?php echo $id ?>" required>
<div class="form-group">
  <label>Nama Kamar</label>
  <input type="text" name="nm" class="form-control" required placeholder="Nama Kamar" value="<?php echo $r['nama_kamar'] ?>">
</div>
<div class="form-group">
  <label>Kelas</label>
  <input type="text" name="kls" class="form-control" required placeholder="Kelas" value="<?php echo $r['kelas'] ?>">
</div>
<div class="form-group">
  <label>Jumlah Kamar Kosong</label>
  <input type="number" name="km" class="form-control" required value="<?php echo $r['kamar_kosong'] ?>">
</div>
<div class="form-group">
  <label>Jumlah Kamar Kosong</label>
  <input type="number" name="kt" class="form-control" required value="<?php echo $r['kamar_terisi'] ?>">
</div>
<div class="form-group">
  <label>Jumlah Kamar Keseluruhan</label>
  <input type="number" name="total_kamar" class="form-control" required value="<?php echo $r['total_kamar'] ?>">
</div>