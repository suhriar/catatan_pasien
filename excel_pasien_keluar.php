<?php
include_once('function/koneksi.php');
require 'vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$spreadsheet=new Spreadsheet();
$sheet=$spreadsheet->getActiveSheet();
$sheet->setCellValue('A1', 'No');
$sheet->setCellValue('B1', 'Nama Pasien');
$sheet->setCellValue('C1', 'Tanggal Keluar');
$sheet->setCellValue('D1', 'Kondisi Keluar');
$sheet->setCellValue('E1', 'Status Keluar');

$pasien_keluar = mysqli_query($koneksi,"SELECT * FROM psn_keluar INNER JOIN pasien ON psn_keluar.id_pasien = pasien.id_pasien");
$i=2;
$no=1;
while ($row=mysqli_fetch_array($pasien_keluar)) {
	$sheet->setCellValue('A'.$i, $no++);
	$sheet->setCellValue('B'.$i, $row['nama_pasien']);
	$sheet->setCellValue('C'.$i, $row['tgl_keluar']);
	$sheet->setCellValue('D'.$i, $row['kondisi_keluar']);
	$sheet->setCellValue('E'.$i, $row['status_keluar']);
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
$writer->save('Pasien Keluar.xlsx');

header("location:index.php?page=pasien_keluar");
?>