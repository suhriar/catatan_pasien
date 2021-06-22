<div class="row mt-4">
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="<?php echo BASE_URL."index.php?page=ruangan"; ?>">Ruangan</a></li>
    </ol>
    <div class="table-responsive">
        <table class="tabletable table-bordered table-sm table-hover" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nomor Ruangan</th>
                    <th>Status Ruangan</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $ruangan=mysqli_query($koneksi, "SELECT * FROM ruangan");
                $no=1;
                foreach ($ruangan as $row): ?>
                    <tr>
                        <td width="150"><?php echo $no ?></td>
                        <td width="150"><?php echo $row['no_ruangan'] ?></td>
                        <td width="100"><?php echo $row['status'] ?></td>
                    <?php $no++; ?>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
	</div>
</div>