<?php
include('koneksiform.php');
require 'vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();
$sheet->setCellValue('A1', 'No');
$sheet->setCellValue('B1', 'Nama Ibu Kandung');
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
    $sheet->setCellValue('B'.$i, $row['ibu']);
    $sheet->setCellValue('C'.$i, $row['thnlahiribu']);
    $sheet->setCellValue('D'.$i, $row['pendidikanibu']);
    $sheet->setCellValue('E'.$i, $row['pekerjaanibu']);
    $sheet->setCellValue('F'.$i, $row['hasilibu']);
    $sheet->setCellValue('G'.$i, $row['khususibu']);
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
$writer->save('Report Data Ibu Kandung.xlsx');

echo "Data Registrasi, Pribadi, Ayah Kandung, dan Ibu Kandung berhasil diimpor ke Excel.";
?>