<?php
	define("BASE_URL", "http://localhost/catatan-pasien/");

	function query($sql){
		global $koneksi;
		$perintah=mysqli_query($koneksi,$sql);
	}

	function jml_jk(){
		$sql="SELECT SUM(IF(jenis_kelamin='Laki-laki',1,0)) AS jml_lk, SUM(IF(jenis_kelamin='Perempuan',1,0)) AS jml_pr FROM pasien";
		$perintah=query($sql);
		return $perintah;
	}
?>