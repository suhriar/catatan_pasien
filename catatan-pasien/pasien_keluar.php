<div class="row mt-4">
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="<?php echo BASE_URL."index.php?page=pasien_keluar"; ?>">Pasien Keluar</a></li>
    </ol>
    <div class="card">
        <div class="card-header">
            <a class="btn btn-primary btn-sm"
                href="<?php echo BASE_URL."index.php?page=tambah_pasien_keluar"; ?>"><i class="fas fa-plus"></i> 
            Tambah Pasien Keluar</a>     
            <div class="float-lg-right">
                <button onclick="location.href = 'excel_pasien_keluar.php';"type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">Export Excel</button>
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal">Cetak PDF</button>
            </div>
        </div>
                       
        <div class="table-responsive">
            <table class="tabletable table-bordered table-sm table-hover" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama Pasien</th>
                        <th>Tanggal Keluar</th>
                        <th>Kondisi Keluar</th>
                        <th>Status Keluar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $pasien_keluar = mysqli_query($koneksi,"SELECT * FROM psn_keluar INNER JOIN pasien ON psn_keluar.id_pasien = pasien.id_pasien");
                    $no=1;
                    foreach ($pasien_keluar as $row): ?>
                        <tr>
                            <td width="150"><?php echo $no ?></td>
                            <td width='150'><?php echo $row['nama_pasien'] ?></td>
                            <td width="150"><?php echo $row['tgl_keluar'] ?></td>
                            <td width="150"><?php echo $row['kondisi_keluar'] ?></td>
                            <td width="150"><?php echo $row['status_keluar'] ?></td>
                            <?php $no++; ?>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
		</div>
    </div>
</div>