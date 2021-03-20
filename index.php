<?php
include('config.php');
require_once("dompdf/autoload.inc.php");
use Dompdf\Dompdf;
$dompdf = new Dompdf();
$query = mysqli_query($koneksi,"select * from tb_database");
$html = '<center><h3>List of Names</h3></center><hr/><br/>';
$html .= '<table border="1" width="100%">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Class</th>
            <th>Address</th>
        </tr>';
$no = 1;
while($row = mysqli_fetch_array($query))
{
    $html .= "<tr>
        <td>".$no."</td>
        <td>".$row['name']."</td>
        <td>".$row['class']."</td>
        <td>".$row['address']."</td>
    </tr>";
    $no++;
}
$html .= "</html>";
$dompdf->loadHtml($html);
$dompdf->setPaper('A4', 'potrait');
$dompdf->render();
$dompdf->stream('result.pdf');
?>