<?php 
	include_once("function/koneksi.php");
	include_once("function/helper.php");
	
	//ambil data dari form
	$nama = htmlspecialchars($_POST["nama"]);
	$nik = htmlspecialchars($_POST["nik"]);
	$jenis_kelamin = htmlspecialchars($_POST["jenis_kelamin"]);
	$tempat_lahir= htmlspecialchars($_POST["tempat_lahir"]);
	$tanggal_lahir = htmlspecialchars($_POST["tanggal_lahir"]);
	$alamat= htmlspecialchars($_POST["alamat"]);
	$no_telp = htmlspecialchars($_POST["no_telp"]);
	$tanggal_masuk = htmlspecialchars($_POST["tanggal_masuk"]);
	$diagnosa = htmlspecialchars($_POST["diagnosa"]);
	$ruangan = htmlspecialchars($_POST["ruangan"]);

	//insert data pasien
	$query="INSERT INTO pasien VALUES ('', '$nama', '$nik', '$jenis_kelamin', '$tempat_lahir', '$tanggal_lahir', '$alamat', '$no_telp')";
	$simpan_pasien = mysqli_query($koneksi, $query);

	//mengambil id_pasien yang baru ditambahkan
	$id_pasien = mysqli_insert_id($koneksi);

	//insert riwayat pasien masuk
	$query_masuk="INSERT INTO psn_masuk VALUES ('', '$id_pasien', '$ruangan', '$tanggal_masuk', '$diagnosa', 'on')";
	$simpan_masuk = mysqli_query($koneksi, $query_masuk);

	
	//mengganti status ruangan
	$query_ruangan="UPDATE ruangan SET status = 'Diisi' WHERE id_ruangan = $ruangan";
	$simpan_ruangan = mysqli_query($koneksi, $query_ruangan);
	
	// mengalihkan ke halaman pasien_masuk.php
	header("location:index.php?page=pasien_masuk");
?>