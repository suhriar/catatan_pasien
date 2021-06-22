<?php
include_once('function/koneksi.php');
require 'vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$spreadsheet=new Spreadsheet();
$sheet=$spreadsheet->getActiveSheet();
$sheet->setCellValue('A1', 'No');
$sheet->setCellValue('B1', 'Nama Pasien');
$sheet->setCellValue('C1', 'Ruangan');
$sheet->setCellValue('D1', 'Tanggal Masuk');
$sheet->setCellValue('E1', 'Diagnosa');

$pasien_masuk = mysqli_query($koneksi,"SELECT * FROM psn_masuk INNER JOIN pasien ON psn_masuk.id_pasien = pasien.id_pasien INNER JOIN ruangan ON psn_masuk.id_ruangan = ruangan.id_ruangan where psn_masuk.status = 'on'");
$i=2;
$no=1;
while ($row=mysqli_fetch_array($pasien_masuk)) {
	$sheet->setCellValue('A'.$i, $no++);
	$sheet->setCellValue('B'.$i, $row['nama_pasien']);
	$sheet->setCellValue('C'.$i, $row['no_ruangan']);
	$sheet->setCellValue('D'.$i, $row['tgl_masuk']);
	$sheet->setCellValue('E'.$i, $row['diagnosa']);
	$i++;
}

$styleArray = [
			'borders' => [
				'allBorders' => [
					'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
				],
			],
		];
$i=$i-1;
$sheet->getStyle('A1:D'.$i)->applyFromArray($styleArray);

$writer = new Xlsx($spreadsheet);
$writer->save('Pasien Masuk.xlsx');

header("location:index.php?page=pasien_masuk");
?>