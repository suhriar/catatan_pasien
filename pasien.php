<div class="row mt-4">
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="<?php echo BASE_URL."index.php?page=pasien"; ?>">Data Pasien</a></li>
    </ol>
    <div class="card">
        <div class="card-header">
            <div class="float-lg-right">
                <button onclick="location.href = 'excel_data_pasien.php';" id="excel" type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">Export Excel</button>
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal">Cetak PDF</button>
            </div>
        </div>
            <div class="table-responsive">
                <table class="tabletable table-bordered table-sm table-hover" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama Pasien</th>
                            <th>NIK</th>
                            <th>Jenis Kelamin</th>
                            <th>Tempat Lahir</th>
                            <th>Tanggal Lahir</th>
                            <th>Alamat</th>
                            <th>No. Telp</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $pasien=mysqli_query($koneksi, "SELECT * FROM pasien");
                        $no=1;
                        foreach ($pasien as $row): ?>
                            <tr>
                                <td width="150"><?php echo $no ?></td>
                                <td width="150"><?php echo $row['nama_pasien'] ?></td>
                                <td width="100"><?php echo $row['nik'] ?></td>
                                <td width="150"><?php echo $row['jenis_kelamin'] ?></td>
                                <td width="150"><?php echo $row['tempat_lahir'] ?></td>
                                <td width="150"><?php echo $row['tanggal_lahir'] ?></td>
                                <td width="150"><?php echo $row['alamat'] ?></td>
                                <td width="150"><?php echo $row['no_telp'] ?></td>
                                <?php $no++; ?>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
	</div>
</div>