<?php 
	include_once("function/koneksi.php");
	include_once("function/helper.php");
	
	//mengambil data dari edit_keluar
	$id_masuk = $_GET['id_masuk'];
	$id_pasien = $_GET['id_pasien'];
	$id_ruangan = $_GET['id_ruangan'];
	$tanggal_keluar = htmlspecialchars($_POST["tanggal_keluar"]);
	$kondisi = htmlspecialchars($_POST["kondisi"]);
	$status = htmlspecialchars($_POST["status"]);
	echo $kondisi;
	echo $status;

	//mengganti status pasien masuk
	$status_masuk = "UPDATE psn_masuk SET status = 'off' WHERE id_masuk = $id_masuk";
	$simpan_masuk = mysqli_query($koneksi, $status_masuk);

	//mengganti status ruangan
	$status_ruangan="UPDATE ruangan SET status = 'Kosong' WHERE id_ruangan = $id_ruangan";
	$simpan_ruangan = mysqli_query($koneksi, $status_ruangan);

	//insert data pasien keluar
	$query_keluar="INSERT INTO psn_keluar VALUES ('', '$id_pasien', '$tanggal_keluar', '$kondisi', '$status')";
	$simpan_keluar = mysqli_query($koneksi, $query_keluar);

	// mengalihkan ke halaman pasien_keluar.php
	header("location:index.php?page=pasien_keluar");
?>