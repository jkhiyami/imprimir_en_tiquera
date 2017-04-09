<?php
    # Libreria FPDF
    require("fpdf.php");
    $pdf = new FPDF("P","mm", array(120,80));
    $pdf->AddPage();
    $pdf->SetFont('Courier',"",8);
    $pdf->Text(7,8, utf8_decode('----------------------------'));
    $pdf->Text(10,12, utf8_decode('EJEMPLO DE IMPRESION'));
    $pdf->Text(9,16, utf8_decode('EN UNA TIQUERA'));
    $pdf->Text(12,20, utf8_decode('UTILIZANDO'));
    $pdf->Text(22,24, utf8_decode('PHP'));
    $pdf->Text(7,28, utf8_decode('----------------------------'));
    $pdf->Text(7,32, 'Ced/Rif :'.utf8_decode($cedrif));
    $pdf->Text(7,36, "IMPRESO EL DIA: ". Date("d/m/Y"));
    $pdf->Output();
?>