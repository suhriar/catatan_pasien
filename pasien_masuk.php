<div class="row mt-4">
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="<?php echo BASE_URL."index.php?page=pasien_masuk"; ?>">Pasien Masuk</a></li>
    </ol>
    <div class="card">
        <div class="card-header">
            <a class="btn btn-primary btn-sm"
                href="<?php echo BASE_URL."index.php?page=tambah_pasien_masuk"; ?>"><i class="fas fa-plus"></i> 
            Tambah Pasien Masuk</a>     
            <div class="float-lg-right">
                <button onclick="location.href = 'excel_pasien_masuk.php';" type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">Export Excel</button>
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal">Cetak PDF</button>
            </div>
        </div>
                       
        <div class="table-responsive">
            <table class="tabletable table-bordered table-sm table-hover" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama Pasien</th>
                        <th>Ruangan</th>
                        <th>Tanggal Masuk</th>
                        <th>Diagnosa</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $pasien_masuk = mysqli_query($koneksi,"SELECT * FROM psn_masuk INNER JOIN pasien ON psn_masuk.id_pasien = pasien.id_pasien INNER JOIN ruangan ON psn_masuk.id_ruangan = ruangan.id_ruangan where psn_masuk.status = 'on'");
                    $no=1;
                    foreach ($pasien_masuk as $row): ?>
                        <tr>
                            <td width='10'><?php echo $no ?></td>
                            <td width='150'><?php echo $row['nama_pasien'] ?></td>
                            <td width='150'><?php echo $row['no_ruangan'] ?></td>
                            <td width='100'><?php echo $row['tgl_masuk'] ?></td>
                            <td width='150'><?php echo $row['diagnosa'] ?></td> 
                            <?php $no++; ?>
                        </tr>
                    <?php endforeach; ?>   
                </tbody>
            </table>
		</div>
    </div>
</div>