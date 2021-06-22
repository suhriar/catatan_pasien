<div class="row mt-4">
	<ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="<?php echo BASE_URL."index.php?page=pasien_masuk"; ?>">Pasien Masuk</a></li>
        <li class="breadcrumb-item active">Tambah Pasien Masuk</li>
    </ol>
	<div class="card">
		<div class="card-header">Registrasi Pasien Masuk</div>
			<div class="card-body">
				<form method="post" action="simpan_masuk.php">
					<div class="form-group row">
						<label for="nama" class="col-sm-3 col-form-label">Nama Lengkap</label>
						<div class="col-sm-9">
							<input type="text" name="nama" class="form-control" id="nama" placeholder="Nama">
						</div>
					</div>

					<div class="form-group row">
						<label for="nik" class="col-sm-3 col-form-label">NIK</label>
						<div class="col-sm-9">
							<input type="text" name="nik" class="form-control" id="nik" placeholder="NIK" required>
						</div>
					</div>

					<div class="form-group row">
						<label for="jenis_kelamin" class="col-sm-3 col-form-label">Jenis Kelamin</label>
						<div class="col-sm-9">
							<input type="radio" name="jenis_kelamin" value="Laki-laki"> Laki-laki
							<input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan
						</div>
					</div>

					<div class="form-group row">
						<label for="tempat_lahir" class="col-sm-3 col-form-label">Tempat Lahir</label>
						<div class="col-sm-9">
							<input type="text" name="tempat_lahir" class="form-control" id="tempat_lahir" placeholder="Tempat Lahir" >
						</div>
					</div>

					<div class="form-group row">
						<label for="tanggal_lahir" class="col-sm-3 col-form-label">Tanggal Lahir</label>
						<div class="col-sm-9">
							<input type="date" name="tanggal_lahir" class="form-control" id="tanggal_lahir" placeholder="Tanggal Lahir" value="<?php echo date('Y-m-d', strtotime($tanggal_lahir)) ?>" >
						</div>
					</div>

					<div class="form-group row">
						<label for="alamat" class="col-sm-3 col-form-label">Alamat</label>
						<div class="col-sm-9">
							<input type="text" name="alamat" class="form-control" id="alamat" placeholder="Alamat">
						</div>
					</div>

					<div class="form-group row">
						<label for="telp" class="col-sm-3 col-form-label">No. Telepon</label>
						<div class="col-sm-9">
							<input type="text" name="no_telp" class="form-control" id="telp" placeholder="No. Telp">
						</div>
					</div>

					<div class="form-group row">
						<label for="tanggal_masuk" class="col-sm-3 col-form-label">Tanggal Masuk</label>
						<div class="col-sm-9">
							<input type="date" name="tanggal_masuk" class="form-control" id="tanggal_masuk" placeholder="Tanggal Masuk" value="<?php echo date('Y-m-d', strtotime($tanggal_masuk)) ?>">
						</div>
					</div>

					<div class="form-group row">
						<label for="telp" class="col-sm-3 col-form-label">Diagnosa</label>
						<div class="col-sm-9">
							<input type="text" name="diagnosa" class="form-control" id="diagnosa" placeholder="Diagnosa">
						</div>
					</div>

					<div class="form-group row">
						<label for="ruangan" class="col-sm-3 col-form-label">Ruangan</label>
						<div class="col-sm-9">
							<select name="ruangan" class="form-control" id="ruangan">
								<option value="">-Pilih Ruangan-</option>
								<?php 
									$sql_ruangan = mysqli_query($koneksi, "select * from ruangan where status='Kosong'") or die (mysqli_error($koneksi));
									while($ruangan = mysqli_fetch_array($sql_ruangan)){
										echo '<option value="'.$ruangan['id_ruangan'].'">'.$ruangan['no_ruangan'].'</option>';
									}
								?>
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