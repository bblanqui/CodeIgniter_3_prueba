<?php
require_once 'vendor/autoload.php';
$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML('<h2>hola mundo</h2>');
$mpdf->output('resultado.pdf', 'D');