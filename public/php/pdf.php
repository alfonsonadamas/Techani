<?php   
    require("../FPDF/fpdf.php");

if(isset($_POST["id_registro"])) {
    $idRegistro = $_POST["id_registro"];
    
    $pdf = new FPDF();
    $pdf->AddPage();
    $pdf->SetFont('Arial', 'B', 16);
    $pdf->Cell(40, 10, $idRegistro);
    
    // Definir el tipo de contenido como PDF
    //header('Content-Type: application/pdf');
    
    // Descargar el PDF en lugar de mostrarlo en línea
    header('Content-Disposition: attachment; filename="nombre_del_archivo.pdf"');
    
    $pdf->Output();
} 




?>