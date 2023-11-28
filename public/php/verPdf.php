<?php   
    require("../FPDF/fpdf.php");


    $glucosa = $_POST["glucosa"];
    $Tipo_insulina = $_POST["Tipo_insulina"];
    $Dosis = $_POST["Dosis"];
    $Tipo_dosis = $_POST["Tipo_dosis"];
    $Tipo_medicion = $_POST["Tipo_medicion"];
    $Cantidad_agua = $_POST["Cantidad_agua"];
    $Dia_atipico = $_POST["Dia_atipico"];
    $Observaciones = $_POST["Observaciones"];
    
    $pdf = new FPDF();
    $pdf->AddPage();
    $pdf->SetFont('Arial', '', 16);
    $pdf->Cell(40, 10, 'Glucosa registrada: '.$glucosa);
    $pdf->Ln(10);
    $pdf->Cell(40, 10, 'Tipo de dosis de insulina administrada: '.$Tipo_dosis);
    $pdf->Ln(10);
    $pdf->Cell(40, 10, 'Dosis de insulina administrada: '.$Dosis);
    $pdf->Ln(10);
    $pdf->Cell(40, 10, 'Tipo de medicion: '.$Tipo_medicion);
    $pdf->Ln(10);
    $pdf->Cell(40, 10, 'Cantidad de agua registrada: '.$Cantidad_agua);
    $pdf->Ln(10);
    $pdf->Cell(40, 10, 'Dia atipico: '.$Dia_atipico);
    $pdf->Ln(10);
    $pdf->Output();
    // Definir el tipo de contenido como PDF
    header('Content-Type: application/pdf');
    
    // Descargar el PDF en lugar de mostrarlo en línea
    //header('Content-Disposition: attachment; filename='.'"registro-"'.$idRegistro.'".pdf"');
    
    // Forzar al navegador a mostrar el diálogo de descarga
    //header('Content-Transfer-Encoding: binary');
    
    





?>