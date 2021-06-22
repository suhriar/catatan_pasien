<?php
include_once('function/koneksi.php');
require 'vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$spreadsheet=new Spreadsheet();
$sheet=$spreadsheet->getActiveSheet();
$sheet->setCellValue('A1', 'No');
$sheet->setCellValue('B1', 'Nama Pasien');
$sheet->setCellValue('C1', 'NIK');
$sheet->setCellValue('D1', 'Jenis Kelamin');
$sheet->setCellValue('E1', 'Tempat Lahir');
$sheet->setCellValue('F1', 'Tanggal Lahir');
$sheet->setCellValue('G1', 'Alamat');
$sheet->setCellValue('H1', 'No. Telp');

$pasien=mysqli_query($koneksi, "SELECT * FROM pasien");
$i=2;
$no=1;
while ($row=mysqli_fetch_array($pasien)) {
	$sheet->setCellValue('A'.$i, $no++);
	$sheet->setCellValue('B'.$i, $row['nama_pasien']);
	$sheet->setCellValue('C'.$i, $row['nik']);
	$sheet->setCellValue('D'.$i, $row['jenis_kelamin']);
	$sheet->setCellValue('E'.$i, $row['tempat_lahir']);
	$sheet->setCellValue('F'.$i, $row['tanggal_lahir']);
	$sheet->setCellValue('G'.$i, $row['alamat']);
	$sheet->setCellValue('H'.$i, $row['no_telp']);
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
$writer->save('Data Pasien.xlsx');

header("location:index.php?page=pasien");
?>