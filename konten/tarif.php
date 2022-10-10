<section id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">JADWAL DOKTER</h2>

                    <h3 class="section-subheading text-muted">Untuk informasi lebih lanjut mengenai jadwal dokter  silahkan menghubungi (0401) 3121253 .</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                   <table data-toggle="table"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc" class="table table-hover table-bordered">
                    <thead>
                      <tr>
                        <th data-sortable="true">No</th>
                        <th data-sortable="true">Nama</th>
                        <th data-sortable="true">Spesialis</th>
                        <th data-sortable="true">Hari Praktek</th>
                        <th data-sortable="true">Jam Praktek</th>              
                      </tr>
                    </thead>
                    <?php 
                        $cek = $mysqli->query("SELECT * FROM jadwal_dokter ");
                        $no = 1;
                        while ($row = $cek->fetch_array()) {
                    ?>
                    <tr>
                        <td> <?php echo $no++; ?></td>
                        <td> <?php echo $row['nama_dokter']; ?></td>
                        <td> <?php echo $row['spesialis']; ?></td>
                        <td> <?php echo $row['hari_praktek']; ?></td>
                        <td> <?php echo $row['jam_praktek']; ?></td>
                       
                       
                    </tr>
                    <?php  }  ?>
                  </table>
                  <p class="text-muted"><p> * Jadwal dapat berubah sewaktu-waktu.</p>
                </div>
            </div>
        </div>
    </section>