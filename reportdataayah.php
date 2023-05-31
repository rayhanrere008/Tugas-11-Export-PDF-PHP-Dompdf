<?php
include('koneksiform.php');
require 'vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();
$sheet->setCellValue('A1', 'No');
$sheet->setCellValue('B1', 'Nama Ayah Kandung');
$sheet->setCellValue('C1', 'Tahun Lahir');
$sheet->setCellValue('D1', 'Pendidikan');
$sheet->setCellValue('E1', 'Pekerjaan');
$sheet->setCellValue('F1', 'Penghasilan Bulanan');
$sheet->setCellValue('G1', 'Berkebutuhan Khusus');

$query = mysqli_query($koneksiform,"select * from dataayahibu");
$i = 2;
$no = 1;
while ($row = mysqli_fetch_array($query)) {
    $sheet->setCellValue('A'.$i, $no++);
    $sheet->setCellValue('B'.$i, $row['ayah']);
    $sheet->setCellValue('C'.$i, $row['thnlahirayah']);
    $sheet->setCellValue('D'.$i, $row['pendidikanayah']);
    $sheet->setCellValue('E'.$i, $row['pekerjaanayah']);
    $sheet->setCellValue('F'.$i, $row['hasilayah']);
    $sheet->setCellValue('G'.$i, $row['khususayah']);
    $i++;
}

$styleArray = [
    'borders' => [
        'allBorders' => [
            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
        ],
    ],
];
$i = $i = 1;
$sheet->getStyle('A1:G'.$i)->applyFromArray($styleArray);

$writer = new Xlsx($spreadsheet);
$writer->save('Report Data Ayah Kandung.xlsx');

echo "Data Ayah berhasil diimpor ke Excel.";
// mengalihkan ke halaman reportdataibu.php
header("location:reportdataibu.php");
?>