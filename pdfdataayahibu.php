<?php
include('koneksiform.php');
require_once("dompdf/autoload.inc.php");
use Dompdf\Dompdf;
$dompdf = new Dompdf();
$query = mysqli_query($koneksiform,"SELECT * FROM dataayahibu");
$html = '<center><h3>Daftar Data Ayah Ibu</h3></center><hr/><br/>';
$html .= '<table border="1" width="100%">
<tr>
<th>No</th>
<th>Nama Ayah Kandung</th>
<th>Tahun Lahir</th>
<th>Pendidikan</th>
<th>Pekerjaan</th>
<th>Penghasilan Bulanan</th>
<th>Berkebutuhan Khusus</th>
<th>Nama Ibu Kandung</th>
<th>Tahun Lahir</th>
<th>Pendidikan</th>
<th>Pekerjaan</th>
<th>Penghasilan Bulanan</th>
<th>Berkebutuhan Khusus</th>
</tr>';
$no = 1;
while ($row = mysqli_fetch_array($query)) {
    $html .= "<tr>
    <td>".$no."</td>
    <td>".$row['ayah']."</td>
    <td>".$row['thnlahirayah']."</td>
    <td>".$row['pendidikanayah']."</td>
    <td>".$row['pekerjaanayah']."</td>
    <td>".$row['hasilayah']."</td>
    <td>".$row['khususayah']."</td>
    <td>".$row['ibu']."</td>
    <td>".$row['thnlahiribu']."</td>
    <td>".$row['pendidikanibu']."</td>
    <td>".$row['pekerjaanibu']."</td>
    <td>".$row['hasilibu']."</td>
    <td>".$row['khususibu']."</td>
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
$dompdf->stream('laporan_dataayahibu.pdf');