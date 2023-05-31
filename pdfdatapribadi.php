<?php
include('koneksiform.php');
require_once("dompdf/autoload.inc.php");
use Dompdf\Dompdf;
$dompdf = new Dompdf();
$query = mysqli_query($koneksiform,"SELECT * FROM datapribadi");
$html = '<center><h3>Daftar Data Pribadi</h3></center><hr/><br/>';
$html .= '<table border="1" width="100%">
<tr>
<th>No</th>
<th>Nama Lengkap</th>
<th>Jenis Kelamin</th>
<th>NISN</th>
<th>NIK</th>
<th>Tempat Lahir</th>
<th>Tanggal Lahir</th>
<th>Agama</th>
<th>Berkebutuhan Khusus</th>
<th>Alamat Jalan</th>
<th>RT</th>
<th>RW</th>
<th>Nama Dusun</th>
<th>Nama Kelurahan/Desa</th>
<th>Kecamatan</th>
<th>Kode Pos</th>
<th>Tempat Tinggal</th>
<th>Moda Transportasi</th>
<th>Nomor HP</th>
<th>Nomor Telepon</th>
<th>Email Pribadi</th>
<th>Penerima KPS/PKH/KIP</th>
<th>No. KPS/KKS/PKH/KIP</th>
<th>Kewarganegaraan</th>
<th>Nama Negara</th>
</tr>';
$no = 1;
while ($row = mysqli_fetch_array($query)) {
    $html .= "<tr>
    <td>".$no."</td>
    <td>".$row['namalengkap']."</td>
    <td>".$row['jk']."</td>
    <td>".$row['nisn']."</td>
    <td>".$row['nik']."</td>
    <td>".$row['tmptlahir']."</td>
    <td>".$row['tgllahir']."</td>
    <td>".$row['agama']."</td>
    <td>".$row['khusus']."</td>
    <td>".$row['alamat']."</td>
    <td>".$row['rt']."</td>
    <td>".$row['rw']."</td>
    <td>".$row['namadusun']."</td>
    <td>".$row['namalurah']."</td>
    <td>".$row['kec']."</td>
    <td>".$row['kodepos']."</td>
    <td>".$row['ttinggal']."</td>
    <td>".$row['transport']."</td>
    <td>".$row['hp']."</td>
    <td>".$row['telp']."</td>
    <td>".$row['email']."</td>
    <td>".$row['kip']."</td>
    <td>".$row['nokip']."</td>
    <td>".$row['warga']."</td>
    <td>".$row['negara']."</td>
    </tr>";
    $no++;
}
$html .= "</html>";
$dompdf->loadHtml($html);
//Setting ukuran dan orientasi kertas
$dompdf->setPaper('A1', 'landscape');
//Rendering dari html ke PDF
$dompdf->render();
//Melakukan output file PDF
$dompdf->stream('laporan_datapribadi.pdf');