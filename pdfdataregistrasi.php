<?php
include('koneksiform.php');
require_once("dompdf/autoload.inc.php");
use Dompdf\Dompdf;
$dompdf = new Dompdf();
$query = mysqli_query($koneksiform,"SELECT * FROM registrasi");
$html = '<center><h3>Daftar Data Registrasi</h3></center><hr/><br/>';
$html .= '<table border="1" width="100%">
<tr>
<th>No</th>
<th>Jenis Pendaftaran</th>
<th>Tanggal Masuk Sekolah</th>
<th>NIS</th>
<th>Nomor Peserta Ujian</th>
<th>Apakah Pernah PAUD</th>
<th>Apakah Pernah TK</th>
<th>No. Seri SKHUN Sebelumnya</th>
<th>No. Seri Ijazah Sebelumnya</th>
<th>Hobi</th>
<th>Cita-cita</th>
</tr>';

$no = 1;
while ($row = mysqli_fetch_array($query)) {
    $html .= "<tr>
    <td>".$no."</td>
    <td>".$row['jp']."</td>
    <td>".$row['tglMS']."</td>
    <td>".$row['nis']."</td>
    <td>".$row['nomorPU']."</td>
    <td>".$row['paud']."</td>
    <td>".$row['tk']."</td>
    <td>".$row['noskhun']."</td>
    <td>".$row['noijazah']."</td>
    <td>".$row['hobi']."</td>
    <td>".$row['cita']."</td>
    </tr>";
    $no++;
}

$html .= "</html>";
$dompdf->loadHtml($html);
//Setting ukuran dan orientasi kertas
$dompdf->setPaper('A4', 'landscape');
//Rendering dari html ke PDF
$dompdf->render();
//Melakukan output file PDF
$dompdf->stream('laporan_dataregistrasi.pdf');