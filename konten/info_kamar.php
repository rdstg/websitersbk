<section id="informasikamar" class="bg-light-gray" style="padding:5;" >
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                   <h2 class="section-heading">Informasi Kamar Inap</h2>
                   <h3 class="section-subheading text-muted">Untuk informasi lebih lanjut mengenai ketersediaan tempat tidur silahkan menghubungi (0401) 3121253 .</h3>
                </div>
            </div>
            <div class="row">
                <div class="box-body">
                  <table data-toggle="table"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc" class="table table-hover table-bordered">
                   <thead>
                      <tr>
                        <th data-sortable="true">No</th>
                        <th data-sortable="true">Ruangan</th>
                        <th data-sortable="true">Kelas Kamar</th>
                        <th data-sortable="true">Tempat Tidur Kosong</th>   
                        <th data-sortable="true">Tempat Tidur Terisi</th>   
                        
                        <th data-sortable="true">Jumlah Tempat Tidur </th>   
                      </tr>
                   </thead>
                   <tbody>   
                    <?php 
                        $cek = $mysqli->query("SELECT * FROM kamar_inap ");
                        $total=mysqli_num_rows($cek);
                        $no = 1;
                        while ($row = $cek->fetch_array()){
 		                    
                    ?>
                    <tr>
                        <td> <?php echo $no++; ?></td>
                        <td> <?php echo $row['nama_kamar']; ?></td>
                        <td> <?php echo $row['kelas']; ?></td>
                        <td> <?php echo $row['kamar_kosong']; ?></td>
                        <td> <?php echo $row['kamar_terisi']; ?></td>
                        
                        <td> <?php $jumlah = $row['kamar_terisi'] + $row['kamar_kosong'] ; 
                            echo $jumlah; ?></td>
                            
                      
                    </tr>
                    <?php } ?>
                   </tbody>
                 </table>
              
                    
                </div>
            </div>
        </div>
    </section>