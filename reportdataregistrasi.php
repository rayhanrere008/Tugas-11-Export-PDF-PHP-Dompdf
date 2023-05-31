<?php
include('koneksiform.php');
require 'vendor/autoload.php';
require_once("dompdf/autoload.inc.php");
use Dompdf\Dompdf;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();
$sheet->setCellValue('A1', 'No');
$sheet->setCellValue('B1', 'Jenis Pendaftaran');
$sheet->setCellValue('C1', 'Tanggal Masuk Sekolah');
$sheet->setCellValue('D1', 'NIS');
$sheet->setCellValue('E1', 'Nomor Peserta Ujian');
$sheet->setCellValue('F1', 'Apakah Pernah PAUD');
$sheet->setCellValue('G1', 'Apakah Pernah TK');
$sheet->setCellValue('H1', 'No. Seri SKHUN Sebelumnya');
$sheet->setCellValue('I1', 'No. Seri Ijazah Sebelumnya');
$sheet->setCellValue('J1', 'Hobi');
$sheet->setCellValue('K1', 'Cita-cita');

$query = mysqli_query($koneksiform,"select * from registrasi");
$i = 2;
$no = 1;
while ($row = mysqli_fetch_array($query)) {
    $sheet->setCellValue('A'.$i, $no++);
    $sheet->setCellValue('B'.$i, $row['jp']);
    $sheet->setCellValue('C'.$i, $row['tglMS']);
    $sheet->setCellValue('D'.$i, $row['nis']);
    $sheet->setCellValue('E'.$i, $row['nomorPU']);
    $sheet->setCellValue('F'.$i, $row['paud']);
    $sheet->setCellValue('G'.$i, $row['tk']);
    $sheet->setCellValue('H'.$i, $row['noskhun']);
    $sheet->setCellValue('I'.$i, $row['noijazah']);
    $sheet->setCellValue('J'.$i, $row['hobi']);
    $sheet->setCellValue('K'.$i, $row['cita']);
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
$sheet->getStyle('A1:K'.$i)->applyFromArray($styleArray);

$writer = new Xlsx($spreadsheet);
$writer->save('Report Data Registasi.xlsx');

echo "Data Registrasi berhasil diimpor ke Excel.";
// mengalihkan ke halaman reportdatapribadi.php
header("location:reportdatapribadi.php");
?>