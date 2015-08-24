<?php

include_once 'components/mpdf60/mpdf.php';
include_once 'GenerateCertification.php';

$mpdf=new mPDF('utf-8', 'A4-L');
$generateCertification = new GenerateCertification();

$stylesheet = file_get_contents('css/style.css');

$name = "Ana Rosa Beltrán Niño";
$numberDocument = "51.880.975";
$html = $generateCertification->BuildFormatCertification($name,$numberDocument);

$mpdf->WriteHTML($stylesheet,1);
$mpdf->WriteHTML($html);

$nameDocument = "certificacion-digital.pdf";
$mpdf->Output($nameDocument,'D');
exit;
?>