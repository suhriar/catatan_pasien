<?php
	//menerima id_masuk;
	$id = $_GET['id'];
	//mengambil data nama dan nik
	$pasien_masuk = mysqli_query($koneksi,"SELECT * FROM psn_masuk INNER JOIN pasien ON psn_masuk.id_pasien = pasien.id_pasien INNER JOIN ruangan ON psn_masuk.id_ruangan = ruangan.id_ruangan where psn_masuk.id_masuk = $id");
	foreach ($pasien_masuk as $row){
		$id_pasien = $row['id_pasien'];
		$id_ruangan = $row['id_ruangan'];
		$nama = $row['nama_pasien'];
		$nik = $row['nik'];

	}
?>
<div class="row mt-4">
	<ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="<?php echo BASE_URL."index.php?page=pasien_keluar"; ?>">Pasien Keluar</a></li>
        <li class="breadcrumb-item"><a href="<?php echo BASE_URL."index.php?page=tambah_pasien_keluar"; ?>">TambahPasien Keluar</a></li>
        <li class="breadcrumb-item active">Edit</li>
    </ol>
	<div class="card">
		<div class="card-header">Edit</div>
			<div class="card-body">
				<form method="post" action="simpan_keluar.php?id_masuk=<?= $id; ?>&id_pasien=<?= $id_pasien; ?>&id_ruangan=<?= $id_ruangan; ?>">
					<div class="form-group row">
						<label for="nama" class="col-sm-3 col-form-label">Nama Lengkap</label>
						<div class="col-sm-9">
							<input type="text" name="nama" class="form-control" id="nama" placeholder="Nama" disabled value="<?= $nama; ?>">
						</div>
					</div>

					<div class="form-group row">
						<label for="nik" class="col-sm-3 col-form-label">NIK</label>
						<div class="col-sm-9">
							<input type="text" name="nik" class="form-control" id="nik" placeholder="NIK" disabled value="<?= $nik; ?>">
						</div>
					</div>

					<div class="form-group row">
						<label for="tanggal_masuk" class="col-sm-3 col-form-label">Tanggal Keluar</label>
						<div class="col-sm-9">
							<input type="date" name="tanggal_keluar" class="form-control" id="tanggal_keluar" placeholder="Tanggal keluar" value="<?php echo date('Y-m-d', strtotime($tanggal_keluar)) ?>">
						</div>
					</div>

					<div class="form-group row">
						<label for="ruangan" class="col-sm-3 col-form-label">Kondisi Keluar Pasien</label>
						<div class="col-sm-9">
							<select name="kondisi" class="form-control" id="kondisi">
								<option value="">-Pilih Kondisi-</option>
								<option value="Sembuh">Sembuh</option>
								<option value="Belum Sembuh">Belum Sembuh</option>
								<option value="Meninggal Dunia">Meninggal Dunia</option>
							</select>
						</div>
					</div>

					<div class="form-group row">
						<label for="ruangan" class="col-sm-3 col-form-label">Status Pulang</label>
						<div class="col-sm-9">
							<select name="status" class="form-control" id="status">
								<option value="">-Pilih Status-</option>
								<option value="Dipulangkan">Dipulangkan</option>
								<option value="Pulang Paksa">Pulang Paksa</option>
							</select>
						</div>
					</div>

					<div class="form-group row">
						<div class="col-sm-9">
							<button type="submit" class="btn btn-primary">Submit</button>
						</div>
					</div>

			</form>
		</div>
	</div>
</div>