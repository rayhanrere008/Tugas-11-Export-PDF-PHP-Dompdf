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
$sheet->setCellValue('B1', 'Nama Lengkap');
$sheet->setCellValue('C1', 'Jenis Kelamin');
$sheet->setCellValue('D1', 'NISN');
$sheet->setCellValue('E1', 'NIK');
$sheet->setCellValue('F1', 'Tempat Lahir');
$sheet->setCellValue('G1', 'Tanggal Lahir');
$sheet->setCellValue('H1', 'Agama');
$sheet->setCellValue('I1', 'Berkebutuhan Khusus');
$sheet->setCellValue('J1', 'Alamat Jalan');
$sheet->setCellValue('K1', 'RT');
$sheet->setCellValue('L1', 'RW');
$sheet->setCellValue('M1', 'Nama Dusun');
$sheet->setCellValue('N1', 'Nama Kelurahan/Desa');
$sheet->setCellValue('O1', 'Kecamatan');
$sheet->setCellValue('P1', 'Kode Pos');
$sheet->setCellValue('Q1', 'Tempat Tinggal');
$sheet->setCellValue('R1', 'Moda Transportasi');
$sheet->setCellValue('S1', 'Nomor HP');
$sheet->setCellValue('T1', 'Nomor Telepon');
$sheet->setCellValue('U1', 'E-mail Pribadi');
$sheet->setCellValue('V1', 'Penerima KPS/PKH/KIP');
$sheet->setCellValue('W1', 'No. KPS/KKS/PKH/KIP');
$sheet->setCellValue('X1', 'Kewarganegaraan');
$sheet->setCellValue('Y1', 'Nama Negara');

$query = mysqli_query($koneksiform,"select * from datapribadi");
$i = 2;
$no = 1;
while ($row = mysqli_fetch_array($query)) {
    $sheet->setCellValue('A'.$i, $no++);
    $sheet->setCellValue('B'.$i, $row['namalengkap']);
    $sheet->setCellValue('C'.$i, $row['jk']);
    $sheet->setCellValue('D'.$i, $row['nisn']);
    $sheet->setCellValue('E'.$i, $row['nik']);
    $sheet->setCellValue('F'.$i, $row['tmptlahir']);
    $sheet->setCellValue('G'.$i, $row['tgllahir']);
    $sheet->setCellValue('H'.$i, $row['agama']);
    $sheet->setCellValue('I'.$i, $row['khusus']);
    $sheet->setCellValue('J'.$i, $row['alamat']);
    $sheet->setCellValue('K'.$i, $row['rt']);
    $sheet->setCellValue('L'.$i, $row['rw']);
    $sheet->setCellValue('M'.$i, $row['namadusun']);
    $sheet->setCellValue('N'.$i, $row['namalurah']);
    $sheet->setCellValue('O'.$i, $row['kec']);
    $sheet->setCellValue('P'.$i, $row['kodepos']);
    $sheet->setCellValue('Q'.$i, $row['ttinggal']);
    $sheet->setCellValue('R'.$i, $row['transport']);
    $sheet->setCellValue('S'.$i, $row['hp']);
    $sheet->setCellValue('T'.$i, $row['telp']);
    $sheet->setCellValue('U'.$i, $row['email']);
    $sheet->setCellValue('V'.$i, $row['kip']);
    $sheet->setCellValue('W'.$i, $row['nokip']);
    $sheet->setCellValue('X'.$i, $row['warga']);
    $sheet->setCellValue('Y'.$i, $row['negara']);
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
$sheet->getStyle('A1:Y'.$i)->applyFromArray($styleArray);

$writer = new Xlsx($spreadsheet);
$writer->save('Report Data Pribadi.xlsx');

echo "Data Pribadi berhasil diimpor ke Excel.";
// mengalihkan ke halaman reportdataayah.php
header("location:reportdataayah.php");
?>