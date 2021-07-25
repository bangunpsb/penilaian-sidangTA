<?php

// ketika diload file init tidak meanmpilkan output

require_once("../assets/dompdf/autoload.inc.php");
// require_once("../core/init.php");

use Dompdf\Dompdf;

$dompdf = new Dompdf();

// $getfromCetakdata->Load_ViewCetakdataKaryawan();

$dompdf->loadHtml('hello world');
// Setting ukuran dan orientasi kertas
$dompdf->setPaper('A4', 'potrait');
// Rendering dari HTML Ke PDF
$dompdf->render();
// Melakukan output file Pdf
$dompdf->stream("laporan_akhir_analisa.pdf", array("Attachment" => false));
exit(0);
