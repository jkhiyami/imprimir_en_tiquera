<?php
    # Realizado: Jorge Khiyami
    # Fecha de Creación: 08/03/2017
    # Fecha de Modificación: 08/03/2017
    # Lugar: Guanare, Edo. Portuguessa - Venezuela
    # email: jorgekhiyami@gmail.com
    #
    # Permite imprimir en una impresora Tiquera o Matriz de Punto con la librería FPDF,
    # se debe instalar la tiquera o impresora en modo Genery/Text y asignar el puerto
    # por donde se va a Imprimir. (Si mejoran este código, por favor compartir).
    # **Tips:**
    # Si se va a imprimir en una impresora matriz de punto, el tamaño de la letra no debe ser menor a 7,
    # la impresión de las letras se monta una encima de la otra al imprimir la línea.
    #
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
    $pdf->Text(7,32, 'CED/RIF :'.utf8_decode($variable));
    $pdf->Text(7,36, "IMPRESO EL DIA: ". Date("d/m/Y"));
    $pdf->Output();
?>